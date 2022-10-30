<?php
include_once("model.Conexion.php");

class ColaboradorModel extends Conexion{
	private $table;
	public function __construct(){
		parent::__construct();
		$this->table = 'colaboradores';
		$this->errorA = array();
	}

	public function save($args){
		$query = $this->createQuery($args);
		$insertar = $this->preparar($query);
		$insertar->execute($args);
	}

	public function allNumberRows(){
		$query = "select * from $this->table";
		$colaboradores = $this->preparar($query);
		$colaboradores->execute();
		return $colaboradores->rowCount();
	}

	public function dateNumberRows($query){
		$colaboradores = $this->preparar($query);
		$colaboradores->execute();
		return $colaboradores->rowCount();
	}

	public function dateFilter($query){
		$colaboradores = $this->preparar($query);
		$colaboradores->execute();
		return $colaboradores->fetchAll();
	}

	private function createQuery($array){
		$indices =  array_keys($array);
		$columnas  = implode(",", $indices);
		$values =  ":".implode(",:", $indices);
		return "insert into $this->table($columnas) values($values)"; 
	}
	private function bindArray($array,$stm){
		foreach ($array as $key => $value) {
			$stm->bindValue(":".$key,$value);
		}
		return $stm;
	}
}
?>