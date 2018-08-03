<?php
/**
 * Template Name: Pagina de Contactos
 **/
/**Toma de variables */
  $persona = $_POST['Name'];
  $correo = $_POST['Email'];
  $consulta = $_POST['Message'];
  
/**Creación del documento */
  $destinatario = "luchososa1990@gmail.com";
  $asunto = "Consulta para Thinco";
  $cuerpo = $persona." envio desde: ".$correo." la consulta: ".$consulta;


  mail($destinatario,$asunto,$cuerpo);

?>
