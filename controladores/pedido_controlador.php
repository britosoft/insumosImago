
<?php

class ControladorPedidos{

	/*=============================================
	MOSTRAR 
	=============================================*/

	static public function ctrMostrarPedidos($item, $valor){

		$tabla = "pedidos";

		$respuesta = ModeloPedidos::mdlMostrarPedidos($tabla, $item, $valor);

		return $respuesta;
	}




	
	/*=============================================
	CREAR 
	=============================================*/

	static public function ctrCrearPedido(){

		if(isset($_POST["proyecto"])){

			//var_dump($_POST["email"]);

			//return;

			


		
		$listaProductos = json_decode($_POST["listaProductos"], true);


		foreach ($listaProductos as $key => $value) {

$tablaMateriales = "materiales";
$valor = $value["id"];
$item1b = "presupuesto";
$valor1b = $value["presupuesto"];


//var_dump($value["presupuesto"]);

//return;

$nuevoPresupuesto = ModeloMateriales::mdlActualizarMaterial($tablaMateriales,  $item1b, $valor1b, $valor);


		}


		$tabla = "pedidos";

		$datos = array(
					   "codigo"=>$_POST["codigo"],
					   "material"=>$_POST["listaProductos"],
					   "solicitante"=>$_POST["solicitante"],
					   "proyecto"=>$_POST["proyecto"],
					   "aprobado"=>0,
					   "enviado"=>0,
					   "recibido"=>0,
					   "comentario"=>$_POST["comentario"],
					);

		$respuesta = ModeloPedidos::mdlIngresarPedido($tabla, $datos);

		

	  if($respuesta == "ok"){

		echo'<script> 

		swal({ 
			  icon: "success",
			  title: "¡Ok!",
			  text: "El pedido fue enviado correctamente, espere, espere a que sea aprovado",
			  type:"success",
			  confirmButtonText: "Cerrar",
			  closeOnConfirm: false
		},
			  function(isConfirm){

				if(isConfirm){
					
			   window.location = "mi_pedidos";
			}
			});

	</script>',

                   /*=============================================
					VERIFICACIÓN CORREO ELECTRÓNICO
					=============================================*/

					date_default_timezone_set("America/Bogota");

					$url = Ruta::frontend();	

					$mail = new PHPMailer;

					$mail->CharSet = 'UTF-8';

					$mail->isMail();

					$mail->setFrom('info@imagoogroup.com', 'Grupo Imago, S.A');

					$mail->addReplyTo('info@imagoogroup.com', 'Grupo Imago');

					$mail->Subject = "Tiene un pedido pendiente esperando tu aprobación haga clik abajo para aprobarla o negarla";

					$mail->addAddress($_POST["email"]);

					$mail->msgHTML('<div style="width:100%; background:#eee; position:relative; font-family:sans-serif; padding-bottom:40px">
						
						<center>
							
							<img style="padding:20px; width:10%" src="'.$url.'vistas/imagenes/logo/logo.png">

						</center>

						<div style="position:relative; margin:auto; width:600px; background:white; padding:20px">
						
							<center>
							
							<img style="padding:20px; width:15%" src="'.$url.'vistas/imagenes/logo/3.jpg">

							<h3 style="font-weight:100; color:#999">Click</h3>

							<hr style="border:1px solid #ccc; width:80%">

							<h4 style="font-weight:100; color:#999; padding:0 20px"></h4>

							

							  <a href=""><button class="btn-lg btn-info" target="_blank" >Verificar</button></a>
							<br>

							<hr style="border:1px solid #ccc; width:80%">

							<h5 style="font-weight:100; color:#999">Si no se inscribió en esta cuenta, puede ignorar este correo electrónico y la cuenta se eliminará.</h5>

							</center>

						</div>

					</div>');

											
				
					$envio = $mail->Send();

					if(!$envio){

						
		echo'<script> 

		swal({ 
			  icon: "error",
			  title: "¡Error!",
			  text: "Error enviando el correo electronico no comuniquese con el adminitrador",
			  type:"error",
			  confirmButtonText: "Cerrar",
			  closeOnConfirm: false
			  
			});
			
		

	</script>';

					}
					

		}




}


}


       /*=============================================
          MOSTRAR HISTORIAL Email
          =============================================*/
		  static public function ctrMostrarEmail(){

			$tabla = "pedidos";
			$respuesta = ModeloPedidos::mdlMostrarEmail($tabla);


			 return $respuesta;
	   }

	   //mostrar pedidos
	   static public function ctrMostrarPedidosGroup($item4, $valor4){

		$tabla = "pedidos";
	
		$respuesta = ModeloPedidos::mdlMostrarPedidosGroup($tabla, $item4, $valor4);

		return $respuesta;

	


	}

       /*=============================================
          MOSTRAR PEDIDOS
          =============================================*/
		  static public function ctrMostrarGroup($datos){

			$tabla = "pedidos";
			$respuesta = ModeloPedidos::mdlMostrarGroup($tabla, $datos);


			 return $respuesta;
	   }

}
	