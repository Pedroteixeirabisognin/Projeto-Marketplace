<?php

/**
* 
*/
//Nome da classe
class Area
{
	//Não permite editar as variáves fora da classe

  	private $nome;

  	//Método construtor, não precisa colocar o mesmo nome como no java
	function __construct($parametro_nome){
		

		$this->nome = $parametro_nome;

	}

	//Métodos get para retorno do valor da variável

	public function getNome(){

		return $this->nome;

	}

}//Fim da classe//

//Instanciando a classe area e recebendo os valores do form index.html
$area = new Area($_POST['nome']);

//Print dos valores para teste
echo 'Essa é seu nome: '.$area->getNome();


?>