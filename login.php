<?php
	session_start();


	$username = strtolower(strip_tags($_POST['username']));
	$password = strip_tags($_POST['password']);
	
	if ($username && $password)
	{
		$servername = "localhost";
		$dbusername = "test";
		$dbpassword = "test";
		$db = "campuslist";

		// Create connection
		$conn = new mysqli($servername, $dbusername, $dbpassword, $db);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		
		$sql = "SELECT * FROM user WHERE username='$username'";

		$conn->query($sql);
		
		$result=$conn->query($sql);
		
		if ($result->num_rows != 0) {
			
			while ($row = $result->fetch_assoc()) {
				
				$user = $row['username'];
				$pass = $row['password'];
				//check to see if they match
				if ($username == $user && password_verify($password, $pass)) {
					
					//regenerate pwd hash
					
					//found corresponding user/pass in MySQL server, redirect to index.php
					header('Location: index.php');
					$_SESSION['username'] = $username;
				} else {
					echo ("Incorrect Username/Password ");
				}
			}
		} else {
			die("That user does not exist.");
		}
	} else {
		die("Please enter a username and a password:");
	}
		
?>