<?php
require'cabecalho.php';
require'menu.php';
?>
<center>
	<form action="adicionarProduto.php" method="POST">
		<h2>Administração</h2>
		<h3>Adicionar novo Produto</h3>
		<label for="nomeProduto">Nome do Produto:</label> 
		<input type="text" name="nomeProduto" id="caixaTexto">
		<label for="descricao">Descrição:</label> 
		<input type="text" name="descricao" id="caixaTexto">
		<label for="preco">Preço:</label> 
		<input type="text" name="preco" id="caixaTexto">
		<label for="unidades">Unidades:</label> 
		<input type="text" name="unidades" id="caixaTexto">
		<br>
		<br>
		<button type="submit" id="botao">Cadastrar Produto!</button>
	</form>
</center>
<?php
require 'rodape.php';
?>