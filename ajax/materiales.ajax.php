<?php

require_once "../controladores/materiales_controlador.php";
require_once "../modelos/materiales_modelo.php";

class AjaxMateriales{

	/*=============================================
	EDITAR MATERIALES
	=============================================*/	

	public $idMaterial;

	public function ajaxEditarMaterial(){

		$item = "id";
		$valor = $this->idMaterial;

		$respuesta = ControladorMateriales::ctrMostrarMateriales($item, $valor);

	  echo json_encode($respuesta);


	}

	
}

/*=============================================
EDITAR MATERIALES
=============================================*/
if(isset($_POST["idMaterial"])){

	$editar = new AjaxMateriales();
	$editar -> idMaterial = $_POST["idMaterial"];
	$editar -> ajaxEditarMaterial();

}
