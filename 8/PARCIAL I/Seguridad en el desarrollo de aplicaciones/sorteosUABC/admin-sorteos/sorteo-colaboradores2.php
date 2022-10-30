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

    <title>Segundo Sorteo Colaboradores | Sorteos UABC</title>

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
                        <h1 class="page-header">
                            Segundo Sorteo Colaboradores
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="dashboard.php">Menu Principal</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Administrar Segundo Sorteo Colaboradores
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">
                        <h2><i class="fa fa-file-image-o" aria-hidden="true"></i> Imagen de encabezado</h2>
                        <div class="row">
                            <div class="col-lg-6">
                                <?php 
                                include_once("Recursos/models/model.Sorteos.php");
                                $sorteo = new ObjectTable('sorteomagno');
                                $sorteoMagno = $sorteo->leer("3"); 
                                ?>
                                <img src="../docs/<?php echo $sorteoMagno->imagen; ?>" class="img-responsive" style="max-width:200px;">
                                <label>Subir Imagen <small>de 600px X 200px</small></label>
                            </div>
                        </div>
                        <form method="post" id="formularioImagen" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="custom-file-upload">
                                    <input type="file" name="file" />
                                    <i class="fa fa-cloud-upload"></i> Actualizar Imagen
                                </label>
                                <input type="hidden" name="id" value="3">
                            </div>
                        </form>
                        <div id="respuesta"></div>
                        <hr>

                        <h2><i class="fa fa-file-excel-o" aria-hidden="true"></i> Excel</h2>
                        <div style="margin-bottom:10px;">
                            <a href="../docs/<?php echo $sorteoMagno->archivoexcel; ?>" style="color:#006400; font-weight:bold;"><i class="fa fa-file-excel-o" aria-hidden="true"></i> <?php echo $sorteoMagno->archivoexcel; ?></a>
                        </div>
                        
                        <form method="post" id="formularioExcel" enctype="multipart/form-data">
                            <div class="form-group">
                               <label class="custom-file-upload">
                                    <input type="file" name="excel" />
                                    <i class="fa fa-cloud-upload"></i> Actualizar Archivo Excel
                                </label>
                                <input type="hidden" name="id" value="3">
                            </div>
                        </form>
                        <div id="respuestaExcel"></div>

                    </div>
                    <div class="col-lg-6">
                        <h2><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</h2>
                        <div style="margin-bottom:10px;">
                            <a href="../docs/<?php echo $sorteoMagno->archivopdf; ?>" style="color:#DC143C; font-weight:bold;"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> <?php echo $sorteoMagno->archivopdf; ?></a>
                        </div>
                        <form method="post" id="formularioPdf" enctype="multipart/form-data">
                            <div class="form-group">
                               <label class="custom-file-upload">
                                    <input type="file" name="pdf" />
                                    <i class="fa fa-cloud-upload"></i> Actualizar Archivo PDF
                                </label>
                                <input type="hidden" name="id" value="3">
                            </div>
                        </form>
                        <div id="respuestaPdf"></div>
                        <hr>
                        <h2>Texto</h2>
                        <form method="post" id="formularioTexto">
                            <div class="form-group">
                                <label>Actualiza la informacion del pie de pagina</label>
                                <textarea class="form-control" rows="3" name="texto"><?php echo $sorteoMagno->texto; ?></textarea>
                                <input type="hidden" name="id" value="3">
                            </div>
                            <button id="botonTexto" type="submit" class="btn btn-success">Actualizar Texto</button>
                        </form>
                        <div id="respuestaTexto"></div>
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
     $(function(){
        $("input[name='file']").on("change", function(){
            var formData = new FormData($("#formularioImagen")[0]);
            var ruta = "Recursos/imagen-ajax.php";
            $.ajax({
                url: ruta,
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(datos)
                {
                    $("#respuesta").html(datos);
                    setTimeout(function(){
                       window.location.reload(1);
                    }, 1000);
                }
            });
        });
     });
    </script>
    <!-- Ajax Subir Excel -->
    <script>
     $(function(){
        $("input[name='excel']").on("change", function(){
            var formData = new FormData($("#formularioExcel")[0]);
            var ruta = "Recursos/excel-ajax.php";
            $.ajax({
                url: ruta,
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(datosExcel)
                {
                    $("#respuestaExcel").html(datosExcel);
                    setTimeout(function(){
                       window.location.reload(1);
                    }, 1000);
                }
            });
        });
     });
    </script>
     <!-- Ajax Subir PDF -->
    <script>
     $(function(){
        $("input[name='pdf']").on("change", function(){
            var formData = new FormData($("#formularioPdf")[0]);
            var ruta = "Recursos/pdf-ajax.php";
            $.ajax({
                url: ruta,
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(datosPdf)
                {
                    $("#respuestaPdf").html(datosPdf);
                    setTimeout(function(){
                       window.location.reload(1);
                    }, 1000);
                }
            });
        });
     });
    </script>
    <!-- Ajax Actualizar Texto -->
    <!-- Ajax Actualizar Texto -->
    <script>
     $(function(){
        $("textarea[name='texto']").on("change", function(){
            var formData = new FormData($("#formularioTexto")[0]);
            var ruta = "Recursos/texto-ajax.php";
            $.ajax({
                url: ruta,
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(datosTexto)
                {
                    $("#respuestaTexto").html(datosTexto); 
                    setTimeout(function(){
                       window.location.reload(1);
                    }, 1000);
                    //console.log(datosTexto);
                }
            });
        });
     });
    </script>
</body>

</html>
<?php } ?>
