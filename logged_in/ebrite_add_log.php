<?php

	
	include '../connect.php';
	
	$user = $_POST['username'];
	$pwd = $_POST['pwd'];
	$name = $_POST['name'];	
	$ems = "ebrite";
	$uname = $_COOKIE['user'];

	$stmt = $conn->prepare("insert into log(user,pass,name,ems)
		values(?,?,?,?)");
	$stmt->bind_param('ssss',$user,$pwd,$name,$ems);
	$stmt->execute();
	$stmt = $conn->prepare("insert into events(user,event)
		values(?,?)");
	$stmt->bind_param('ss',$uname,$name);
	$stmt->execute();
	$stmt ->close();
	$conn ->close();
	echo exec('Find_Attendees.py');
	header("Location: Events.php");
	