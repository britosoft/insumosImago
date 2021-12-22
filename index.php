<?php
session_start();


//llamamos los controladores
require_once'controladores/ControladorPlantilla.php';
require_once'controladores/ControladorEmpleados.php';
require_once'controladores/ControladorReporte.php';
require_once'controladores/ControladorGSistema.php';
require 'controladores/ControladorRuta.php';
require 'controladores/materiales_controlador.php';
require 'controladores/pedido_controlador.php';
//llamamos nuestra dependencia		
require_once "extensiones/PHPMailer/PHPMailerAutoload.php";
require_once "extensiones/vendor/autoload.php";



//llamamos los modelos 

include_once'modelos/ModeloEmpleados.php';
include_once'modelos/ModeloReporte.php';
include_once'modelos/ModelosGSistema.php';
include_once'modelos/materiales_modelo.php';
include_once'modelos/pedido_modelo.php';





//ejecutamos la vista al cargar el documento
$Plantilla =  new Plantilla();
$Plantilla->ctrPlantilla();
