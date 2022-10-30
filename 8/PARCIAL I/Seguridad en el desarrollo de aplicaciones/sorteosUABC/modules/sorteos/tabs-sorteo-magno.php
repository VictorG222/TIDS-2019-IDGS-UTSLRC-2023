<section class="tabs-sorteos mask-section element-magic" id="section-0">
<!-- Put image mask here -->
<!-- <img src="assets/images/sorteos/mask-yellow.png" class="img-responsive mask-image">	 -->
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h1 class="title">86 Sorteo Magno de la Universidad Autónoma de Baja California</h1>
			</div>
		</div>
	</div>
	<div class="container tabs-section">
		<div class="row">
			<!-- Tabs on Plain Card
			======================================= -->
			<?php $enlaceMagno = $menu->leer("2"); ?>
			<?php if($enlaceMagno->estado != "activado") : ?>
			<div class="col-sm-2"></div>
			<?php else : ?>
            <?php endif ; ?>
			<div class="col-sm-4 text-center">
				<a data-toggle="tab" href="#informacion" class="active only-tab">
					<img src="assets/images/sorteos/info-image-tab.png" class="img-circle img-responsive">
					<h5>Información</h5>
					<button class="btn btn-yellow btn-round" role="button">Ver más <i class="fa fa-chevron-right" aria-hidden="true"></i></button> 
				</a>
			</div>
			<div class="col-sm-4 text-center">
				<a data-toggle="tab" href="#premios" class="only-tab">
					<img src="assets/images/sorteos/premios.gif" class="img-circle img-responsive">
					<h5>Premios</h5>
					<button class="btn btn-yellow btn-round" role="button">Ver más <i class="fa fa-chevron-right" aria-hidden="true"></i></button> 
				</a> 
			</div>
            <?php if($enlaceMagno->estado == "activado") : ?>
			<div class="col-sm-4 text-center">
				<a href="ganadores-sorteo-magno.php" class="only-tab">
					<img src="assets/images/sorteos/ganadores-image-tab.png" class="img-circle img-responsive">
					<h5>Ganadores</h5>
					<button class="btn btn-yellow btn-round" role="button">Ver más <i class="fa fa-chevron-right" aria-hidden="true"></i></button> 
				</a> 
			</div>
			<?php else : ?>
            <?php endif ; ?>
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
			    		<h2>86 Sorteo Magno</h2>
			    		<p>
			    			<strong>Permiso SEGOB</strong> 20190427PS00. 
			    			<br><br>
							<strong>Vigencia del permiso:</strong> 25 de noviembre de 2019 al 4 de junio de 2020.
							<br><br>
							<strong>Emisión:</strong> 285,000 boletos
							<br><br>
							<strong>Valor del premio principal:</strong> $22´000,000.00 m.n. 
							<br><br>
							<strong>Total de premios:</strong> $33´781,350.00 m.n. 
							<br><br>
							<strong>Modalidad del sorteo:</strong> Se sortean un total 775 premios al público y 45 premios adicionales a vendedores por medio de una formación de números de mayor a menor y un sistema informático con venta de boletos. 
							<br><br>
							El sorteo es el 4 de junio de 2020 y los resultados se publicarán el domingo 7 de junio de 2020 en los periódicos La Voz de la Frontera y El Mexicano. A partir de la misma fecha pueden visualizarse también en <strong>www.sorteosuabc.mx</strong>.
							<br><br>
							<strong>Valor total de la emisión:</strong> $128´250,000.00 pesos m.n.
			    		</p>
			  		</div>
			  		<div class="col-sm-2 col-lg-3"></div>
			  	</div>
			  </div>
			  <!-- Tab Premios
			  ================================== -->
			  <div id="premios" class="tab-pane fade">
			  		<?php include("modules/sorteos/premios/premios-magno.php") ?>
			  </div>
			  <div id="menu2" class="tab-pane fade">
			    <div class="row">
				  	<div class="col-sm-2 col-lg-2"></div>
			  		<div class="col-sm-8 col-lg-8 info-content-tab-3">
			  			<h1>Lista Oficial de Ganadores</h1>
			    		<p>
			    			<a href=""> link 1 etc..</a>
			    		</p>
			  		</div>
			  		<div class="col-sm-2 col-lg-2"></div>
			  	</div>
			  </div>
			</div>
		</div>
	</div>
</section>
