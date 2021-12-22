

/*=============================================
ELIMINAR USUARIO
=============================================*/

$(".tablas").on("click", ".EliminarComentariosUsuarios", function(){


  var id = $(this).attr("id");

  console.log("id", id);

	swal({
		  title: "¿Está usted seguro(a) de eliminar este comentario ",
		  type: "warning",
		  showCancelButton: true,
		  confirmButtonColor: "#DD6B55",
		  confirmButtonText: "¡Si, eliminar comentario!",
		  closeOnConfirm: false
		},
		function(isConfirm){
				 if (isConfirm){	   
				    window.location = "index.php?ruta=gestorSistema&id="+id;

				  } 
		});

})



/*=============================================
ELIMINAR COMENTARIO EMPRESA
=============================================*/

$(".tablas").on("click", ".EliminarComentariosEmpresa", function(){


  var idComentariosEmpresa = $(this).attr("idComentariosEmpresa");

  console.log("idComentariosEmpresa", idComentariosEmpresa);

	swal({
		  title: "¿Está usted seguro(a) de eliminar este comentario",
		  type: "warning",
		  showCancelButton: true,
		  confirmButtonColor: "#DD6B55",
		  confirmButtonText: "¡Si, eliminar comentario!",
		  closeOnConfirm: false
		},
		function(isConfirm){
				 if (isConfirm){	   
				    window.location = "index.php?ruta=gestorSistema&idComentariosEmpresa="+idComentariosEmpresa;

				  } 
		});

})



/*=============================================
ELIMINAR OCUPACIONES
=============================================*/

$(".tablas").on("click", "#EliminarOcupaciones", function(){


  var idOcupacion = $(this).attr("idOcupacion");

  console.log("idOcupacion", idOcupacion);

	swal({
		  title: "¿Está usted seguro(a) de eliminar esta Ocupación",
		  type: "warning",
		  showCancelButton: true,
		  confirmButtonColor: "#DD6B55",
		  confirmButtonText: "¡Si, eliminar Ocupación!",
		  closeOnConfirm: false
		},
		function(isConfirm){
				 if (isConfirm){	   
				    window.location = "index.php?ruta=gestorSistema&idOcupacion="+idOcupacion;

				  } 
		});

})

/*=============================================
ELIMINAR EMPRESA
=============================================*/

$(".tablas").on("click", ".EliminarEmpresa", function(){


  var idEmpresa = $(this).attr("idEmpresa");
  var fotoEmpresa = $(this).attr("fotoEmpresa");

  console.log("idEmpresa", idEmpresa);
  console.log("fotoEmpresa", fotoEmpresa);

	swal({
		  title: "¿Está usted seguro(a) de eliminar esta Empresa",
		  type: "warning",
		  showCancelButton: true,
		  confirmButtonColor: "#DD6B55",
		  confirmButtonText: "¡Si, eliminar Empresa!",
		  closeOnConfirm: false
		},
		function(isConfirm){
				 if (isConfirm){	   
				    window.location = "index.php?ruta=empresas&idEmpresa="+idEmpresa+"&fotoEmpresa="+fotoEmpresa;

				  } 
		});

})


