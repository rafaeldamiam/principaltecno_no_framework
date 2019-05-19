<!DOCTYPE html>
<html>
<head>
	<link rel="sortcut icon" href="imagens/icon.ico" type="image/gif">
	<link rel="stylesheet" type="text/css" href="geral.css">
	<meta charset="utf-8">
	<title>Principal Tecno</title>	
</head>
<body>
	<header>
		<input type="text" name="Search" id="caixaTexto">
		<input type="submit" value="Pesquisar" id="botao">
		<?php 
		if(!isset($_SESSION["logadoCliente"]) && !isset($_SESSION["logadoAdm"])){
			echo"<a href='login.php'>Tem uma conta? Entre agora</a>";
		}

		if(isset($_SESSION["logadoCliente"]) || isset($_SESSION["logadoAdm"])){
			echo"<a href='logout.php'>Deslogar</a>";
		}
		?>
	</header><br>
