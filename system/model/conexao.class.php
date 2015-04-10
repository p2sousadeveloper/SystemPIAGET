<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
class Conexao
{
	private $host = 'localhost';
	private $user = 'root';
	private $pass = '';
	private $database = 'piaget';
	public $con;

	
	function conectar()
	{
		$con = new PDO("mysql:host=".$host.";dbname=".$database, $user , $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")); 
		
		return $con;
	}
}

?>