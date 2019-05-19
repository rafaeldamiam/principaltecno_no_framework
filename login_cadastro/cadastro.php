<?php
require '../conexao.php';
require 'cabecalho.php';
require 'menu.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
</head>
<body>
<div id="cadas">
	<center>
		<h2>Cadastro</h2>
		<h3>Informe os seus dados</h3>
		<form action="processaCadas.php" method="POST">
			<label for="nome">Nome Completo:</label>
			<input type="text" name="nome" id="caixaTexto"> 

			<label for="telefone">Telefone:</label>
			<input type="tel" maxlength= "11" name="telefone" id="caixaTexto"> 


			<label for="cpf">CPF:</label>
			<input type="text"  maxlength="14" minlength="14" name="cpf" id="caixaTexto"> 

			<h3>Informe seus dados para identificação</h3>			

			<label for="email">Email:</label>
			<input type="email" name="email" id="caixaTexto">

			<label for="senha">Senha:</label>
			<input type="password" minlength="8" maxlength= "16" name="senha" id="caixaTexto">

			<label for="confSenha">Confirmação da Senha:</label>
			<input type="password" minlength="8" maxlength= "16" name="confSenha" id="caixaTexto"><br><br>

			<input type="submit" value="Cadastrar" id="botao">
		</ul>
	</form>
</center>
</div>
</body>
</html>

<?php
require 'rodape.php';
?>