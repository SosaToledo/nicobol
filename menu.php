<nav class="pcNav" id="myNav">
    <div class="esconderEnMedio"> 
        <a href="<?php bloginfo(url); ?>"><img class="logoNav" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo"></a>
        <div class="botonesNav">
            <a href="#">Empresa</a>
            <a class="animated  infinite" href="<?php bloginfo(url); ?>/tienda">Tienda</a>
            <a href="<?php bloginfo(url); ?>/preguntasfrecuentes">Preguntas</a>
            <a href="<?php bloginfo(url); ?>/contacto">Contacto</a>
        </div>
    </div>
</nav>


<div class="w3-top navCelulares">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button  w3-left" href="javascript:void(0);" onclick="toggleFunction(this)" title="Toggle Navigation Menu">
        <div class="contenedor">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
    </a>
    <a href="<?php bloginfo(url); ?>/">
        <img style="width:140px;display:block;margin:2px auto;" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo">
    </a>
    </div>
  <!-- Navbar on small screens -->
  <div id="navDemo" class="animated bounceInLeft w3-bar-block w3-white w3-hide">
    <a href="#" class="w3-bar-item w3-button">
        <i class="animated pulse infinite fa fa-circle" style="font-size:16px;color:red;"></i>
        <h5>Empresa</h5>
    </a>
    <a href"<?php bloginfo(url); ?>/tienda" class="w3-bar-item w3-button">
        <i class="animated pulse infinite fa fa-circle" style="font-size:16px;color:blue;"></i>
        <h5>Tienda</h5>
    </a>
    <a href="<?php bloginfo(url); ?>/preguntasfrecuentes" class="w3-bar-item w3-button">
        <i class="animated pulse infinite fa fa-circle" style="font-size:16px;color:green;"></i>
        <h5>Preguntas</h5>
    </a>
    <a href="<?php bloginfo(url); ?>/contacto" class="w3-bar-item w3-button">
    <i class="animated pulse infinite fa fa-circle" style="font-size:16px;color:purple;"></i>
        <h5>Contacto</h5>
    </a>
  </div>
</div>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction(x) {
    x.classList.toggle("change");

    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
function myFunction(x) {
    x.classList.toggle("change");
}
</script>