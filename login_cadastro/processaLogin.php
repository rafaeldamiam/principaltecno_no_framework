<?php
require '../conexao.php';
//login

if (!empty($_POST)) {
	$email = $_POST["email"];
	$senha = $_POST["senha"];

	$cmdAdm = "SELECT * FROM administrador";
	$resulAdm = mysqli_query($cnx, $cmdAdm);
	$cmdCliente = "SELECT * FROM cliente";
	$resulCliente = mysqli_query($cnx, $cmdCliente);

	while($linha = mysqli_fetch_assoc($resulAdm)){
		if (($linha["EmailAdmin"] == $email) && ($linha["SenhaAdmin"] == $senha)){
			$_SESSION["logadoAdm"] = $email;
			header("Location:../admin.php");
		}
	}

	while($linha = mysqli_fetch_assoc($resulCliente)){
		if (($linha["Email"] == $email) && ($linha["Senha"] == $senha)){
			$_SESSION["logadoCliente"] = $email;
			header("Location:../index1.php");
		}
	}
}else{
	echo "<h3>Há algo de errado, clique no botão voltar e corrija pfvr!!!</h3>";
	echo '<a href="login.php"> Voltar</a>';
}

?>