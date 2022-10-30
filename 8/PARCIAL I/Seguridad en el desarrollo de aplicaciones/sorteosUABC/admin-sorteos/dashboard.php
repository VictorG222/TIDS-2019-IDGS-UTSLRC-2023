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

    <title>Menu principal de ganadores | Sorteos UABC</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Switch CSS -->
    <link href="css/bootstrap-switch.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                        <h1 class="page-header">
                            Menu principal de ganadores <small>Sorteos UABC</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Menu principal de ganadores
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Bienvenido! <?php echo $sesion->get("usuario"); ?></strong> Ahora puedes administrar la seccion de los Ganadores del Sorteo Magno y Sorteo Colaboradores
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        Activar o desactivar enlace Ganadores en el menu de sorteos
                        <input type="checkbox" name="menu" checked>
                        <br><br>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                     <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-trophy fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                              
                                        <div>Sorteo Magno</div>
                                    </div>
                                </div>
                            </div>
                            <a href="sorteo-magno.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Administrar</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                            <div class="panel-footer">
                                <input type="checkbox" name="magno" checked>
                            </div>
                        
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-trophy fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                           
                                        <div>Primer Sorteo Colaboradores</div>
                                    </div>
                                </div>
                            </div>
                            <a href="sorteo-colaboradores.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Administrar</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                            <div class="panel-footer">
                                <input type="checkbox" name="primer" checked>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-trophy fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                           
                                        <div>Segundo Sorteo Colaboradores</div>
                                    </div>
                                </div>
                            </div>
                            <a href="sorteo-colaboradores2.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Administrar</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                            <div class="panel-footer">
                                <input type="checkbox" name="segundo" checked>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-trophy fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                           
                                        <div>Tercer Sorteo Colaboradores</div>
                                    </div>
                                </div>
                            </div>
                            <a href="sorteo-colaboradores3.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Administrar</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                            <div class="panel-footer">
                                <input type="checkbox" name="tercer" checked>
                            </div>
                        </div>
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

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
    <script src="js/bootstrap-switch.js"></script>
    <?php
    include_once("Recursos/models/model.Sorteos.php");
    $menu = new ObjectTable('activar');
    ?>

    <!-- Menu Enlace Ganadores
    //////////////////////////////////////////////////// -->
    <?php
    $enlaceMenu = $menu->leer("1"); 
    if ($enlaceMenu->estado == "activado") {
    ?>
    <script>
        var estadoMenu = true;
    </script>
        
    <?php
    }
    if ($enlaceMenu->estado == "desactivado") {
    ?>
    <script>
        var estadoMenu = false;
    </script>
        
    <?php
    }
    ?>
    <script>
    $("[name='menu']").bootstrapSwitch({
          onText : "Activado",
          offText : "Desactivado",
          state : estadoMenu,
        });

    $('input[name="menu"]').on('switchChange.bootstrapSwitch', function(event, state) {
        if (state == true) {
            estadoMenu = "activado";
            var id = "1";
            $.ajax({
                url: 'Recursos/switch-estado.php',
                type: 'POST',
                data: {estado:estadoMenu, id:id},
                success: function(data){
                    estadoMenu = data;
                }
            });
        }
        if (state == false) {
            estadoMenu = "desactivado";
            var id = "1";
            $.ajax({
                url: 'Recursos/switch-estado.php',
                type: 'POST',
                data: {estado:estadoMenu, id:id},
                success: function(data){
                    estadoMenu = data;
                }
            });
        }
    });
    </script>

    <!-- Magno
    //////////////////////////////////////////////////// -->
    <?php
    $enlaceMagno = $menu->leer("2"); 
    if ($enlaceMagno->estado == "activado") {
    ?>
    <script>
        var estadoMagno = true;
    </script>
        
    <?php
    }
    if ($enlaceMagno->estado == "desactivado") {
    ?>
    <script>
        var estadoMagno = false;
    </script>
        
    <?php
    }
    ?>
    <script>
    $("[name='magno']").bootstrapSwitch({
          onText : "Activado",
          offText : "Desactivado",
          state : estadoMagno,
        });

    $('input[name="magno"]').on('switchChange.bootstrapSwitch', function(event, state) {
        if (state == true) {
            estadoMagno = "activado";
            var id = "2";
            $.ajax({
                url: 'Recursos/switch-estado.php',
                type: 'POST',
                data: {estado:estadoMagno, id:id},
                success: function(data){
                    estadoMagno = data;
                }
            });
        }
        if (state == false) {
            estadoMagno = "desactivado";
            var id = "2";
            $.ajax({
                url: 'Recursos/switch-estado.php',
                type: 'POST',
                data: {estado:estadoMagno, id:id},
                success: function(data){
                    estadoMagno = data;
                }
            });
        }
    });
    </script>

    <!-- Primer Colaboradores
    //////////////////////////////////////////////////// -->
    <?php
    $enlacePrimer = $menu->leer("3"); 
    if ($enlacePrimer->estado == "activado") {
    ?>
    <script>
        var estadoPrimer = true;
    </script>
        
    <?php
    }
    if ($enlacePrimer->estado == "desactivado") {
    ?>
    <script>
        var estadoPrimer = false;
    </script>
        
    <?php
    }
    ?>
    <script>
    $("[name='primer']").bootstrapSwitch({
          onText : "Activado",
          offText : "Desactivado",
          state : estadoPrimer,
        });

    $('input[name="primer"]').on('switchChange.bootstrapSwitch', function(event, state) {
        if (state == true) {
            estadoPrimer = "activado";
            var id = "3";
            $.ajax({
                url: 'Recursos/switch-estado.php',
                type: 'POST',
                data: {estado:estadoPrimer, id:id},
                success: function(data){
                    estadoPrimer = data;
                }
            });
        }
        if (state == false) {
            estadoPrimer = "desactivado";
            var id = "3";
            $.ajax({
                url: 'Recursos/switch-estado.php',
                type: 'POST',
                data: {estado:estadoPrimer, id:id},
                success: function(data){
                    estadoPrimer = data;
                }
            });
        }
    });
    </script>

    <!-- Segundo Colaboradores
    //////////////////////////////////////////////////// -->
    <?php
    $enlaceSegundo = $menu->leer("4"); 
    if ($enlaceSegundo->estado == "activado") {
    ?>
    <script>
        var estadoSegundo = true;
    </script>
        
    <?php
    }
    if ($enlaceSegundo->estado == "desactivado") {
    ?>
    <script>
        var estadoSegundo = false;
    </script>
        
    <?php
    }
    ?>
    <script>
    $("[name='segundo']").bootstrapSwitch({
          onText : "Activado",
          offText : "Desactivado",
          state : estadoSegundo,
        });

    $('input[name="segundo"]').on('switchChange.bootstrapSwitch', function(event, state) {
        if (state == true) {
            estadoSegundo = "activado";
            var id = "4";
            $.ajax({
                url: 'Recursos/switch-estado.php',
                type: 'POST',
                data: {estado:estadoSegundo, id:id},
                success: function(data){
                    estadoSegundo = data;
                }
            });
        }
        if (state == false) {
            estadoSegundo = "desactivado";
            var id = "4";
            $.ajax({
                url: 'Recursos/switch-estado.php',
                type: 'POST',
                data: {estado:estadoSegundo, id:id},
                success: function(data){
                    estadoSegundo = data;
                }
            });
        }
    });
    </script>

    <!-- Tercer Colaboradores
    //////////////////////////////////////////////////// -->
    <?php
    $enlaceTercer = $menu->leer("5"); 
    if ($enlaceTercer->estado == "activado") {
    ?>
    <script>
        var estadoTercer = true;
    </script>
        
    <?php
    }
    if ($enlaceTercer->estado == "desactivado") {
    ?>
    <script>
        var estadoTercer = false;
    </script>
        
    <?php
    }
    ?>
    <script>
    $("[name='tercer']").bootstrapSwitch({
          onText : "Activado",
          offText : "Desactivado",
          state : estadoTercer,
        });

    $('input[name="tercer"]').on('switchChange.bootstrapSwitch', function(event, state) {
        if (state == true) {
            estadoTercer = "activado";
            var id = "5";
            $.ajax({
                url: 'Recursos/switch-estado.php',
                type: 'POST',
                data: {estado:estadoTercer, id:id},
                success: function(data){
                    estadoTercer = data;
                }
            });
        }
        if (state == false) {
            estadoTercer = "desactivado";
            var id = "5";
            $.ajax({
                url: 'Recursos/switch-estado.php',
                type: 'POST',
                data: {estado:estadoTercer, id:id},
                success: function(data){
                    estadoTercer = data;
                }
            });
        }
    });
    </script>




</body>

</html>
<?php } ?>
