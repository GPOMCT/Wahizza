<?php
	session_start(); // Starting Session
	$error=''; // Variable To Store Error Message
	if (isset($_POST['submit'])) {
		if (empty($_POST['Username']) || empty($_POST['Password'])) {
			$error = "Username or Password is invalid";
		}
		else
		{
			// Define $username and $password
			$username=$_POST['Username'];
			$password=$_POST['Password'];
			// Establishing Connection with Server by passing server_name, user_id and password as a parameter
			$connection = mysqli_connect("localhost", "root", "", "wahizza", "3306");
			// To protect MySQL injection for Security purpose
			$username = stripslashes($username);
			$password = stripslashes($password);
			$username = mysqli_real_escape_string($connection,$username);
			$password = mysqli_real_escape_string($connection,$password);
			// Selecting Database
			// $db = mysql_select_db("wahizza", $connection);
			// SQL query to fetch information of registerd users and finds user match.
			$query = mysqli_query($connection, "select * from employee_login where PASSWORD='$password' AND Username='$username'");
			$rows = mysqli_num_rows($query);
			if ($rows == 1) {
				$_SESSION['login_user']=$username; // Initializing Session
				header("location: ../profile.php"); // Redirecting To Other Page
			} 
			else {
				$error = "Username or Password is invalid";
			}
			mysqli_close($connection); // Closing Connection
		}
	}
?>