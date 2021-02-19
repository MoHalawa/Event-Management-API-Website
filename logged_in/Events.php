
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


<?php

include '../connect.php';

$sql = 'SELECT user, event FROM events';
$result = $conn->query($sql);

$user = $_COOKIE['user'];
echo "<article><article class='nest'><ul>";
echo "<h2 >Your Events:</h2><br>";
while($row = $result->fetch_assoc()) {
    if ($user == $row['user']){
	echo "<div class='events top' style='display:inline'><a  href ='event_display.php?".$row['event']."'><span>".$row['event']."</span></a></div>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	}
}
echo "</ul></article></article>";
?>
<ul class = "snl">
  <li class = "snl"><a href="add_event.php">Add Event</a></li>

</ul class = "snl">
</body>
</html>
