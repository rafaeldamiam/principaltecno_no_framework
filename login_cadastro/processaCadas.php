<?php
if (!empty($_POST)){

	require '../conexao.php';

	foreach ($_POST as $chave => $valor) {
		$$chave = (trim(strip_tags($valor)));
	}

	$error = false;

	if (((strlen($nome) == 0)||(strlen($nome) < 3))|| (filter_input(INPUT_POST, $nome , FILTER_SANITIZE_STRING))){
		echo  "Você deve inserir seu nome.<br><br>";
		$error = true;
		header("reflesh:2; url=cadastro.php");
	}else{
		$nomecorreto = $nome;
	}

	//email
	if ((strlen($email) == 0) || (filter_input(INPUT_POST, $email , FILTER_VALIDATE_EMAIL))) {
		echo  "Você deve inserir um e-mail.<br><br>";
		$error = true;
		header("reflesh:2; url=cadastro.php");
	}else{
		$emailcorreto = $email;
	}


	//senha
	if ((strlen($senha) == 0) || (strlen($senha) < 8 ) || (strlen($senha) > 16) || (ctype_upper($senha))){
		echo  "Você deve inserir uma senha entre 8 a 16 caracteres.<br><br>";
		echo "Sua senha deve conter letras maiusculas e minusculas.";
		echo  "Senhas não coincidem.<br><br>";
		$error = true;
		header("reflesh:2; url=cadastro.php");
	}else{
		$senhacorreta = $senha;
	}

	if ($senha <> $confSenha) {
		echo "senha nao se coincidem";
		$error = true;
	} else {
		$senhacorreta = $senha;
	}


	if ((!is_numeric($telefone))||(strlen($telefone) < 11)){
		echo "Número de telefone inválido";
		$error = true;
		header("reflesh:2; url=cadastro.php");
	}else{
		$telefonecorreto = $telefone;
	}

	if ((!preg_match("/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}$/", $cpf)) || (strlen($cpf) < 13)) {
		echo "CPF inválido";
		$error = true;
		header("reflesh:2; url=cadastro.php");
	}else{
		$cpfcorreto = $cpf;
	}

	if (!$error) {
		$comando1 = "SELECT * FROM cliente WHERE Email = '$emailcorreto'";
		$retorno1 = mysqli_query($cnx, $comando1);
		$registro = mysqli_fetch_assoc($retorno1);
		if($registro != null) {
			echo "Email já cadastrado";
			header("refresh:2; url= /cadastro.php");
		} else {
			echo "<style> #a { color: green; } </style>";
			$comando2 = "INSERT INTO cliente (NomeCliente, Email,Senha,Cpf,Telefone) VALUES ('$nomecorreto','$emailcorreto','$senhacorreta','$cpfcorreto','$telefonecorreto');";
			$retorno = mysqli_query($cnx, $comando2);

			if ($retorno) {
				echo "<p id=a> Cadastrado com sucesso!!! </p>";
				header("refresh:2; url=  ../index1.php");
				$_SESSION["logadoCliente"] = $email;
			}else{
				echo "<style> #b { color: red; } </style>";
				echo "<p id=b> Houve um problema em seu cadastro!!! </p>";	
			}

		}
	}

}

?>