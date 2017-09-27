<?php

/**
* 
*/
class Conta
{

 $login = $_POST['login'];

 $senha = $_POST['senha'];

 $email = $_POST['email'];

	
	function __construct(argument)
	{
		# code...
	}
	//=====SETS===========//
	function setLogin($login){
		$this->login = $login;

	}

	function setSenha($senha){
		$this->senha = $senha;


	}

	function setEmail($email){
		$this->email = $email;


	}
	

	//=====GETS===========//
	function getLogin($Login){
		return $this->login;

	}

	function getSenha($senha){
		return $this->senha;

	}

	function getEmail($email){
		return $this->email;

	}

}



//conexão com o banco
/*
 print"$login $senha $email";



$link = mysqli_connect("localhost", "root", "", "tcc");
 
if (!$link) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
 
echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL." . PHP_EOL;

$sql = "INSERT INTO conta VALUES ";
$sql .= "(1,1,'$login', '$senha', '$email')"; 
mysqli_query($link,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($link);
echo "Cliente cadastrado com sucesso!";
mysqli_close($link);

*/

?>