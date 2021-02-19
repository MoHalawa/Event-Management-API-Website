
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
<h2>Choose Event Management Service:</h2>
<ul class="logo_list">
  <li><a href="eventbrite_add.php">
		<img class ="logo_list" src="../EMS Logos/eventbrite.png" alt="Eventbrite" width="128">
			</a></li>
</ul>

</body>
</html>
