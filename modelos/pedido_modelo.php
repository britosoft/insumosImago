<?php

require_once "Conexion.php";

class ModeloPedidos{
/*=============================================
  REGISTRO DE Pedidos
  =============================================*/

  static public function mdlIngresarPedido($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(codigo, material, solicitante, proyecto, aprobado, enviado, recibido, comentario) VALUES (:codigo, :material, :solicitante, :proyecto,  :aprobado, :enviado, :recibido, :comentario)");

    $stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_INT);
    $stmt->bindParam(":material", $datos["material"], PDO::PARAM_STR);
    $stmt->bindParam(":solicitante", $datos["solicitante"], PDO::PARAM_STR);
    $stmt->bindParam(":proyecto", $datos["proyecto"], PDO::PARAM_STR);
    $stmt->bindParam(":aprobado", $datos["aprobado"], PDO::PARAM_INT);
    $stmt->bindParam(":enviado", $datos["enviado"], PDO::PARAM_INT);
    $stmt->bindParam(":recibido", $datos["recibido"], PDO::PARAM_INT);
    $stmt->bindParam(":comentario", $datos["comentario"], PDO::PARAM_STR);

    if($stmt->execute()){

      return "ok";  

    }else{

      return "error";
    
    }

    $stmt->close();
    
    $stmt = null;

  }

  /*=============================================
  MOSTRAR Pedidos
  =============================================*/


  static public function mdlMostrarPedidos($tabla, $item, $valor){

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
  MOSTRAR Email
  =============================================*/


  static public function mdlMostrarEmail($tabla){

    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

    $stmt -> execute();

    return $stmt -> fetch();

  

}


  //mostrar pedidos

  static public function mdlMostrarPedidosGroup($tabla, $item4, $valor4){

    if($item4 != null){

    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item4 = :$item4");

    $stmt -> bindParam(":".$item4, $valor4, PDO::PARAM_STR);

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
       MOSTRAR pedidos group
      =============================================*/

      static public function mdlMostrarGroup($tabla, $datos){
  
  if($datos["id_pedidoGroup"] != ""){

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


}