
<?php
  if($_SESSION["rol"] != "Administrador"){

    echo '<script>
  
    window.location = "proyectos";
</script>';



  }

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tablero</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Tablero</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->       
        <div class="card-body col-xs-12 d-flex justify-content-between">
           

                <?php 
error_reporting(0);  

          $item = null;
          $valor = null;
          $MostrarUsuarios = ControladorEmpleados::ctrMostrarUsuarios($item, $valor);

 // var_dump($MostrarUsuarios);

 $cantidad = 0;

if (is_array($MostrarUsuarios)) {  

  foreach ($MostrarUsuarios as $key => $value) {

    if ($value["id"] != "") {  

      $cantidad++; 
  //var_dump($cantidad);

      } 
   }
}


                ?>


          <!-- ./col -->
          <div class="col-sm-6 col-lg-4">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
             <?php 


          $item = null;
          $valor = null;
          $MostrarUsuarios = ControladorEmpleados::ctrMostrarUsuarios($item, $valor);

 // var_dump($MostrarUsuarios);

 $cantidad = 0;

if (is_array($MostrarUsuarios)) {  

  foreach ($MostrarUsuarios as $key => $value) {

    if ($value["id"] != "") {  

      $cantidad++; 
 // var_dump($cantidad);

      } 
   }
}

               echo' <h3 class="text-white">'.$cantidad.'</h3>';

                ?>

                <p class="mr-3 text-white">Usuarios Registrados</p>
              </div>
              <div class="icon">
                <i class="fas fa-users ml-3"></i>
              </div>
              <a href="<?php echo $servidor; ?>usuarios" class="small-box-footer text-white" style="color: #fff">Más información <i class="fas fa-arrow-circle-right text-white"></i></a>
            </div>
          </div>
                <!-- ./col -->
          <div class="col-sm-6 col-lg-4">
            <!-- small box -->
            <div class="small-box bg-dark">
              <div class="inner">
                <?php 


          $item1 = null;
          $ctrMostrarInsumos = ControladorEmpleados::ctrMostrarInsumos($item1);

          foreach ($ctrMostrarInsumos as $key => $value) {
         

      $arrayTotal = array($value["cantidad"]);

    #Sumamos los pagos que ocurrieron el mismo mes
    foreach ($arrayTotal as $key => $value) {
      
      $sumaTotal += $value;

    }

}

 
              echo' <h3>'.$sumaTotal.'</h3>';


                ?>

                <p class="mr-3">Insumos Registrados</p>
              </div>
              <div class="icon">
                <i class="fas fa-wrench ml-3"></i>
              </div>
              <a href="<?php echo $servidor; ?>insumos" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>




          <!-- ./col -->
          <div class="col-sm-6 col-lg-4">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
             <?php 
             $item = null;
              $valor = null;
              $mostrarUbicacion =  ControladorEmpleados::ctrMostrarUbicacion($item, $valor);


 // var_dump($MostrarUsuarios);

 $cantidad = 0;

if (is_array($mostrarUbicacion)) {  

  foreach ($mostrarUbicacion as $key => $value) {

    if ($value["id"] != "") {  

      $cantidad++; 
 // var_dump($cantidad);

      } 
   }
}

               echo' <h3 class="text-white">'.$cantidad.'</h3>';

                ?>

                <p class="mr-3 text-white">Proyectos Registrados</p>
              </div>
              <div class="icon">
                <i class="fa fa-hard-hat ml-3"></i>
              </div>
              <a href="<?php echo $servidor; ?>proyectos" class="small-box-footer text-white" style="color: #fff">Más información <i class="fas fa-arrow-circle-right text-white"></i></a>
            </div>
          </div>



          </div>
          </div>






