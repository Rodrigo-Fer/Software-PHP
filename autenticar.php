<?php
	
	$link = mysqli_connect('127.0.0.1:3300', 'root', 'root', 'fito_sollos') or die ("erro de credenciais");
	$sql = "select USR_EMAIL, USR_SENHA FROM usuario WHERE USR_EMAIL = '{$usuario}' and USR_SENHA = '{$senha}'";	
	mysqli_query($link, $sql) or die ("erro ao validar os dados");
	mysqli_close($link);
	echo "bem vindo!";
	
	
?>