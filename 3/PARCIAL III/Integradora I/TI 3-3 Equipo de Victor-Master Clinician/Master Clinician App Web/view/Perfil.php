<?php
	if(!isset($_COOKIE['sesion'])){
		header("location: ../view/index.php");
	}

	if($_COOKIE['sesion'] != "token"){
		header("location: ../view/index.php");
	}

	if(!isset($_REQUEST['usuario'])){
		header("location: ../view/index.php");
	}
	

?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>Perfil - Master Clinician</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	
    <!-- css -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="../plugins/cubeportfolio/css/cubeportfolio.min.css">
	<link href="../css/nivo-lightbox.css" rel="stylesheet" />
	<link href="../css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="../css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="../css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="../css/animate.css" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet">

	<!-- boxed bg -->
	<link id="bodybg" href="../bodybg/bg1.css" rel="stylesheet" type="text/css" />
	<!-- template skin -->
	<link id="t-colors" href="../color/blue.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<div id="wrapper">
	
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="top-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6">
					<p class="bold text-left">Horario de atencion: Lunes a Viernes. De 7:00 a.m. a 1:00 p.m. por la mañana y De 4:00 p.m. a 7:00 p.m. por la tarde.</p>
					</div>
					<div class="col-sm-6 col-md-6">
					<p class="bold text-right">Llámenos 534-6869</p>
					</div>
				</div>
			</div>
		</div>
        <div class="container navigation">
		
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img src="../img/logo.png" alt="" width="150" height="40" />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
			 	 <button type="submit" id="mod" class="btn btn-primary" >Modificar perfil</button>

							
				<li class="active"><button type="submit" id="cerrar" class="btn btn-primary" style="margin-right: 10px;">Cerrar sesión</button></li>

				  </ul>
				</li>
			  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
	</nav>	
<script>
$(document).ready(function(){
	$("#mod").click(function(){
		
		
		
		var correo = document.getElementById('email2').innerText;
		
		window.location.replace("modificar.php?usuario=" + correo);
	
	});
});


$(document).ready(function(){
	$("#cerrar").click(function(){	
		window.location.replace("index.php");
	});
});

</script>
  <!-- Section: intro -->
  <section id="intro" class="intro">
        <div class="intro-content">
            <div class="container">
                <div class="row">
                    <div class="col-xl">
                    <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                    </div>
                    <div class="col-xl">
                        <div class="form-wrapper">
                        <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
							<form name="formulario" method="post" action="javascript:send()">
                            <div class="panel panel-skin">
                            <div class="panel-heading">
                                    <h3 class="panel-title" ><span class="fa fa-pencil-square-o"></span> Citas agendadas de </h3><span></span><h3 class="panel-title" id="email2"><?php echo $_REQUEST['usuario']?></h3>
									
                                    </div>
                                    <div class="panel-body">
                                    	<form role="form" class="lead">
                                       		<div class="row">
                                            <div class="col-xs-12 col-sm-12 col-sm-12 col">
                                            <table class="table table-bordered">
												<tr>
													<td>Fecha</td>
													<td>Hora</td>
													<td>Paciente</td>
													<td>Correo Electronico</td>
													<td>Medico</td>	
												</tr>

												<?php 
												$conexion=mysqli_connect('localhost','root','','master_clinician');
												$correo_electronico = $_REQUEST['usuario'];	
												$sql="CALL web_sp_citalist('$correo_electronico')";
												$result=mysqli_query($conexion,$sql);
												while($mostrar=mysqli_fetch_array($result)){
												?>

												<tr>
													<td><?php echo $mostrar['fecha'] ?></td>
													<td><?php echo $mostrar['hora'] ?></td>
													<td><?php echo $mostrar['nombre_completo_paciente'] ?></td>
													<td><?php echo $mostrar['correo_electronico'];?></td>
													<td><?php echo $mostrar['nombre_completo'] ?></td>
												</tr>

													
											<?php 
											}
											
											?>
											
											</table>
										<form role="form" class="lead">	
                            		<div class="panel-body">
                                    

								</div>
								</div>
							</div>
							</form>
						</div>
					</div>
				</div>
			</section>


	<!-- /Section: boxes -->	
	<section id="callaction" class="home-section paddingtop-40">	
           <div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="callaction bg-gray">
							<div class="row">
								<div class="col-md-8">
									<div class="wow fadeInUp" data-wow-delay="0.1s">
									<div class="cta-text">
									<h3>¿Su cita programada no se muestra?</h3>
									<p>Actualice su lista de citas agendadas.</p>
									</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="wow lightSpeedIn" data-wow-delay="0.1s">
										<div class="cta-btn">
										<a href="" class="btn btn-skin btn-lg">Actualizar</a>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
	</section>	
	

	<!-- Section: services -->
    <section id="service" class="home-section nopadding paddingtop-60">

		<div class="container">

        <div class="row">
			<div class="col-sm-6 col-md-6">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
				</div>
            </div>
			<div class="col-sm-3 col-md-3">
				
					</div>


            </div>
				</div>
				<div class="wow fadeInRight" data-wow-delay="0.3s">
				<div class="service-box">
					<div class="service-icon">
						<span class="fa fa-user-md fa-3x"></span> 
					</div>

            </div>
			
        </div>		
		</div>
	</section>
	<!-- /Section: services -->
	

	<!-- Section: team -->
    <section id="doctor" class="home-section bg-gray paddingbot-60">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="section-heading text-center">
					<h2 class="h-bold">Médicos</h2>
					<p>Especialistas con experiencia, listos para atenderle</p>
					</div>
					</div>
					<div class="divider-short"></div>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
				
            <div id="filters-container" class="cbp-l-filters-alignLeft">
                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">Todos (<div class="cbp-filter-counter"></div>)</div>
                <div data-filter=".cardiologist" class="cbp-filter-item">Cardiológo (<div class="cbp-filter-counter"></div>)</div>
                <div data-filter=".psychiatrist" class="cbp-filter-item">Psiquiatra (<div class="cbp-filter-counter"></div>)</div>
                <div data-filter=".neurologist" class="cbp-filter-item">Neurológo(<div class="cbp-filter-counter"></div>)</div>
            </div>
		
            <div id="grid-container" class="cbp-l-grid-team">
                <ul>
                    <li class="cbp-item psychiatrist">
                        <a href="../doctors/member1.html" class="cbp-caption cbp-singlePage">
                            <div class="cbp-caption-defaultWrap">
                                <img src="../img/team/1.jpg" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-text">VER PERFIL</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="../doctors/member1.html" class="cbp-singlePage cbp-l-grid-team-name">Alice Grue</a>
                        <div class="cbp-l-grid-team-position">Psiquiatra</div>
                    </li>
                    <li class="cbp-item cardiologist">
                        <a href="../doctors/member2.html" class="cbp-caption cbp-singlePage">
                            <div class="cbp-caption-defaultWrap">
                                <img src="../img/team/2.jpg" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-text">VER PERFIL</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="../doctors/member2.html" class="cbp-singlePage cbp-l-grid-team-name">Joseph Murphy</a>
                        <div class="cbp-l-grid-team-position">Cardiologo</div>
                    </li>
                    <li class="cbp-item cardiologist">
                        <a href="../doctors/member3.html" class="cbp-caption cbp-singlePage">
                            <div class="cbp-caption-defaultWrap">
                                <img src="../img/team/3.jpg" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-text">VER PERFIL</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="../doctors/member3.html" class="cbp-singlePage cbp-l-grid-team-name">Alison Davis</a>
                        <div class="cbp-l-grid-team-position">Cardiologo</div>
                    </li>
                    <li class="cbp-item neurologist">
                        <a href="../doctors/member4.html" class="cbp-caption cbp-singlePage">
                            <div class="cbp-caption-defaultWrap">
                                <img src="../img/team/4.jpg" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-text">VER PERFIL</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="../doctors/member4.html" class="cbp-singlePage cbp-l-grid-team-name">Adam Taylor</a>
                        <div class="cbp-l-grid-team-position">Neurologo</div>
                    </li>

                </ul>
            </div>
			</div>
			</div>
		</div>

	</section>
	<!-- /Section: team -->

	
		
	<!-- Section: works -->
    <section id="facilities" class="home-section paddingbot-60">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="section-heading text-center">
					<h2 class="h-bold">Instalaciones</h2>
					<p>Instalaciones de primera, totalmente renovadas</p>
					</div>
					</div>
					<div class="divider-short"></div>
				</div>
			</div>
		</div>

<div class="container">
			<div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12" >
					<div class="wow bounceInUp" data-wow-delay="0.2s">
                    <div id="owl-works" class="owl-carousel">
                        <div class="item"><a href="../img/photo/1.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg"><img src="../img/photo/1.jpg" class="img-responsive" alt="img"></a></div>
                        <div class="item"><a href="../img/photo/2.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/2@2x.jpg"><img src="../img/photo/2.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="../img/photo/3.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/3@2x.jpg"><img src="../img/photo/3.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="../img/photo/4.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/4@2x.jpg"><img src="../img/photo/4.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="../img/photo/5.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/5@2x.jpg"><img src="../img/photo/5.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="../img/photo/6.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/6@2x.jpg"><img src="../img/photo/6.jpg" class="img-responsive " alt="img"></a></div>
                    </div>
					</div>
                </div>
            </div>
		</div>
	</section>

	<footer>
	
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Sobre Master Clinician</h5>
						<p>
						Master Clinician es una web app creada por los alumnos Meza Alvarez Juan y Galvan Covarrubias Victor Manuel
						</p>
					</div>
					</div>
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Información</h5>
						<ul>
							<li><a href="#">Inicio</a></li>
							<li><a href="#">Servicios</a></li>
							<li><a href="#">Médicos</a></li>
							<li><a href="#">Instalaciones</a></li>
						</ul>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Contacto</h5>
						<p>
						Póngase en contacto con nosotros
						</p>
						<ul>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
								</span> Lunes - Viernes, 10am a 1pm, 4pm a 7pm
							</li>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span> Llámenos al 534 6869
							</li>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
								</span> contacto@masterclinician.com
							</li>

						</ul>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Ubicación</h5>
						<p>Avenida Hidalgo #2111, col. Residencias, San Luis Río Colorado, Sonora</p>		
						
					</div>
					</div>
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Follow us</h5>
						<ul class="company-social">
								<li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li class="social-vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
								<li class="social-dribble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
						</ul>
					</div>
					</div>
				</div>
			</div>	
		</div>
		<div class="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInLeft" data-wow-delay="0.1s">
					<div class="text-left">
					<p>&copy;Copyright 2020 - TI3-3 UTSLRC. Todos los derechos reservados.</p>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInRight" data-wow-delay="0.1s">
					<div class="text-right">
					</div>
					</div>
				</div>
			</div>	
		</div>
		</div>
	</footer>

</div>


<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	<!-- Core JavaScript Files -->
    <script src="../js/jquery.min.js"></script>	 
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.easing.min.js"></script>
	<script src="../js/wow.min.js"></script>
	<script src="../js/jquery.scrollTo.js"></script>
	<script src="../js/jquery.appear.js"></script>
	<script src="../js/stellar.js"></script>
	<script src="../plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/nivo-lightbox.min.js"></script>
    <script src="../js/custom.js"></script>


</body>
</html>