<?php
	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
	$connection = mysqli_connect("localhost", "root", "", "wahizza", "3306");
	// Selecting Database
	// $db = mysql_select_db("wahizza", $connection);
	session_start();// Starting Session
	// Storing Session
	$user_check=$_SESSION['login_user'];
	// SQL Query To Fetch Complete Information Of User
	$ses_sql=mysqli_query($connection,"select Username from employee_login where Username='$user_check'");
	$row = mysqli_fetch_assoc($ses_sql);
	$login_session =$row['Username'];
	if(!isset($login_session)){
		mysqli_close($connection); // Closing Connection
		header('Location: ../index.php'); // Redirecting To Home Page
	}
?>