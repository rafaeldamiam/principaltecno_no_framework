<?php
	include ("cabecalho.php");
	include ("menu.php");

	$dataAno = date("Y");
?>
	<form action="" method="post">
		<label for="Rua">Rua</label><br>
		<input id="Rua" type="text" minlength="1" name="Rua"><br><br>
		<label for="Bairro">Bairro</label><br>
		<input id="Bairro" type="text" minlength="1" name="Bairro"><br><br>
		<label for="Numero">Numero</label><br>
		<input id="Numero" type="number" name="Numero"><br><br>
		<label for="Cep">Cep</label><br>
		<input id="Cep" type="text" name="Cep"><br><br>
		<label for="pagamento">Forma de Pagamento</label><br>
			<select name="pagamento">
				<option>Boleto</option>
				<option>Cartão de Crédito</option>
				<option>Cartão de Débito</option>
				<option>Depósito Bancário</option>
			</select><br><br>
		<input type="submit" name="Comprar" value="Comprar!">
	</form>

<?php
	include ("rodape.php");

	if (!empty($_POST)) {
		$rua = trim($_POST["Rua"]);
		$Bairro = trim($_POST["Bairro"]);
		$Numero = trim($_POST["Numero"]);
		$Cep = trim($_POST["Cep"]);


		//rua
		if ((strlen($rua) == 0)||(strlen($rua) < 1)||(filter_input(INPUT_POST, $rua , FILTER_SANITIZE_STRING))){
		 	echo  "Você deve inserir a sua rua.<br><br>";
		}

		//bairro
		if ((strlen($Bairro) == 0)||(strlen($Bairro) < 1)|| (filter_input(INPUT_POST, $Bairro , FILTER_SANITIZE_STRING))){
		 	echo  "Você deve inserir a sua Bairro.<br><br>";
		}

		//número
		if ((strlen($Numero) == 0)||(strlen($Numero) < 1)|| (filter_input(INPUT_POST, $Numero , FILTER_VALIDATE_INT))){
			 echo  "Você deve inserir o número da sua residência.<br><br>";
		}

		//CEP
		if ((strlen($Cep) == 0)||(!preg_match('/[0-9]{5,5}([-]?[0-9]{3})?$/', $Cep))){
		 	echo  "Você deve inserir o número do seu CEP.<br><br>";
		}

	}
?>