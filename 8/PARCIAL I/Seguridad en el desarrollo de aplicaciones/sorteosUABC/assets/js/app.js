$(document).ready(function () {
    $('.navbar-sorteos').addClass('animated fadeInUp');
});

$(function(){

    var url = window.location.pathname;  
    var activePage = url.substring(url.lastIndexOf('/')+1);
    $('.nav li a').each(function(){  

        var currentPage = this.href.substring(this.href.lastIndexOf('/')+1);

        if (activePage == currentPage) {
            $(this).parent().addClass('active'); 
        } 

        if (activePage == 'primer-sorteo-colaboradores.php' || activePage == 'segundo-sorteo-colaboradores.php' || activePage == 'tercer-sorteo-colaboradores.php') {
            $(this).parent().removeClass('active'); 
        } 

        if (activePage == 'sorteo-magno.php' || activePage == 'sorteo-raspa-y-gana.php' || activePage == 'sorteo-colaboradores.php') {
            $('li.dropdown a.dropdown-toggle').parent().addClass('active');
        }
        if (activePage == 'premios-magno.php' || activePage == 'premios-raspa-gana.php' || activePage == 'premios-colaboradores.php') {

            $('li.dropdown a.dropdown-toggle-premios').parent().addClass('active');

        }
        if (activePage == 'ganadores-sorteo-magno.php' || activePage == 'ganadores-raspa-gana.php') {

            $('li.dropdown a.dropdown-toggle-ganadores').parent().addClass('active');

        }

    });

})

//Año, Mes, Día
$("#getting-started").countdown("2018/06/07 15:00:00", function(event) {
    var $this = $(this).html(event.strftime(''
    
    + '<div class="contenedor-countdown"><span class="numero-countdown">%-D</span> <span class="texto-countdown">Día%!d</span></div> <span class="puntos-countdown">:</span> '
    + '<div class="contenedor-countdown"><span class="numero-countdown">%H</span> <span class="texto-countdown">Horas</span></div> <span class="puntos-countdown">:</span> '
    + '<div class="contenedor-countdown"><span class="numero-countdown">%M</span> <span class="texto-countdown">Minutos</span></div> <span class="puntos-countdown">:</span> '
    + '<div class="contenedor-countdown"><span class="numero-countdown">%S</span> <span class="texto-countdown">Segundos</span></div>'));
});

//Año, Mes, Día
$("#getting-started-responsive").countdown("2018/06/07 15:00:00", function(event) {
    var $this = $(this).html(event.strftime(''
    
    + '<div class="contenedor-countdown"><span class="numero-countdown">%-D</span> <span class="texto-countdown">Día%!d</span></div> <span class="puntos-countdown">:</span> '
    + '<div class="contenedor-countdown"><span class="numero-countdown">%H</span> <span class="texto-countdown">Horas</span></div> <span class="puntos-countdown">:</span> '
    + '<div class="contenedor-countdown"><span class="numero-countdown">%M</span> <span class="texto-countdown">Minutos</span></div> <span class="puntos-countdown">:</span> '
    + '<div class="contenedor-countdown"><span class="numero-countdown">%S</span> <span class="texto-countdown">Segundos</span></div>'));
});


/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

