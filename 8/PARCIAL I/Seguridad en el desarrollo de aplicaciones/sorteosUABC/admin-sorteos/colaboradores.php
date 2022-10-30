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

    <title>Colaboradores | Sorteos UABC</title>

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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
                            Solicitudes de Colaboración
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="dashboard.php">Menu Principal</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Lista de Colaboradores
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 20px;">
                   
                        <div class="col-lg-4">
                             <input type="text" class="form-control" name="start_date" id="start_date" placeholder="Fecha Inicial">
                        </div>
                        <div class="col-lg-4">
                             <input type="text" class="form-control" name="final_date" id="final_date" placeholder="Fecha Final">
                        </div>
                        <div class="col-lg-4">
                            <input type="button" name="search" id="search" value="Filtrar" class="btn btn-success" />
                        </div>
                  
                </div>
                <div class="row">
                    <div class="col-lg-12">
                       <table class="table table-bordered table-hover tablesorter" id="colaboradores_table">
                        <thead>
                            <tr>
                                <th class="header">Nombre</th>
                                <th class="header">Teléfono</th>
                                <th class="header">Correo</th>
                                <th class="header">Ciudad</th>
                                <th class="header">C. P.</th>
                                <th class="header">Sexo</th>
                                <th class="header">Edad</th>
                                <th class="header">No Boletos</th>
                                <th class="header">Fecha</th>
                            </tr>
                        </thead>
                        <!-- 
                        <tbody>
                            <tr>
                                <td>Jose Ramon</td>
                                <td>5656565</td>
                                <td>jose@guruc.com.mx</td>
                                <td>Mexicali</td>
                                <td>23456</td>
                                <td>Masculino</td>
                                <td>33</td>
                                <td>5</td>
                                <td>2019-04-04</td>
                            </tr>
                            <tr>
                                <td>Juan</td>
                                <td>5656565</td>
                                <td>jose@guruc.com.mx</td>
                                <td>Mexicali</td>
                                <td>23456</td>
                                <td>Masculino</td>
                                <td>33</td>
                                <td>5</td>
                                <td>2019-04-04</td>
                            </tr>

                        </tbody> -->
                        </table>
                    </div>
                </div>
                <!-- /.row -->

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
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        $(document).ready(function() {
            $('#colaboradores_table_test').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'pdf'
                ]
            } );
        } );
    </script>
    <script>
        $( function() {
          $( "#start_date" ).datepicker(
            {
                todayBtn:'linked',
                closeText: 'Cerrar',
                prevText: '<Ant',
                nextText: 'Sig>',
                currentText: 'Hoy',
                monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
                dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
                dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
                weekHeader: 'Sm',
                dateFormat: 'yy-mm-dd',
                firstDay: 1,
                isRTL: false,
                yearSuffix: '',
                autoclose: true
            });
        } );
    </script>
    <script>
        $( function() {
          $( "#final_date" ).datepicker(
            {
                todayBtn:'linked',
                closeText: 'Cerrar',
                prevText: '<Ant',
                nextText: 'Sig>',
                currentText: 'Hoy',
                monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
                dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
                dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
                weekHeader: 'Sm',
                dateFormat: 'yy-mm-dd',
                firstDay: 1,
                isRTL: false,
                yearSuffix: '',
                autoclose: true,
                draw: true
            });
        } );
    </script>

    <script type="text/javascript" language="javascript" >
    $(document).ready(function(){
     
     fetch_data('no');

     function fetch_data(is_date_search, start_date='', final_date='')
     {
      var dataTable = $('#colaboradores_table').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf'
        ],
       "processing" : true,
       
       "ajax" : {
        url:"Recursos/get-colaboradores.php",
        type:"POST",
        data:{
         is_date_search: is_date_search, 
         start_date: start_date, 
         final_date: final_date
        },
       }
      });
     }

     $('#search').click(function(){
      var start_date = $('#start_date').val();
      var final_date = $('#final_date').val();
      if(start_date != '' && final_date !='')
      {
       $('#colaboradores_table').DataTable().destroy();
       fetch_data('yes', start_date, final_date);
      }
      else
      {
       alert("Both Date is Required");
      }
     }); 
     
    });
    </script>
</body>

</html>
<?php } ?>