<?php

	include_once("../controler/conexao.php"); 
	include_once("../model/conta.php"); 

  	$login = $_POST['login']; 
  	$senha = $_POST['senha']; 
  	$email = $_POST['email']; 

	$db=new conexao();
	$link = $db->Conecta_Mysql();





	//INSERE CONTA
	function Insert_Conta($parametro_login,$parametro_senha,$parametro_email,$link){

	$query = "insert into conta(login,senha,email) values ('$parametro_login','$parametro_senha','$parametro_email')";	

	mysqli_query($link,$query);

	}
	
	//SELECIONA CONTA
	function Select_Conta($parametro_login,$parametro_senha,$parametro_email,$link){

	$query = "select * from conta where login = '$login' and senha = '$senha' ";	

	mysqli_query($link,$query);

	}



	//DELETA CONTA
	function Delete_Conta($parametro_login,$parametro_senha,$parametro_email,$link){

	$query = "delete into conta where '$parametro_login' = login, '$parametro_senha' = senha, '$parametro_email' = email";	

	mysqli_query($link,$query);

	}






	//INSERE	
	if ($op=='1') {


	Insert_Conta($login,$senha,$email,$link);
	
	}

	//SELECIONA
	elseif ($op=='2') {


	Select_Conta($login,$senha,$email,$link);

	}

	//DELETA
	elseif ($op=='3') {
	
	Delete_Conta($login,$senha,$email,$link);
	
	}

?>