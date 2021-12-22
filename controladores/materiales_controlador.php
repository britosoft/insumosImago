
<?php

class ControladorMateriales{

	/*=============================================
	REGISTRO DE Material
	=============================================*/

	static public function ctrCrearMaterial(){

		if(isset($_POST["nuevoMaterial"])){


             
                          $tabla ="materiales";
                          $item = "material";
				         $valor = $_POST["nuevoMaterial"];

				$respuesta = ModeloMateriales::mdlMostrarMateriales($tabla, $item, $valor);

				if($respuesta["material"] == $_POST["nuevoMaterial"]){

                        echo '<script> 

							swal({ 
								  icon: "error",
								  title: "¡ERROR!",
								  text: "¡Ya Existe el Material'.$_POST["nuevoMaterial"].'",
								  type:"error",
								  confirmButtonText: "Cerrar",
								  closeOnConfirm: false
								});

						</script>';

				    }else{ 

	 /*=============================================
	VALIADAR IMAGEN
	=============================================*/
	if(isset($_FILES["nuevaFoto"]["tmp_name"]) && !empty($_FILES["nuevaFoto"]["tmp_name"])){
 /*======================================================
	PREGUNTAMOS SI EXISTE UNA IMAGEN EN LA BASE DE DATOS
	=====================================================*/
	$directorio ="vistas/imagenes/materiales/".$_POST["nuevoMaterial"];

	if(!empty($_POST["idImagen"])){

		unlink($_POST["idImagen"]);
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

    $ruta = "vistas/imagenes/materiales/".$_POST["nuevoMaterial"]."/".$_POST["nuevoMaterial"].".jpg";
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

    $ruta = "vistas/imagenes/materiales/".$_POST["nuevoMaterial"]."/".$_POST["nuevoMaterial"].".png";
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
		$ruta ="";
	}

	

 		

				
	                 $datos = array("material" => $_POST["nuevoMaterial"],
					           "descripcion" => $_POST["descripcion"],
					           "presupuesto" =>$_POST["presupuesto"],
					            "codigo" =>$_POST["codigo"],
					           "imagen"=>$ruta);


				$respuesta = ModeloMateriales::mdlIngresarMateriales($tabla, $datos);
			
				if($respuesta == "ok"){

						echo '<script> 

								swal({
									  title: "¡OK!",
									  text: "¡El Material ha sido creado correctamente!",
									  type:"success",
									  confirmButtonText: "Cerrar",
									  closeOnConfirm: false
										},

									function(isConfirm){

										if(isConfirm){
											
							           window.location = "materiales";
										}
								});
                              </script>';

				}	


			

		}


	}

}
	/*=============================================
	MOSTRAR Material
	=============================================*/

	static public function ctrMostrarMateriales($item, $valor){

		$tabla = "materiales";

		$respuesta = ModeloMateriales::mdlMostrarMateriales($tabla, $item, $valor);

		return $respuesta;
	}




	/*=============================================
	EDITAR 
	=============================================*/

	static public function ctrEditarMateriales(){

		if(isset($_POST["editarMaterial"])){
              

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarMaterial"])){

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
	$directorio ="vistas/imagenes/materiales/".$_POST["editarMaterial"];

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

    $ruta = "vistas/imagenes/materiales/".$_POST["editarMaterial"]."/".$_POST["editarMaterial"].".jpg";
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

    $ruta = "vistas/imagenes/materiales/".$_POST["editarMaterial"]."/".$_POST["editarMaterial"].".png";
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


				$tabla = "materiales";

				

				$datos = array("material" => $_POST["editarMaterial"],
					   "descripcion" => $_POST["editarDescripcion"],
							   "presupuesto" => $_POST["editarPresupuesto"],
							   "id" => $_POST["idMaterial"],
							   "imagen" => $ruta);

				$respuesta = ModeloMateriales::mdlEditarMaterial($tabla, $datos);
		
						
				if($respuesta == "ok"){
	                       echo '<script> 

								swal({
									  title: "¡OK!",
									  text: "¡El Material ha sido actualizada correctamente!",
									  type:"success",
									  confirmButtonText: "Cerrar",
									  closeOnConfirm: false
									},

									function(isConfirm){

										if(isConfirm){
											
							           window.location = "materiales";
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
	BORRAR MATERIAL
	=============================================*/

	static public function ctrBorrarMaterial(){

		if(isset($_GET["idMaterial"])){

			$tabla ="materiales";
			$datos = $_GET["idMaterial"];

			if($_GET["idImagen"] != ""){

				unlink($_GET["idImagen"]);
				rmdir('vistas/imagenes/materiales/'.$_GET["material"]);

			}

			$respuesta = ModeloMateriales::mdlBorrarMaterial($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El material ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar",
					  closeOnConfirm: false
					 	},

						function(isConfirm){

							if(isConfirm){
								
				           window.location = "materiales";
							}
					});

				</script>';
			}		

		}

	}



}
	