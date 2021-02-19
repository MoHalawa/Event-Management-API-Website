
import mysql.connector as mysql

from selenium import webdriver

print("<h1>TEST</h1>")
from selenium.webdriver.support.select import Select
from selenium.webdriver.chrome.options import Options  

options = Options()  
options.headless = True

db = mysql.connect(
    host = "localhost",
    port = "3307",
    user = "root",
    passwd = "",
    database = "test"
)

sql = "SELECT * from log"
database = db.cursor()
database.execute(sql)
records = database.fetchall()



def e_brite(email, password, name):
    driver = webdriver.Chrome(executable_path = r"C:\Users\mohal\source\repos\Kiosk\Kiosk\drivers\chromedriver.exe", chrome_options = options)
    driver.set_window_size(1440, 900)
    driver.implicitly_wait(10) 

    base_url="https://www.eventbrite.com/organizations/events"
    driver.get(base_url)
    driver.find_element_by_id("email").send_keys(email)
    driver.find_element_by_xpath("//*[@id='root']/div/div[2]/div/div/div/div[1]/div/main/div/div/div/div[2]/form/div[2]/button").click()
    driver.find_element_by_id("password").send_keys(password)
    driver.find_element_by_xpath("//*[@id='root']/div/div[2]/div/div/div/div[1]/div/main/div/div/div/div[2]/form/div[3]/button").click()
    driver.find_element_by_partial_link_text(name).click()
    driver.find_element_by_name("manage_attendees").click()
    driver.find_element_by_xpath("//*[@id='react-root']/div/div/div[2]/aside[1]/div/div/div/ul/li[10]/div/div/ul/li[7]/a/div/div/div").click()
    Check_in_page = driver.page_source
    driver.close()
    List = [""]
    Attendees = []
    temp = []
    i = 0

    for x in Check_in_page:
        if x !="\n":
            List[i] += x
        else:
            i +=1
            List.append("")

    for x in List:
        if "                            display_name:" in x or "                            email:" in x:
            temp.append(x[x.find("\"")+1:-2])
        if len(temp) == 2:
            Attendees.append(temp)
            temp = []
    return Attendees

def New_Event_Table(Attendee_List, name):
    database.execute("CREATE TABLE `"+name+"` (name VARCHAR(255), email VARCHAR(255))")
    for x in Attendee_List:
        database.execute(("INSERT into `"+name+"` (name, email) VALUES(%s,%s)"),(x[0],x[1]))
    db.commit()
EMS_Select = {
    "ebrite": e_brite  
    }

for row in records:
    email = row[1]
    password = row[2]
    name = row[3]
    ems = row[4]
    List = EMS_Select[ems](email,password, name)
    New_Event_Table(List, name)
    sql = "DELETE FROM log WHERE name = '"+name+"'"
    database.execute(sql)
    db.commit()