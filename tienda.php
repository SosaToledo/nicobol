<?php
/**
 * Template Name: Pagina de Tienda
 **/
get_header();
?>
<style>
    /**/
    .contendedor{
        margin-top:40px;
        display: flex;
        justify-content: center;
        min-width:200px;
        max-width:auto;
        flex-wrap: wrap;
    }
    .card {
        width:230px;
        margin: 20px;
    }
    .card img{
        max-width:230px;
        max-height:200px;
    }
    ul{
        list-style:none;
    }
</style>
<body>
    <?php get_header();
        get_template_part( 'menu');
    ?>
    <section class="contendedor">
        <div class="card">
            <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/saltarinaCerdo.jpg" alt="">
            <div class="card-body">
                <h5 class="card-title">Saltarina - Motivo Chancho</h5>
            </div>
            <ul class="list-group list-group-flush">
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/bolsa-de-la-compra.png" alt="unidades por bulto"> - 80 unidades</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/paleta-de-pintura.png" alt="colores"> - varios</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/peso-de-kilos.png" alt="peso"> - 65 g.</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/regla.png" alt="dimension"> - 25 cm.</li>
            </ul>
        </div>
        <div class="card">
            <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/estrella24.jpg" alt="">
            <div class="card-body">
                <h5 class="card-title">Estrella</h5>
            </div>
            <ul class="list-group list-group-flush">
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/bolsa-de-la-compra.png" alt="unidades por bulto"> - 500 unidades</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/paleta-de-pintura.png" alt="colores"> - varios</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/peso-de-kilos.png" alt="peso"> - 70 g.</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/regla.png" alt="dimension"> - 24 cm.</li>
            </ul>
        </div>
        <div class="card">
            <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/caritas.jpg" alt="">
            <div class="card-body">
                <h5 class="card-title">Caritas</h5>
            </div>
            <ul class="list-group list-group-flush">
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/bolsa-de-la-compra.png" alt="unidades por bulto"> - 500 unidades</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/paleta-de-pintura.png" alt="colores"> - 5 colores</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/peso-de-kilos.png" alt="peso"> - 70 g.</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/regla.png" alt="dimension"> - 24 cm.</li>
            </ul>
        </div>
        <div class="card">
            <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/marmolada.jpg" alt="">
            <div class="card-body">
                <h5 class="card-title">Kico Marmolada</h5>
            </div>
            <ul class="list-group list-group-flush">
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/bolsa-de-la-compra.png" alt="unidades por bulto"> - 200, 150, 100 un.</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/paleta-de-pintura.png" alt="colores"> - marmolada</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/peso-de-kilos.png" alt="peso"> - 130, 220, 320 g.</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/regla.png" alt="dimension"> - 35, 45, 55 cm.</li>
            </ul>
        </div>
        <div class="card">
            <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/volleyFlour.jpg" alt="">
            <div class="card-body">
                <h5 class="card-title">Voley Flúor</h5>
            </div>
            <ul class="list-group list-group-flush">
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/bolsa-de-la-compra.png" alt="unidades por bulto"> - 100 unidades</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/paleta-de-pintura.png" alt="colores"> - Flúor</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/peso-de-kilos.png" alt="peso"> - 250 g.</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/regla.png" alt="dimension"> - 22 cm.</li>
            </ul>
        </div>
        <div class="card">
            <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/marmoladaChica.jpg" alt="">
            <div class="card-body">
                <h5 class="card-title">Marmolada (chica)</h5>
            </div>
            <ul class="list-group list-group-flush">
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/bolsa-de-la-compra.png" alt="unidades por bulto"> - 500 unidades</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/paleta-de-pintura.png" alt="colores"> - Marmolada</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/peso-de-kilos.png" alt="peso"> - 70 g.</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/regla.png" alt="dimension"> - 24 cm.</li>
            </ul>
        </div>
        <div class="card">
            <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/publicitaria.jpg" alt="">
            <div class="card-body">
                <h5 class="card-title">Pelotas publicitarias</h5>
            </div>
            <ul class="list-group list-group-flush">
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/bolsa-de-la-compra.png" alt="unidades por bulto"> - 500 unidades</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/paleta-de-pintura.png" alt="colores"> - Consultar</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/peso-de-kilos.png" alt="peso"> - 70 g.</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/regla.png" alt="dimension"> - 24 cm.</li>
            </ul>
        </div>
        <div class="card">
            <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/lisas.jpg" alt="">
            <div class="card-body">
                <h5 class="card-title">Lisas</h5>
            </div>
            <ul class="list-group list-group-flush">
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/bolsa-de-la-compra.png" alt="unidades por bulto"> - 500 unidades</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/paleta-de-pintura.png" alt="colores"> - 5 colores</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/peso-de-kilos.png" alt="peso"> - 70 g.</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/regla.png" alt="dimension"> - 24 cm.</li>
            </ul>
        </div>
        <div class="card">
            <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/estrellaT.jpg" alt="">
            <div class="card-body">
                <h5 class="card-title">Estrella transparente</h5>
            </div>
            <ul class="list-group list-group-flush">
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/bolsa-de-la-compra.png" alt="unidades por bulto"> - 500 unidades</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/paleta-de-pintura.png" alt="colores"> - transparente</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/peso-de-kilos.png" alt="peso"> - 70 g.</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/regla.png" alt="dimension"> - 24 cm.</li>
            </ul>
        </div>
        <div class="card">
            <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/crossfit.jpg" alt="">
            <div class="card-body">
                <h5 class="card-title">Para crossfit</h5>
            </div>
            <ul class="list-group list-group-flush">
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/bolsa-de-la-compra.png" alt="unidades por bulto"> - 1 unidad</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/paleta-de-pintura.png" alt="colores"> - ------</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/peso-de-kilos.png" alt="peso"> - 1, 2, 3 kg.</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/regla.png" alt="dimension"> - 23 cm.</li>
            </ul>
        </div>
        <div class="card">
            <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/gym.jpg" alt="">
            <div class="card-body">
                <h5 class="card-title">Para gym</h5>
            </div>
            <ul class="list-group list-group-flush">
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/bolsa-de-la-compra.png" alt="unidades por bulto"> - 25 unidades</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/paleta-de-pintura.png" alt="colores"> - Celeste metal, roja, azul, amarilla</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/peso-de-kilos.png" alt="peso"> - 1, 1.2, 0.9, 1.2 kg.</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/regla.png" alt="dimension"> - 65, 75, 55, 85 cm.</li>
            </ul>
        </div>
        <div class="card">
            <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/mani.jpg" alt="">
            <div class="card-body">
                <h5 class="card-title">Maní</h5>
            </div>
            <ul class="list-group list-group-flush">
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/bolsa-de-la-compra.png" alt="unidades por bulto"> - 25 unidades</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/paleta-de-pintura.png" alt="colores"> - varios</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/peso-de-kilos.png" alt="peso"> - ------- kg.</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/regla.png" alt="dimension"> - 35x70 | 45x90 cm.</li>
            </ul>
        </div>
        <div class="card">
            <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/minibasquet.jpg" alt="">
            <div class="card-body">
                <h5 class="card-title">Minibasquet</h5>
            </div>
            <ul class="list-group list-group-flush">
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/bolsa-de-la-compra.png" alt="unidades por bulto"> - 200 unidades</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/paleta-de-pintura.png" alt="colores"> - a pedido</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/peso-de-kilos.png" alt="peso"> - 120 a 240 g.</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/regla.png" alt="dimension"> - 10 a 15 cm.</li>
            </ul>
        </div>
        <div class="card">
            <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/pulpa.jpg" alt="">
            <div class="card-body">
                <h5 class="card-title">Pulpa</h5>
            </div>
            <ul class="list-group list-group-flush">
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/bolsa-de-la-compra.png" alt="unidades por bulto"> - 100 unidades</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/paleta-de-pintura.png" alt="colores"> - ------</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/peso-de-kilos.png" alt="peso"> - 120 a 240 g.</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/regla.png" alt="dimension"> - 12, 24, 35 cm.</li>
            </ul>
        </div>
        <div class="card">
            <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/saltarinaChica.jpg" alt="">
            <div class="card-body">
                <h5 class="card-title">Salterina chica</h5>
            </div>
            <ul class="list-group list-group-flush">
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/bolsa-de-la-compra.png" alt="unidades por bulto"> - 80 unidades</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/paleta-de-pintura.png" alt="colores"> - 5 colores</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/peso-de-kilos.png" alt="peso"> - ------- kg.</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/regla.png" alt="dimension"> - hasta 45 cm.</li>
            </ul>
        </div>
        <div class="card">
            <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/volleyChica.jpg" alt="">
            <div class="card-body">
                <h5 class="card-title">Voley chica</h5>
            </div>
            <ul class="list-group list-group-flush">
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/bolsa-de-la-compra.png" alt="unidades por bulto"> - 100 unidades</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/paleta-de-pintura.png" alt="colores"> - 5 colores</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/peso-de-kilos.png" alt="peso"> - 120 a 240 g.</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/regla.png" alt="dimension"> - 22 cm.</li>
            </ul>
        </div>
        <div class="card">
            <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/pentagono.jpg" alt="">
            <div class="card-body">
                <h5 class="card-title">Pentagono</h5>
            </div>
            <ul class="list-group list-group-flush">
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/bolsa-de-la-compra.png" alt="unidades por bulto"> - 500 unidades</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/paleta-de-pintura.png" alt="colores"> - ------</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/peso-de-kilos.png" alt="peso"> - 70 g.</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/regla.png" alt="dimension"> - 24 cm.</li>
            </ul>
        </div>
        <div class="card">
            <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/estimulacion.jpg" alt="">
            <div class="card-body">
                <h5 class="card-title">Para estimulacion</h5>
            </div>
            <ul class="list-group list-group-flush">
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/bolsa-de-la-compra.png" alt="unidades por bulto"> - 100 unidades</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/paleta-de-pintura.png" alt="colores"> - A pedido</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/peso-de-kilos.png" alt="peso"> - A pedido</li>
                 <li class="list-group-item"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/regla.png" alt="dimension"> - A pedido</li>
            </ul>
        </div>  
    </section>
</body>
</html>