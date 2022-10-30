<?php
include_once("admin-sorteos/Recursos/models/model.Sorteos.php");
$primer = new ObjectTable('activar');
$estadoPrimer = $primer->leer("5"); 
?>
<?php if ($estadoPrimer->estado == "desactivado") : ?>
    <script type="text/javascript" >
      window.location.href ="https://www.sorteosuabc.mx";
    </script>
<?php endif ; ?>
<!doctype html>

<html lang="en">

<head>

	<meta charset="utf-8" />

	<link rel="apple-touch-icon" sizes="76x76" href="assets/images/apple-icon.png">

	<link rel="icon" type="image/png" href="assets/images/favicon.png">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />



	<title>Ganadores del Tercer Sorteo de Colaboradores | Sorteos UABC</title>
    <meta name="description" content="Sorteos UABC se crea con la finalidad de obtener recursos para la UABC, reflejados en Becas para los estudiantes y equipo para sus actividades">
    <meta name="keywords" content="sorteosuabc, sorteos uabc, sorteos universidad autonoma de baja california, sorteos uabc ganadores, uabc sorteos">
    <meta name="author" content="Sorteos UABC">


	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />



	<!--     Fonts and icons     -->

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />



	<!-- CSS Files -->

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <link href="assets/css/material-kit.css" rel="stylesheet"/>

    <!-- Custom CSS Styles -->

    <link href="assets/css/layout.css" rel="stylesheet"/>

    <!-- Font Awesome -->

    <link href="assets/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

    <!-- Google Font -->

    <link href="https://fonts.googleapis.com/css?family=Anton|Lato" rel="stylesheet">

   	<!-- Data Tables -->

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
<!-- Google Analytics
    ====================================== -->
    <?php include("modules/google-analytics.php") ?>
</head>



<body>

<!-- NAV MENU

================================== -->

<?php include("modules/header.php") ?>



<!-- SORTEO MAGNO

================================== -->
<?php 
include_once("admin-sorteos/Recursos/models/model.Sorteos.php");
$sorteo = new ObjectTable('sorteomagno');
$sorteoTercer = $sorteo->leer("4"); 
?>
<?php include("modules/ganadores/tercer-sorteo.php") ?>



<?php include("modules/footer-section.php") ?>

<!-- Google Remarketing
======================== -->
<?php include("modules/google-remarketing.php") ?>
</body>



	<!--   Core JS Files   -->

	<script src="assets/js/jquery.min.js" type="text/javascript"></script>

	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<script src="assets/js/material.min.js"></script>



	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->

	<script src="assets/js/nouislider.min.js" type="text/javascript"></script>



	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->

	<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>



	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->

	<script src="assets/js/material-kit.js" type="text/javascript"></script>

	<!-- <script src="assets/js/slider.js" type="text/javascript"></script> -->

    <!-- Final Counter
    ========================================================= -->
    <script src="assets/jquery.countdown-2.2.0/jquery.countdown.min.js" type="text/javascript"></script>

	<!-- App -->

	<script src="assets/js/app.js" type="text/javascript"></script>

	<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">

      $(document).ready(function(){

          $('#myTable').DataTable({

            "language": {

                "search":         "Buscar:",

                "lengthMenu":     "Mostrar _MENU_ Entradas",

                "infoEmpty":      "Mostrando 0 a 0 de 0 Entradas",

                "info":           "Mostrando _START_ a _END_ de _TOTAL_ Entradas",

                "paginate": {

                    "first":      "First",

                    "last":       "Last",

                    "next":       "Siguiente",

                    "previous":   "Anterior"

                },

            }

          });

          

      });

    </script>



</html>

