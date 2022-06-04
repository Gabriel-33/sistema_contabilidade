<?php
	class conexao{
		public $con;
		function __construct(){
			try {
				$this->con = new PDO("mysql:host=localhost;port=3306;dbname=controle_ecatege","root","");
				// echo "conectou";
			} catch (Exception $e) {
				echo $e;
			}
		}
	}
?>