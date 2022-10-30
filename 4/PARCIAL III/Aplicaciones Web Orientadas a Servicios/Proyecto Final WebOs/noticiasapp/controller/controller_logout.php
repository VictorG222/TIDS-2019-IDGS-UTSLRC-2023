<?php

if ($_SERVER['REQUEST_METHOD']=="POST"){

    $nombre = $_POST['nombre'];
 
    require_once("../model/claseconeccion.php");
    $obj = new Conection();
    $obj = $obj->logout($nombre);

    echo json_encode($obj);
}