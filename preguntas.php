<?php get_header();
    get_template_part( 'menu');    
?>
<div class="pregunta" style="margin-top:50px;" >
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

    <h1 id="numero"></h1>
    <button onclick="aumentar()"> aumentar</button>
    <script>
        var x = document.getElementById("numero");
        var a = 500;
        var s = 0;
        function aumentar() {
            if (s<=a){
                x.innerHTML=s;
                s++;
                var asd= setTimeout("aumentar()",5);
            }
        }
        function aumentar1() {
        }

    </script>

<?php get_footer(); ?>