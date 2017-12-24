<?php
    get_header();
    // get_template_part( 'menu');    
?>
<script src="<?php echo get_template_directory_uri(); ?>/js/fachada.js"></script>
<div class="fachada">
    <div class="row">
        <div class="col-sm-8">
            <img class="imgFachada" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo">
        </div>
        <div class="col-sm-4">
            <ul>
                <li><a href="">Empresa</a></li>
                <li><a href="">Tienda</a></li>
                <li><a href="">Preguntas</a></li>
                <li><a href="">Contacto</a></li>
            </ul>
        </div>
    </div><!-- fin row -->
</div><!-- Fin fachada -->
<div class="empresa">
    <h1><strong>NicoBol</strong> de Marco y María Rosa Blasi.</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sint non veniam beatae soluta facere nesciunt fugit odio, sequi maxime omnis eaque tempora hic quaerat adipisci esse optio, incidunt ipsa!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis aspernatur exercitationem, eius dolores vero ratione ducimus velit laudantium cum dignissimos quasi, facere veritatis tenetur quibusdam repellat, deserunt perspiciatis? Officia, necessitatibus.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis architecto, dicta excepturi illum ipsum unde, iusto ullam nisi rem, ut suscipit qui temporibus est. Alias ducimus perspiciatis quaerat asperiores ad!
    </p>

    <div class="row">
        <div class="items col-sm-4 col-md-2">
            <i class="fa fa-bed"></i>
            <h2><strong>56</strong> clientes felices.</h2>
        </div>
        <div class="items col-sm-4 col-md-2">
            <i class="fa fa-bed"></i>
            <h2><strong>56</strong> clientes felices.</h2>    
        </div>
        <div class="items col-sm-4 col-md-2">
            <i class="fa fa-bed"></i>
            <h2><strong>56</strong> clientes felices.</h2>    
        </div>
        <div class="items col-sm-4 col-md-2">
            <i class="fa fa-bed"></i>
            <h2><strong>56</strong> clientes felices.</h2>    
        </div>
        <div class="items col-sm-4 col-md-2">
            <i class="fa fa-bed"></i>
            <h2><strong>56</strong> clientes felices.</h2>    
        </div>
        <div class="items col-sm-4 col-md-2">
            <i class="fa fa-bed"></i>
            <h2><strong>56</strong> clientes felices.</h2>    
        </div>
    </div>

</div>


<?php get_footer(); ?>