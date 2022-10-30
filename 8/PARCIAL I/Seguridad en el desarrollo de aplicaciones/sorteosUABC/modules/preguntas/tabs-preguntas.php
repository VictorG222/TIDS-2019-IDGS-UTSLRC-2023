<section class="tabs-sorteos mask-section element-magic" id="section-0" style="margin-top:100px;">
<!-- Put image mask here -->
<!-- <img src="assets/images/sorteos/mask-yellow.png" class="img-responsive mask-image">	 -->
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h1 class="title">Si tienes dudas revisa<br> esta información</h1>
			</div>
		</div>
	</div>
	<div class="container tabs-section">
		<div class="row">
			<!-- Tabs on Plain Card
			======================================= -->
			<div class="col-sm-4 text-center">
				<a data-toggle="tab" href="#informacion" class="active only-tab">
					<img src="assets/images/preguntas/faq-colaboradores.png" class="img-circle img-responsive">
					<h5>Colaboradores</h5>
					<button class="btn btn-yellow btn-round" role="button">Ver más <i class="fa fa-chevron-right" aria-hidden="true"></i></button> 
				</a>
			</div>
			<div class="col-sm-4 text-center">
				<a data-toggle="tab" href="#premios" class="only-tab">
					<img src="assets/images/preguntas/faq-estudiantes.png" class="img-circle img-responsive">
					<h5>Estudiantes</h5>
					<button class="btn btn-yellow btn-round" role="button">Ver más <i class="fa fa-chevron-right" aria-hidden="true"></i></button> 
				</a> 
			</div>
			<div class="col-sm-4 text-center">
				<a data-toggle="tab" href="#ganadores" class="only-tab">
					<img src="assets/images/preguntas/faq-boletos.png" class="img-circle img-responsive">
					<h5>Boletos</h5>
					<button class="btn btn-yellow btn-round" role="button">Ver más <i class="fa fa-chevron-right" aria-hidden="true"></i></button> 
				</a> 
			</div>
			<!-- Tabs End
			======================================= -->
		</div>
	</div>
</section>
<section class="tab-sorteos-content mask-section-2 element-magic" id="section-1">
<!-- Put image mask here -->
<img src="assets/images/mask-white-lg.png" class="img-responsive mask-image-2">	
	<div class="container">
	<div class="row">
			<div class="tab-content">
			<!-- Tab Informacion
			================================== -->
			    <div id="informacion" class="tab-pane fade in active">
				  	<div class="row">	
				  		<div class="col-sm-12 col-lg-12 info-content-tab-3">
				  			<?php include("modules/preguntas/preguntas-colaboradores.php") ?>
				  		</div>
				  	</div>
			  </div>
			  <!-- Tab Premios
			  ================================== -->
			  <div id="premios" class="tab-pane fade">
				  	<div class="row">
				  		<div class="col-sm-12 col-lg-12 info-content-tab-3">
				  			<?php include("modules/preguntas/preguntas-estudiantes.php") ?>
				  		</div>
					</div>
			  </div>
			  <div id="ganadores" class="tab-pane fade">
				    <div class="row">
					  	<div class="col-sm-12 col-lg-12 info-content-tab-3">
				  			<?php include("modules/preguntas/preguntas-boletos.php") ?>
				  		</div>
				  	</div>
			  </div>
			</div>
		</div>
	</div>
</section>
