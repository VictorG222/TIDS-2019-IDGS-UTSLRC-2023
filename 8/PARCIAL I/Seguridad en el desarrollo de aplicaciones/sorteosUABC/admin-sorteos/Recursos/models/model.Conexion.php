<?php
class Conexion{
function __construct($host="localhost",$database="adminsorteos",$usuario="root",$password="",$puerto=3306){
	try{
	$dsn = "mysql:host=$host;dbname=$database";
	$this->pdo = new PDO($dsn, $usuario, $password);
	$config = $this->preparar("SET NAMES 'utf8'");
	$config->execute();
	}catch(Exception $e){
			var_dump($e); 
	}
	
}
function preparar($query){
 return $this->pdo->prepare($query);
}
}
?>