<?php

require "../conexao.php";

$nomeProduto = $_POST["nomeProduto"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$unidades = $_POST["unidades"];

$comando = "INSERT INTO produto (NomeProduto, Descricao, Preco, Unidades)
	values ('$nomeProduto', '$descricao', '$preco', '$unidades');";

$retorno = mysqli_query($cnx, $comando);

if($retorno) {
	header("refresh:2; url=listarProduto.php");
	echo "Foi inserido com sucesso!";
} else {
	echo "Errou!";
}


?>