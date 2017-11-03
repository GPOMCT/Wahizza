<?php
	require 'conexion.php';

	$usuarios = $mysqli->query("SELECT Name, Username 
		from employees_login
		WHERE Username| = '".$_POST['userName']."'
		AND Psswrd = '".$_POST['Password']."'");
		if($employees_login-> num_rows = 1):
			$datos = $employees_login->fetch_assoc();
			echo json_encode(array('error' => false, 'username' => $datos['Username']));
		else:
			echo json_encode(array('error' => true));
		endif;

	$mysqli->close();
?>
