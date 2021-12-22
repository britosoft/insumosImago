<?php

require_once "../controladores/ControladorEmpleados.php";
require_once "../modelos/ModeloEmpleados.php";

class AjaxEmpleado{

	/*=============================================
	EDITAR USUARIO
	=============================================*/	

	public $idEmpleado;

	public function ajaxEditarEmpleado(){

		$item = "id";
		$valor = $this->idEmpleado;

		$respuesta = ControladorEmpleados::ctrMostrarEmpleados($item, $valor);

	  echo json_encode($respuesta);


	}

	
}

/*=============================================
EDITAR EMPLEADO
=============================================*/
if(isset($_POST["idEmpleado"])){

	$editar = new AjaxEmpleado();
	$editar -> idEmpleado = $_POST["idEmpleado"];
	$editar -> ajaxEditarEmpleado();

}
