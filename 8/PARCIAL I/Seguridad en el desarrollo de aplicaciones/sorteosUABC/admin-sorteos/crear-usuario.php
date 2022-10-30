<?php
require_once("Recursos/sesion.class.php");

$sesion = new sesion();
$usuario = $sesion->get("usuario");

if( $usuario == false )
{   
    header("Location: index.php");      
}
else 
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Crear Usuario | Sorteos UABC</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
    input[type="file"] {
    display: none;
}
.custom-file-upload {
    color: #fff;
    background-color: #5cb85c;
    border-color: #4cae4c;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
    font-weight: normal;
}

</style>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include("modules/navigation.php") ?> 
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">
                            Crear Usuario
                        </h2>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="dashboard.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Crear Nuevo Usuario
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">
                        <h3>Ingresa los datos del nuevo usuario</h3>
                        <form method="post" action="Recursos/insertar-usuario.php">
                            <div class="form-group">
                                <label>Correo Electrónico</label>
                                <input id="nick" type="email" class="form-control" name="nick" required>
                                <div id="msgUsuario"></div>
                                <label>Contraseña</label>
                                <input type="text" class="form-control" name="pass" required>
                            </div>
                            <fieldset id="habilitar" disabled>
                                <button id="botonTexto" type="submit" class="btn btn-success">Crear Usuario</button>
                            </fieldset>
                            
                            
                        </form>
                        <div id="respuesta"></div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row" style="min-height:400px;">
                    
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Ajax Subir Imagen -->
    <script>
    $('#nick').focusout( function(){
        if($('#nick').val()!= ""){
            $.ajax({
                type: "POST",
                url: "Recursos/validar-usuario.php",
                data: "nick="+$('#nick').val(),
                beforeSend: function(){
                  $('#msgUsuario').html('Verificando');
                },
                success: function( respuesta ){
                  if(respuesta == '1'){
                    $('#msgUsuario').html('<div class="alert alert-success"><strong>Disponible!</strong> Puedes usar este usuario!.</div>');
                    $('#habilitar').prop('disabled', false);
                  }
                    
                  else{
                    $('#msgUsuario').html('<div class="alert alert-danger"><strong>No Disponible!</strong> El Usuario ya Existe!.</div>');
                    $("#habilitar").attr('disabled', 'disabled');
                    $("#habilitar").prop('disabled', true);
                  }
                    
                }
            });
        }
    });
    </script>
    
</body>

</html>
<?php } ?>
