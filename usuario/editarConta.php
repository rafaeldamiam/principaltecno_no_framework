<?php

require "../conexao.php";
require'cabecalho.php';
require'menu.php';

$email = $_SESSION["logadoCliente"];

$comando = "SELECT * FROM cliente WHERE Email = '$email'";

$retorno = mysqli_query($cnx, $comando);

$registro = mysqli_fetch_assoc($retorno);

?>
<form action="atualizarConta.php" method="POST">

	<input type="hidden" id="caixaTexto" name="id" value="<?php echo $registro["IdCliente"]; ?>">

	<label for="nomeCliente">Nome Cliente:</label> 
	<input type="text" id="caixaTexto" name="nomeCliente" value="<?php echo $registro["NomeCliente"]; ?>">

	<label for="telefone">Telefone:</label> 
	<input type="text" id="caixaTexto" name="telefone" value="<?php echo $registro["Telefone"]; ?>">

	<label for="email">Email</label> 
	<input type="text" id="caixaTexto" name="email" value="<?php echo $registro["Email"]; ?>">

	<label for="senha">Senha:</label> 
	<input type="password" id="caixaTexto" name="senha" value="<?php echo $registro["Senha"];?>">
	<button id="botao" type="submit">Alterar!</button>
</form>
<?php
require'rodape.php';
?>