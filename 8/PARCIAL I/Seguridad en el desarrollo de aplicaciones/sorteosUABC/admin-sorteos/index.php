<?php
    require_once("Recursos/models/model.Sorteos.php");
    require_once("Recursos/sesion.class.php");

    $sesion = new sesion();
    
    if( isset($_POST["iniciar"]) )
    {
        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
        
        $usuario = test_input($_POST["usuario"]);
        $password = md5( test_input( $_POST["contrasenia"] ) );
        $mensaje_error = false;
        
        if(validarUsuario($usuario,$password) == true)
        {           
            $sesion->set("usuario",$usuario);
            
            header("location: dashboard.php");
        }
        else 
        {
            $mensaje_error = "Verifica tu nombre de usuario y contrasena";
        }
    }
    
    function validarUsuario($usuario, $password)
    {
         $conexion = new mysqli("localhost","adminsorteos","L*z_qYTDXeiQ","adminsorteos");
        $consulta = "select contrasenia from usuario where nick = '$usuario';";
        
        $result = $conexion->query($consulta);
        
        if($result->num_rows > 0)
        {
            $fila = $result->fetch_assoc();
            if( strcmp($password,$fila["contrasenia"]) == 0 )
                return true;                        
            else                    
                return false;
        }
        else
                return false;
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin | Sorteos UABC</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="background:#fff;">

    <div class="container">

      <form class="form-signin" name="frmLogin" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <img src="Recursos/uabc-logo.png" style="max-width:250px;">
        
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="usuario">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="contrasenia">
        <button class="btn btn-lg btn-primary btn-block" type="submit" name ="iniciar">Iniciar Sesión</button>
        <?php if (isset($mensaje_error)) : ?>
            <div class="alert alert-danger">
                <strong>Error!</strong> <?php echo $mensaje_error; ?>
            </div>
        <?php endif ; ?>
      </form>
     

    </div> <!-- /container -->


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
