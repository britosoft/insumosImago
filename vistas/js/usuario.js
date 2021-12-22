
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
								
								window.location = rutaOculta+"empleados";								}
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
								
								window.location = rutaOculta+"empleados";								}
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
EDITAR EMPLEADO
=============================================*/
$(".tablas").on("click", ".EditarEmpleado", function(){

 var idEmpleado = $(this).attr("idEmpleado");

console.log("idEmpleado", idEmpleado);

	var datos = new FormData();
	datos.append("idEmpleado", idEmpleado);

	$.ajax({
		url:"ajax/empleado.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){

		console.log("respuesta", respuesta);

		$("#editarNombre").val(respuesta["nombre"])
		$("#editarUsuario").val(respuesta["usuario"])
		$("#editarRol").val(respuesta["rol"])
		$("#fotoActual").val(respuesta["foto"]);
		$("#passwordActual").val(respuesta["password"]);

			if(respuesta["foto"] != ""){

				$("#previsualizarImagenEditar").attr("src", respuesta["foto"]);

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
ELIMINAR EMPLEADO
=============================================*/

$(".tablas").on("click", ".EliminarEmpleado", function(){
 var idEmpleado = $(this).attr("idEmpleado");


  var fotoEmpleado = $(this).attr("fotoEmpleado");


  var empleado = $(this).attr("empleado");



       swal({
		  title: "¿Está usted seguro(a) de eliminar este empleado",
		  type: "warning",
		  showCancelButton: true,
		  confirmButtonColor: "#DD6B55",
		  confirmButtonText: "¡Si, eliminar Empleado!",
		  closeOnConfirm: false
		},
		function(isConfirm){
				 if (isConfirm){	   
				    window.location = "index.php?ruta=usuarios&idEmpleado="+idEmpleado+"&fotoEmpleado="+fotoEmpleado+"&empleado="+empleado;

				  } 
		});

})




