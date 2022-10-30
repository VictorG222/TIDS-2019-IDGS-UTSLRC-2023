<?php 
include_once("models/model.Sorteos.php");
if (isset($_FILES["excel"]))
{
    $file = $_FILES["excel"];
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
    
    if ($tipo != 'application/vnd.ms-excel' && $tipo != 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet')
    {
      echo '<div class="alert alert-danger">
                    <strong>Error!</strong> El archivo no es un Excel.
                </div>'; 
    }
    else
    {
        $src = $carpeta.$nombre;
        move_uploaded_file($ruta_provisional, $src);

        $archivoExcel = new ObjectTable('sorteomagno');
        $archivoExcel->actualizar('archivoexcel',$nombre,$id); 

        echo '<div class="alert alert-success">
                    <strong>Bien hecho!</strong> Archivo Excel cargado con exito!.
                </div>';
    }
}



 ?>