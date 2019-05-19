<?php
session_start();

$cnx = mysqli_connect();	

if (!$cnx) {
	echo("Tente Novamente" . mysqli_connect_error());
}




?>
