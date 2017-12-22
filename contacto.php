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
          margin: 20px 0;
        }
        form .texto input{
          width: 100%;
        }
      }
      
      *{
        border: 0.5px dotted grey;
      }
      .formulario{
        display: flex;
        justify-content: center;
      }
      section{
        height: 400px;
        width: 45%;
        margin: 0 20px;
      }
      .texto{
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
      }
      .texto input{
        width: 50%;
      }
      textarea{
        resize: none;
      }
      form button{
        margin-top: 20px;
        float: right;
      }
    </style>
  </head>
  <body>
    <nav>

    </nav>
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

      </section>
    </div>
  </body>
</html>
