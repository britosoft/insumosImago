<?php

require_once "Conexion.php";

class ModeloEmpleados{

  /*=============================================
  MOSTRAR Empleado
  =============================================*/


  static public function mdlMostrarEmpleados($tabla, $item, $valor){

    if($item != null){

      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

      $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

      $stmt -> execute();

      return $stmt -> fetch();

    }else{

      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

      $stmt -> execute();

      return $stmt -> fetchAll();

    }

  }


/*=============================================
  MOSTRAR Empleado
  =============================================*/


  static public function mdlMostrarInsumosDuplicados($tabla, $item, $valor){

    if($item != null){

      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

      $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

      $stmt -> execute();

      return $stmt -> fetch();

    }else{

      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

      $stmt -> execute();

      return $stmt -> fetchAll();

    }

  }

  
  /*=============================================
  ACTUALIZAR Insumo
  =============================================*/

  static public function mdlActualizarEmpleado($tabla, $item1, $valor1, $item2, $valor2){

    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE $item2 = :$item2");

    $stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
    $stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);

    if($stmt -> execute()){

      return "ok";
    
    }else{

      return "error"; 

    }

    $stmt -> close();

    $stmt = null;

  }

  
  
  /*=============================================
  ACTUALIZAR HISTORIAL Insumo
  =============================================*/

  static public function mdlActualizarHistorialInsumo($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombreUsuario = :nombreUsuario, nombre = :nombre, cantidad = :cantidad,  costo = :costo, descripcion = :descripcion  WHERE codigo = :codigo");

    $stmt -> bindParam(":nombreUsuario", $datos["nombreUsuario"], PDO::PARAM_STR);
    $stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    $stmt -> bindParam(":cantidad", $datos["cantidad"], PDO::PARAM_STR);
    $stmt -> bindParam(":costo", $datos["costo"], PDO::PARAM_STR);
    $stmt -> bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
    $stmt -> bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);
    $stmt -> bindParam(":id_ubicacion", $datos["id_ubicacion"], PDO::PARAM_INT);

    $stmt -> close();

    $stmt = null;

  }
  /*=============================================
  EDITAR Empleado
  =============================================*/

  static public function mdlEditarEmpleado($tabla, $datos){
  
    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, password = :password, rol = :rol,  foto = :foto WHERE usuario = :usuario");

    $stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    $stmt -> bindParam(":password", $datos["password"], PDO::PARAM_STR);
    $stmt -> bindParam(":rol", $datos["rol"], PDO::PARAM_STR);
    $stmt -> bindParam(":foto", $datos["foto"], PDO::PARAM_STR);
    $stmt -> bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);

    if($stmt -> execute()){

      return "ok";
    
    }else{

      return "error"; 

    }

    $stmt -> close();

    $stmt = null;

  }


  /*=============================================
  BORRAR Empleado
  =============================================*/

  static public function mdlBorrarEmpleado($tabla, $datos){

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
  BORRAR USUARIO
  =============================================*/

  static public function mdlBorrarEmpresa($tabla, $datos){

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



  //mostrar empresa

  static public function mdlMostrarInsumos($tabla, $item1){

  if($item1 != null){

   $stmt = Conexion::conectar()->prepare("SELECT * FROM  $tabla WHERE id_ubicacion = :id_ubicacion ORDER BY id DESC");
  $stmt -> bindParam(":id_ubicacion", $item1, PDO::PARAM_INT);

  $stmt->execute();

return $stmt->fetchAll();

}else{

 $stmt = Conexion::conectar()->prepare("SELECT * FROM  $tabla");
  $stmt -> execute();

    return $stmt -> fetchAll();


    $stmt = null;
}

 
}


/*=============================================
 ACTUALIZAR INSUMOS
  =============================================*/

  static public function mdlActualizarInsumos($tabla, $datos){
  
    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombreUsuario = :nombreUsuario, nombre = :nombre, cantidad = :cantidad,  costo = :costo, descripcion = :descripcion, codigo = :codigo WHERE id = :id");

    $stmt -> bindParam(":nombreUsuario", $datos["nombreUsuario"], PDO::PARAM_STR);
    $stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    $stmt -> bindParam(":cantidad", $datos["cantidad"], PDO::PARAM_STR);
    $stmt -> bindParam(":costo", $datos["costo"], PDO::PARAM_STR);
    $stmt -> bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
    $stmt -> bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);
    $stmt -> bindParam(":id", $datos["id"], PDO::PARAM_INT);

    if($stmt -> execute()){

      return "ok";
    
    }else{

      return "error"; 

    }

    $stmt -> close();

    $stmt = null;

  }



  /*=============================================
  MOSTRAR INSUMOS
  =============================================*/


  static public function mdlMostrarInsumosAjax($tabla, $item, $valor){

    if($item != null){

      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

      $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

      $stmt -> execute();

      return $stmt -> fetch();

    }else{

      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

      $stmt -> execute();

      return $stmt -> fetchAll();

    }

  }

  /*=============================================
  REGISTRO DE Empleado
  =============================================*/

  static public function mdlIngresarEmpleado($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, usuario, password, rol, projecto, foto) VALUES (:nombre, :usuario, :password, :rol, :projecto, :foto)");

    $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
    $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
    $stmt->bindParam(":rol", $datos["rol"], PDO::PARAM_STR);
    $stmt->bindParam("projecto", $datos["projecto"], PDO::PARAM_STR);
    $stmt->bindParam(":foto", $datos["foto"], PDO::PARAM_STR);

    if($stmt->execute()){

      return "ok";  

    }else{

      return "error";
    
    }

    $stmt->close();
    
    $stmt = null;

  }

  //mostrar usuario

  static public function mdlMostrarUsuarios($tabla, $item, $valor){

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
  BORRAR USUARIO
  =============================================*/

  static public function mdlBorrarUsuario($tabla, $datos){

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
  MODELOS INSUMOS
  =============================================*/

  static public function mdlCrearInsumos($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombreUsuario, nombre, cantidad, costo, id_ubicacion, ubicacion, descripcion, codigo) VALUES (:nombreUsuario, :nombre, :cantidad, :costo, :id_ubicacion, :ubicacion, :descripcion, :codigo)");

    $stmt->bindParam(":nombreUsuario", $datos["nombreUsuario"], PDO::PARAM_STR);
    $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":cantidad", $datos["cantidad"], PDO::PARAM_STR);
    $stmt->bindParam(":costo", $datos["costo"], PDO::PARAM_STR);
    $stmt->bindParam(":id_ubicacion", $datos["id_ubicacion"], PDO::PARAM_INT);
    $stmt->bindParam(":ubicacion", $datos["ubicacion"], PDO::PARAM_STR);
    $stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
    $stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_INT);

    if($stmt->execute()){

      return "ok";  

    }else{

      return "error";
    
    }

    $stmt->close();
    
    $stmt = null;

  }



  /*=============================================
  MODELOS HISTORIAL INSUMOS
  =============================================*/

  static public function mdlCrearHistorialInsumos($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombreUsuario, nombre, cantidad, costo, id_ubicacion, ubicacion, descripcion, codigo) VALUES (:nombreUsuario, :nombre, :cantidad, :costo, :id_ubicacion, :ubicacion, :descripcion, :codigo)");

    $stmt->bindParam(":nombreUsuario", $datos["nombreUsuario"], PDO::PARAM_STR);
    $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":cantidad", $datos["cantidad"], PDO::PARAM_STR);
    $stmt->bindParam(":costo", $datos["costo"], PDO::PARAM_STR);
    $stmt->bindParam(":id_ubicacion", $datos["id_ubicacion"], PDO::PARAM_STR);
    $stmt->bindParam(":ubicacion", $datos["ubicacion"], PDO::PARAM_STR);
    $stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
    $stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_INT);

    if($stmt->execute()){

      return "ok";  

    }else{

      return "error";
    
    }

    $stmt->close();
    
    $stmt = null;

  }




  /*=============================================
  MODELOS HISTORIAL 
  =============================================*/

  static public function mdlCrearHistorialInsumos2($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombreUsuario, nombre, cantidad, costo, id_ubicacion, ubicacion, descripcion, codigo) VALUES (:nombreUsuario, :nombre, :cantidad, :costo, :id_ubicacion, :ubicacion, :descripcion, :codigo)");

    $stmt->bindParam(":nombreUsuario", $datos["nombreUsuario"], PDO::PARAM_STR);
    $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":cantidad", $datos["cantidad"], PDO::PARAM_STR);
    $stmt->bindParam(":costo", $datos["costo"], PDO::PARAM_STR);
    $stmt->bindParam(":id_ubicacion", $datos["id_ubicacion"], PDO::PARAM_STR);
    $stmt->bindParam(":ubicacion", $datos["ubicacion"], PDO::PARAM_STR);
    $stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
    $stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_INT);

    if($stmt->execute()){

      return "ok";  

    }else{

      return "error";
    
    }

    $stmt->close();
    
    $stmt = null;

  }



  /*=============================================
  INSERTAR EN OBJECTOS AL HACER LA TRASFERENCIA 
  =============================================*/

  static public function mdlCrearHistorialObjecto($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombreUsuario, nombre, cantidad, costo, id_ubicacion, ubicacion, descripcion, codigo) VALUES (:nombreUsuario, :nombre, :cantidad, :costo, :id_ubicacion, :ubicacion, :descripcion, :codigo)");

    $stmt->bindParam(":nombreUsuario", $datos["nombreUsuario"], PDO::PARAM_STR);
    $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":cantidad", $datos["cantidad"], PDO::PARAM_STR);
    $stmt->bindParam(":costo", $datos["costo"], PDO::PARAM_STR);
    $stmt->bindParam(":id_ubicacion", $datos["id_ubicacion"], PDO::PARAM_STR);
    $stmt->bindParam(":ubicacion", $datos["ubicacion"], PDO::PARAM_STR);
    $stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
    $stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_INT);

    if($stmt->execute()){

      return "ok";  

    }else{

      return "error";
    
    }

    $stmt->close();
    
    $stmt = null;

  }




  //mostrar insumo

  static public function mdlMostrarHistorialInsumos($tabla, $item3, $valor3){

    if($item3 != null){

    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item3 = :$item3");

    $stmt -> bindParam(":".$item3, $valor3, PDO::PARAM_STR);

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

  
  //mostrar historial insumo

  static public function mdlMostrarHistorialInsumos2($tabla, $item5, $valor5, $item4, $valor4){

    if($item4 != null){

    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item5 = :$item5");

    $stmt -> bindParam(":".$item5, $valor5, PDO::PARAM_STR);

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
       MOSTRAR HISTORIAL
      =============================================*/

      static public function mdlMostrarHistorial($tabla, $datos){
  
  if($datos["id_insumo"] != ""){

      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE codigo = :codigo");

      $stmt -> bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);

      $stmt -> execute();

      return $stmt -> fetch();

    }else{

      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE codigo = :codigo ORDER BY id");

      $stmt -> bindParam(":codigo", $datos["codigo"], PDO::PARAM_INT);

      $stmt -> execute();

      return $stmt -> fetchAll();

    }

    $stmt = null;

  }



  //mostrar ubicacion

  static public function mdlMostrarUbicacion($tabla, $item, $valor){    

    if($item != null){

      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

      $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

      $stmt -> execute();

      return $stmt -> fetch();

    }else{

      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

      $stmt -> execute();

      return $stmt -> fetchAll();

    }

 
}


  /*=============================================
  REGISTRO DE Empleado
  =============================================*/

  static public function mdlIngresarProyecto($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(ubicacion, ruta) VALUES (:ubicacion, :ruta)");

    $stmt->bindParam(":ubicacion", $datos["ubicacion"], PDO::PARAM_STR);
    $stmt->bindParam(":ruta", $datos["ruta"], PDO::PARAM_STR);
 

    if($stmt->execute()){

      return "ok";  

    }else{

      return "error";
    
    }

    $stmt->close();
    
    $stmt = null;

  }

}