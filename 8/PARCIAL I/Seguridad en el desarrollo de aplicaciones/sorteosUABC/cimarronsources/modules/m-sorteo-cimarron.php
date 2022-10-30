<!--///////////// Título ////////////-->
<div class="sixteen columns alpha">
    <br/>
    <center>
        <h1 style="color:#fff;">Sorteo Cimarrón Comprometido</h1>
    </center>
    <br/>
</div>
<!--/////////// Menú / Pestañas de Navegación ////////////-->
<div class="container padding-container">
    <div class="sixteen columns">
        <div class="tab">
            <a href="#primero" class="boton"><h4 style="color:#fff;" align="center">Convocatoria</h4></a>
            <a href="#segundo" class="boton"><h4 style="color:#fff;" align="center">Participantes</h4></a>
            <a href="#tercero" class="boton"><h4 style="color:#fff;" align="center">Ganadores</h4></a> 
        </div>
    <div class="contenido-tab">
            <!-- ////////// ID Primero //////// -->
            <div id="primero">
                <div class="">
                    <div style="padding-top:30px; padding-right:30px;">
                        <div class="sixteen columns alpha" style="background-color:#0B4174;opacity:0.9;height:580px;width:100%;overflow:auto; margin-bottom:20px;">
                        <style>label,p,strong,a,li {color:#fff;}</style>
                        <div style="margin:50px;">
                            
                            <p style='font-family:"Arial",sans-serif'>
                                <strong>Objetivo del sorteo</strong><br>
                                Fomentar entre la comunidad universitaria un espíritu de colaboración y participación constante en la promoción y venta de boletos del Sorteo de la UABC. 
                                <br><br>
                                <strong>Participantes</strong><br>
                                Estudiantes de licenciatura de la UABC que participaron en el Sorteo Magno “85” (2019-2) de la UABC con al menos 5 boletos o más, pagados a más tardar al día del sorteo. Por cada 5 boletos vendidos y pagados al día del Sorteo Magno, se otorgará un boleto electrónico para participar en el sorteo cimarrón comprometido.
                                El participante del sorteo en mención, podrá obtener una beca colegiatura del 50% para cualquier carrera de licenciatura de la UABC, siempre y cuando reúna los siguientes requisitos:<br><br>
                                 
                                <strong>Requisitos:</strong><br>
                                &#x2714;   Ser alumno activo de licenciatura de alguna Unidad Académica de la UABC<br>
                                &#x2714;   Haber pagado al día del sorteo correspondiente al menos 5 boletos.<br>
                                &#x2714;   El registro de la entrega de boletos debe estar a nombre del estudiante ya que los boletos y/o beneficios no son transferibles.
                                <br><br>
                                <strong>Premios:</strong><br>
                                Se  repartirán 300 becas colegiatura para licenciatura en la UABC al 50%. Las becas se otorgarán proporcionalmente a las ventas de cada municipio.<br>
                                Mexicali 132 becas, Tijuana 99 Becas, Ensenada 36 becas y Tecate/Valle Palmas 33 becas. 
                                <br><br>
                                <strong>Excepciones:</strong><br>
                                1.  No aplica a egresados y/o bajas académicas.<br>
                                2.  No participarán en el Sorteo Cimarrón Comprometido, los alumnos que recibieron pagos por comisiones de venta de boletos del Sorteo de la UABC (vendedor de stand, comisionista, promotor, etc.).<br>
                                3.  No participarán los alumnos con adeudos pendientes con Sorteos UABC.<br>
                                4.  Quedan excluidos al momento de la realización del sorteo, los alumnos que ya tengan el beneficio de alguna de las becas del tipo no reembolsable que ofrece la Universidad.<br>
                                5.  Quedan excluidos del sorteo, los alumnos que no están vigente como alumno.
                                <br><br>
                                <strong>Sorteo:</strong><br>
                                El Sorteo Cimarrón Comprometido se realizará el día 14 de febrero del 2020 a las 17:30 horas, en las instalaciones de las oficinas de Sorteos de la UABC, en la ciudad de Mexicali, B.C y ante la presencia de Auditores de la UABC.
                                <br><br>
                                <strong>Mecánica:</strong><br>
                                Para obtener a los ganadores de las becas, se utilizará un sistema aleatorio computacional certificado  por el Instituto de Ingeniería de la UABC.
                                <br><br>
                                <strong>Previo al Sorteo:</strong><br>
                                1.  Todo estudiante que reúna los requisitos de participación y no aparezca en la relación de participantes, podrá solicitar la revisión de su caso para ser incluido.<br>
                                a.  La solicitud deberá ser por escrito y hasta la fecha de cierre del proceso de aclaraciones. Para ello deberá enviar un correo a sorteos.promocion@uabc.edu.mx dando su nombre completo, matrícula escolar, Teléfono. Este correo se le contestará con la resolución dentro de 1 día hábil posterior al envío de su solicitud.<br>
                                b.  El 12 de febrero de 2020 se cierra el proceso de aclaraciones y correcciones de la relación de alumnos participantes.
                                <br><br>
                                <strong>El sorteo se realizará de la siguiente manera:</strong><br>
                                1.  Una vez definida la relación de alumnos participantes se ordenará por apellidos de manera alfabética y se les asignará un número de participación.<br>
                                2.  Se cargará la relación de alumnos por ciudad al  sistema de cómputo de generación de números aleatorios.<br>
                                3.  El sistema determinará de forma automatizada la lista de los ganadores y números de reserva para los casos de reemplazo, hasta completar las becas destinadas para cada ciudad.<br>
                                4.  La lista de los ganadores será revisada para confirmar que reúna los requisitos y estatus académico así como los montos de las becas correspondientes.
                                <br><br>
                                <strong>Publicación:</strong><br>
                                El 16 de marzo de 2020 será publicada la lista de ganadores de las becas. Así también, se notificará a los ganadores por vía telefónica y correo electrónico la forma de reclamar su beca, la cual tendrá validez hasta el 28 de agosto de 2020.
                             </p>
                        </div>
                </div>
            </div>
        </div>
        </div>
           <!-- ////////// ID Segundo //////// -->
            <div id="segundo">
                <div class="">
                    <div style="padding:30px;" >
                         <?php
                            require_once("phpexcel/PHPExcel.php");
                            require_once("phpexcel/PHPExcel/Reader/Excel2007.php");
                            $objReader = new PHPExcel_Reader_Excel2007();
                            $objPHPExcel = $objReader->load("cimarronsources/docs/2020/2_WEBPadronS85_Revisado.xlsx");
                            $objPHPExcel->setActiveSheetIndex(0);
                            $hoja = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
                            ?>
                       <table class="display" cellspacing="0" style="width:100%;background-color:#0B4174;opacity:0.9;" id="tabla1">
                            <thead>
                                <tr>
                                    <th style="color:#FFF;">Nombre</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                   $contador = 0;
                                    foreach($hoja as $renglon){
                                    $contador ++;
                                    if($renglon['A']!=''){
                                ?>
                                <tr class="odd gradeX renglon" id="renglon-<?php echo $contador;?>">
                                    <td class=" sorting_1" data-target="renglon-<?php echo $contador;?>"><?php echo ($renglon['A']);?></td>
                                </tr>
                                <?php }} ?>
                            </tbody>
                         </table> 
                    </div>
                </div>
            </div>  
            <!-- ///////////// ID Tercero /////////////// -->
               <div id="tercero">
                    <div class="">
                    <div style="padding:30px;" >
                         <?php
                            require_once("phpexcel/PHPExcel.php");
                            require_once("phpexcel/PHPExcel/Reader/Excel2007.php");
                            $objReader = new PHPExcel_Reader_Excel2007();
                            $objPHPExcel = $objReader->load("cimarronsources/docs/Ganadores_BecasConcentradoCarga.xlsx");
                            $objPHPExcel->setActiveSheetIndex(0);
                            $hoja = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
                            ?>
                       <table class="display" cellspacing="0" style="width:100%;background-color:#0B4174;;opacity:0.9;" id="tabla2">
                            <thead>
                                <tr>
                                    <th style="color:#FFF;">Nombre</th>
                               <th style="color:#FFF;">Ciudad</th>
                                </tr>
                                
                            </thead>
                            <tbody>
                                <?php
                                   $contador = 0;
                                    foreach($hoja as $renglon){
                                    $contador ++;
                                    if($renglon['A']!=''){
                                ?>
                                
                                   
                                </tr>
<tr class="odd gradeX renglon" id="renglon-<?php echo $contador;?>">      
                                    <td><?php echo $renglon['A']?></td>
                                    <td><?php echo $renglon['B']?></td>
                                </tr>
                                <?php }} ?>
                            </tbody>
                         </table> 
                    </div>
                </div>
                               
                    
                </div>
            </div> 
        </div>
    </div>
</div>
