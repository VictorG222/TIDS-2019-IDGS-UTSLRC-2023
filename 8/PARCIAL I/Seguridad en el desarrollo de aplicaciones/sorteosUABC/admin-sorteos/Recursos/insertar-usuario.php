<?php 
include_once("models/model.Sorteos.php");
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
    
$nombre = test_input($_POST["nick"]);
$nick = $nombre;
$contrasenia = md5(test_input($_POST["pass"]));

$insertar = new ObjectTable('usuario');
$insertar->crearUsuario($nombre, $nick, $contrasenia);
$datos = $insertar->leerUltimoUsuario(); 

$datos->nombre;
header('Location: ../usuario-creado.php?usuario='.$datos->nombre.'');


 ?>