<?php

/**
* 
*/
//Nome da classe
class Cliente
{
	//Não permite editar as variáves fora da classe
  	private $cpf; 
  	private $telefone; 
  	private $endereco; 
  	private $nome;
  	private $data;
  	private $sexo;
  	private $foto;
  	//Método construtor, não precisa colocar o mesmo nome como no java
	function __construct($parametro_cpf,$parametro_telefone,$parametro_endereco,$parametro_nome,$parametro_data,$parametro_sexo,$parametro_foto){
		
		$this->cpf = $parametro_cpf;
		$this->telefone = $parametro_telefone;
		$this->endereco = $parametro_endereco;
		$this->nome = $parametro_nome;
		$this->data = $parametro_data;
		$this->sexo = $parametro_sexo;
		$this->foto = $parametro_foto;
	}

	//Métodos get para retorno do valor da variável
	public function getCpf(){

		return $this->cpf;

	}
	public function getTelefone(){

		return $this->telefone;

	}
	public function getEndereco(){

		return $this->endereco;

	}
	public function getNome(){

		return $this->nome;

	}
	public function getData(){

		return $this->data;

	}
	public function getSexo(){

		return $this->sexo;

	}
	public function getFoto(){

		return $this->foto;

	}
}//Fim da classe//

//Instanciando a classe cliente e recebendo os valores do form index.html
$cliente = new Cliente($_POST['cpf'],$_POST['telefone'],$_POST['endereco'],$_POST['nome'],$_POST['data'],$_POST['sexo'],$_POST['foto']);

//Print dos valores para teste
echo 'Essa é seu cpf: '.$cliente->getLogin().' esse é seu telefone: '.$cliente->getTelefone().' esse é seu endereco: '.$cliente->getEndereco();


?>