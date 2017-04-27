//esa funcion hace la animación del menú Vertical de la pantalla de inicio
$(function () {
    $('#navigation a').stop().animate({'marginLeft': '-160px'}, 1000);

    $('#navigation > li').hover(
            function () {
                $('a', $(this)).stop().animate({'marginLeft': '-2px'}, 200);
            },
            function () {
                $('a', $(this)).stop().animate({'marginLeft': '-160px'}, 200);
            }
    );
    //Funcion de Jquery para comprobar que checkbox esté seleccionado o no.
    $("#btnContinuarPrivacidad").on("click", function(){
        if($("#checkPrivacidad").is(':checked')){
            window.location.href = "index.php?";
        }else{
            alert("Debe aceptar terminos");
        }
    });
});

function validacion() {
    valor = document.getElementsByTagName("cli_email").value;
    if (!(/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)/.test(valor))) {
        return false;
    }
//onsubmit="return validacion()" colocar en el formulario de crear
}




