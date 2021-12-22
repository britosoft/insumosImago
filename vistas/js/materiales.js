
	/*=============================================
	VALIDAR FORMATO DE  IMAGEN
	=============================================*/
var rutaOculta = $("#rutaOculta").val();

$("#nuevaFoto").change(function(){

	var imagen = this.files[0];
	console.log("imagen", imagen);


	if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png" ){

    $("#nuevaFoto").val();

                          swal({
							  title: "¡ERROR!",
							  text: "¡La imagen debe ser en formato jpeg o png!",
							  type:"error",
							  confirmButtonText: "Cerrar",
							  closeOnConfirm: false
							},

							function(isConfirm){

								if(isConfirm){
								
								window.location = rutaOculta+"materiales";								}
						});


	}

	else if(Number(imagen["size"]) >2000000){

                        $("#nuevaFoto").val();

                          swal({
							  title: "¡ERROR!",
							  text: "¡La imagen no debe pesar más de 2 MB!",
							  type:"error",
							  confirmButtonText: "Cerrar",
							  closeOnConfirm: false
							},

							function(isConfirm){

								if(isConfirm){
								
								window.location = rutaOculta+"materiales";								}
						});


	}else{

 var nuevaFoto = new  FileReader;
 nuevaFoto.readAsDataURL(imagen);

 $(nuevaFoto).on("load", function(event){

 	var rutaImagen = event.target.result;

 	$("#previsualizarImagen").attr("src", rutaImagen);
 	 $("#avatar").hide();

 })

	} 
})


/*=============================================
EDITAR MATERIAL
=============================================*/
$(".tablas").on("click", ".EditarMaterial", function(){

 var idMaterial = $(this).attr("idMaterial");

console.log("idMaterial", idMaterial);

	var datos = new FormData();
	datos.append("idMaterial", idMaterial);

	$.ajax({
		url:"ajax/materiales.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){

		console.log("respuesta", respuesta);

		$("#material").val(respuesta["material"])
		$("#descripcion").val(respuesta["descripcion"])
		$("#presupuesto").val(respuesta["presupuesto"])
		$("#idMaterial").val(respuesta["id"])
		$("#fotoActual").val(respuesta["imagen"]);

			if(respuesta["imagen"] != ""){

				$("#previsualizarImagenEditar").attr("src", respuesta["imagen"]);

			}else{

				$("#previsualizarImagenEditar").attr("src", "vistas/imagenes/materiales/no-image.png");

			}





}

});

})

$("#editarFoto").change(function(){

	var imagen2 = this.files[0];
	console.log("imagen2", imagen2);

 var nuevaFoto2 = new  FileReader;
 nuevaFoto2.readAsDataURL(imagen2);

 $(nuevaFoto2).on("load", function(event){

 	var rutaImagen2 = event.target.result;

 	$("#previsualizarImagenEditar").attr("src", rutaImagen2);

 })

 })	


/*=============================================
materiales
=============================================*/

$(".tablas").on("click", ".EliminarMaterial", function(){
 var idMaterial = $(this).attr("idMaterial");


  var idImagen = $(this).attr("idImagen");


  var material = $(this).attr("material");



       swal({
		  title: "¿Está usted seguro(a) de eliminar este material",
		  type: "warning",
		  showCancelButton: true,
		  confirmButtonColor: "#DD6B55",
		  confirmButtonText: "¡Si, eliminar material!",
		  closeOnConfirm: false
		},
		function(isConfirm){
				 if (isConfirm){	   
				    window.location = "index.php?ruta=materiales&idMaterial="+idMaterial+"&idImagen="+idImagen+"&material="+material;

				  } 
		});

})




