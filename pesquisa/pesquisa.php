<?php
if (isset($_GET["pesquisa"])) {
			$comando 	= "SELECT * FROM Produto WHERE NomeProduto LIKE '%{$_GET["Search"]}%';";
		}else{
			$comando 	= "SELECT * FROM Produto";	
		}
		$consulta 	= mysqli_query($conexao, $comando);


		while ($produto = mysqli_fetch_assoc($consulta)) { 
			
	}
?>