<?php
session_start();

if (isset($_SESSION["logadoCliente"])) {
	unset($_SESSION["logadoCliente"]);
	session_destroy();
	header("Location:login.php");
}elseif (isset($_SESSION["logadoAdm"])) {
	unset($_SESSION["logadoAdm"]);
	session_destroy();
	header("Location:login.php");
}

?>