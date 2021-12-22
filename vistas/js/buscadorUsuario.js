/*=============================================
BUSCADOR
=============================================*/
$("#buscador  a").click(function(){

	if($("#buscador input").val() == ""){

		$("#buscador a").attr("href", "");

	}

})


$("#buscador input").change(function(){

	var busqueda = $("#buscador input").val();

	var expresion = /^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ -]*$/;

	if(!expresion.test(busqueda)){

		$("#buscador input").val("");

	}else{

		var evaluarBusqueda = busqueda.replace(/[áéíóúÁÉÍÓÚ ]/g, "_");

		var rutaBuscador = $("#buscador a").attr("href");

		if($("#buscador input").val() != ""){

			$("#buscador a").attr("href", rutaBuscador+"/"+evaluarBusqueda);

		}

	}

})

/*=============================================
BUSCADOR CON ENTER
=============================================*/

$("#buscador input").focus(function(){

	$(document).keyup(function(event) {

		event.preventDefault();

		if(event.keyCode == 13 && $("#buscador input").val() != ""){

			var rutaBuscador = $("#buscador a").attr("href");

			window.location.href = rutaBuscador;

		}

	})

})




/*=============================================
ELIMINAR USUARIO
=============================================*/

$(".tablas").on("click", ".EliminarUsuario", function(){

  var idUsuario = $(this).attr("idUsuario");
  var fotoUsuario = $(this).attr("fotoUsuario");

  console.log("fotoUsuario", fotoUsuario);
  console.log("idUsuario", idUsuario);

       swal({
		  title: "¿Está usted seguro(a) de eliminar este Usuario",
		  type: "warning",
		  showCancelButton: true,
		  confirmButtonColor: "#DD6B55",
		  confirmButtonText: "¡Si, eliminar Usuario!",
		  closeOnConfirm: false
		},
		function(isConfirm){
				 if (isConfirm){	   
				    window.location ="index.php?ruta=usuarios&idUsuario="+idUsuario+"&fotoUsuario="+fotoUsuario;

				  } 
		});

})



