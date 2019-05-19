<?php
require 'conexao.php';
require'cabecalho.php';
require'menu.php';
echo "<h2>Carrinho</h2>";

$id = $_GET["id"];

$comando = "SELECT * FROM produto WHERE IdProduto = '$id';";
$retorno = mysqli_query($cnx, $comando);

$registro = mysqli_fetch_assoc($retorno);

if (empty($id)) {
	echo "<h3>Adicionando novo produto ao carrinho:</h3>";
	echo "<h4>Não vai adicionar nada de novo ao carrinho?!</h4>";
	echo "<h4>;¬;</h4>";
}else{
?>
<table border="1">
	<tr>
		<td>NOME PRODUTO</td>
		<td>PREÇO</td>
		<td>UNIDADES</td>
		<td>Adicionar</td>
	</tr>

	<tr>
		<td><?=$registro["NomeProduto"]?></td>
		<td><?=$registro["Preco"]?></td>
		<form action="carrinho.php" method="POST">
		<td>
			<input type="number" value="1" name="quantPedido" min="1" max="<?=$registro['Unidades']?>">
		</td>
		<td><input type="submit" value="Adicionar"></td>
		</form>
	</tr>
</table>		
<?php
}
//salvando produto no carrinho
if (!empty($_POST["quantPedido"])) {
	
	print_r($_SESSION["PRODUTO"]);	
}


if(isset($_SESSION["PRODUTO"])) {
echo "<h3>Produtos já adicionados:</h3>";

}else{
	echo "<h4>Você ainda não adicionou nada no carrinho!!!</h4>";
	echo "<h4>:/</h4>";
}
require 'rodape.php';

?>
