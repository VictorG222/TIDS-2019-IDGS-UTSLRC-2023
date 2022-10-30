<?php //include("modules/m-analytics.php");?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Sorteos UABC</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- CSS
  ================================================== -->
  <link rel="stylesheet" href="cimarronsources/stylesheets/base.css">
  <link rel="stylesheet" href="cimarronsources/stylesheets/skeleton.css">
  <link rel="stylesheet" href="cimarronsources/stylesheets/layout.css">
  <link rel="stylesheet" href="cimarronsources/stylesheets/flexslider.css" type="text/css">
  <link rel="stylesheet" href="cimarronsources/stylesheets/jquery.dataTables.css" type="text/css">
<!-- JS
  ================================================== -->
  <script src="cimarronsources/js/jquery.min.js"></script>
  <script src="cimarronsources/js/jquery.flexslider.js"></script>
  <script src="cimarronsources/js/jquery.dataTables.min.js"></script>

  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- Favicons
  ================================================== -->
  <link rel="shortcut icon" href="cimarronsources/images/favicon.ico">

<!-- Google Analytics
    ====================================== -->
    <?php include("modules/google-analytics.php") ?>
</head>
<body class="fondo-cimarron" >
<!-- Primary Page Layout
================================================== -->

<div class="container">
  <?php include("cimarronsources/modules/m-sorteo-cimarron.php");?>
</div>

<div class="container margin-footer">
  <?php include("cimarronsources/modules/footer-cimarron.php");?>
</div>
<!-- End Document
================================================== -->

<!-- Google Remarketing
======================== -->
<?php include("modules/google-remarketing.php") ?>
</body>
<script language="javascript">
<!--
    $(function (activar_pestanya) {
			var tabContainerssup = $('div.contenido-tab > div');

	    $('div.tab a').click(function () {
        	tabContainerssup.hide().filter(this.hash).show();
        	$('a').removeClass('active');
        	$(this).addClass('active');

        	return false;
	    }).filter(':first').click();
	});
//-->
</script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<script>
$(document).ready(function() {
    $('#tabla1').DataTable();
} );
</script>
<script>
$(document).ready(function() {
    $('#tabla2').DataTable();
} );
</script>
</html>