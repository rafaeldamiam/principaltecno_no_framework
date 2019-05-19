<?php

require "../conexao.php";

$EmailLog = $_SESSION["logadoCliente"];
$nome = $_POST["nomeCliente"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$senha = $_POST["senha"];


$comando = "UPDATE cliente SET NomeCliente = '$nome', Telefone = '$telefone', Email = '$email', Senha = '$senha' WHERE Email='$EmailLog';";

$retorno = mysqli_query($cnx, $comando);

if($retorno) {
	header("refresh: 1; url= ../login_cadastro/login.php");
	echo "<h1>Foi ALTERADO com sucesso!</h1>";
	if (isset($_SESSION["logadoCliente"])) {
		unset($_SESSION["logadoCliente"]);
		session_destroy();
	}elseif (isset($_SESSION["logadoAdm"])) {
		unset($_SESSION["logadoAdm"]);
		session_destroy();
	}
} else {
	echo "Errou!";
}

?>