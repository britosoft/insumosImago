 <?php

  $servidor = Ruta::backend();
  $url = Ruta::frontend();


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Insumos Grupo Imago</title>
<link rel="icon" type="text/css" href="<?php echo $servidor; ?>vistas/imagenes/portada/logoImagoo.jpeg">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $servidor; ?>vistas/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $servidor; ?>vistas/css/plugins/adminlte.min.css">
  <!--sweetalert css -¡-->
 <link rel="stylesheet" href="<?php echo $servidor; ?>vistas/css/plugins/sweetalert.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $servidor; ?>vistas/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $servidor; ?>vistas/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $servidor; ?>vistas/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<!-- Select2 -->
  <link rel="stylesheet" href="<?php echo $servidor; ?>vistas/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo $servidor; ?>vistas/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<!--sweetalert js -¡-->
  <script src="<?php echo $servidor; ?>vistas/js/plugins/sweetalert.min.js"></script>
<script src="<?php echo $servidor; ?>vistas/plugins/jquery/jquery.min.js"></script>
<!-- jQuery -->
<!-- Bootstrap 4 -->
<!-- AdminLTE App -->

<script src="<?php echo $servidor; ?>vistas/js/plugins/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo $servidor; ?>vistas/js/plugins/demo.js"></script>
<body class="hold-transition sidebar-mini">

<script src="<?php echo $servidor; ?>vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>


<!-- DataTables  & Plugins -->
<script src="<?php echo $servidor; ?>vistas/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo $servidor; ?>vistas/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo $servidor; ?>vistas/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo $servidor; ?>vistas/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo $servidor; ?>vistas/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo $servidor; ?>vistas/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo $servidor; ?>vistas/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo $servidor; ?>vistas/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo $servidor; ?>vistas/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo $servidor; ?>vistas/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo $servidor; ?>vistas/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo $servidor; ?>vistas/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Select2 -->
<script src="<?php echo $servidor; ?>vistas/plugins/select2/js/select2.full.min.js"></script>


</head>

<?php
  if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok"){
   

 include 'modulos/cabezote.php';
 include 'modulos/menu.php';

    
    $rutas = array();
    $historial = null;
    $rutaUbicacion = null; 
    $ruta  = null;

  if(isset($_GET["ruta"])){  

     $rutas = explode("/", $_GET["ruta"]);

     $item  = "ruta";
     $valor = $rutas[0];

      $rutaUbicacion = $MostrarHistorialInsumos =  ControladorEmpleados::ctrMostrarUbicacion($item, $valor);

     if(is_array($rutas[0]) && $rutas[0] == $rutaUbicacion["ruta"]){

      $ruta = $rutas[0];

      }else{

      }
#Historial insumo
      $item3  = "codigo";
      $valor3 = $rutas[0];

   $historial = ControladorEmpleados::ctrMostrarHistorialInsumos($item3, $valor3);

       if(is_array($rutas[0]) && $rutas[0] ==  $historial["codigo"]){

        $ruta = $rutas[0];

      }
      #Grupos de Pedidos
      $item4  = "codigo";
      $valor4 = $rutas[0];

   $pedidosGroup = ControladorPedidos::ctrMostrarPedidosGroup($item4, $valor4);

       if(is_array($rutas[0]) && $rutas[0] ==  $pedidosGroup["codigo"]){

        $ruta = $rutas[0];

      }
     /*=============================================
    LISTA BLANCA DE URL'S AMIGABLES
    =============================================*/
     if($rutaUbicacion != null){

        include "modulos/insumos.php";

     }else if($historial != null){

        include "modulos/historialInsumo.php";

     }else if($pedidosGroup!= null){

       include "modulos/pedidos_group.php";

    }else if($ruta != null || $rutas[0] == "inicio" ||
     $rutas[0] == "usuarios" ||
     $rutas[0] == "empleados" ||
     $rutas[0] == "insumos" ||
     $rutas[0] == "proyectos" ||
     $rutas[0] == "salir" ||
     $rutas[0] == "crear-pedidos" ||
     $rutas[0] == "materiales" ||
     $rutas[0] == "materialesProjectos" ||

      $rutas[0] == "mi_pedidos" ||
     $rutas[0] == "gestorSistema"){

      include "modulos/".$rutas[0].".php";
  

}else{
  include'modulos/404.php';
}


}else{

  include "modulos/inicio.php";


}
include 'modulos/footer.php';



}else{
 include 'modulos/login.php';

}
?>
  <!-- /.ruta oculta-->

  <input type="hidden" value="<?php echo $url; ?>" id="rutaOculta">


<!-- ./wrapper ---->
<script src="<?php echo $servidor; ?>vistas/js/plantilla.js"></script>
<script src="<?php echo $servidor; ?>vistas/js/empresas.js"></script>
<script src="<?php echo $servidor; ?>vistas/js/usuario.js"></script>
<script src="<?php echo $servidor; ?>vistas/js/materiales.js"></script>
<script src="<?php echo $servidor; ?>vistas/js/proyecto.js"></script>
<script src="<?php echo $servidor; ?>vistas/js/pedido.js"></script>
<!--<script src="<?php echo $servidor; ?>vistas/js/buscadorUsuario.js"></script>---->

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>


</body>
</html>
