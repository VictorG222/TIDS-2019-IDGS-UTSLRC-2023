<section class="ganadores-section">

	<div class="container">

		<div class="row text-center">

			<!-- <h1 class="title">Segundo Sorteo de Colaboradores</h1> -->

			<img src="<?php echo $url_website; ?>docs/<?php echo $sorteoSegundo->imagen; ?>" class="img-responsive image-ganadores-header">

		</div>

	</div>

	<!-- Table

	=================================== -->
	<?php
      require_once("phpexcel/PHPExcel.php");
      require_once("phpexcel/PHPExcel/Reader/Excel2007.php");
      $objReader = new PHPExcel_Reader_Excel2007();
      $objPHPExcel = $objReader->load("docs/".$sorteoSegundo->archivoexcel);
      $objPHPExcel->setActiveSheetIndex(0);
      $hoja = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
      ?>
	<div class="container">

		<div class="row">

			<div class="table-responsive"> 

				<table class="table" id="myTable">

	                <thead>

	                  <tr>

	                    <th>#</th>

	                    <th>No.</th>

	                    <th>No. Boleto</th>

	                    <th>Premio</th>

	                    <th>Nombre</th>

	                    <th>Ciudad</th>

	                  </tr>

	                </thead>

	                <tbody>

	                  

	                 <?php foreach ($hoja as $renglon) : ?>
                      <tr>
                        <td></td>
                        <td><?php echo $renglon['A']?></td>
                        <td><?php echo $renglon['B']?></td>
                        <td><?php echo $renglon['C']?></td>
                        <td><?php echo $renglon['D']?></td>
                        <td><?php echo $renglon['E']?></td>
                      </tr>
                    <?php endforeach ; ?>

	                  

	                </tbody>

	            </table>

	        </div>

		</div>

		<div class="row">

			<div class="descarga-pdf-content">

				<b>Si gustas descargar</b> esta lista haz clic en el siguiente enlace:

	            <a href="<?php echo $url_website; ?>docs/<?php echo $sorteoSegundo->archivopdf; ?>" class="btn btn-yellow btn-round" role="button" target="_blank">Descarga PDF <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a> 

			</div> 	

		</div>

		<div class="row">

			<p class="text padding-all">

				<?php echo  nl2br($sorteoSegundo->texto); ?>

			</p>

		</div>

		<div class="row text-center">

			<a href="sorteo-colaboradores.php" class="btn btn-yellow btn-round btn-sm" role="button"><i class="fa fa-chevron-left" aria-hidden="true"></i> Regresar</a> 

		</div>

	</div>

</section>