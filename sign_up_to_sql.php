<?php
	include 'connect.php';//include file to connect to database

	$verify = True;
	$sql = 'SELECT username, email FROM registration';
   	$result = $conn->query($sql);

	$fname = $_POST["fname"];//taking form inputs using POST
	$lname = $_POST["lname"];
	$email = $_POST["email"];
	$username = $_POST["username"];
	$pwd = $_POST["pwd"];
	$priv = '1';
   	
	while($row = $result->fetch_assoc()) {//checking if username is taken
		if ($username == $row["username"]){
			echo " username taken ";
			$verify = False;
			break;	
		
		}
		elseif ($email == $row["email"] or strpos($email,"@") == False or strpos($email,".") == False){//checking email validity
			echo " email taken or invalid ";
			$verify = False;
			break;
		
		}
	}

	if($verify == True){//if the above passes we create a new user	
			
		$stmt = $conn->prepare("insert into registration(fname,lname,email,username,pwd,privelage)
			values(?,?,?,?,?,?)");
		$stmt->bind_param('sssssi',$fname,$lname,$email,$username,$pwd,$priv);
		$stmt->execute();
		$conn -> commit();
		$stmt ->close();
		$conn ->close();
		setcookie('user', $username, time() + (86400 * 30), "/");
		header("Location: logged_in/logged_in.php");
	}
