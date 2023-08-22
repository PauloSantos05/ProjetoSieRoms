<?php

	function valida_login($login, $senha){

		//validar direto num banco de dados
		if ($login == $email && $senha == $password) {
			return true;
		}
			return false;



	}

?>