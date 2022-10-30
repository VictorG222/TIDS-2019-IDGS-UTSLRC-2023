<div class="row">

				  	<div class="col-sm-2 col-lg-2"></div>

			  		<div class="col-sm-8 col-lg-8 info-content-tab-3 text-center">

			  			<h1>Lista Oficial de Ganadores</h1>

			    		<br>

			    		<?php 
						include_once("admin-sorteos/Recursos/models/model.Sorteos.php");
						$menu = new ObjectTable('activar');
						 ?>
						 <?php $enlacePrimer = $menu->leer("3"); ?>
			              <?php $enlaceSegundo = $menu->leer("4"); ?>
			              <?php $enlaceTercer = $menu->leer("5"); ?>


			            <?php if($enlacePrimer->estado == "activado") : ?>
			    		<p class="text-middle">1er. Sorteo de Colaboradores </p>

			    		<a href="primer-sorteo-colaboradores.php" class="btn btn-green btn-round" role="button">Ver más <i class="fa fa-chevron-right" aria-hidden="true"></i></a> 
			    		<?php else : ?>
              			<?php endif ; ?>


              			<?php if($enlaceSegundo->estado == "activado") : ?>
			    		<p class="text-middle">2do. Sorteo de Colaboradores</p>

			    		<a href="segundo-sorteo-colaboradores.php" class="btn btn-green btn-round" role="button">Ver más <i class="fa fa-chevron-right" aria-hidden="true"></i></a> 
			    		<?php else : ?>
              			<?php endif ; ?>

              			<?php if($enlaceTercer->estado == "activado") : ?>
			    		<p class="text-middle">3er. Sorteo de Colaboradores</p>

			    		<a href="tercer-sorteo-colaboradores.php" class="btn btn-green btn-round" role="button">Ver más <i class="fa fa-chevron-right" aria-hidden="true"></i></a> 
			    		<?php else : ?>
              			<?php endif ; ?>

			  		</div>

			  		<div class="col-sm-2 col-lg-2"></div>

			  	</div>