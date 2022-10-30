<?php 
include_once("models/model.Sorteos.php");
if (isset($_POST["estado"]))
{   
     function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    
    $estado = test_input($_POST["estado"]);
    
    // Captura el id de la tabla
    $id = $_POST["id"];
    
    $actualizarTexto = new ObjectTable('activar');
    $actualizarTexto->actualizar('estado',$estado,$id); 


    
}
?>