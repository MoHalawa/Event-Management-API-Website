
<html>
<head>
<link rel="stylesheet" type="text/css" href="../stylesheet.css"/>
</head>
<body>
<h1 class ="top"><a href="logged_in.php">Kiosk Project Test Website</a></h1>
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
<article>
</ul>       
        <h2 style="color:white">Eventbrite Log-in</h2>    
        <form name = "form1" action="ebrite_add_log.php" method = "post" onkeydown="return event.key != 'Enter';">    
            <div class = 'form'>    
                <div class = "form_group">    
                    <label>Email</label>    
                    <input type = "text" name = "username" value = "" required/>    
                </div>       
                <div class = "form_group">    
                    <label>Password:</label>    
                    <input type = "password" name = "pwd" value = "" required/>    
                </div>
                <div class = "form_group">    
                    <label>Event Name:</label>    
                    <input type = "text" name = "name" value = "" required/>    
                </div>
                <div class = "form_group">        
                    <input type = "submit" = "ADD" required/ onclick="showPicture()">    
                </div>    
            </div>    
        </form>  

</article> 

<p id="warning" style="text-align:center"></p>

<img style="display:none; width:40px; margin-left:auto;margin-right:auto" id="bigpic" src="bigpic.gif"/> 
</body>  
 
</html> 
</body>
</html>
<script>
function showPicture() {
  var sourceOfPicture = "loading_icon.gif";
  var img = document.getElementById('bigpic')
  img.src = sourceOfPicture.replace('90X90', '255x255');
  img.style.display = "block";
	document.getElementById("warning").innerHTML = "This may take a minute";
} 
</script>


