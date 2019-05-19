	<class>
	<ul>
		<li><a href="index1.php">Home</a></li>
		<li><a href="sobreNos.php">Sobre Nós</a></li> 
		<li><?php
		if (isset($_SESSION["logadoAdm"])) {
			echo '<a href="produto/listarProduto.php">Produtos</a>';
		}else{
			echo '<a href="produto/produto.php">Produtos</a>';
		}
		?></li>

		<li><?php 
		if (isset($_SESSION["logadoAdm"])) {
			echo'<a href="admin.php">Minha Conta</a>';	
		}elseif(isset($_SESSION["logadoCliente"])){
			echo'<a href="usuario/minhaConta.php">Minha Conta</a>';
		}else{
			echo '<a href="login_cadastro/login.php">Minha Conta</a>';
		}
		?></li>
		<li><a href="carrinho.php"><img src="imagens/carrinho.png" alt="Carrinho" height="50" width="50"></a></li>
		<li><a href="atendCliente.php">Atendimento ao Cliente</a></li>
	</ul>
	</class><br>
