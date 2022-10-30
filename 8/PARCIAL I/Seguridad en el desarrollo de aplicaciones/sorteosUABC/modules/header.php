<?php 
include_once("admin-sorteos/Recursos/models/model.Sorteos.php");
$menu = new ObjectTable('activar');
$enlaceMenu = $menu->leer("1"); 
 ?>
<div class="menu-sorteos navbar-fixed-top">
    <nav class="navbar navbar-sorteos" role="navigation">
      <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
            </button>
                <a class="navbar-brand" href="index.php"><img src="assets/images/sorteos-uabc.png" alt="Sorteos UABC" title="Sorteos UABC"></a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sorteos <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="sorteo-magno.php">Magno</a></li>
                    <li class="divider"></li>
                    <li><a href="sorteo-raspa-y-gana.php">Raspa y gana</a></li>
                    <li class="divider"></li>
                    <li><a href="sorteo-colaboradores.php">Colaboradores</a></li>
                  </ul>
                </li>
                    <?php if($enlaceMenu->estado == "activado") : ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle-ganadores" data-toggle="dropdown">Ganadores <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <?php 
                          $enlaceMenuMagno = $menu->leer("2"); 
                          $enlaceMenuPrimer = $menu->leer("3"); 
                          $enlaceMenuSegundo = $menu->leer("4"); 
                          $enlaceMenuTercer = $menu->leer("5"); 
                          ?>
                          <?php if($enlaceMenuMagno->estado == "activado") : ?>
                          <li><a href="ganadores-sorteo-magno.php">Magno</a></li>
                          <!-- <li class="divider"></li> -->
                          <?php else : ?>
                          <?php endif ; ?>
                          <li><a href="ganadores-raspa-gana.php">Raspa y gana</a></li>
                          <li class="divider"></li>
                          <?php 
                          $enlaceMenuPrimer = $menu->leer("3"); 
                          $enlaceMenuSegundo = $menu->leer("4"); 
                          $enlaceMenuTercer = $menu->leer("5"); 
                          ?>
                          <?php if($enlaceMenuPrimer->estado == "activado") : ?>
                          <li>
                                <a href="ganadores-colaboradores.php" onmouseover="myFunction()" class="dropbtn">Colaboradores <b class="caret"></b></a>
                                <div id="myDropdown" class="dropdown-content">
                                    <?php if($enlaceMenuPrimer->estado == "activado") : ?>
                                        <a href="primer-sorteo-colaboradores.php">1er. Sorteo</a>
                                    <?php else : ?>
                                    <?php endif ; ?>
                                    <?php if($enlaceMenuSegundo->estado == "activado") : ?>
                                        <a href="segundo-sorteo-colaboradores.php">2do. Sorteo</a>
                                    <?php else : ?>
                                    <?php endif ; ?>
                                    <?php if($enlaceMenuTercer->estado == "activado") : ?>
                                        <a href="tercer-sorteo-colaboradores.php">3er. Sorteo</a>
                                    <?php else : ?>
                                    <?php endif ; ?>
                                </div>
                            </li>
                            <?php else : ?>
                            <?php endif ; ?>
                        </ul>
                    </li>
                    <?php else : ?>
                    <?php endif ; ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle-premios" data-toggle="dropdown">Premios <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="premios-magno.php">Magno</a></li>
                          <li class="divider"></li>
                          <li><a href="premios-raspa-gana.php">Raspa y gana</a></li>
                          <li class="divider"></li>
                          <li><a href="premios-colaboradores.php">Colaboradores</a></li>
                        </ul>
                    </li>
                    <!-- <li><a href="https://walkinto.in/tour/WJLoZoMT4rZ1xIo-iGpVB/Residencia_en_Mexicali___1er_Premio_Sorteo_UABC" target="_blank">Tour Virtual</a></li> --> 
                    <li><a href="https://sorteos.uabc.edu.mx/" target="_blank">Compra en línea</a></li>  
                    <!-- <li><a href="#" data-toggle="modal" data-target="#failCompraEnLineaModal">Compra en línea</a></li> -->
                    <li><a href="preguntas.php">Preguntas</a></li>
                    <li><a href="http://sorteossigsu.uabc.mx/SigsuDatasExplotaition/Miscelaneos/ContactoSitioSorteos.aspx">Contacto</a></li>
                    <a href="https://portalsorteos.uabc.edu.mx/PortalColaboradores/#/" target="_blank" class="btn btn-sm btn-pink-colaborador">
                      COLABORADOR.Paga tus boletos <span style="color: #FFED02;">AQUÍ</span>
                    </a>
                    <a href="docs/SerColaborador/codigo-de-colaborador.pdf" target="_blank" class="btn btn-sm btn-blue-colaborador">
                      Obtén tu código de colaborador
                    </a>
              
                    <!-- <li><a href="#">Vincolab</a></li> -->
            </ul>
           
          </div>
      </div>
    </nav>
    <!-- CountDown
    ===================== -->
    <!-- <div class="container container-countdown display-desktop">
        <div class="row" >
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-xs-3 col-sm-1 col-md-3 col-lg-4 text-right">
                        <p class="text-count">Faltan</p> 
                    </div>
                    <div class="col-xs-6 col-sm-7 col-md-5 col-lg-4">
                        <div id="getting-started"></div>
                    </div>
                    <div class="col-xs-3 col-sm-4 col-md-4 col-lg-4 text-left">
                        <p class="text-count">para el gran día</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 text-center">
                 <a href="https://sorteos.uabc.mx/?AspxAutoDetectCookieSupport=1" class="btn btn-green btn-round pulse-success" role="button">QUIERO GANAR</a> 
            </div>
        </div>
    </div> -->
</div>

<div class="modal fade" id="failCompraEnLineaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><strong>¡Gracias por tu apoyo!</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>
          En este momento estamos mejorando nuestro sitio de compra en línea.<br>
          En breve lo habilitaremos nuevamente. Disculpa las molestias.
        </h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
