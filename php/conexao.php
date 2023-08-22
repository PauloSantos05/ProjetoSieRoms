<?php

class db {
	
	private $servidor = 'localhost';
	private $usuario = 'root';
	private $senha = '';
	private $dbname = 'sistemapaulo';

	//criar conexão
	
	public function Conecta_Email(){
		$con = mysqli_connect($this->servidor, $this->usuario, $this->senha, $this->dbname);

		mysqli_set_charset($con, 'utf8');

		if (mysqli_connect_errno()) {
			echo 'Erro: '.mysqli_connect_error();
		}

		return $con;
	}

}


?>