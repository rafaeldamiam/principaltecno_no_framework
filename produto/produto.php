<?php

require "../conexao.php";
require'cabecalho.php';
require'menu.php';

$comando = "SELECT * FROM produto";
$retorno = mysqli_query($cnx, $comando);
$produtos = array();
while($registro = mysqli_fetch_assoc($retorno)) {
	$produtos[] = $registro;
}


?>
<table border="1">
	<tr>
		<td>NOME PRODUTO</td>
		<td>DESCRIÇÃO</td>
		<td>PREÇO</td>
		<td>UNIDADES</td>
		<td>DETALHAR</td>
		<td>CARRINHO</td>
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
		<td>
			<a href="../carrinho.php?id=<?=$produto['IdProduto']?>">Adicionar</a>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
<?php
require'rodape.php';
?>