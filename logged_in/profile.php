
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
  <li class ="header"><a href="Events.php">Your Events</a></li>
  <li class ="header"><a href="#placeholder">Placeholder</a></li>
  <li class ="header"><a href="#placeholder">Placeholder</a></li>
</ul>
<article>
<article class='nest'>
<?php
	include '../connect.php';
	$sql = "SELECT username, privelage FROM registration";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()){
		if($_COOKIE['user'] == $row['username']){
			$priv = $row['privelage'];
		}
	}
	if($priv == '3'){
		echo "<b>".$_COOKIE['user']." | Super Admin User |</b>";
	}
	elseif($priv =='2'){
		echo "<b>".$_COOKIE['user']." | Admin User |</b>";
	}
	elseif($priv =='1'){
		echo "<b>".$_COOKIE['user']." | Normal User |</b>";
	}
	$conn->close();
?>
</article>
</article>
</body>
</html>
