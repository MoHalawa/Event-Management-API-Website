<?php
	include 'connect.php'; //including file to connect to database
   
	$sql = 'SELECT username, pwd FROM registration'; //pulling from table
	$result = $conn->query($sql);
   
	$l_username = $_POST["l_username"];//using POST to take form info
	$l_pwd = $_POST["l_pwd"];
   

	while($row = $result->fetch_assoc()) {//runs until full table checked
		echo $row['username'];//check if user exists
		if ($l_username == $row["username"]){//then check if pass is correct
			if ($l_pwd == $row["pwd"]){//log in is good
				setcookie('user', $row["username"], time() + (86400 * 30), "/");//set a cookie to pull user info later
				header("Location: logged_in/logged_in.php");//take user to logged in page
				break;
			}else{
				echo "wrong password";
				break;
			}
		}
		elseif(!($row)) {
			echo "invalid username";
		}

	}	

	$conn->close();
?>