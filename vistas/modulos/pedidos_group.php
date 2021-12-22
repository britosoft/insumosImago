


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pedidos Group</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Pedidos Group</li>
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
           <th>Aprobado</th>
           <th>Enviado</th>
           <th>Recibido</th>
           <th>Solicitante</th>
           <th>Fecha</th>

         </tr> 

        </thead>

        <tbody>

          <?php
       $url = Ruta::frontend();


          $item4 = "codigo";
          $valor4 =  $rutas[0];
          $pedidoGroup = ControladorPedidos::ctrMostrarPedidosGroup($item4, $valor4);


        $datos = array('id_pedidoGroup'=>"",
                'codigo'=>$pedidoGroup["codigo"]);

       $historial = ControladorPedidos::ctrMostrarGroup($datos);

          foreach($historial as $key => $value){
        

            $producto = json_decode($value["material"], true);
            //var_dump($producto);      

          
          
          echo'<tr>
           
           ';

            if($producto!= null){

              for($i = 0; $i < count($producto); $i++){

            echo' <td>'.($i+1).'</td>
            <td>'.$value["codigo"].'</td>
            <td>'.$producto[$i]["material"].'</td>
            <td>'.$producto[$i]["cantidad"].'</td>
            <td>'.$value["aprobado"].'</td>
            <td>'.$value["enviado"].'</td>
            <td>'.$value["recibido"].'</td>
            <td>'.$value["solicitante"].'</td>
            <td>'.$value["fecha"].'</td>
           ';

            
            

          echo'</tr>';
        }
      }
          }
          ?>

        </tbody>

       </table>

        </div>
    
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>






 
