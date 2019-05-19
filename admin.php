<?php

require 'conexao.php';
require'cabecalho.php';
require'menu.php';

if (isset($_SESSION["logadoAdm"])) {
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Página do Administrador</title>
	</head>
	<body>
		<h2>Administração</h2>
		<center>
			<h3>Produtos da Loja</h3>
			<ul id="ulAdmin">
				<li><a href="produto/listarProduto.php">Listar Produtos cadastrados</a></li>
				<li><a href="produto/formularioProduto.php">Adicionar novo produto</a></li>
				<li><a href="login_cadastro/logout.php">Encerrar sessão</a></li>
			</ul>
		</center>
	</body>
	</html>
	<?php
}elseif (!isset($_SESSION["logadoAdm"])) {
	header('Location: login_cadastro/login.php');
	$_SESSION["logar"] = "Você precisa se autenticar para acessar essa área";
}
require'rodape.php';
?>
