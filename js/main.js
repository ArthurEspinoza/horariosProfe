$(buscarDatos());

function buscarDatos(consulta) {
    $.ajax({
        url: 'php/profesores.php',
        type: 'POST',
        dataType: 'html',
        data: { consulta: consulta },
    }).done(function(respuesta) {
        $('#datos').html(respuesta);
    }).fail(function() {
        console.log("error");
    })
}

$(document).on('keyup', '#busqueda', function() {
    //alert("entre al keyup");
    var valor = $(this).val();
    //console.log(valor);
    if (valor != "") {
        buscarDatos(valor);
    } else {
        buscarDatos();
    }
});