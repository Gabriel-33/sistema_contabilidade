<?php
	class seguranca{
		function verificar(){
			session_start();
			if (!empty($_SESSION['email']) AND !empty($_SESSION['senha']) AND !empty($_SESSION['cod'])) {
				
			}else{
				unset($_SESSION);
				unset($_POST);
				session_destroy();
				header("location:login.php");
			}
		}
		function sair(){
			unset($_SESSION);
			unset($_POST);
			session_destroy();
			header("location:login.php");
		}
	}
?>