<?php

class SistemaControlador{
 

   //mostrar Empresa
	static public function ctrMostrarEmpresa($item, $valor){

		$tabla = "empresas";
	
		$respuesta =  ModeloSistema::mdlMostrarEmpresa($tabla, $item, $valor);

	

		return $respuesta;

	

	}



         /*=============================================
          MOSTRAR HISTORIAL
          =============================================*/
		  static public function ctrMostrarHistorialEmpresa2(){

			$tabla = "historialempresa";
			$respuesta =  ModeloSistema::mdlMostrarHistorialEmpresa2($tabla);


			 return $respuesta;
	   } 

         /*=============================================
          MOSTRAR HISTORIAL USUARIO
          =============================================*/
		  static public function ctrMostrarHistorialUsuario(){

			$tabla = "historialusuario";
			$respuesta =  ModeloSistema::mdlMostrarHistorialUsuario($tabla);


			 return $respuesta;
	   } 


	/*=============================================
	BORRAR COMENTARIO EMPRESAS
	=============================================*/

	static public function ctrBorrarComentario(){

		if(isset($_GET["idComentariosEmpresa"])){

			$tabla ="historialempresa";
			$datos = $_GET["idComentariosEmpresa"];

			$respuesta =  ModeloSistema::mdlBorrarComentario($tabla, $datos);

			if($respuesta == "ok"){

			 echo '<script> 

								swal({
									  title: "¡OK!",
									  text: "¡El comentario ha sido eliminado correctamente!",
									  type:"success",
									  confirmButtonText: "Cerrar",
									  closeOnConfirm: false
									},

									function(isConfirm){

										if(isConfirm){
											
							           window.location = "gestorSistema";
										}
								});

							</script>';
			}		

		}

	}


	/*=============================================
	BORRAR COMENTARIO USUARIOS
	=============================================*/

	static public function ctrBorrarComentarioUsuarios(){

		if(isset($_GET["id"])){

			$tabla ="historialusuario";
			$datos = $_GET["id"];

			$respuesta =  ModeloSistema::mdlBorrarComentarioUsuarios($tabla, $datos);

			if($respuesta == "ok"){

			 echo '<script> 

								swal({
									  title: "¡OK!",
									  text: "¡El comentario ha sido eliminado correctamente!",
									  type:"success",
									  confirmButtonText: "Cerrar",
									  closeOnConfirm: false
										},

									function(isConfirm){

										if(isConfirm){
											
							           window.location = "gestorSistema";
										}
								});

							</script>';

			}		

		}

	}


	/*=============================================
	BORRAR OCUPACIÓN
	=============================================*/

	static public function ctrBorrarOcupacion(){

		if(isset($_GET["idOcupacion"])){

			$tabla ="subcategorias";
			$datos = $_GET["idOcupacion"];

			$respuesta =  ModeloSistema::mdlBorrarOcupacion($tabla, $datos);

			if($respuesta == "ok"){

			 echo '<script> 

								swal({
									  title: "¡OK!",
									  text: "¡La Ocupación  ha sido eliminada correctamente!",
									  type:"success",
									  confirmButtonText: "Cerrar",
									  closeOnConfirm: false
									
									},

									function(isConfirm){

										if(isConfirm){
											
							           window.location = "gestorSistema";
										}
								});

							</script>';

			}		

		}
}
	
	//mostrar usuarios
	static public function ctrMostrarUsuario($item, $valor){

		$tabla = "usuarios";
	
		$respuesta = ModeloSistema::mdlMostrarUsuario($tabla, $item, $valor);

		return $respuesta;

	


	}

	 /*=============================================
			 MOSTRAR SUBCATEGORÍAS
			=============================================*/
	   static public function ctrMostrarSubCategorias($item, $valor){

			 $tabla = "subcategorias";
			 $respuesta = ModeloSistema::mdlMostrarSubCategorias($tabla, $item, $valor);

			 return $respuesta;
	    } 

	 /*=============================================
			 AGREGAR OCUPACION
			=============================================*/ 

		static public function ctrAgregarSubCategorias() {
	   	
		if(isset($_POST["nuevaSubCategoria"])){


                          $tabla ="subcategorias";
                          $item = "subcategorias";
				         $valor = $_POST["nuevaSubCategoria"];

				$respuesta1 = ModeloSistema::mdlMostrarSubCategorias($tabla, $item, $valor);



				if($respuesta1["subcategorias"] == $_POST["nuevaSubCategoria"]){

                        echo '<script> 

							swal({ 
								  icon: "error",
								  title: "¡ERROR!",
								  text: "¡Ya Existe La Ocupación '.$_POST["nuevaSubCategoria"]. '",
								  type:"error",
								  confirmButtonText: "Cerrar",
								  closeOnConfirm: false
								});

						</script>';

				    }else{


			if(preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/', $_POST["nuevaSubCategoria"])){


				$datos = array("subcategorias"=> $_POST["nuevaSubCategoria"]);

				$respuesta = ModeloSistema::mdlAgregarSubCategorias($tabla, $datos);

				if($respuesta == "ok"){

				echo '<script> 

								swal({
									  title: "¡OK!",
									  text: "¡La Ocupación fue  guardada correctamente!",
									  type:"success",
									  confirmButtonText: "Cerrar",
									  closeOnConfirm: false
									},

									function(isConfirm){

										if(isConfirm){
											
							           window.location = "gestorSistema";
										}
								});

							</script>';

				}
             

			}else{
                       echo '<script> 

								swal({
									  title: "¡ERROR!",
									  text: "¡La Ocupación no puede ir vacio ni llebar carácteres especiales!",
									  type:"error",
									  confirmButtonText: "Cerrar",
									  closeOnConfirm: false
									},

									function(isConfirm){

										if(isConfirm){
											
							           window.location = "gestorSistema";
										}
								});

							</script>';

			}

		}

	}
}
}