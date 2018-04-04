<?php
/**
 * Template Name: Pagina de Preguntas frecuentes
 **/
    get_header();
    get_template_part( 'menu');    
?>

<div id="contenedorPreguntas" class="contenedorPreguntas">
    <div class="pregunta" style="margin-top:55px;" >
        <h2>¿Cómo uso WhatsApp en mi computadora?</h2>
        <p> Para proporcionar una mejor experiencia en comunicación, WhatsApp ahora se encuentra disponible en tu teléfono y en tu computadora. La aplicación de WhatsApp para tu computadora y WhatsApp Web son extensiones de la aplicación de WhatsApp en tu teléfono. Los mensajes que envías y recibes son sincronizados entre tu teléfono y tu computadora, también verás todos los mensajes en ambos dispositivos. Cualquier acción tomada en tu teléfono se reflejará en tu computadora y viceversa. </p>
    </div>
    <div class="pregunta">
        <h2>¿Cómo uso WhatsApp en mi computadora?</h2>
        <p> Para proporcionar una mejor experiencia en comunicación, WhatsApp ahora se encuentra disponible en tu teléfono y en tu computadora. La aplicación de WhatsApp para tu computadora y WhatsApp Web son extensiones de la aplicación de WhatsApp en tu teléfono. Los mensajes que envías y recibes son sincronizados entre tu teléfono y tu computadora, también verás todos los mensajes en ambos dispositivos. Cualquier acción tomada en tu teléfono se reflejará en tu computadora y viceversa. </p>
    </div>
    <div class="pregunta">
        <h2>¿Cómo uso WhatsApp en mi computadora?</h2>
        <p> Para proporcionar una mejor experiencia en comunicación, WhatsApp ahora se encuentra disponible en tu teléfono y en tu computadora. La aplicación de WhatsApp para tu computadora y WhatsApp Web son extensiones de la aplicación de WhatsApp en tu teléfono. Los mensajes que envías y recibes son sincronizados entre tu teléfono y tu computadora, también verás todos los mensajes en ambos dispositivos. Cualquier acción tomada en tu teléfono se reflejará en tu computadora y viceversa. </p>
    </div>
</div>
<script>
    $().ready(ajustar);
$(window).on('resize',ajustar );

function ajustar() {
    var $empresa = $('#contenedorPreguntas');
    var menu;
    if ( window.innerWidth > 1000){
        menu=$('.pcNav');
        var $footer = $('#footer');
        $empresa.height(window.innerHeight - $footer.height() - menu.height());
    }else{
        $empresa.css('height',100+'%');
    }
}
</script>
<?php get_footer(); ?>