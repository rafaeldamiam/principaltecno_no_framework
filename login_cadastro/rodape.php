<br><footer>
<ul>
	<li><?php 
		if (isset($_SESSION["logadoAdm"])) {
			echo'<a href="../admin.php">Minha Conta</a>';	
		}elseif(isset($_SESSION["logadoCliente"])){
			echo'<a href="../usuario/minhaConta.php">Minha Conta</a>';
		}else{
			echo '<a href="login.php">Minha Conta</a>';
		}
		?></li>
	<li><a href="../usuario/carrinho.php"><img src="imagens/carrinho.png" alt="Carrinho" height="50px" width="50px"></a></li>
	<li><a href="../atendCliente.php">Atendimento ao Cliente</a></li>
</ul>

<div id="sociais">
<center>
<h3>Nos siga em nossas redes sociais</h3>
<a href="https://facebook.com"><img src="imagens/facebook.png" alt="Facebook" id="social"></a>
<a href="https://instagram.com"><img src="imagens/instagram.png" alt="Instagram" id="social"></a>
<a href="https://twitter.com"><img src="imagens/twitter.png" alt="Twitter" id="social"></a>
</div>
</center>
</footer>
</body>
</html>

