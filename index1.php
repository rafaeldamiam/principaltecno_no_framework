<?php

require "conexao.php";
require 'cabecalho.php';
require 'menu.php';

$comando = "SELECT * FROM produto";
$retorno = mysqli_query($cnx, $comando);
$produtos = array();

while($registro = mysqli_fetch_assoc($retorno)) {
	$produtos[] = $registro;
}

?>

<h2>Seja bem-vindo a Principal Tecno</h2>
<h3>A principal tecnologia para você!</h3>
<br>

<div id="novidades">
	<h3>O que há de novo?</h3>
	<br><br>
</div>

<table border="1">
	<tr>
		<td>Nome Do Produto</td>
		<td>Descrição</td>
		<td>Preço</td>
		<td>Unidades</td>
		<td>Detalhar</td>
	</tr>

	<?php foreach ($produtos as $produto) : ?>
	<tr>
		<td><?=$produto["NomeProduto"]?> </td>
		<td><?=$produto["Descricao"]?></td>
		<td><?=$produto["Preco"]?> </td>
		<td><?=$produto["Unidades"]?> </td>
		<td>
			<a href="detalharProduto.php?id=<?=$produto['IdProduto']?>">Detalhar</a>
		</td>
	</tr>
	<?php endforeach; ?>
</table>

<?php
require'rodape.php';
?>