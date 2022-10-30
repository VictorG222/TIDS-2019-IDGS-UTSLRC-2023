<?php

class Operaciones 
{
    
    public function matemáticas(){
    //operaciones
      $a = 5;
      $b = 9;
      $c = 8;

      $respuesta = ($a * $b)-(15+$b-$c);
      return $respuesta;
    }

    public function cicloWhile(){
    //operaciones
    $x = 1;

        while($x <= 100) {
        echo "El numero es: $x <br>";
        $x++;
        };
    }
    

    public function numeroMayor(){
    //operaciones
    $a = 5;
    $b = 6;
    if ($a>$b) {
        return $respuesta = "El numero a es mayor";
      } else {
        return $respuesta = "El numero b es mayor";
      }
    }
	
}

$obj = new Operaciones();  //instanciamos la clase y obtenemos el objeto
$resultado = $obj->matemáticas(); //llama a una funcion de la clase
echo $resultado;    
echo "<br>";

$resultado = $obj->cicloWhile(); //llama a una funcion de la clase
echo $resultado;  
echo "<br>" ; 

$resultado = $obj->numeroMayor(); //llama a una funcion de la clase
echo $resultado;    
echo "<br>";