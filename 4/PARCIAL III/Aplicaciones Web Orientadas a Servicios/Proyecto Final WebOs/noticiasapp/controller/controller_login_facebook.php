<?php

if ($_SERVER['REQUEST_METHOD']=="POST"){

    $correo_electronico = $_POST['correo_electronico'];
 
    require_once("../model/claseconeccion.php");
    $obj = new Conection();
    $obj = $obj->loginFacebook($correo_electronico,);

    echo json_encode($obj);
}