<?php
class Conection{

    public $driver;
    public $host;
    public $user;
    public $paswword;
    public $database;
    public $conn;


    public function __construct(){

        $this->driver = "mysql";
        $this->host = "localhost";
        $this->user = "root";
        $this->password = "root";
        $this->database = "noticias";
        
        
        $this->get_conection();

    }

    public function get_conection(){
        $this->conn = new PDO($this->driver.":"."host=".$this->host.";"."dbname=".$this->database,$this->user,$this->password);


        if (!$this->conn){

            echo "Error al conectar";
        }
        else{
            //echo "conexion establecida";
            
        }
    } 

    
    public function insertUsuario($nombre_completo, $correo_electronico, $contraseña){

        $sql = "CALL web_sp_insertusuario(?,?,?)";
        $statement = $this->conn->prepare($sql);
        $statement->bindParam(1,$nombre_completo);
        $statement->bindParam(2,$correo_electronico);
        $statement->bindParam(3,$contraseña);

        if($statement->execute()){
            return "Registro Completado";
        }
        else{
            return "Error en el registro";
        }
    }
    


    function login($correo_electronico,$contraseña){

        $sql = "CALL web_sp_login(?,?)";
        $statement = $this->conn->prepare($sql);
        $statement->bindParam(1,$correo_electronico);
        $statement->bindParam(2,$contraseña);

        
        if($statement->execute()){

            $count=$statement->rowCount();

            if($count){
                $cookie_name = "sesion";
                $cookie_value = "token";
                setcookie($cookie_name, $cookie_value, time() + 7200, "/");
                return true;
            }
            else{
                return false;
                
            }
        }
        
    }

    
    function loginFacebook($correo_electronico){

        $sql = "CALL web_sp_loginfacebook(?)";
        $statement = $this->conn->prepare($sql);
        $statement->bindParam(1,$correo_electronico);

        
        if($statement->execute()){

            $count=$statement->rowCount();

            if($count){
                $cookie_name = "sesion";
                $cookie_value = "token";
                setcookie($cookie_name, $cookie_value, time() + 7200, "/");
                return true;
            }
            else{
                return false;
                
            }
        }
        
    }

    

  

}
?>