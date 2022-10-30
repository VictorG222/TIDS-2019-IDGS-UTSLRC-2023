<section class="tabs-sorteos mask-section" style="margin-top:100px;">

<img src="assets/images/mask-white.png" class="img-responsive mask-image">

	<div class="container element-magic" id="section-0">

		<div class="row text-center">

			<h1 class="title">¡Vende, apoya y gana!</h1>

		</div>

		<div class="row">

				<form class="form" role="form" method="post" action="mail/mail-colaborador.php" name="myform">

					<!-- Nombre, Apellido -->

					<div class="col-sm-6">

						<div class="form-group label-floating">

							<label class="control-label">Nombre</label>

							<input type="text" class="form-control" name="nombre">

							<div id='myform_nombre_errorloc' class="error_strings"></div>

						</div>

					</div>

					<div class="col-sm-6">

						 <div class="form-group label-floating">

			                <label class="control-label">Apellidos</label>

			                <input type="text" class="form-control" name="apellidos">

                  			<div id='myform_apellidos_errorloc' class="error_strings"></div>

			      		</div>

					</div>

					<!-- Correo, Clave lada, Telefono -->

		            <div class="col-sm-4">

		            	<div class="form-group label-floating">

			                <label class="control-label">Correo electrónico</label>

			            	<input type="email" class="form-control" id="pwd" name="email">

	                  		<div id='myform_email_errorloc' class="error_strings"></div>

	                  	</div>

		            </div>

		            <div class="col-sm-4">

		            	<div class="form-group label-floating">

		            		<label class="control-label">Clave lada</label>

		            		<input type="tel" class="form-control" id="pwd" name="clavelada">

                  			<div id='myform_clavelada_errorloc' class="error_strings"></div>

		            	</div>

		            </div>

		            <div class="col-sm-4">

		            	<div class="form-group label-floating">

		            		<label class="control-label">Teléfono</label>

		            		<input type="tel" class="form-control" name="phone">

                  			<div id='myform_phone_errorloc' class="error_strings"></div>

		            	</div>

		            </div>

		            <!-- Calle, Numero, Colonia -->

		            <div class="col-sm-4">

		            	<div class="form-group label-floating">

			                <label class="control-label">Calle</label>

			            	<input type="text" class="form-control" name="calle">

                  			<div id='myform_calle_errorloc' class="error_strings"></div>

	                  	</div>

		            </div>

		            <div class="col-sm-4">

		            	<div class="form-group label-floating">

		            		<label class="control-label">Número</label>

		            		<input type="tel" class="form-control" id="pwd" name="numero">

                  			<div id='myform_numero_errorloc' class="error_strings"></div>

		            	</div>

		            </div>

		            <div class="col-sm-4">

		            	<div class="form-group label-floating">

		            		<label class="control-label">Colonia</label>

		            		<input type="text" class="form-control" name="colonia">

                  			<div id='myform_colonia_errorloc' class="error_strings"></div>

		            	</div>

		            </div>

		            <!-- Ciudad, Estado, Codigo Postal -->

		            <div class="col-sm-4">

		            	<div class="form-group label-floating">

			                <label class="control-label">Ciudad</label>

			            	<input type="text" class="form-control" name="ciudad">

                  			<div id='myform_ciudad_errorloc' class="error_strings"></div>

	                  	</div>

		            </div>

		            <div class="col-sm-4">

		            	<div class="form-group label-floating">

		            		<label class="control-label">Estado</label>

		            		<input type="tel" class="form-control" id="pwd" name="estado">

                  			<div id='myform_estado_errorloc' class="error_strings"></div>

		            	</div>

		            </div>

		            <div class="col-sm-4">

		            	<div class="form-group label-floating">

		            		<label class="control-label">Código Postal</label>

		            		<input type="text" class="form-control" name="codigopostal">

                  			<div id='myform_codigopostal_errorloc' class="error_strings"></div>

		            	</div>

		            </div>

		            <!-- Cantidad de boletos, Seleccione el dia, Selecciona la hora -->

		            <div class="col-sm-4">

		            	<div class="form-group label-floating">

			                <label class="control-label">Cantidad de boletos</label>

			            	 <select class="form-control" name="boletos">

			                    <option value="000" selected="selected">

			                      [Selecciona]

			                    </option>

			                    <option value="10">10 boletos</option>   

			                    <option value="5">5 boletos</option>

			                    <option value="3">3 boletos</option>    

			                  </select>

			                  <div id='myform_boletos_errorloc' class="error_strings"></div>

	                  	</div>

		            </div>

		            <div class="col-sm-4">

		            	<div class="form-group label-floating">

		            		<label class="control-label">Seleccione el día</label>

		            		<input type="text" class="form-control" id="datepicker" name="fecha">

		            		<div id='myform_fecha_errorloc' class="error_strings"></div>

		            	</div>

		            </div>

		            <div class="col-sm-4">

		            	<div class="form-group label-floating">

		            		<label class="control-label">Seleccione la hora</label>

		            		<select class="form-control" name="hora">

			                    <option value="000" selected="selected">

			                      [Selecciona]

			                    </option>

			                    <option value="9:00 a.m. - 10:00 a.m.">9:00 a.m. - 10:00 a.m.</option>

			                    <option value="10:00 a.m. - 11:00 a.m.">10:00 a.m. - 11:00 a.m.</option>

			                    <option value="11:00 a.m. - 12:00 a.m.">11:00 a.m. - 12:00 a.m.</option>

			                    <option value="12:00 p.m. - 1:00 p.m.">12:00 p.m. - 1:00 p.m.</option>

			                    <option value="1:00 p.m. - 2:00 p.m.">1:00 p.m. - 2:00 p.m.</option>

			                    <option value="2:00 p.m. - 3:00 p.m.">2:00 p.m. - 3:00 p.m.</option>

			                    <option value="3:00 p.m. - 4:00 p.m.">3:00 p.m. - 4:00 p.m.</option>

			                    <option value="4:00 p.m. - 5:00 p.m.">4:00 p.m. - 5:00 p.m.</option>

			                    <option value="5:00 p.m. - 6:00 p.m.">5:00 p.m. - 6:00 p.m.</option>

			                    <option value="6:00 p.m. - 7:00 p.m.">6:00 p.m. - 7:00 p.m.</option> 

			                </select>

			                <div id='myform_hora_errorloc' class="error_strings"></div>

		            	</div>

		            </div>

		            <!--  -->

		            <div class="col-sm-12">

		            	<div class="form-group label-floating">

		            		<label class="control-label">Comentarios (Opcional)</label>

		                	<textarea class="form-control" name="comentarios"></textarea>

		                </div>

		            </div>

		            <!-- Enviar -->

		      		<div class="col-sm-12 text-right">

		      			<div class="form-group">

			                <button type="submit" class="btn btn-enviar btn-yellow btn-round">Enviar <i class="fa fa-chevron-right" aria-hidden="true"></i></button>

			            </div>

		      		</div> 

            	</form>

			</div>	

		</div>

	</div>

</section>

