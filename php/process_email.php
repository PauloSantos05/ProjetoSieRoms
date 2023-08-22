<?php
	
require_once('conexao.php');

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	//echo "Nome: $nome <br/>";
	//echo "E-mail: $email <br/>";
	//echo "Senha: $senha <br/>";

	$objDB = new db();
	$link = $objDB->Conecta_Email();

$sql = "INSERT INTO roms(nome, email, senha, created) VALUES('$nome', '$email', '$senha', NOW())";
mysqli_query($link, $sql);

//local de rediresionamento
	if (mysqli_insert_id($link)) {
		header("location: ../index-login.html");
	} else {
		header("location: ../index-register.html");
	}

?>