<?php

require "../conexao.php";
require'cabecalho.php';
require'menu.php';

$id = $_GET["id"];
$_SESSION["IdProduto"] = $id;

$comando = "SELECT * FROM produto WHERE IdProduto = '$id';";
$retorno = mysqli_query($cnx, $comando);

$registro = mysqli_fetch_assoc($retorno);


?>
<center>
	<h2><?=$registro["NomeProduto"]?></h2>
	<table border="1">
		<tr>
			<td>ID</td>
			<td>NOME PRODUTO</td>
			<td>DESCRIÇÃO</td>
			<td>PREÇO</td>
			<td>UNIDADES</td>
		</tr>

		<tr>
			<td><?=$registro["IdProduto"]?> </td>
			<td><?=$registro["NomeProduto"]?> </td>
			<td><?=$registro["Descricao"]?></td>
			<td><?=$registro["Preco"]?> </td>
			<td><?=$registro["Unidades"]?> </td>
		</tr>
	</table>
	<br>
	<?php
		if (isset($_SESSION["logadoAdm"])) {
			echo '<a href="listarProduto.php">Voltar a lista de produtos</a>';
		}else{
			echo '<a href="produto.php">Voltar</a>';
		}
	?>
</center>
<?php


require 'rodape.php';
?>