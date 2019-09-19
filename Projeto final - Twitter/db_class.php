<?php
	
class db{

	//host
	private $host = 'localhost';
	//user
	private $user = 'root';
	//senha
	private $pass = '';
	//database
	private $database = 'twitter_clone';

	public function conectaDB(){

		//criar conexao
		$con = mysqli_connect($this->host,$this->user,$this->pass,$this->database);
		//comunicação aplicação com banco de dados
		mysqli_set_charset($con, 'utf8');

		return $con;

	}
}

?>