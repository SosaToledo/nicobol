<?php
    get_header();
?>
<link href='https://fonts.googleapis.com/css?family=Archivo Black' rel='stylesheet'>
<body style="background-color: #B53829;" >
<script src="<?php echo get_template_directory_uri(); ?>/js/fachada.js"></script>
<?php get_template_part('menu');?>
<div class="fachada" id="imgFachada" >
    <div class="row">
        <div class="col-md-12 col-lg-8">
            <img class="imgFachada" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo">
        </div>
        <div class="col-md-12 col-lg-4">
            <ul>
                <li><a href="">Empresa</a></li>
                <li><a  class="animated shake infinite" href="<?php bloginfo(url); ?>/tienda">Tienda</a></li>
                <li><a href="<?php bloginfo(url); ?>/preguntasfrecuentes">Preguntas</a></li>
                <li><a href="<?php bloginfo(url); ?>/contacto">Contacto</a></li>
            </ul>
        </div>
        <div class="menuMediano sm-12">
            <a href="#" class="menuFlex">Empresa</a>
            <a href="<?php bloginfo('url');?>/tienda" class="menuFlex">Tienda</a>
            <a href="<?php bloginfo('url');?>/preguntasfrecuentes" class="menuFlex">Preguntas Frecuentes</a>
            <a href="<?php bloginfo('url');?>/contacto" class="menuFlex">Contacto</a>
        </div>
        <i class="fa fa-angle-double-down cta animated infinite fadeOutDown"></i>	
    </div><!-- fin row -->
    
</div><!-- Fin fachada -->
<style media="screen">
    @media screen and (max-width:991px) {
        .col-lg-4{
            display:none;
        }
        .imgFachada{
            width:95% !important;
        }
        .menuMediano{
            visibility:visible !important;
        }
        .cta{
            visibility:hidden;
        }
        
    }
    @media screen and (max-width:730px) {
        .menuMediano{
            display:none !important;
        }
        .cta{
            visibility:visible;
        }
        
    }
    .fadeOutDown{
        animation-duration: 1.8s;
    }
    .cta{
        position:absolute;
        bottom:50px;
        color:rgba(255,255,255,0.5);
        width:100%;
        text-align:center;
        font-size:78px;
    }
    #myNav{
        display: none;
        }
    .menuMediano{
        visibility:hidden;
        display:flex;
        flex-wrap:nowrap;
        text-align:center;
        justify-content:space-around;
        width:100%;
        background-color: #B53829;
        position:absolute;
        bottom:0;
        padding-bottom:5px;
    }
    .menuMediano a{
        text-decoration:none;
        color:black;
        font-size:16px;
    }
    .menuFlex{
        width:100%;
        margin:10px;
        padding:10px 15px;
        font-family:sans-serif;
        background-color: #F4F4F4;
        border-radius:5px;
    }
    .menuFlex:hover{
        background-color: rgb(196,196,196);
    }
</style>

<div class="empresa" id="empresa">
    <h1>
        NicoBol
    </h1>
    <p>
        Los comienzos de la empresa fueron en el años 1995, por Claudio Blasi y su hijo Marco Blasi, en el fondo de la casa valiendose de cosas comunes armaron un horno de rotomoldeo para hacer las primeras pruebas, que poco a poco fueron dando resultado y viendo que habia posibilidades de aprender el oficio realizaron estudios en buenos aires para profesionalizarse. Luego de varias idas y venidas recien empezaron a sacar las primeras pelotas que se pudieron comercializar en el año 1999. Es el dia de hoy que tenemos mas de 20 productos en el mercado y año a año tratamos de incorporar nuevos modelos, siempre con la idea de estar a la vanguardia. 
    </p>
        <div class="row datosIconos">
            <div class="items col-sm-6 col-md-3">
                <i class="fa fa-history	"></i>
                <h2>Años en el mercado.</h2>
            </div>
            <div class="items col-sm-6 col-md-3">
                <i class="fa fa-truck"></i>
                <h2>Envios a todo el pais.</h2>    
            </div>
            <div class="items col-sm-6 col-md-3">
                <i class="fa fa-retweet"></i>
                <h2>Stock permanente.</h2>    
            </div>
            <div class="items col-sm-6 col-md-3">
                <i class="fa fa-stack-overflow	"></i>
                <h2>Mas de 20 productos.</h2>    
            </div>
        </div>
    </div>
<style>
    @media screen and (max-width:1000px) {

    }
</style>
<?php get_footer(); ?>