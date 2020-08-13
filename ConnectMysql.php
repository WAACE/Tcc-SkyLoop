	<?php
	//endereço do servidor
	$host = "localhost";
	//Usuario
	$user = "root";
	//senha
	$password = "";
	//Base de dados
	$banco = "SkyLoop";
		//Função para conectar o servidor
		$link = mysqli_connect($host, $user, $password) or die (mysqli_error());
		//Função para selecionar o Banco de Dados
		$db = mysqli_select_db($link, $banco);
	?>