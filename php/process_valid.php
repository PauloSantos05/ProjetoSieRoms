<?php
	
	session_start();

	require_once('conexao.php');
	

	$email = $_POST['email2'];
	$senha = $_POST['senha2'];

	$sql = " SELECT email, senha FROM roms WHERE email = '$email' AND senha = '$senha' ";

	$objDB = new db();
	$link = $objDB->Conecta_Email();

	$resultado_id = mysqli_query($link, $sql);

	

	if ($resultado_id) {
		$dados = mysqli_fetch_array($resultado_id);

		if(isset($dados['email'])) {
			
			$_SESSION['email'] = $dados['email'];
			$_SESSION['senha'] = $dados['senha'];
			
			header('location: ../index-home.php');
		} else {
			header('location: ../index-login.html?erro=1');
		}
	} else {
		echo "Erro maluco";
	}
 
?>