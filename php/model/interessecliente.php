<?php

/**
* 
*/
//Nome da classe
class Interesse_Cliente
{
	//Não permite editar as variáves fora da classe

  	private $id_cliente;
  	private $id_area;
  	//Método construtor, não precisa colocar o mesmo id_area como no java
	function __construct($parametro_id_cliente,$parametro_id_area){
		

		$this->id_cliente = $parametro_id_cliente;
		$this->id_area = $parametro_id_area;

	}

	//Métodos get para retorno do valor da variável

	public function getId_cliente(){

		return $this->id_cliente;

	}
	public function getId_area(){

		return $this->id_area;

	}
}//Fim da classe//

//Instanciando a classe id_area e recebendo os valores do form index.html
$id_area = new Interesse_Cliente($_POST['id_cliente'],$_POST['id_area']);

//Print dos valores para teste
echo 'Essa é seu id_area: '.$id_area->getId_area();


?>