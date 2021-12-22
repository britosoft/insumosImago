<?php

require_once "../controladores/ControladorEmpleados.php";
require_once "../modelos/ModeloEmpleados.php";

class AjaxUbicacion{

	/*=============================================
	EDITAR UBICACION
	=============================================*/	

	public $idUbicacion;

	public function ajaxEditarUbicacion(){

		$item = "id";
		$valor = $this->idUbicacion;

		$respuesta = ControladorEmpleados::ctrMostrarUbicacion($item, $valor);

	  echo json_encode($respuesta);


	}

	
}

/*=============================================
EDITAR EMPLEADO
=============================================*/
if(isset($_POST["idUbicacion"])){

	$editar = new AjaxUbicacion();
	$editar -> idUbicacion = $_POST["idUbicacion"];
	$editar -> ajaxEditarUbicacion();

}
