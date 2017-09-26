<?php


 $login = $_POST['login'];

 $senha = $_POST['senha'];

 $email = $_POST['email'];


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



?>