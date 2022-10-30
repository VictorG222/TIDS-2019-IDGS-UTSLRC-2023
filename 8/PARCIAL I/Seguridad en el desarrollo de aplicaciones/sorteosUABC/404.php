<!doctype html>

<html lang="en">

<head>

  <meta charset="utf-8" />

  <link rel="apple-touch-icon" sizes="76x76" href="assets/images/apple-icon.png">

  <link rel="icon" type="image/png" href="assets/images/favicon.png">

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />



  <title>404 | Sorteos UABC</title>



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

    <link href="assets/css/slider.css" rel="stylesheet"/>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">

     <!-- Google Analytics
    ====================================== -->
    <?php include("modules/google-analytics.php") ?>
    
    <!-- Scripts
    =========================== -->
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
</head>



<body>

<!-- NAV MENU

================================== -->

<?php include("modules/header.php") ?>

<section style="padding-top:200px;">
    <div class="container">
          <div class="row text-center">
              <h1 class="title">404</h1>
              <h2 class="subtitle">Lo sentimos! No Encontramos la Pagina que estas buscando</h2>
              <h3 class="text">Puedes regresar al inicio dando click al siguente enlace:</h3>
              <a href="https://www.sorteosuabc.mx" class="btn btn-lg btn-yellow">Regresar al Inicio</a>
          </div>
      </div>
  </section>

<!-- Google Remarketing
======================== -->
<?php include("modules/google-remarketing.php") ?>
</body>



  <!--   Core JS Files   -->

  <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

  <script src="assets/js/material.min.js"></script>



  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->

  <script src="assets/js/nouislider.min.js" type="text/javascript"></script>



  <!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->

  <script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>



  <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->

  <script src="assets/js/material-kit.js" type="text/javascript"></script>

  <script src="assets/js/slider.js" type="text/javascript"></script>

  <!-- App -->

  <script src="assets/js/app.js" type="text/javascript"></script>

  <!-- Magic Scroll Inicializadores
  ================================= -->
  <script>
  // bummer but as of now img tags need a sequential id
  $(document).ready(function () {
      var controller = new ScrollMagic.Controller();

      $( '.element-magic' ).each(function( index, elem ) {
        
        var imageID = "#home-" + index;
        
        if (index == 0 || index == 1 || index == 2 || index == 3 || index == 6){
          var animate = "animate-up"
        }
        else if(index == 4){
          var animate = "animate-left"
        } 
        else {
          var animate = "animate-right"
        }
        
        new ScrollMagic.Scene({
                  duration: 0,
                  offset: 100,
                  triggerElement: elem,
                  triggerHook: "onEnter"        
              })
              .setClassToggle(imageID, animate)
              .addTo(controller)
        
      });

     
  });
  </script>

</html>

