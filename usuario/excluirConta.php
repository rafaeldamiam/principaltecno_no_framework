<?php
require "../conexao.php";

$email = $_SESSION["logadoCliente"];

$comando = "DELETE FROM cliente WHERE Email = '$email';";

$retorno = mysqli_query($cnx, $comando); 

if($retorno) {
	header("refresh:1; url=../login_cadastro/login.php");
	echo "Foi excluído com sucesso!";
	if (isset($_SESSION["logadoCliente"])) {
		unset($_SESSION["logadoCliente"]);
		session_destroy();
	}elseif (isset($_SESSION["logadoAdm"])) {
		unset($_SESSION["logadoAdm"]);
		session_destroy();
	}
} else {
	echo "Erro!";
}
?>