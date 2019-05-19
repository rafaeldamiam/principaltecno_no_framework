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
<center>
<h2>Administração</h2>
<h3>Listar Produtos</h3>
<table>
	<tr>
		<td>ID</td>
		<td>NOME PRODUTO</td>
		<td>DESCRIÇÃO</td>
		<td>PREÇO</td>
		<td>UNIDADES</td>
		<td>DETALHAR</td>
		<td>DELETAR</td>
		<td>ALTERAR</td>
	</tr>

	<?php foreach ($produtos as $produto) : ?>
	<tr>
		<td><?=$produto["IdProduto"]?> </td>
		<td><?=$produto["NomeProduto"]?> </td>
		<td><?=$produto["Descricao"]?></td>
		<td><?=$produto["Preco"]?> </td>
		<td><?=$produto["Unidades"]?> </td>
		<td>
			<a href="detalharProduto.php?id=<?=$produto["IdProduto"]?>">Detalhar</a>
		</td>
		<td>
			<a href="deletarProduto.php?id=<?=$produto["IdProduto"]?>">Deletar</a>
		</td>
		<td>
			<a href="alterarProduto.php?id=<?=$produto["IdProduto"]?>">Editar</a>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
<br>
<a href="formularioProduto.php">Adicionar novo produto</a>
<a href="../admin.php">Voltar</a>
</center>
<?php
require'rodape.php';
?>