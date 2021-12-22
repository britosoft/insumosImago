<?php



class ModeloSistema{

	//mostrar Empresa

	static public function mdlMostrarEmpresa($tabla, $item, $valor){
		if(!$item == null){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt-> close();

		$stmt = null;
	}else{


		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");


		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt-> close();

		$stmt = null;

	}

	}


   /*=============================================
       MOSTRAR HISTORIAL EMPRESA2
      =============================================*/

      static public function mdlMostrarHistorialEmpresa2($tabla){

      
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$stmt-> execute();
  
		return $stmt->fetchAll();
  
	
		  $stmt = null;
		  
		 
		}

		/*=============================================
       MOSTRAR HISTORIAL USUARIO
      =============================================*/

      static public function mdlMostrarHistorialUsuario($tabla){

      
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$stmt-> execute();
  
		return $stmt->fetchAll();
  
	
		  $stmt = null;
		  
		 
		}


	/*=============================================
	BORRAR COMENTARIO
	=============================================*/

	static public function mdlBorrarComentario($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;


	}


	/*=============================================
	BORRAR COMENTARIO
	=============================================*/

	static public function mdlBorrarComentarioUsuarios($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;


	}


	/*=============================================
	BORRAR OCUPACION
	=============================================*/

	static public function mdlBorrarOcupacion($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;


	}


		//mostrar usuario

	static public function mdlMostrarUsuario($tabla, $item, $valor){

		if($item != null){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetch();


		$stmt = null;

	}else{

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");


		$stmt -> execute();

		return $stmt -> fetchAll();


		$stmt = null;


	}

	}

	 /*=============================================
      MOSTRAR SUBCATEGORÍAS
     =============================================*/
	  static public function mdlMostrarSubCategorias($tabla, $item, $valor){

      if(!$item == null){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt-> close();

		$stmt = null;
	}else{


		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");


		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt-> close();

		$stmt = null;

	}

	}


	 /*=============================================
      AGREGAR OCUPACIONES
     =============================================*/

     static public function mdlAgregarSubCategorias($tabla, $datos){
		if(isset($_POST["nuevaSubCategoria"])){


     $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (subcategorias)VALUES(:subcategorias) ");


     $stmt->bindParam(":subcategorias", $datos["subcategorias"], PDO::PARAM_STR);

    

     if($stmt->execute()){


     	return "ok";
     }else{

     	return "error";
     }	

     $stmt = null;

     }
}
}

