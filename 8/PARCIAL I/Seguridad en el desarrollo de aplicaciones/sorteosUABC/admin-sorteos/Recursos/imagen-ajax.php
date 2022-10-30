<?php 
include_once("models/model.Sorteos.php");
if (isset($_FILES["file"]))
{
    $file = $_FILES["file"];
    $nombre = time().$file["name"];
    $tipo = $file["type"];
    $ruta_provisional = $file["tmp_name"];
    $size = $file["size"];
    $dimensiones = getimagesize($ruta_provisional);
    $width = $dimensiones[0];
    $height = $dimensiones[1];
    $carpeta = "../../docs/";
    // Captura el id de la tabla
    $id = $_POST["id"];
    
    if ($tipo != 'image/jpg' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif')
    {
      echo '<div class="alert alert-danger">
                    <strong>Error!</strong> El archivo no es una imagen.
                </div>'; 
    }
    else if ($size > 2024*2024)
    {
      echo '<div class="alert alert-danger">
                    <strong>Error!</strong> el tamaño máximo permitido es un 2MB.
                </div>'; 
    }
    else if ($width > 1200 || $height > 600)
    {
        echo '<div class="alert alert-danger">
                    <strong>Error!</strong> la anchura y la altura maxima permitida es 600px.
                </div>'; 
    }
    else if($width < 100 || $height < 100)
    {
        echo '<div class="alert alert-danger">
                    <strong>Error!</strong> la anchura y la altura mínima permitida es 100px.
                </div>';
    }
    else
    {
        $src = $carpeta.$nombre;
        move_uploaded_file($ruta_provisional, $src);

        $imagen = new ObjectTable('sorteomagno');
        $imagen->actualizar('imagen',$nombre,$id); 

        echo '<div class="alert alert-success">
                    <strong>Bien hecho!</strong> Imagen cargada con exito!.
                </div>';
    }
}



 ?>