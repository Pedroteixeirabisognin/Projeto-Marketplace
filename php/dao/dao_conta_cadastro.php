<?php
 
 	include_once("../controler/conexao.php"); 
 	include_once("../model/conta.php"); 
 
   	$login = $_POST['login']; 
   	$senha = $_POST['senha']; 
   	$email = $_POST['email']; 
 
 	$db=new conexao();
 	$link = $db->Conecta_Mysql();
 
 
 	Insert_Conta($login,$senha,$email,$link);
 
 
 	//INSERE CONTA
 	function Insert_Conta($parametro_login,$parametro_senha,$parametro_email,$link){
 
 		$query = "insert into conta(login,senha,email) values ('$parametro_login','$parametro_senha','$parametro_email')";	
 
 		if(mysqli_query($link,$query)){
 
 			echo "Usuário registrado com sucesso!";
 		}
 		else{
 
 			echo "Falha ao registrar o usuário!";
 		}
 	}
 
 
 ?>