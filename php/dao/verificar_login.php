<?php
	
	session_start();
	
	include_once("../controler/conexao.php"); 
	include_once("../model/conta.php"); 


  	$login = $_POST['login_verifica']; 
  	$senha = $_POST['senha_verifica']; 
  

	$db = new conexao();
	$link = $db->Conecta_Mysql();

	//SELECIONA CONTA
	function Select_Conta($login,$senha,$link){

	$query = "select * from conta where login = '$login' and senha = '$senha' ";	

	$result = mysqli_query($link,$query);

	return $result;
	}

	//Retorna os valores da função
	$resultado_id = Select_Conta($login,$senha,$link);


	//Verifica se tem algo em resultado_id
	if ($resultado_id) {
		
		$dados_conta = mysqli_fetch_array($resultado_id);
		if (isset($dados_conta['login'])) {
			
			echo "Usuário Logado!";

			$_SESSION['login'] = $dados_conta['login'];
			header('Location: ../../index_logado.php');
		}else{

			header('Location: ../../index.php?erro=1');

		}

	}
	else{

		echo "Login inválido";
	
	}



?>