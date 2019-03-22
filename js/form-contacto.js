$('#form-contact').submit(function(event){
    event.preventDefault(); // almacena los datos sin refrescar el sitio web
    enviar(); // enviar
});

function enviar() {
    // console.log('ejecutada');
    var datos = $('#form-contact').serialize(); // toma los datos del 'name' y los lleva a un arreglo
    $.ajax({
        type: "post",
        url: "form-contacto.php",
        data: datos,
        success: function(texto) {
            if (texto == 'exito') {
                correcto();
            } else {
                phperror(texto);
            }
        }
    })
}

function correcto() {
    $('#sent-success').removeClass('dnone');
    $('#sent-error').addClass('dnone');
}

function phperror(texto) {
    $('#sent-error').removeClass('dnone');
    $('#sent-error').html(texto);
}
