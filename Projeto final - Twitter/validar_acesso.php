<?php

session_start();

require_once('db_class.php');

$usuario = $_POST['usuario'];
$senha = md5($_POST['senha']);

$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";

$objtDB = new db();
$link = $objtDB->conectaDB();

$resultado_id = mysqli_query($link, $sql);

if($resultado_id){
	//Recupera o id e os dados do usuário no BD
	$dados_usuario = mysqli_fetch_array($resultado_id);

	if(isset($dados_usuario['usuario'])){

		$_SESSION['usuario'] = $dados_usuario['usuario'];
		$_SESSION['email'] = $dados_usuario['email'];

		header('Location: home.php');
	}else {
		header('Location: index.php?erro=1');
	}
}else{
	echo 'Erro na execução da consulta, entre em contato com um ADM';
}

?>