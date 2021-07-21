$(function () {
    console.log("DOM ready!");
    $("#masinfo").on('click',function(){
        
        
    });
    
//    $("#submit").attr('disabled', 'disabled');
//    $("#text").keypress(function () {
//        if ($(this).val() !== '') {
//            $('input[type="submit"]').removeAttr('disabled');
//        }
//    });
//    $('#submit').on('click',function(){
//        var textoEnvia=$('[name=fragment').val();
//        $('#envia').text("Se va a enviar: " + textoEnvia);
//        $('#modal').modal('show');
//    });
});
//function validarDatos(event) {
//    var aceptarDatos = true;
//// 1.- Recuperar datos de controles del formulario
//
//    var cadena = $('[name=fragment').val();
//    if (cadena.length < 2 || cadena.length > 20) {
//        aceptarDatos = false;
//        var texto = $('#errFragment').text("Longitud de la cadena entre 2 y 20 caracteres");
//        texto.css({"color": "red"});
//        texto.fadeIn(2000, function () {
//            texto.fadeOut(2000);
//        });
//
//    } else {
//        var texto = $('#errFragment').text("los datos   son correctos, completando");
//        texto.css({"color": "green"});
////        texto.fadeIn(2000, function () {
////            texto.fadeOut(2000);
////
////        });
//    }
//
////generar mensaje error
//// 2.1.- Si datos inv�lidos, mostrar mensajes de error
//// 2.2.- Si todos los datos son correctos, completar el env�o
//    return aceptarDatos;
//}
//function openModal(event){
//   // $('#modal').
// 
//    
//    return 1;
//  }
// 
//  function closeModal(){
//    //setTimeout(function(){$("#modal").remove();},10);
//    $("#closeBottom").click(validarDatos);
//    return 1;
//  }