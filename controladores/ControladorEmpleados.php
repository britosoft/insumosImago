
<?php

class ControladorEmpleados{

	/*=============================================
	INGRESO DE Empleado
	=============================================*/

	static public function ctrIngresoEmpleado(){

		if(isset($_POST["ingUsuario"])){


			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"])){

			   	$encriptar = crypt($_POST["ingPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

				$tabla = "usuarios";

				$item = "usuario";
				$valor = $_POST["ingUsuario"];

				$respuesta = ModeloEmpleados::mdlMostrarEmpleados($tabla, $item, $valor);
				//var_dump($respuesta);


				if(is_array($respuesta) && $respuesta["usuario"] == $_POST["ingUsuario"] && $respuesta["password"] == $encriptar){


						$_SESSION["iniciarSesion"] = "ok";
						$_SESSION["id"] = $respuesta["id"];
						$_SESSION["nombre"] = $respuesta["nombre"];
						$_SESSION["usuario"] = $respuesta["usuario"];
						$_SESSION["rol"] = $respuesta["rol"];
						$_SESSION["foto"] = $respuesta["foto"];

						echo '<script>

								window.location = "inicio";

							</script>';
						


				}else{

					echo '<br><div class="alert alert-danger">Error al ingresar, vuelve a intentarlo</div>';

				}



			}	

		}

	}


	/*=============================================
	REGISTRO DE Empleado
	=============================================*/

	static public function ctrCrearEmpleado(){

		if(isset($_POST["nuevoUsuario"])){

             
                          $tabla ="usuarios";
                          $item = "usuario";
				         $valor = $_POST["nuevoUsuario"];

				$respuesta = ModeloEmpleados::mdlMostrarEmpleados($tabla, $item, $valor);

				if($respuesta["usuario"] == $_POST["nuevoUsuario"]){

                        echo '<script> 

							swal({ 
								  icon: "error",
								  title: "¡ERROR!",
								  text: "¡Ya Existe el Usuario '.$_POST["nuevoUsuario"].'",
								  type:"error",
								  confirmButtonText: "Cerrar",
								  closeOnConfirm: false
								});

						</script>';

				    }else{

				    


	   	$encriptar = crypt($_POST["nuevoPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');


	 	//$ruta = $_POST["fotoUsuario"];
	 /*=============================================
	VALIADAR IMAGEN
	=============================================*/
	if(isset($_FILES["nuevaFoto"]["tmp_name"]) && !empty($_FILES["nuevaFoto"]["tmp_name"])){
 /*======================================================
	PREGUNTAMOS SI EXISTE UNA IMAGEN EN LA BASE DE DATOS
	=====================================================*/
	$directorio ="vistas/imagenes/usuarios/".$_POST["nuevoUsuario"];

	if(!empty($_POST["fotoUsuario"])){

		unlink($_POST["fotoUsuario"]);
	}else{
		mkdir($directorio, 0755);

	}
	 /*======================================================
	 GUARDAMOS LA IMAGEN EN EL DIRECTORIO
	=====================================================*/
	list($ancho, $alto) = getimagesize($_FILES["nuevaFoto"]["tmp_name"]);

	$nuevoAncho = 500;
	$nuevoAlto = 500;

	if($_FILES["nuevaFoto"]["type"] == "image/jpeg"){
    $aleatorio = mt_rand(100, 999);

    $ruta = "vistas/imagenes/usuarios/".$_POST["nuevoUsuario"]."/".$_POST["nuevoUsuario"].".jpg";
    /*======================================================
	MODIFICAMOS UN ALTO Y ANCHO A LA IMAGEN
	=====================================================*/
    $origen = imagecreatefromjpeg($_FILES["nuevaFoto"]["tmp_name"]);
    $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

    imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
       
    imagejpeg($destino, $ruta);
}

if($_FILES["nuevaFoto"]["type"] == "image/png"){
    $aleatorio = mt_rand(100, 999);

    $ruta = "vistas/imagenes/usuarios/".$_POST["nuevoUsuario"]."/".$_POST["nuevoUsuario"].".png";
    /*======================================================
	MODIFICAMOS UN ALTO Y ANCHO A LA IMAGEN
	=====================================================*/
    $origen = imagecreatefrompng($_FILES["nuevaFoto"]["tmp_name"]);
    $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

    imagealphablending($destino, false);
    imagesavealpha($destino, true);
    imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

       
    imagepng($destino, $ruta);
}



	
}else{
		$ruta = "";
	}

	

 		

			   	$tabla = "usuarios";
				
	                 $datos = array("nombre" => $_POST["nuevoNombre"],
					           "usuario" => $_POST["nuevoUsuario"],
					           "password" => $encriptar,
					           "rol" =>$_POST["NuevoRol"],
					           "foto"=>$ruta);


				$respuesta = ModeloEmpleados::mdlIngresarEmpleado($tabla, $datos);
			
				if($respuesta == "ok"){

						echo '<script> 

								swal({
									  title: "¡OK!",
									  text: "¡Empleado creado correctamente!",
									  type:"success",
									  confirmButtonText: "Cerrar",
									  closeOnConfirm: false
										},

									function(isConfirm){

										if(isConfirm){
											
							           window.location = "usuarios";
										}
								});
                              </script>';

				}	


			

		}


	}

}
	/*=============================================
	MOSTRAR Empleado
	=============================================*/

	static public function ctrMostrarEmpleados($item, $valor){

		$tabla = "usuarios";

		$respuesta = ModeloEmpleados::mdlMostrarEmpleados($tabla, $item, $valor);

		return $respuesta;
	}




	/*=============================================
	EDITAR USUARIO
	=============================================*/

	static public function ctrEditarEmpleados(){

		if(isset($_POST["editarUsuario"])){

	

                

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarNombre"])){

				/*=============================================
				VALIDAR IMAGEN
				=============================================*/


	 	$ruta = $_POST["fotoActual"];
	 /*=============================================
	VALIADAR IMAGEN
	=============================================*/
	if(isset($_FILES["editarFoto"]["tmp_name"]) && !empty($_FILES["editarFoto"]["tmp_name"])){
 /*======================================================
	PREGUNTAMOS SI EXISTE UNA IMAGEN EN LA BASE DE DATOS
	=====================================================*/
	$directorio ="vistas/imagenes/usuarios/".$_POST["editarUsuario"];

	if(!empty($_POST["fotoActual"])){

		unlink($_POST["fotoActual"]);
	}else{
		mkdir($directorio, 0755);

	}
	 /*======================================================
	 GUARDAMOS LA IMAGEN EN EL DIRECTORIO
	=====================================================*/
	list($ancho, $alto) = getimagesize($_FILES["editarFoto"]["tmp_name"]);

	$nuevoAncho = 500;
	$nuevoAlto = 500;

	if($_FILES["editarFoto"]["type"] == "image/jpeg"){
    $aleatorio = mt_rand(100, 999);

    $ruta = "vistas/imagenes/usuarios/".$_POST["editarUsuario"]."/".$_POST["editarUsuario"].".jpg";
    /*======================================================
	MODIFICAMOS UN ALTO Y ANCHO A LA IMAGEN
	=====================================================*/
    $origen = imagecreatefromjpeg($_FILES["editarFoto"]["tmp_name"]);
    $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

    imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
       
    imagejpeg($destino, $ruta);
}

if($_FILES["editarFoto"]["type"] == "image/png"){
    $aleatorio = mt_rand(100, 999);

    $ruta = "vistas/imagenes/usuarios/".$_POST["editarUsuario"]."/".$_POST["editarUsuario"].".png";
    /*======================================================
	MODIFICAMOS UN ALTO Y ANCHO A LA IMAGEN
	=====================================================*/
    $origen = imagecreatefrompng($_FILES["editarFoto"]["tmp_name"]);
    $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

    imagealphablending($destino, false);
    imagesavealpha($destino, true);
    imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

       
    imagepng($destino, $ruta);
}



	}


				$tabla = "usuarios";

				if($_POST["editarPassword"] != ""){

					if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["editarPassword"])){

						$encriptar = crypt($_POST["editarPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

					}else{

							echo '<script> 

								swal({
									  title: "¡ERROR!",
									  text: "¡la contraseña no puede ir vacio ni llebar carácteres especiales!",
									  type:"error",
									  confirmButtonText: "Cerrar",
									  closeOnConfirm: false
								
								});

							</script>';

						  	return;

					}

				}else{

					$encriptar = $_POST["passwordActual"];

				}

				$datos = array("nombre" => $_POST["editarNombre"],
							   "usuario" => $_POST["editarUsuario"],
							   "password" => $encriptar,
							   "rol" => $_POST["editarRol"],
							   "foto" => $ruta);

				$respuesta = ModeloEmpleados::mdlEditarEmpleado($tabla, $datos);
		
						
				if($respuesta == "ok"){
	                       echo '<script> 

								swal({
									  title: "¡OK!",
									  text: "¡La cuenta ha sido actualizada correctamente!",
									  type:"success",
									  confirmButtonText: "Cerrar",
									  closeOnConfirm: false
									},

									function(isConfirm){

										if(isConfirm){
											
							           window.location = "usuarios";
										}
								});

							</script>';
				    }
				


			}else{

					echo '<script> 

								swal({
									  title: "¡ERROR!",
									  text: "¡el nombre no puede ir vacio ni llebar carácteres especiales!",
									  type:"error",
									  confirmButtonText: "Cerrar",
									  closeOnConfirm: false
									},

									function(isConfirm){

										if(isConfirm){
											
							           window.location = "usuarios";
										}
								});

							</script>';
			
		}

		}

	}

	/*=============================================
	BORRAR USUARIO
	=============================================*/

	static public function ctrBorrarEmpleado(){

		if(isset($_GET["idEmpleado"])){

			$tabla ="usuarios";
			$datos = $_GET["idEmpleado"];

			if($_GET["fotoEmpleado"] != ""){

				unlink($_GET["fotoEmpleado"]);
				rmdir('vistas/imagenes/usuarios/'.$_GET["empleado"]);

			}

			$respuesta = ModeloEmpleados::mdlBorrarEmpleado($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El empleado ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar",
					  closeOnConfirm: false
					 	},

						function(isConfirm){

							if(isConfirm){
								
				           window.location = "usuarios";
							}
					});

				</script>';
			}		

		}

	}


	/*=============================================
	BORRAR EMPRESA
	=============================================*/

	static public function ctrBorrarEmpresa(){

		if(isset($_GET["idEmpresa"])){

			$tabla ="empresas";
			$datos = $_GET["idEmpresa"];

			if($_GET["fotoEmpresa"] != ""){

				unlink($_GET["fotoEmpresa"]);
				rmdir('vistas/imagenes/usuarios/'.$_GET["idEmpresa"]);

			}

			$respuesta = ModeloEmpleados::mdlBorrarEmpresa($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "La Empresa ha sido borrada correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar",
					  closeOnConfirm: false
					 	},

						function(isConfirm){

							if(isConfirm){
								
				           window.location = "empresas";
							}
					});

				</script>';
			}		

		}

	}



	   //mostrar Empresas
	static public function ctrMostrarInsumos($item1){

		$tabla = "objetos";
	
		$respuesta = ModeloEmpleados::mdlMostrarInsumos($tabla, $item1);

		return $respuesta;



	}

	   //mostrar INSUMOS
	static public function ctrMostrarInsumosAjax($item, $valor){

		$tabla = "objetos";
	
		$respuesta = ModeloEmpleados::mdlMostrarInsumosAjax($tabla, $item, $valor);

		return $respuesta;



	}


	   //mostrar usuarios
	static public function ctrMostrarUsuarios($item, $valor){

		$tabla = "usuarios";
	
		$respuesta = ModeloEmpleados::mdlMostrarUsuarios($tabla, $item, $valor);

		return $respuesta;

	


	}

	

	   //mostrar historial insumos
	static public function ctrMostrarInsumosDuplicado(){

		$tabla = "objetos";
	
		$respuesta = ModeloEmpleados::mdlMostrarInsumosDuplicados($tabla, $item, $valor);

		return $respuesta;

	


	}
	
	/*=============================================
	CREAR INSUMOS
	=============================================*/

	static public function ctrCrearInsumos(){
    if(isset($_POST["nombreUsuario"])){

    	         


			$tabla = "objetos";

			$item = "nombre";
			$valor = $_POST["insumo"];
			$ubicacionDuplicada = ModeloEmpleados::mdlMostrarInsumosDuplicados($tabla, $item, $valor);

			if($ubicacionDuplicada["nombre"] == $_POST["insumo"]){

 echo '<script> 

       swal({
		  title: "Stop",
		  text: "¡El insumo ' .$_POST["insumo"].' ya existe !",
		  type: "warning",
		  confirmButtonColor: "#000",
		  confirmButtonText: "¡ok!",
		  closeOnConfirm: false
		},
		function(isConfirm){
				 if (isConfirm){	   
				 	history.back();

				  } 
		});

    </script>';

    	}else{



				$datos = array("nombreUsuario" => $_POST["nombreUsuario"],
							   "nombre" => $_POST["insumo"],
							   "cantidad" => $_POST["cantidad"],
							   "costo" => $_POST["costo"],
							   "id_ubicacion" => $_POST["id_ubicacion"],
							   "ubicacion" => $_POST["ubicacion"],
							   "descripcion" => $_POST["descripcion"],
							   "codigo" => $_POST["codigo"]
							);

				$respuesta = ModeloEmpleados::mdlCrearInsumos($tabla, $datos);
		
						
				if($respuesta == "ok"){
	                       echo '<script> 

								swal({
									  title: "¡OK!",
									  text: "¡El insumo fué agregado correctamente!",
									  type:"success",
									  confirmButtonText: "Cerrar",
									  closeOnConfirm: false
									},

									function(isConfirm){

										if(isConfirm){
											
							           window.location = "insumos";
										}
								});

							</script>';
				    }
				
}

		}


	}


	/*=============================================
	CREAR INSUMOS
	=============================================*/


	static public function ctrActualizarInsumos(){
    if(isset($_POST["nombreUsuarioh"])){

    	if( $_POST["trasfererenciah"] > $_POST["cantidadh"]){

    		 echo '<script> 

								swal({
									  title: "¡De negado!",
									  text: "¡Intenta trasferir '.$_POST["trasfererenciah"].' insumos  mas sin embargo solo quedan  '.$_POST["cantidadh"] .' en '.$_POST["ubicacionHistorial"] .' !",
									  type:"warning",
									  confirmButtonText: "Cerrar",
									  closeOnConfirm: false
									},

									function(isConfirm){

								if(isConfirm){
									history.back();
								}
								});

							</script>';
    			return;
    	}else{
    


    	$cantidad = $_POST["cantidadh"];
    	$trasfererir = $_POST["trasfererenciah"];

    	$transfererencia = $cantidad - $trasfererir;

    	//print_r($transfererencia);

    	//return
    	         


							$tabla = "objetos";

				$datos = array("nombreUsuario" => $_POST["nombreUsuarioh"],
							   "nombre" => $_POST["insumoh"],
							   "cantidad" =>$transfererencia,
							   "costo" => $_POST["costoh"],
							   "descripcion" => $_POST["descripcionh"],
							   "codigo" => $_POST["codigoh"],
							   "id" => $_POST["id"]
							);

				$respuesta = ModeloEmpleados::mdlActualizarInsumos($tabla, $datos);


					
			if($respuesta == "ok"){
	                       echo '<script> 

								swal({
									  title: "¡OK!",
									  text: "¡Actualizacion de insumos correctamente!",
									  type:"success",
									  confirmButtonText: "Cerrar",
									  closeOnConfirm: false
									},

									function(isConfirm){

								if(isConfirm){
									history.back();
								}
								});

							</script>';
				    }



			


				}
				
		
				


		}


	
}

	/*=============================================
	CREAR  HISTORIAL INSUMOS
	=============================================*/


	static public function ctrCrearhistorialInsumos(){
    if(isset($_POST["nombreUsuario"])){


                


							$tabla = "historialobjetos";

				$datos = array("nombreUsuario" => $_POST["nombreUsuario"],
							   "nombre" => $_POST["insumo"],
							   "cantidad" => $_POST["cantidad"],
							   "costo" => $_POST["costo"],
							   "id_ubicacion" => $_POST["id_ubicacion"],
							   "ubicacion" => $_POST["ubicacion"],
							   "descripcion" => $_POST["descripcion"],
							   "codigo" => $_POST["codigo"]);

				$respuesta = ModeloEmpleados::mdlCrearHistorialInsumos($tabla, $datos);
		
					
			



		}


	}



	/*=============================================
	CREAR  HISTORIAL INSUMOS
	=============================================*/


	static public function ctrCrearhistorialInsumos2(){
    if(isset($_POST["nombreUsuarioh"])){ 


			if($_POST["trasfererenciah"] > $_POST["cantidadh"]){

 echo '<script> 

       swal({
		  title: "Stop",
		  text: "¡No puede trasfererir más de lo que existe en este proyecto !",
		  type: "warning",
		  confirmButtonColor: "#000",
		  confirmButtonText: "¡ok!",
		  closeOnConfirm: false
		},
		function(isConfirm){
				 if (isConfirm){	   
				 	history.back();

				  } 
		});

    </script>';

    	}else{               


							$tabla = "historialobjetos";

				$datos = array("nombreUsuario" => $_POST["nombreUsuarioh"],
							   "nombre" => $_POST["insumoh"],
							   "cantidad" => $_POST["trasfererenciah"],
							   "costo" => $_POST["costoh"],
							   "id_ubicacion" => $_POST["id_ubicacionh"],
							   "ubicacion" => $_POST["ubicacionh"],
							   "descripcion" => $_POST["descripcionh"],
							   "codigo" => $_POST["codigoh"]);

				$respuesta = ModeloEmpleados::mdlCrearHistorialInsumos2($tabla, $datos);
		
					
			if($respuesta == "ok"){
	                       echo '<script> 

								swal({
									  title: "¡OK!",
									  text: "¡trasfererencia de insumos correctamente!",
									  type:"success",
									  confirmButtonText: "Cerrar",
									  closeOnConfirm: false
									},

									function(isConfirm){

								if(isConfirm){
									history.back();
								}
								});

							</script>';
				    }
				



		}


	}


}


	/*=============================================
	INSERTAR EN OBJECTOS AL HACER LA TRASFERENCIA 
	=============================================*/


	static public function ctrCrearhistorialObjecto(){
    if(isset($_POST["nombreUsuarioh"])){                


							$tabla = "objetos";

				$datos = array("nombreUsuario" => $_POST["nombreUsuarioh"],
							   "nombre" => $_POST["insumoh"],
							   "cantidad" => $_POST["trasfererenciah"],
							   "costo" => $_POST["costoh"],
							   "id_ubicacion" => $_POST["id_ubicacionh"],
							   "ubicacion" => $_POST["ubicacionh"],
							   "descripcion" => $_POST["descripcionh"],
							   "codigo" => $_POST["codigoh"]);

				$respuesta = ModeloEmpleados::mdlCrearHistorialObjecto($tabla, $datos);
		
			



		}


	}






	/*=============================================
	BORRAR EMPRESA
	=============================================*/

	static public function ctrBorrarUsuario(){

		if(isset($_GET["idUsuario"])){

			$tabla ="usuarios";
			$datos = $_GET["idUsuario"];

			if($_GET["fotoUsuario"] != ""){

				unlink($_GET["fotoUsuario"]);
				rmdir('vistas/imagenes/usuarios/'.$_GET["idUsuario"]);

			}

			$respuesta = ModeloEmpleados::mdlBorrarUsuario($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El Usuario ha sido borrada correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar",
					  closeOnConfirm: false
					 	},

	                 function(isConfirm){

							if(isConfirm){
								
				           window.location = "usuarios";
							}
					});

				</script>';

			}		

		}

	}


	   //mostrar historial insumos
	static public function ctrMostrarHistorialInsumos($item3, $valor3){

		$tabla = "historialobjetos";
	
		$respuesta = ModeloEmpleados::mdlMostrarHistorialInsumos($tabla, $item3, $valor3);

		return $respuesta;

	


	}

       /*=============================================
          MOSTRAR HISTORIAL PEDIDOS
          =============================================*/
		  static public function ctrMostrarHistorial($datos){

			$tabla = "historialobjetos";
			$respuesta = ModeloEmpleados::mdlMostrarHistorial($tabla, $datos);


			 return $respuesta;
	   }

	      /*=============================================
          MOSTRAR UBICACIONES 
          =============================================*/
		  static public function ctrMostrarUbicacion($item, $valor){

			$tabla = "ubicacion";
			$respuesta = ModeloEmpleados::mdlMostrarUbicacion($tabla, $item, $valor);


			 return $respuesta;
	   }


	
	/*=============================================
	CREAR  HISTORIAL INSUMOS
	=============================================*/


	static public function ctrCrearProyectos(){
if(isset($_POST["ubicacion"])){

			$tabla = "ubicacion";
			$item = "ubicacion";
			$valor = $_POST["ubicacion"];
			$ubicacionDuplicada = ModeloEmpleados::mdlMostrarUbicacion($tabla, $item, $valor);

			if($ubicacionDuplicada["ubicacion"] == $_POST["ubicacion"]){

 echo '<script> 

       swal({
		  title: "Stop",
		  text: "¡El proyecto '.$_POST["ubicacion"].' ya existe !",
		  type: "warning",
		  confirmButtonColor: "#000",
		  confirmButtonText: "¡ok!",
		  closeOnConfirm: false
		},
		function(isConfirm){
				 if (isConfirm){	   
				 	history.back();

				  } 
		});

</script>';

    	}else{

			


                

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["ubicacion"])){


				$datos = array("ubicacion" => $_POST["ubicacion"],
							   "ruta" => $_POST["ruta"]);

				$respuesta = ModeloEmpleados::mdlIngresarProyecto($tabla, $datos);

				if($respuesta == "ok"){
					echo '<script> 

								swal({
									  title: "¡ok!",
									  text: "¡El proyecto fué ingresado correctamente!",
									  type:"success",
									  confirmButtonText: "Cerrar",
									  closeOnConfirm: false
									},

									function(isConfirm){

										if(isConfirm){
											
							           window.location = "proyectos";
										}
								});

							</script>';
			
		}
				
		
						
			


			}else{

					echo '<script> 

								swal({
									  title: "¡ERROR!",
									  text: "¡el nombre no puede ir vacio ni llebar carácteres especiales!",
									  type:"error",
									  confirmButtonText: "Cerrar",
									  closeOnConfirm: false
									},

									function(isConfirm){

										if(isConfirm){
											
							           window.location = "proyectos";
										}
								});

							</script>';
			
		}

		}

}
	}

	

	/*=============================================
	EDITAR Ubicacion(Proyecto)
	=============================================*/

	static public function ctrEditarUbicacion(){

		if(isset($_POST["editarUbicacion"])){
           
			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarUbicacion"])){

				/*=============================================
				VALIDAR IMAGEN
				=============================================*/

				$tabla = "ubicacion";

				$datos = array("ubicacion" => $_POST["editarUbicacion"],
					"ruta" => $_POST["editarRuta"],
							   "id" => $_POST["idUbicacion"]);

				$respuesta = ModeloEmpleados::mdlEditarUbicacion($tabla, $datos);
		
						
				if($respuesta == "ok"){
	                       echo '<script> 

								swal({
									  title: "¡OK!",
									  text: "¡El Proyecto(Ubicacion) ha sido actualizado correctamente!",
									  type:"success",
									  confirmButtonText: "Cerrar",
									  closeOnConfirm: false
									},

									function(isConfirm){

										if(isConfirm){
											
							           window.location = "proyectos";
										}
								});

							</script>';
				    }
				


			}else{

					echo '<script> 

								swal({
									  title: "¡ERROR!",
									  text: "¡el nombre no puede ir vacio ni llebar carácteres especiales!",
									  type:"error",
									  confirmButtonText: "Cerrar",
									  closeOnConfirm: false
									},

									function(isConfirm){

										if(isConfirm){
											
							           window.location = "usuarios";
										}
								});

							</script>';
			
		}

		}

	}



	/*=============================================
	BORRAR UBICACION
	=============================================*/

	static public function ctrBorrarUbicacion(){

		if(isset($_GET["idUbicacion"])){

			$tabla ="ubicacion";
			$datos = $_GET["idUbicacion"];

			

			$respuesta = ModeloEmpleados::mdlBorrarUbicacion($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El proyecto ha sido borrada correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar",
					  closeOnConfirm: false
					 	},

	                 function(isConfirm){

							if(isConfirm){
								
				           window.location = "proyectos";
							}
					});

				</script>';

			}		

		}

	}

}
	