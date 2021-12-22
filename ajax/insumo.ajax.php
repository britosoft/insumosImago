<?php

require_once "../controladores/ControladorEmpleados.php";
require_once "../modelos/ModeloEmpleados.php";

class AjaxUbicacion{

	/*=============================================
	MOSTRAR UBICACION
	=============================================*/	

	public $idUbicacion;

	public function ajaxMostrarUbicacion(){

		$item = "id";
		$valor = $this->idUbicacion;

		$respuesta = ControladorEmpleados::ctrMostrarUbicacion($item, $valor);

	  echo json_encode($respuesta);


	}

/*=============================================
	MOSTRAR INSUMO
	=============================================*/	

	public $idInsumo;

	public function ajaxMostrarInsumo(){

		$item = "id";
		$valor = $this->idInsumo;


		$respuesta = ControladorEmpleados::ctrMostrarInsumosAjax($item, $valor);

	  echo json_encode($respuesta);


	}
	
}

/*=============================================
INSUMO
=============================================*/
if(isset($_POST["idInsumo"])){

	$mostrarInsumo = new AjaxUbicacion();
	$mostrarInsumo -> idInsumo = $_POST["idInsumo"];
	$mostrarInsumo -> ajaxMostrarInsumo();

}

/*=============================================
UBICACION
=============================================*/
if(isset($_POST["idUbicacion"])){

	$mostrarUbicacion = new AjaxUbicacion();
	$mostrarUbicacion -> idUbicacion = $_POST["idUbicacion"];
	$mostrarUbicacion -> ajaxMostrarUbicacion();

}
