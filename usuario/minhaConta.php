<?php
require '../conexao.php';
require 'cabecalho.php';
require 'menu.php';

$email = $_SESSION["logadoCliente"];

$cmdDados = "SELECT * FROM cliente WHERE Email = '$email'";
$retornoDados = mysqli_query($cnx, $cmdDados);

$registroDados = mysqli_fetch_assoc($retornoDados);

?>
<center>
<table border="1">
	<tr>
		<td>Nome Cliente</td>
		<td>Telefone</td>
		<td>CPF</td>
		<td>Email</td>
		<td>Excluir</td>
		<td>Editar</td>
	</tr>

	<tr>
		<td><?php echo $registroDados["NomeCliente"];?></td>
		<td><?php echo $registroDados["Telefone"];?></td>
		<td><?php echo $registroDados["Cpf"];?></td>
		<td><?php echo $registroDados["Email"];?></td>
		<td>
			<a href="excluirConta.php?email=<?=$registroDados["Email"]?>">Excluir Conta</a>
		</td>
		<td>
			<a href="editarConta.php?email=<?=$registroDados["Email"]?>">Editar Conta</a>
		</td>
	</tr>
</table>
<center>

<?php
require 'rodape.php';
?>