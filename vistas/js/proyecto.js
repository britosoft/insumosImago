
    /*=============================================
    EDITAR UBICACIÓN
    =============================================*/
    $(".tablas").on("click", ".EditarUbicacion", function(){
    
     var idUbicacion = $(this).attr("idUbicacion");
    
    console.log("idUbicacion", idUbicacion);
    
        var datos = new FormData();
        datos.append("idUbicacion", idUbicacion);
    
        $.ajax({
            url:"ajax/proyectos.ajax.php",
            method: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function(respuesta){
    
            console.log("respuesta", respuesta);
    
            $("#ubicacion").val(respuesta["ubicacion"])
            $("#idUbicacion").val(respuesta["id"])
           
     
    
    
    
    }
    
    });
    
    })
    
  
    
    
    /*=============================================
    UBICACION
    =============================================*/
    
    $(".tablas").on("click", ".EliminarProyecto", function(){
     var idUbicacion = $(this).attr("idUbicacion");
         
    
           swal({
              title: "¿Está usted seguro(a) de eliminar este proyecto?",
              type: "warning",
              showCancelButton: true,
              confirmButtonColor: "#DD6B55",
              confirmButtonText: "¡Si, eliminar proyecto!",
              closeOnConfirm: false
            },
            function(isConfirm){
                     if (isConfirm){	   
                        window.location = "index.php?ruta=proyectos&idUbicacion="+idUbicacion;
    
                      } 
            });
    
    })
    
    
    
/*=============================================
RUTA PROYECTO
=============================================*/
$(".tituloProyecto").change(function(){

    var proyecto = $(".tituloProyecto").val();

    var rutaProyecto = proyecto.replace("-");

    var rutasProyecto = $(".rutaProyecto").val(rutaProyecto);


    console.log("rutasProyecto", rutasProyecto);
})


/*=============================================
RUTA 
=============================================*/
$("#tituloCategoria").change(function(){

    var ubicacion = $("#tituloCategoria").val();

    var ruta = ubicacion.replace("-");

    var rutas = $(".ruta").val(ruta);


    console.log("ruta", ruta);
})



/*=============================================
RUTA PROYECTO
=============================================*/

function limpiarUrl(texto){

    var texto = texto.toLowerCase();
    texto = texto.replace(/[á]/, 'a');
    texto = texto.replace(/[é]/, 'e');
    texto = texto.replace(/[í]/, 'i');
    texto = texto.replace(/[ó]/, 'o');
    texto = texto.replace(/[ú]/, 'u');
    texto = texto.replace(/[ñ]/, 'n');
    texto = texto.replace(/ /g, '-');
    return texto;

}



/*=============================================
RUTA PROYECTO
=============================================*/
$(".tituloProyecto").change(function(){

    var proyecto = $(".tituloProyecto").val();

    var rutaProyecto = proyecto.replace("-");

    var rutasProyecto = $(".rutaProyecto").val(rutaProyecto);

    
    $(".rutaProyecto").val(limpiarUrl($(".tituloProyecto").val()));


    console.log("rutasProyecto", rutasProyecto);
})


/*=============================================
AGREGAR EL ID A LA UBICACION
=============================================*/

$(".tituloCategoria").change(function(){

    $(".ruta").val(limpiarUrl($(".tituloCategoria").val()));

    var idUbicacion =  $(".tituloCategoria").val();

    $("#idUbicacion").val(idUbicacion);

    console.log("idUbicacion", idUbicacion);

    var datos = new FormData();
    datos.append("idUbicacion", idUbicacion);

    $.ajax ({
        url:"ajax/insumo.ajax.php",
        method: "POST",
        data:datos,
        cache: false, 
        contentType: false,
        processData:false,
        dataType: "json",
        success: function(respuesta){

        console.log("respuesta", respuesta);

        $(".ruta").val(respuesta["ubicacion"]);



        }


    })



})


/*=============================================
EDITAR RUTA PROYECTO
=============================================*/
$(".EditarTituloProyecto").change(function(){

    var proyectoEditar = $(".EditarTituloProyecto").val();

    var EditarRutaProyecto = proyectoEditar.replace("-");

    var EditarRutasProyecto = $(".EditarRutaProyecto").val(EditarRutaProyecto);

      $(".EditarRutaProyecto").val(limpiarUrl($(".EditarTituloProyecto").val()));
    console.log("EditarRutasProyecto", EditarRutasProyecto);
})
   
    