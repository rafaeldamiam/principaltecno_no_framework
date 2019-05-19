<?php
require '../conexao.php';
require 'cabecalho.php';
require 'menu.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<center>
		<h2>Login</h2>

		<form method="POST" action="processaLogin.php">
			<label for="Email">Email:</label>
			<input type="text" name="email" id="caixaTexto">
			<label for="Email">Senha:</label>
			<input type="password" name="senha" id="caixaTexto">
			<input type="submit" value="Entrar" id="botao">
		</form>
		<br>
		<a href="cadastro.php">Não tem uma conta? Cadastre-se agora.</a>
	</center>
</body>
</html>

<?php
require 'rodape.php';
?>

