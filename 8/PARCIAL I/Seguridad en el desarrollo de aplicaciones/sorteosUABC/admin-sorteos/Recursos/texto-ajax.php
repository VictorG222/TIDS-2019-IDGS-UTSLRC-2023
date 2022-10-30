<?php 
include_once("models/model.Sorteos.php");
if (isset($_POST["texto"]))
{   
     function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    
    $texto = test_input($_POST["texto"]);
    
    // Captura el id de la tabla
    $id = $_POST["id"];
    
    $actualizarTexto = new ObjectTable('sorteomagno');
    $actualizarTexto->actualizar('texto',$texto,$id); 

    echo '<div class="alert alert-success">
                <strong>Bien hecho!</strong> Actualizaste el texto!.
            </div>';
    
}
?>