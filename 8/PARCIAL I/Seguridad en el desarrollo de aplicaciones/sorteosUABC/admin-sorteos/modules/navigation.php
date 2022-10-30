<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="dashboard.php">Sorteos UABC Admin</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Hola! <?php echo $sesion->get("usuario"); ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="crear-usuario.php"><i class="fa fa-fw fa-gear"></i> Crear Usuario</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="cerrar-sesion.php"><i class="fa fa-fw fa-power-off"></i> Cerrar Sesión</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Menu Principal</a>
            </li>
            <li>
                <a href="sorteo-magno.php"><i class="fa fa-trophy"></i> Sorteo Magno</a>
            </li>
            <li>
                <a href="sorteo-colaboradores.php"><i class="fa fa-trophy"></i> Primer Sorteo Colaboradores</a>
            </li>
            <li>
                <a href="sorteo-colaboradores2.php"><i class="fa fa-trophy"></i> Segundo Sorteo Colaboradores</a>
            </li>
            <li>
                <a href="sorteo-colaboradores3.php"><i class="fa fa-trophy"></i> Tercer Sorteo Colaboradores</a>
            </li>
            <li>
                <a href="colaboradores.php"><i class="fa fa-users"></i> Colaboradores</a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>