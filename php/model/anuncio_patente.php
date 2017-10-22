<?php

/**
* 
*/
//Descricao da classe
class Anuncio_Patente
{
	//Não permite editar as variáves fora da classe
  	private $titulo; 
  	private $valor; 
  	private $telefone; 
  	private $descricao;
  	private $num_registro;
  	private $img1;
  	private $img2;
   	private $img3;

  	//Método construtor, não precisa colocar o mesmo descricao como no java
	function __construct($parametro_titulo,$parametro_valor,$parametro_telefone,$parametro_descricao,$parametro_num_registro,$parametro_img1,$parametro_img2,$parametro_img3){
		
		$this->titulo = $parametro_titulo;
		$this->valor = $parametro_valor;
		$this->telefone = $parametro_telefone;
		$this->descricao = $parametro_descricao;
		$this->num_registro = $parametro_num_registro;
		$this->img1 = $parametro_img1;
		$this->img2 = $parametro_img2;
		$this->img3 = $parametro_img3;
	}

	//Métodos get para retorno do valor da variável
	public function getTitulo(){

		return $this->titulo;

	}
	public function getValor(){

		return $this->valor;

	}
	public function getTelefone(){

		return $this->telefone;

	}
	public function getDescricao(){

		return $this->descricao;

	}
	public function getNum_registro(){

		return $this->num_registro;

	}
	public function getImg1(){

		return $this->img1;

	}
	public function getImg2(){

		return $this->img2;

	}
	public function getImg3(){

		return $this->img3;

	}
}//Fim da classe//

//Instanciando a classe anuncio_patente e recebendo os valores do form index.html
$anuncio_patente = new Anuncio_Patente($_POST['titulo'],$_POST['valor'],$_POST['telefone'],$_POST['descricao'],$_POST['num_registro'],$_POST['img1'],$_POST['img2'],$_POST['img3']);

//Print dos valores para teste
echo 'Essa é seu titulo: '.$anuncio_patente->getLogin().' esse é seu valor: '.$anuncio_patente->getValor().' esse é seu telefone: '.$anuncio_patente->getTelefone();


?>