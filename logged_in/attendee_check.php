<?php

include '../connect.php';
$event_name = strtolower(str_replace("%20"," ",$_SERVER['QUERY_STRING']));
$sql = "SELECT name, email FROM `".$event_name."`";
$result = $conn->query($sql);

$name = $_POST['name'];
$email = $_POST['email'];


while($row = $result->fetch_assoc()) {
    if ($name == $row["name"]){
		if ($email == $row["email"]){
			header("Location: print_badge.php");;
}
}
}