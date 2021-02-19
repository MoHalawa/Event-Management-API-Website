
<html>
<head>
<link rel="stylesheet" type="text/css" href="../stylesheet.css"/>

</head>
<body>
<h1 class ="top"><a href="../index.html">Kiosk Project Test Website</a></h1>
<?php

echo "<div class='dropdown' >
  <a href='profile.php'><button class='dropbtn'>".$_COOKIE['user']."</button></a>
  <div class='dropdown-content'>
    <a href='Events.php'>Your Events</a>
    <a href='#'>Placeholder</a>
    <a href='#'>Placeholder</a>
  </div>
</div>"
?>
<ul class = "snl">
  <li class = "snl"><a href="../index.html">Log Out</a></li>
</ul class = "snl">
<ul class = "header">
  <li class ="header"><a href="logged_in.php">Home</a></li>
  <li class ="active"><a href="Events.php">Your Events</a></li>
  <li class ="header"><a href="#placeholder">Placeholder</a></li>
  <li class ="header"><a href="#placeholder">Placeholder</a></li>
</ul>

<?php


$event_name = strtolower(str_replace("%20"," ",$_SERVER['QUERY_STRING']));
echo "<h2 class='uppercase'>".$event_name." ATTENDEE SIGN IN</h2>";

?>
<br>
<article>      

        <form name = "form1" action="attendee_check.php?<?php echo $event_name?>" method = "post">    
            <div class = "form">    
                <div class = "form_group">    
                    <label>Full Name</label>    
                    <input type = "text" name = "name" value = "" required/>    
                </div>       
                <div class = "form_group">    
                    <label>E-mail</label>    
                    <input type = "text" name = "email" value = "" required/>    
                </div><span>
                <div class = "form_group">     
                    <input type = "submit" = "ADD" required/>  
                </div>    
            </div>    
        </form> 
	</article>
</body>
</html>
