<?php

require "../conexao.php";
require'cabecalho.php';
require'menu.php';

$id = $_GET["id"];

$comando = "SELECT * FROM produto WHERE IdProduto = '$id'";
$retorno = mysqli_query($cnx, $comando);

$registro = mysqli_fetch_assoc($retorno);

?>
	<form action="atualizarProduto.php" method="POST">

		<input type="hidden" id="caixaTexto" name="id" value="<?php echo $registro["IdProduto"]; ?>">

		<label for="nomeProduto">Nome Produto:</label> 
		<input type="text" id="caixaTexto" name="nomeProduto" value="<?php echo $registro["NomeProduto"]; ?>">

		<label for="descricao">Descrição:</label> 
		<input type="text" id="caixaTexto" name="descricao" value="<?php echo $registro["Descricao"]; ?>">

		<label for="unidades">Unidades:</label> 
		<input type="text" id="caixaTexto" name="unidades" value="<?php echo $registro["Unidades"]; ?>">

		<label for="preco">Preço:</label> 
		<input type="text" id="caixaTexto" name="preco" value="<?php echo $registro["Preco"];?>">

		<button id="botao" type="submit">Alterar!</button>
	</form>
<?php
require'rodape.php';
?>