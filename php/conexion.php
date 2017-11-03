<?php
	$mysqli = new mysqli('localhost', 'root', '','wahizza');
	if ($mysqli->connect_errno):
		echo "Error al conectarse con MYSQL debido a" .$mysqli->connect_error;
	endif;
?>