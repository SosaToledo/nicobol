<?php
/**
 * Template Name: Pagina de Contacto
 **/
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style media="screen">
      @media screen and (max-width:500px) {
        .formulario{
          flex-direction: column;
        }
        .formulario section{
          width: 100%;
          margin: 60px 0;
        }
        form .texto input{
          width: 100%;
        }
        #datos{
          margin-top: 10px;
        }
        form button{
          width: 100%;
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
        padding: 10px;
        border: 3px solid  #B53829;
        border-bottom: 6px solid  #B53829;
        font-weight: bold;
      }
      .texto input{
        color: white;
        margin-bottom: 15px;
        background-color:  #B53829;
        border: 1px solid  #B53829;
      }
      .texto textarea{
        color:  #B53829;
        background-color: #F4F4F4;
        width: 100%;
        margin-top: 20px;
        resize: none;
        border: 1px solid  #B53829;
      }
      form button{
        border: 1px solid  #B53829;
        color: white;
        background:  #B53829;
        margin-top: 20px;
        float: right;
        font-weight: bold;
      }
      #datos{

      }
    </style>
  </head>
  <body>
    <?php get_header();
        get_template_part( 'menu');
    ?>
    <div class="content formulario">
      <section id="formulario">
        <form class="" action="index.html" method="post">
          <div class="texto">
            <input type="text" name="" value="" placeholder="Nombre">
            <input type="text" name="" value="" placeholder="Correo">
            <textarea name="name" rows="8" cols="80" placeholder="Deja tu mensaje"></textarea>
          </div>
          <button type="submit" name="button">enviar</button>
        </form>
      </section>
      <section id="datos">
        <div class="">
          <img src="" alt="">
          <p>(2477) 432300 - 15595907 - 15586970</p>
        </div>
        <div class="">
          <img src="" alt="">
          <p>Ameghino 2488 - Pergamino, Bs. As.</p>
        </div>
        <div class="">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.8540878269305!2d-60.57158178520459!3d-33.867651080656465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b9cab80ea679d1%3A0x2291517911eed7ef!2sBv.+Ameghino+2488%2C+Pergamino%2C+Buenos+Aires!5e0!3m2!1ses-419!2sar!4v1514347581104" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </section>
    </div>
  </body>
</html>
