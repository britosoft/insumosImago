
/*=============================================
AGREGANDO PRODUCTOS DESDE LA TABLA
=============================================*/

$(".tablaPedidos tbody").on("click", "button.agregarProducto", function(){

	var idMaterial = $(this).attr("idMaterial");
	//console.log("idMaterial", idMaterial);

	$(this).removeClass("btn-warning agregarProducto");

	$(this).addClass("btn-default");

	var datos = new FormData();
    datos.append("idMaterial", idMaterial);

     $.ajax({

     	url:"ajax/materiales.ajax.php",
      	method: "POST",
      	data: datos,
      	cache: false,
      	contentType: false,
      	processData: false,
      	dataType:"json",
      	success:function(respuesta){
       //console.log("respuesta", respuesta);

            var material = respuesta["material"];
          	var idMaterial = respuesta["id"];
			var presupuesto = respuesta["presupuesto"];
			if( presupuesto == 0){
				swal({
					title: "No Hay Presupuesto Disponibes",
					text: "¡0 unidades!",
					type: "error",
					confirmButtonText: "¡Cerrar!"
				  });
	
				  return;

			}
			


          	/*=============================================
          	EVITAR AGREGAR PRODUTO CUANDO EL STOCK ESTÁ EN CERO
          	=============================================*/

          	$(".nuevoPedido").append(      

          '  <div class="form-group">'+
          '  <div>'+
          '  <div>'+
          '  <div>'+
              
		 '<div class="input-group">'+
			 '<input type="text" class="form-control input-lg material" id="material" value="'+material+'" required readonly>'+
 '<input type="number" class="form-control input-lg cantidad"  min="1"  value="1"  presupuesto="'+presupuesto+'" name="cantidad" presupuesto="'+presupuesto+'" nuevoPresupuesto="'+Number(presupuesto-1)+'" required>'+    		           

			'<div class="input-group-append">'+ 
		  '<button type="button" class="btn btn-danger quitarProducto" idMaterial="'+idMaterial+'"><i class="fa fa-times"></i></button>'+
	  '</div>'+

		 '</div>'+
		 '</div>'+
		 '</div>'+
		 '</div>'+

		'</div>'
		
		) 

		

/*=============================================
AGRUPAR PRODCUTOS EN JSON
=============================================*/	
listarProductos();



          }


})
});

/*=============================================
MODIFICAR LA CANTIDAD
=============================================*/

$(".formularioPedido").on("change", "input.cantidad", function(){

	var nuevoPresupuesto = Number($(this).attr("presupuesto")) - $(this).val();

	$(this).attr("nuevoPresupuesto", nuevoPresupuesto);

	if(Number($(this).val()) > Number($(this).attr("presupuesto"))){

		/*=============================================
		SI LA CANTIDAD ES SUPERIOR AL Presupueto REGRESAR VALORES INICIALES
		=============================================*/

		$(this).val(0);

		$(this).attr("nuevoPresupuesto", $(this).attr("presupuesto"));

		swal({
	      title: "La cantidad supera el Presupuesto",
	      text: "¡Sólo hay "+$(this).attr("presupuesto")+" unidades!",
	      type: "error",
	      confirmButtonText: "¡Cerrar!"
	    });

	    return;

	}
//console.log("presupuesto",  nuevoPresupuesto);

    // AGRUPAR PRODUCTOS EN FORMATO JSON

    listarProductos()

})

/*=============================================
CUANDO CARGUE LA TABLA CADA VEZ QUE NAVEGUE EN ELLA
=============================================*/

$(".nuevoPedido").on("draw.dt", function(){

	if(localStorage.getItem("quitarProducto") != null){

		var listaIdProductos = JSON.parse(localStorage.getItem("quitarProducto"));

		for(var i = 0; i < listaIdProductos.length; i++){

			$("button.recuperarBoton[idMaterial='"+listaIdMaterial[i]["idMaterial"]+"']").removeClass('btn-default');
			$("button.recuperarBoton[idMaterial='"+listaIdMaterial[i]["idMaterial"]+"']").addClass('btn-warning agregarProducto');

		}


	}


})

var idQuitarProducto = [];
localStorage.removeItem("quitarProducto");

	/*=============================================
	QUITAR PRODUCTO Y RECUPEREAR BOTON
	=============================================*/

$(".formularioPedido").on("click", "button.quitarProducto", function(){
	//console.log("boton");
	$(this).parent().parent().parent().parent().parent().parent().remove();
	var idMaterial = $(this).attr("idMaterial");

	//console.log(idMaterial);

	/*=============================================
	ALMACENAR EN EL LOCALSTORAGE EL ID DEL PRODUCTO A QUITAR
	=============================================*/

	$("button.recuperarBoton[idMaterial='"+idMaterial+"']").removeClass('btn-default');

	$("button.recuperarBoton[idMaterial='"+idMaterial+"']").addClass('btn-warning agregarProducto');


})


/*=============================================
LISTAR TODOS LOS PRODUCTOS
=============================================*/

function listarProductos(){

	var listaProductos = [];

	var material = $(".material");

	var cantidad = $(".cantidad");


	for(var i = 0; i < material.length; i++){

		listaProductos.push({
							  "material" : $(material[i]).val(),
							  "cantidad" : $(cantidad[i]).val(),
							  "presupuesto" : $(cantidad[i]).attr("nuevoPresupuesto"),
							  
							  })

	}

	$("#listaProductos").val(JSON.stringify(listaProductos)); 
	
	console.log("lista de productos", listaProductos);
}
