<?php
/**
 * Template Name: Pagina de envio
 **/
    /*Toma de variables*/ 
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje ="nombre del cliente: ".$nombre.". Correo: ".$correo.". Mensaje: ".$_POST['mensaje'];
    mail('luchososa1990@gmail.com','consulta',$mensaje);
    get_template_part('contacto');
?>
