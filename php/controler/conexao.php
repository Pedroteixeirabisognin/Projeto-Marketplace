<?php

	include_once("../model/conta.php"); 


/**
* 
*/
class conexao
{

	private $host = 'localhost';
	private $usuario = 'root';
	private $senhab = '';

	private $database = 'tcc';

	function conecta_mysql(){

		//Cria conexão com o banco
		$con = mysql_connect($this->host,$this->usuario,$this->senhab,$this->database);

		//Ajusta o charset de comunicação entre aplicação e o banco de dados
		mysqli_set_charset($con,'utf8');

		//Verificar se houve erro na conexão
		if (mysqli_connect_errno()) {
			echo "Erro ao tentar se connectar";
		}
		else{
			echo "A conexão está ok";

		}

		return $con;
	}

}



?>