<?php
	include ("cabecalho.php");
	include ("menu.php");

	$dataAno = date("Y");
?>
	
	<form action="" method="post">
		<label for="Nome">Nome:</label><br>
		<input id="Nome"  maxlength="11" minlength="3" type="text" name="Nome"><br><br>
		
		<label for="Sobrenome">Sobrenome:</label><br>
		<input id="Sobrenome" maxlength="10" minlength="3" type="text" name="Sobrenome"><br><br>

		<label for="sexo">Sexo:</label><br>
		<input id="sexoM" type="radio" name="sexo" value="M">
		<label for="sexoM">Masculino</label>
		<input id="sexoF" type="radio" name="sexo" value="F">
		<label for="sexoF">Feminino</label><br><br>

		<label for="Idade">Data de Nascimento:</label><br>
		<select name="Dia">
			<?php
			for ($day=1; $day <= 31; $day++) { 
				echo "<option>".$day."</option>";
			}
			
			?>
		</select>
		<select name="Mes">
			<?php
			for ($month=1; $month <= 12; $month++) { 
				echo "<option>$month</option>";
			}
			
			?>
		</select>
		<select name="Ano">
			<?php
			$AnoAtual = $dataAno;

			for ($year=1930; $year <= $AnoAtual; $year++) { 
				echo "<option>".$year."</option>";
			}
			
			?>
		</select>
		<br><br>
		<label for="email">Email:</label><br>
		<input type="text" maxlength="100" minlength="12" name="email">
		<br><br>
		<label for="senha">Senha:</label><br>
		<input type="password" maxlength="16" minlength="8" name="senha">
		<br><br>
		<label for="consenha">Confirma Senha:</label><br>
		<input type="password" maxlength="16" minlength="8" name="Confsenha">

		<br><br>
		<input type="submit" value="Cadastrar">
	</form>
<?php
	include ("rodape.php");

	if (!empty($_POST)) {
		$nome = trim($_POST["Nome"]);
		$sobrenome = trim($_POST["Sobrenome"]);
		$email = trim($_POST["email"]);
		$senha = trim($_POST["senha"]);
		$Confsenha = trim($_POST["Confsenha"]);

		//nome
		if (strip_tags($nome)){
			$nome = strip_tags($nome);
		}
		if (((strlen($nome) == 0)||(strlen($nome) < 3))|| (filter_input(INPUT_POST, $nome , FILTER_SANITIZE_STRING))){
		 echo  "Você deve inserir seu nome.<br><br>";
		}
		

		//sobrenome
		if (strip_tags($sobrenome)){
			$sobrenome = strip_tags($sobrenome);
		}
		if ((strlen($sobrenome) == 0)||(strlen($sobrenome) < 4) || (filter_input(INPUT_POST, $sobrenome , FILTER_SANITIZE_STRING))) {
		 	echo  "Você deve inserir seu sobrenome.<br><br>";
		}
		

		//email
		if (strip_tags($email)){
			$email = strip_tags($email);
		}
		if ((strlen($email) == 0) || (filter_input(INPUT_POST, $email , FILTER_VALIDATE_EMAIL))) {
		 	echo  "Você deve inserir um e-mail.<br><br>";
		}
		

		//senha
		if (strip_tags($senha)){
			$senha = strip_tags($senha);
		}
		if ((strlen($senha) == 0) || (strlen($senha) < 8 ) || (strlen($senha) > 16)){
		 	echo  "Você deve inserir uma senha entre 8 a 16 caracteres.<br><br>";
		}	
		if (ctype_upper($senha)) {
			echo "Sua senha deve conter letras maiusculas e minusculas.";
		}
		if(preg_match("/^[a-zA-ZãÃáÁàÀêÊéÉèÈíÍìÌôÔõÕóÓòÒúÚùÙûÛçÇºª' ']+$/", $senha)){
			echo "Utilize caracteres alfanumericos e especiais.";
		}
		

		//confsenha
		if (strip_tags($Confsenha)){
			$Confsenha = strip_tags($Confsenha);
		}
		if ($senha <> $Confsenha) {
		 	echo  "Senhas não coincidem.<br><br>";
		}
		
	}
?>
	

