<?php
/**
 * Template Name: Pagina de Contacto
 **/
get_header();
 ?>
    <style media="screen">
      @media screen and (max-width:800px) {
        .formulario{
          flex-direction: column;
          margin:10px auto;
          width:95%;
        }
        /*
        .formulario section{
          width: 100%;
          margin: 60px 0;
          padding-top:20px !important;
        }
        */
        #formulario{
          width:100%;
          height:auto;
          margin:50px auto 5px;
        }
        form .texto input{
          width: 100%;
        }
        #datos{
          width:100%;
          margin:10px auto;
          height:auto;
        }
        #datos iframe{
          height:300px !important;
        }
        form button{
          width: 100%;
        }
        .barraRoja{
          position:relative !important;
          height:40px !important;
        }
      }

      body{
        width: 100%;
      }
      .formulario{
        display: flex;
        justify-content: center;
      }
      section{
        height:300px;
        width: 45%;
        margin: 60px 20px;
      }
      .texto{
        display:flex;
        flex-wrap:wrap;
        justify-content:space-around;
        padding: 10px;
        border: 3px solid  #B53829;
        border-radius:15px;
        background-color:#b53829;
        font-weight: bold;
      }
      .texto input{
        box-sizing:border-box;
        color: #B53829;
        font-weight: bold;
        padding:10px;
        margin-bottom: 10px;
        border: 1.5px solid  #B53829;
        border-radius:10px;
      }
      .nombreInput{
        width:40%;
      }
      .correoInput{
        width:60%;
      }
      .texto textarea{
        color: #B53829;
        font-weight: bold;
        padding:10px;
        border: 1.5px solid  #B53829;
        border-radius:10px;
        resize:none;
        width:100%;
      }
      form button{
        border: 1px solid  #B53829;
        color: white;
        padding:10px 20px;
        border-radius:10px;
        background:  #B53829;
        margin-top: 20px;
        float: right;
        font-weight: bold;
        cursor: pointer;
      }
      #datos{
        display:flex;
        flex-wrap:wrap;
        align-items:center;
        
      }
      .celda{
        display:flex;
        align-items:stretch;
        margin:0 auto;
      }
      .celda p{
        display:inline-block;
        margin-bottom:0;
      }
      .celda i{
        color:#B53829;
        font-size:30px;
        margin-right:5px;
      }
      #datos iframe{
        margin-top:10px;
        border-radius:10px;
        width:100%;
        height:100%;
      }
      .barraRoja{
        height:50px;
        width:100%;
        background-color:#b53829;
        position:absolute;
        bottom:0;
      }
    </style>
  <body id="#bodyContacto">
    <?php
        get_template_part( 'menu');
    ?>
    <div class="content formulario">
      <section id="formulario">
        <form class="" action="<?php bloginfo(url);?>/contacto" method="POST">
          <div class="texto">
            <input class="nombreInput" type="text" name="nombre" value="" placeholder="Nombre" required>
            <input class="correoInput" type="text" name="correo" value="" placeholder="Correo" required>
            <textarea name="mensaje" rows="8" cols="80" placeholder="Deja tu mensaje" required></textarea>
          </div>
          <button type="submit" name="button"> <i class="fa fa-arrow-right"></i> Enviar</button>
        </form>
      </section>
      <section id="datos">
        <div class="celda">
          <i class="fa fa-phone-square"></i>	
          <p>+549 2477 432300</p>
        </div>
        <div class="celda">
          <i class="fa fa-map-marker"></i>
          <p>Pergamino, Buenos Aires.</p>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d105979.06693254174!2d-60.635469729636384!3d-33.89362388371425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b84aad3ef60a31%3A0x481ac3277962e9c5!2sPergamino%2C+Buenos+Aires!5e0!3m2!1ses-419!2sar!4v1521501369032" frameborder="0" style="border:0" allowfullscreen></iframe>
      </section>
    </div>
    <div class="barraRoja">
      <a style="text-decoration:none;" href="http://www.thinkincode.com.ar">
        <h3 style="text-align:center;color:white;">Desarrollado con <i class="fa fa-heart"></i> por Thinco.</h3>
      </a>
    </div>
  </body>
  <script>
      $().ready(ajustar);
      $(window).on('resize',ajustar );

      function ajustar() {
          var $empresa = $('#bodyContacto');         

          if ( window.innerWidth > 1000){
              $empresa.height(window.innerHeight);
          }
      }
  </script>
  <?php
    /*Toma de variables*/ 
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    /**creación de mensaje */
    $mensaje ="nombre del cliente: ".$nombre.". Correo: ".$correo.". Mensaje: ".$_POST['mensaje'];
    /**envio de correo */
    mail('nicobolgrin@gmail.com','consulta',$mensaje);
  ?>
</html>

