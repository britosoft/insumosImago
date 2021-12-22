<?php

require_once "Conexion.php";

class ModeloMateriales{


  /*=============================================
  REGISTRO DE MATERIALES
  =============================================*/

  static public function mdlIngresarMateriales($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(material, descripcion, presupuesto, codigo, imagen) VALUES (:material, :descripcion, :presupuesto, :codigo, :imagen)");

    $stmt->bindParam(":material", $datos["material"], PDO::PARAM_STR);
    $stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
    $stmt->bindParam(":presupuesto", $datos["presupuesto"], PDO::PARAM_STR);
        $stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);

    $stmt->bindParam(":imagen", $datos["imagen"], PDO::PARAM_STR);

    if($stmt->execute()){

      return "ok";  

    }else{

      return "error";
    
    }

    $stmt->close();
    
    $stmt = null;

  }


  /*=============================================
  MOSTRAR MATERIALES
  =============================================*/


  static public function mdlMostrarMateriales($tabla, $item, $valor){

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
  ACTUALIZAR MATERIALES
  =============================================*/

  static public function mdlActualizarMateriales($tabla, $item1, $valor1, $item2, $valor2){

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
  EDITAR Materiales
  =============================================*/

  static public function mdlEditarMaterial($tabla, $datos){
  
    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET material = :material, descripcion = :descripcion, presupuesto = :presupuesto,  imagen = :imagen WHERE id = :id");

    $stmt -> bindParam(":material", $datos["material"], PDO::PARAM_STR);
    $stmt -> bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
    $stmt -> bindParam(":presupuesto", $datos["presupuesto"], PDO::PARAM_STR);
    $stmt -> bindParam(":imagen", $datos["imagen"], PDO::PARAM_STR);
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
  BORRAR MATERIALES
  =============================================*/

  static public function mdlBorrarMaterial($tabla, $datos){

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



}