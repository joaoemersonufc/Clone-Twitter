<?php

require_once('db_class.php');

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);

$objt_db = new db();
$link = $objt_db->conectaDB();

$sql = "insert into usuarios (usuario,email,senha) values('$usuario','$email','$senha')";

//executar query
if(mysqli_query($link,$sql)){
	echo 'Usuário criado com sucesso';
}else
	echo 'Erro ao criar usuario';


?>