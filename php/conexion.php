<?php
	$mysqli = new mysqli('localhost:3306', 'root', '','wahizza');
	if ($mysqli->connect_errno):
		echo "Error al conectarse con MYSQL debido a" .$mysqli->connect_error;
	endif;
?>