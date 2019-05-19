<?php

require "../conexao.php";

$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$id = $_POST["id"];
$nomeProduto = $_POST["nomeProduto"];
$unidades = $_POST["unidades"];

$comando = "UPDATE produto
SET Descricao = '$descricao', Preco = '$preco', NomeProduto = '$nomeProduto', Unidades = '$unidades'
WHERE IdProduto='$id'";

$retorno = mysqli_query($cnx, $comando);

if($retorno) {
	header("refresh:2; url=listarProduto.php");
	echo "Foi ALTERADO com sucesso!";
} else {
	echo "Errou!";
}

?>