<?php
require "conexao.php";
require "cabecalho.php";
require "menu.php";
?>
<center>
	<h2>Atendimento ao Cliente</h2>
	<form action="enviar.php" name="form_contato" method="post" >
		<h3>Formulário</h3>
		<label for="nome">Nome:<sup class="asteristico">*</sup></label>
		<input id="caixaTexto" type="text" name="nome" maxlength="40" />

		<label for="email">E-mail:<sup class="asteristico">*</sup></label>
		<input id="caixaTexto" type="email" name="email" maxlength="30" />

		<label for="telefone">Telefone:<sup class="asteristico">*</sup></label>
		<input id="caixaTexto" type="text" name="telefone" maxlength="14" />
		<br><br>
		<label for="msg">Mensagem:<sup class="asteristico">*</sup></label><br><br>
		<textarea name="msg" id="msg" cols="16" rows="5"></textarea>
		<br><br><br>
		<input id="botao" type="reset" class="campo_submit" value="Limpar" />
		<input id="botao" type="submit" class="campo_submit" value="Enviar" /><br><br>
		<label>* Campos obrigatorios</label>
	</form>
<center>
<?php
require "rodape.php";
?>