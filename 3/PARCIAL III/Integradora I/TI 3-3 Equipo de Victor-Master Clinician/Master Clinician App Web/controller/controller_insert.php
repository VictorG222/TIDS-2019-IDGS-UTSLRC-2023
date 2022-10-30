<?php

if ($_SERVER['REQUEST_METHOD']=="POST"){

    $nombre_completo = $_POST['nombre_completo'];
    $fecha_de_nacimiento = $_POST['fecha_de_nacimiento'];
    $genero = $_POST['genero'];
    $tipo_de_sangre = $_POST['tipo_de_sangre'];
    $peso = $_POST['peso'];
    $estatura = $_POST['estatura'];
    $direccion = $_POST['direccion'];
    $correo_electronico = $_POST['correo_electronico'];
    $contraseña = $_POST['contraseña'];
    $telefono_de_casa = $_POST['telefono_de_casa'];
    $telefono_movil = $_POST['telefono_movil'];
    $enfermedades = $_POST['enfermedades'];
    $alergias = $_POST['alergias'];
    $cirugias_y_accidentes = $_POST['cirugias_y_accidentes'];

    require_once("../model/claseconeccion.php");
    $obj = new Conection();
    $resultado = $obj->insertPaciente($nombre_completo, $fecha_de_nacimiento, $genero, $tipo_de_sangre, $peso, $estatura, $direccion, $correo_electronico, $contraseña, $telefono_de_casa, $telefono_movil, $enfermedades, $alergias, $cirugias_y_accidentes);
    echo json_encode($resultado);
}   