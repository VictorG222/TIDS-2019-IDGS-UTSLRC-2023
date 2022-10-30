<section class="tabs-sorteos mask-section element-magic" id="section-0">
<!-- Put image mask here -->
<!-- <img src="assets/images/sorteos/mask-yellow.png" class="img-responsive mask-image">	 -->
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h1 class="title">Sorteos de Colaboradores del 86 Sorteo Magno de la Universidad Autónoma de Baja California</h1>
			</div>
		</div>
	</div>
	<div class="container tabs-section">
		<div class="row">
			<!-- Tabs on Plain Card
			======================================= -->
			<div class="col-sm-6 text-center">
				<a data-toggle="tab" href="#informacion" class="active only-tab">
					<img src="assets/images/sorteos/info-image-tab.png" class="img-circle img-responsive">
					<h5>Información</h5>
					<button class="btn btn-yellow btn-round" role="button">Ver más <i class="fa fa-chevron-right" aria-hidden="true"></i></button> 
				</a>
			</div>
			<div class="col-sm-6 text-center">
				<a data-toggle="tab" href="#premios" class="only-tab">
					<img src="assets/images/sorteos/premios.gif" class="img-circle img-responsive">
					<h5>Premios</h5>
					<button class="btn btn-yellow btn-round" role="button">Ver más <i class="fa fa-chevron-right" aria-hidden="true"></i></button> 
				</a> 
			</div>
			<!-- <div class="col-sm-4 text-center">
				<a data-toggle="tab" href="#ganadores" class="only-tab">
					<img src="assets/images/sorteos/ganadores-image-tab.png" class="img-circle img-responsive">
					<h5>Ganadores</h5>
					<button class="btn btn-yellow btn-round" role="button">Ver más <i class="fa fa-chevron-right" aria-hidden="true"></i></button> 
				</a> 
			</div> -->
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
				  	<div class="col-sm-2 col-lg-3"></div>
			  		<div class="col-sm-8 col-lg-6 info-content">
			  			<h1>Información</h1>
			    		<h2>Sorteo Colaboradores</h2>
			    		<p>
			    			<strong>Permiso SEGOB:</strong> 20190425PS03. 
			    			<br><br>
							<strong>Vigencia:</strong> del 25 de noviembre de 2019 al 4 de junio de 2020. 
							<br><br>
							<strong>Valor del premio principal:</strong> $300,000.00 m.n. 
							<br><br>
							<strong>Total de premios:</strong> $3´251,000.00 pesos m.n. 
							<br><br>
							<strong>Modalidad del Sorteo:</strong> Se sortean un total 665 premios mediante la extracción de los talones de una tómbola.
							<br><br>
							<strong>Realización 1er. Sorteo, 23 de abril de 2020 en Tijuana; 
							<br>
							2º Sorteo, 21 de mayo de 2020 en mexicali
							<br>
							3er. Sorteo, 4 de junio de 2020 en Mexicali. 
							</strong>
							<br><br>
							Los resultados se publicarán el 23 de abril, 24 de mayo y 7 de junio de 2020 respectivamente, en <strong>www.sorteosuabc.mx</strong> y en diarios de la región <strong>(La voz de la Frontera y El Mexicano)</strong>. 
			    		</p>
			  		</div>
			  		<div class="col-sm-2 col-lg-3"></div>
			  	</div>
			  </div>
			  <!-- Tab Premios
			  ================================== -->
			  <div id="premios" class="tab-pane fade">
			  	<?php include("modules/sorteos/premios/premios-colaboradores.php") ?>
			  </div>
			  <div id="ganadores" class="tab-pane fade">
			    	<?php include("modules/sorteos/ganadores/ganadores-colaboradores.php") ?>
			  </div>
			</div>
		</div>
	</div>
</section>
