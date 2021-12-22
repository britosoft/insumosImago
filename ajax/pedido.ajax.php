<?php
require_once "../controladores/pedido_controlador.php";
require_once "../modelos/pedido_modelo.php";

class AjaxPedido{

	/*=============================================
	 PRODUCTO
	=============================================*/	

	public $idProducto;

	public function ajaxMostrarPedido(){

		$item = "codigoPedido";
		$valor = $this->idProducto;

		$respuesta = ControladorPedidos::ctrMostrarPedidos($item, $valor);



		echo json_encode($respuesta);

	}

		/*=============================================
	HISTORIAL PRODUCTO
	=============================================*/	

	public $codigoPedido;

	public function ajaxMostrarArchivoPedido(){

		$item = "codigoPedido";
		$valor = $this->codigoPedido;

		$respuesta = Pedido::ctrMostrarArchivos($item, $valor);



		echo json_encode($respuesta);

	}



}

/*=============================================
HISTORIAL PRODUCTO
=============================================*/
if(isset($_POST["id"])){

	$historial = new AjaxPedido();
	$historial -> idProducto= $_POST["idProducto"];
	$historial -> ajaxMostrarPedido();

}


