


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Historial Insumos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Historial Insumos</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">


       <table class="table  table table-striped table-bordered dt-responsive nowrap tablas" style="width:100%; display: block;">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Código</th>
           <th>Nombre</th>
           <th>Cantidad</th>
           <th>Costo</th>
           <th>Descripción</th>
           <th>Ubicación</th>
           <th>Agregado Por</th>
           <th>Fecha</th>

         </tr> 

        </thead>

        <tbody>

          <?php
       $url = Ruta::frontend();


          $item3 = "codigo";
          $valor3 =  $rutas[0];
          $historialInsumo = ControladorEmpleados::ctrMostrarHistorialInsumos($item3, $valor3);


        $datos = array('id_insumo'=>"",
                'codigo'=>$historialInsumo["codigo"]);

       $historial = ControladorEmpleados::ctrMostrarHistorial($datos);

          foreach($historial as $key => $value){
          
          echo'<tr>
            <td>'.($key + 1).'</td>
            <td>'.$value["codigo"].'</td>
            <td>'.$value["nombre"].'</td>
            <td class="bg-warning">'.$value["cantidad"].'</td>
            <td>'.$value["costo"].'</td>
            <td>'.$value["descripcion"].'</td>
            <td>'.$value["ubicacion"].'</td>
            <td>'.$value["nombreUsuario"].'</td>
            <td>'.$value["fecha"].'</td>

          </tr>';
          }
          ?>

        </tbody>

       </table>

        </div>
    
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>






 
