
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Hacer Pedido</h1>
          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="innicio">Inicio</a></li>
              <li class="breadcrumb-item active">Hacer Pedido</li>
            </ol>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid card-body">
         <div class="row">

             <!-- PEDIDO -->
           <div class="col-sm-12 col-md-4">
           <form class="formularioPedido" role="form" method="post" enctype="multipart/form-data">
           <!-- NOMBRE DEL QUE REALIZA EL PEDIDO -->

            <div class="form-group">
              
              <div class="input-group">
            <label class="form-control">  Pedido por:</label>
                 <input type="text" class="form-control input-lg" id="solicitante" 
                 name="solicitante" value=" <?php echo $_SESSION["nombre"] ?> " required readonly>
                <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-user"></span>
            </div>
          </div>

              </div>

            </div>

            <div class=" form-group">
              
            <div class="input-group">

           <textarea class="form-control" rows="2" name="comentario" placeholder="¡Comentario general! ¿tienes algo que aclarar? "></textarea>
           <input type="hidden" id="listaProductos" name="listaProductos">
                <div class="input-group-append">
          <div class="input-group-text">
            <span class="fa fa-code"></span>
          </div>
        </div>
        </div>
        </div>



     <!-- CODIGO -->
 <!-- ENTRADA PARA EL CÓDIGO -->
             <?php

                    $item = null;
                    $valor = null;

                    $pedidos = ControladorPedidos::ctrMostrarPedidos($item, $valor);

                    if(!$pedidos){

                      echo '
                      <div class=" form-group">
              
                      <div class="input-group">
                      <input type="text" class="form-control" id="nuevaVenta" name="codigo" value="10001" readonly>
                          <div class="input-group-append">
                   
                  </div>
                      </div>
          
                    </div>';
                  

                    }else{

                      foreach ($pedidos as $key => $value) {
                        
                        
                      
                      }

                      $codigo = $value["codigo"] + 1;



                      echo '                   
            <div class=" form-group">
              
            <div class="input-group">
            <input type="text" class="form-control" id="codigo" name="codigo" value="'.$codigo.'" readonly>';

            

                    echo'<div class="input-group-append"> 

      <div class="input-group-text">
            <span class="fa fa-code"></span>
          </div>
        </div>
            </div>

          </div>';
                  

                    }

                    ?>


     <!-- MATERIAL-->
     <div class="nuevoPedido">
                         <?php
        
    

                    $pedidos = ControladorPedidos::ctrMostrarEmail();

                  
     

           echo' <input type="hidden" class="form-control" id="codigo" name="email" value="'.$pedidos["email"].'" readonly>';
                      ?>

            </div>

            <!-- agregar proyecto-->

            <div class="form-group">
          
              <div class="input-group">


                <select class="form-control select2bs4 cliente" name="proyecto" required>
                  
                  <option value="">Agregar Proyecto</option>
                     <?php
              $url = Ruta::frontend();   
              $item = null;
              $valor = null;
              $mostrarUbicacion =  ControladorEmpleados::ctrMostrarUbicacion($item, $valor);

              foreach ($mostrarUbicacion as $key => $value) {
          echo'
                  <option value="'.$value["id"].'">'.$value1["nombre"].' '.$value["ubicacion"].'</option>

                  ';}?>


                </select>

                  <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-user"></span>
            </div>
          </div>

              </div>

            </div>
            

          <div class="box-footer">

            <button type="submit" class="btn btn-warning pull-right">Realizar Pedido</button>

          </div>
          <?php
   $crearPedido = new ControladorPedidos();
   $crearPedido->ctrCrearPedido();
  
?>

            </form>
          </div>  
          
   
            

 <div class="col-sm-12 col-md-8">
            
       <table class="table  table table-striped table-bordered dt-responsive nowrap tablas tablaPedidos" style="width:100%; display: block;">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Material</th>          
            <th>Imagen</th>
           <th>Descripción</th>
           <th>Presupuesto</th>
           <th>Agregar</th>

         </tr> 

        </thead>

        <tbody>
         <?php

          $url = Ruta::backend();

          $item = null;
          $valor = null;

          $MostrarMateriales = ControladorMateriales::ctrMostrarMateriales($item, $valor);

          foreach($MostrarMateriales as $key => $value){

          
          echo'
          <tr>
            <td>'.($key + 1).'</td>
            <td>'.$value["material"].'</td>
            <td>';

         if($value["imagen"] == ""){
              echo'<img src="vistas/imagenes/materiales/no-image.png" class="img-thumbnail" width="75px">';
            }else{
               echo'<img src="'.$url.$value["imagen"].'" class="img-thumbnail" width="40px">';
            }
            echo'</td>
            <td><textarea class="form-control" readonly>'.$value["descripcion"].'</textarea></td>
            <td><button class="btn btn-success">'.number_format($value["presupuesto"], 2).'</button></td>
           
            <td>

              <div class="btn-group">                
               
              <div class="btn-group">
                  
                <button class="btn btn-warning agregarProducto recuperarBoton" idMaterial="'.$value["id"].'" >Agregar
                </button>           

              </div>              

              </div>  

            </td>

          </tr>';
                } 
            ?>


        </tbody>

       </table>
             
           </div>


         </div> 



         
        
        </div>
        <!-- /.card-body -->
    
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->