<?php 
include_once("models/model.Sorteos.php");
if (isset($_FILES["pdf"]))
{
    $file = $_FILES["pdf"];
    $nombre = time().'_'.$file["name"];
    $tipo = $file["type"];
    $ruta_provisional = $file["tmp_name"];
    $size = $file["size"];
    $dimensiones = getimagesize($ruta_provisional);
    $width = $dimensiones[0];
    $height = $dimensiones[1];
    $carpeta = "../../docs/";
    // Captura el id de la tabla
    $id = $_POST["id"];
    
    if ($tipo != 'application/pdf')
    {
      echo '<div class="alert alert-danger">
                    <strong>Error!</strong> El archivo no es un PDF.
                </div>'; 
    }
    else
    {
        $src = $carpeta.$nombre;
        move_uploaded_file($ruta_provisional, $src);

        $archivoExcel = new ObjectTable('sorteomagno');
        $archivoExcel->actualizar('archivopdf',$nombre,$id); 

        echo '<div class="alert alert-success">
                    <strong>Bien hecho!</strong> Archivo PDF cargado con exito!.
                </div>';
    }
}



 ?>