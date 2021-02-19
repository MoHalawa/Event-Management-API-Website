<?php //base file used when we need to connecct to MySQL database
	$conn = new mysqli('localhost','root','','test'); // (port, user, pass, database name)
	if($conn->connect_error){
		die('Connection Failed: '.$conn->connect_error);
	}
?>