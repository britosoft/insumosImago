/*=============================================
SideBar Menu
=============================================*/


/*=============================================
Data Table
=============================================*/

$(".tablas").DataTable({

	"language": {

		"sProcessing":     "Procesando...",
		"sLengthMenu":     "Mostrar _MENU_ registros",
		"sZeroRecords":    "No se encontraron resultados",
		"sEmptyTable":     "Tabla Bacia",
		"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
		"sInfoEmpty":      "",
		"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		"sInfoPostFix":    "",
		"sSearch":         "Buscar:",
		"sUrl":            "",
		"sInfoThousands":  ",",
		"sLoadingRecords": "Cargando...",
		"oPaginate": {
		"sFirst":    "Primero",
		"sLast":     "Último",
		"sNext":     "Siguiente",
		"sPrevious": "Anterior"
		},
		"oAria": {
			"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
			"sSortDescending": ": Activar para ordenar la columna de manera descendente"
		}

	}

});



/*=============================================
AGREGAR EL ID A LA UBICACION AL HISTORIAL
=============================================*/

$(".tituloHistorialCategoria").change(function(){

	$(".histotialInsumo").val(limpiarUrl($(".tituloHistorialCategoria").val()));

	var idUbicacion =  $(".tituloHistorialCategoria").val();

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

		$(".histotialInsumo").val(respuesta["ubicacion"]);



		}


	})



})




//TRASFERIR
$(".tabla").on("click", ".transferir", function(){

  var idInsumo = $(this).attr("idInsumo");

	console.log("idInsumo", idInsumo);


	var datos = new FormData();
	datos.append("idInsumo", idInsumo);

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
		$("#codigoTrasferir").val(respuesta["codigo"]);
		$("#insumo").val(respuesta["nombre"]);
		$("#cantidad").val(respuesta["cantidad"]);
		$("#costo").val(respuesta["costo"]);
		$("#ubicacionHistorial").val(respuesta["ubicacion"]);
		$("#id").val(respuesta["id"]);


		$("#editarCodigoTrasferir").val(respuesta["codigo"]);
		$("#editarInsumo").val(respuesta["nombre"]);
		$("#editarCantidad").val(respuesta["cantidad"]);
		$("#editarCosto").val(respuesta["costo"]);
		$("#editarDescripcion").val(respuesta["descripcion"]);
		$("#editarUbicacionHistorial").val(respuesta["ubicacion"]);
		$("#editarId").val(respuesta["id"]);


			

		}


	})



})


 $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })


    })




