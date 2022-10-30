<?php
include_once("model.Conexion.php");
class ObjectTable extends Conexion{
	function __construct($tabla){
		parent::__construct();
		$this->tabla = $tabla;
		 $this->errorA = array();
	}

	//Actualizar: este metodo se encarga de actualizar una columna especifica en la tabla especificada en el constructor, en el renglon indicado anidiendole el valor de $valor
	function actualizar($columna,$valor,$id){
		$query = "update ".$this->tabla." set  $columna = :$columna where id = $id";
 		$consulta = $this->preparar($query);
 		$consulta->bindValue(":$columna",$valor);
 		$consulta->execute();
 		$this->errorInfo = $consulta->errorInfo();
	}

	//Libera un renglón para poder crear uno nuevo
	function liberar($id) {
		$query = "update ".$this->tabla."  set estado = 2  where id = $id";
   		$com = $this->preparar($query);
   		$com->execute();
	}

	//Lee el renglón indicado
	function leer($id){
		$query = "select * from ".$this->tabla." where id = $id";
		$comunicado = $this->preparar($query);
		$comunicado->execute();
		return $comunicado->fetchObject();
	}

	// Comprueba si existe el usuario
	function leerUsuario($nick){
		$query = "SELECT * FROM ".$this->tabla." WHERE nick=:nick";
		$comunicado = $this->preparar($query);
		$comunicado->execute(array(":nick" => $nick));
		return $comunicado->rowCount();
	}

	// Comprobar Usuario
	function comprobarUsuario($usuario){
		// $query = "select contrasenia from ".$this->tabla." WHERE nick=soporte@guruc.com.mx";
		// $comunicado = $this->preparar($query);
		// $comunicado->execute();
		// return $comunicado->fetchObject();

		$query = "SELECT * FROM ".$this->tabla."";
		$select = $this->preparar($query);

		$total_column = $select->columnCount();

		for ($counter = 0; $counter < $total_column; $counter ++) {
		    $meta = $select->getColumnMeta($counter);
		    $column[] = $usuario;
		}
	}

	//Crear Usuario
	function crearUsuario($nombre, $nick, $contrasenia){
		$query = "INSERT INTO ".$this->tabla." (nombre, nick, contrasenia) VALUES (:nombre, :nick, :contrasenia)";
		$insertar = $this->preparar($query);
		$insertar->execute( array(":nombre" => $nombre, ":nick" => $nick, ":contrasenia" => $contrasenia) );
	}

	//Retornar Ultimo ID insertado
	function leerUltimoUsuario(){
		$user = "SELECT * FROM ".$this->tabla." WHERE id = LAST_INSERT_ID()";
		$datos = $this->preparar($user);
		$datos->execute();
		$retorno = $datos->fetchObject();
		return $retorno;
	}

    function crear(){
	 $consulta = "SELECT * FROM  ".$this->tabla." where status =1 ";
	 $consulta = $this->preparar($consulta);
	 $consulta->execute();
	 $this->errorA[]  = $consulta->errorInfo();
	 $l = $consulta->fetchObject();
	 if(!$l){
	 $query = "insert into ".$this->tabla."(status) values(1)";
	 $comunicado = $this->preparar($query);
	 $comunicado->execute();
	 $c = "SELECT * FROM  ".$this->tabla." WHERE id = LAST_INSERT_ID()";
	 $con = $this->preparar($c);
	 $con->execute();
	  $this->errorA[] = $con->errorInfo();
	 $retorno = $con->fetchObject();
	 }else{
		$retorno = $l; 
	 }

	 return $retorno;
	}
	function crearQuery($array){
		$indices =  array_keys($array);
		$columnas  = implode(",", $indices);
		$values =  ":".implode(",:", $indices);
		return "insert into $this->tabla($columnas) values($values)"; 
	}
	function bindArray($array,$stm){
		foreach ($array as $key => $value) {
			$stm->bindValue(":".$key,$value);
		}
		return $stm;
	}
	function delete($id){
		$retorno = $this->leer($id);
		$query = "delete from $this->tabla where id = $id";
		$com = $this->preparar($query);
   		$com->execute();
   		 $this->errorA[] = $com->errorInfo();
   		return $retorno;
	}
}
?>