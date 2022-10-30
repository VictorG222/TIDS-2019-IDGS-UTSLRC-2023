<?php 
include_once("models/model.Sorteos.php");
   
$validar = new ObjectTable('usuario');
$nick = $_POST["nick"];
$resultado = $validar->leerUsuario($nick); 

if( $resultado > 0){
  echo 0;
}
else{
  echo 1;
}
       
?>