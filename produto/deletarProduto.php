<?php
require "../conexao.php";

$id = $_GET["id"];

$comando = "DELETE FROM produto WHERE IdProduto = '$id';";

$retorno = mysqli_query($cnx, $comando); 

if($retorno) {
	header("refresh:1; url=listarProduto.php");
	echo "Foi excluído com sucesso!";
} else {
	echo "Erro!";
}
?>