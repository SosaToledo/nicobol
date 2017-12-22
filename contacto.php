<?php
/**
 * Template Name: Pagina de Contacto
 **/
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style media="screen">
      *{
        border: 0.5px dotted grey;
      }
      .formulario{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
      }
      section{
        height: 400px;
        width: 45%;
      }
      form div{
        border: 2px solid red;
        height: 350px;
        display: flex;
        justify-content: center;
        align-content: center;
        flex-wrap: wrap;
      }
      form input, form textarea{
        border: 2px solid red;
      }
      form input{
        width: 45%;
      }
      #formulario button{
        float: right;
        margin: 5px;
      }
    </style>
  </head>
  <body>
    <nav>

    </nav>
    <div class="content formulario">
      <section id="formulario">
        <form class="" action="index.html" method="post">
          <div class="">
            <input type="text" name="" value="" placeholder="nombre">
            <input type="text" name="" value="" placeholder="correo"><br><br>
            <textarea name="name" rows="8" cols="60" placeholder="deja tu consulta"></textarea>
          </div>
          <button class="w3-round-large" type="submit" name="" value="">enviar</button>
        </form>
      </section>
      <section id="datos">

      </section>
    </div>
  </body>
</html>
