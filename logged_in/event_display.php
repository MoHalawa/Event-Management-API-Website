
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
<article class ="nest">
<?php
include '../connect.php';

$event_name = strtolower(str_replace("%20"," ",$_SERVER['QUERY_STRING']));
echo "<h2 class='uppercase'>$event_name</h2>";

$sql = "SELECT * FROM `".$event_name."`";
$result = $conn->query($sql);


echo "<h3>Attendees: </h3>";
echo "<table>"; 
echo "<tr><td><b>Name</b></td><td><b>Email</b></td></tr>";
while($row = $result->fetch_assoc()){   
	echo "<tr><td>" . $row['name'] . "</td><td>" . $row['email'] . "</td></tr>";
}

echo "</table>";
echo "<ul class = 'snl'>
  <li class = 'snl'><a href='attendee_mode.php?".$event_name."'>Switch to Attendee Mode</a></li>
</ul class = 'snl'>";
?>
</article>
</article>


