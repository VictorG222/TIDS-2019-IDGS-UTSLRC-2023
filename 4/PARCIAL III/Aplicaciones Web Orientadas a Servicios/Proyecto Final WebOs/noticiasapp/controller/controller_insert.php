<?php

if ($_SERVER['REQUEST_METHOD']=="POST"){

    $nombre_completo = $_POST['nombre_completo'];
    $correo_electronico = $_POST['correo_electronico'];
    $contraseña = $_POST['contraseña'];

    require_once("../model/claseconeccion.php");
    $obj = new Conection();
    $resultado = $obj->insertUsuario($nombre_completo, $correo_electronico, $contraseña);
    echo json_encode($resultado);
}   