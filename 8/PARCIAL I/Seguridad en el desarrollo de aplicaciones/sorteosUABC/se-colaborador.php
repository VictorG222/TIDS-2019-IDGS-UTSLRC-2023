<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/images/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/images/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Se un colaborador | Sorteos UABC</title>
  <meta name="description" content="¡Vende, apoya y gana! Sorteos UABC se crea con la finalidad de obtener recursos para la UABC">
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
    <link href="assets/css/slider.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">
    <link href="assets/css/jquery-ui.css" rel="stylesheet">
    <link href="assets/css/jquery.timepicker.css" rel="stylesheet">
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
<!-- CONTACTO
================================== -->
<?php include("modules/forms/se-colaborador-2019.php") ?>
<div class="element-magic" id="section-1">
    <?php include("modules/footer-section.php") ?>
</div>
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
  <!-- <script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script> -->
  <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
  <script src="assets/js/material-kit.js" type="text/javascript"></script>
  <script src="assets/js/slider.js" type="text/javascript"></script>
  <!-- Final Counter
    ========================================================= -->
    <script src="assets/jquery.countdown-2.2.0/jquery.countdown.min.js" type="text/javascript"></script>
  <!-- App -->
  <script src="assets/js/app.js" type="text/javascript"></script>
  <script src="assets/js/gen_validatorv4.js"></script>
  <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/jquery.timepicker.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- Magic Scroll Inicializadores
    ================================= -->
    <script>
    // bummer but as of now img tags need a sequential id
    $(document).ready(function () {
        var controller = new ScrollMagic.Controller();
        $( '.element-magic' ).each(function( index, elem ) {
          var imageID = "#section-" + index;
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
   <script>
    // add the rule here
    $.validator.addMethod("valueNotEquals", function(value, element, arg){
      return arg !== value;
    }, "Value must not equal arg.");
    $("#colaborador_form").validate({
      rules: {
        nombre: {
          required: true,
          minlength: 4
        },
        phone: {
            required: true,
            number: true
        },
        email: {
            required: true,
            email: true
        },
        ciudad: {
            required: true
        },
        codigopostal:{
            required: true,
            minlength: 5,
            maxlength: 6,
            number: true
        },
        sexo: { valueNotEquals: "Selecciona" },
        edad: {
          required: true,
          number: true
        },
        numero_de_boletos: { valueNotEquals: "Selecciona" }
      },
      messages: {
        nombre: {
          required: "El nombre es requerido",
          minlength: jQuery.validator.format("Al menos {0} caracteres requeridos!")
        },
        phone: {
          required: "Necesitamos su teléfono para contactarlo",
          number: "Por favor ingrese numeros sin espacios"
        },
        email: {
          required: "Necesitamos su dirección de correo electrónico para contactarlo",
          email: "Su dirección de correo electrónico debe estar en el formato de nombre@dominio.com"
        },
        ciudad: {
          required: "Ciudad Requerida"
        },
        codigopostal:{
            required: "Codigo Postal Requerido",
            minlength: "Al menos {0} caracteres requeridos!",
            maxlength: "Maximo {0} caracteres!",
            number: "Por favor ingrese numeros sin espacios"
        },
        sexo: { valueNotEquals: "Selecciona una opcion!" },
        edad: {
          required: "La Edad es Requerida!",
          number: "Por favor ingrese numeros sin espacios"
        },
        numero_de_boletos: { valueNotEquals: "Selecciona una opcion!" }
      }
    });
    </script>
</html>
