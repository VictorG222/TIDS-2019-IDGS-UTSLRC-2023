<?php

if ($_SERVER['REQUEST_METHOD']=="POST"){

    $correo_electronico = $_POST['correo_electronico'];
    $contraseña = $_POST['contraseña'];
 
    require_once("../model/claseconeccion.php");
    $obj = new Conection();
    $obj = $obj->login($correo_electronico,$contraseña);

    echo json_encode(["estado"=>$obj]);
}