<html>    
    <head>    

	<link href="stylesheet.css" rel="stylesheet" type="text/css" /> <!--including stylesheet-->
        <title>Registration Form</title>    
    </head>    
    <body>    
<h1 class ="top"><a href="index.html">Kiosk Project Test Website</a></h1>

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
        <h2 style="color:white">Sign Up</h2>    
        <form name = "form1" action="sign_up_to_sql.php" method = "post"> <!--form action set to php file which creates user-->  
            <div class ='form'>    
                <div class = "form_group">    
                    <label>First Name:</label>    
                    <input type = "text" name = "fname" value = "" required/>    
                </div>      
                <div class = "form_group">    
                    <label>Last Name:</label>    
                    <input type = "text" name = "lname" value = "" required/>    
                </div> 
                <div class = "form_group">    
                    <label>E-mail:</label>    
                    <input type = "text" name = "email" value = "" required/>    
                </div>      
                <div class = "form_group">    
                    <label>Username:</label>    
                    <input type = "text" name = "username" value = "" required/>    
                </div>   
                <div>    
                    <label>Password:</label> 
                    <input type = "password" name = "pwd" value = "" required/>    
                </div>
                <div class = "form_group">        
                    <input type = "submit" = "ADD" required/>    
                </div>    
            </div>    
        </form>
	</article>    
    </body>    
</html> 