<html>    
    <head>    
        <title>Registration Form</title>  
	<link rel="stylesheet" type="text/css" href="stylesheet.css"> <!--including stylesheet-->
    </head>    
    <body>
<h1 class ="top"><a href="index.html">Kiosk Project Test Website</a></h1> <!--website title-->

<ul class = "snl">
  <li class = "snl"><a href="sign_up.php">Sign up</a></li>
  <li class = "snl"><a href="log_in.php">Log in</a></li>
</ul class = "snl">
<ul class = "header">
  <li class ="header"><a href="#placeholder">Placeholder</a></li>
  <li class ="header"><a href="#placeholder">Placeholder</a></li>
  <li class ="header"><a href="#placeholder">Placeholder</a></li>
  <li class ="header"><a href="#placeholder">Placeholder</a></li>
</ul> 
<article>      
        <h2 style="color:white">Log in</h2>    
        <form name = "form1" action="log_in_from_sql.php" method = "post"> <!--form, action set to file which checks database-->  
            <div class ='form'>    
                <div class = "form_group">    
                    <label>Username:</label>    
                    <input type = "text" name = "l_username" value = "" required/>    
                </div>       
                <div class = "form_group">    
                    <label>Password:</label>    
                    <input type = "password" name = "l_pwd" value = "" required/>    
                </div><span>
                <div class = "form_group">     
                    <input type = "submit" = "ADD" required/>  
                </div>    
            </div>    
        </form> 
	</article>   
    </body>    
</html> 