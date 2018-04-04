$().ready(ajustar);
$(window).on('resize',ajustar );

function ajustar() {
    var $portada = $('#imgFachada');
    var $empresa = $('#empresa');
    var height = $(window).height();
    
    $portada.height(height);

    if ( window.innerWidth > 1000){
        var $footer = $('#footer');
        $empresa.height(window.innerHeight - $footer.height());
    }else{
        $empresa.css('height',100+'%');

    }
}