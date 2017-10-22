<?php

/**
* 
*/
//Nome da classe
class Conta
{
	//Não permite editar as variáves fora da classe
  	private $login; 
  	private $senha; 
  	private $email; 
  	
  	//Método construtor, não precisa colocar o mesmo nome como no java
	function __construct($parametro_Login,$parametro_senha,$parametro_email){
		
		$this->login = $parametro_Login;
		$this->senha = $parametro_senha;
		$this->email = $parametro_email;

	}

	//Métodos get para retorno do valor da variável
	public function getLogin(){

		return $this->login;

	}
	public function getSenha(){

		return $this->senha;

	}
	public function getEmail(){

		return $this->email;

	}
}//Fim da classe//

//Instanciando a classe conta e recebendo os valores do form index.html
$conta = new Conta($_POST['login'],$_POST['senha'],$_POST['email']);

//Print dos valores para teste
//echo 'Essa é sua conta: '.$conta->getLogin().' essa é sua senha: '.$conta->getSenha().' esse é seu email: '.$conta->getEmail();


?>