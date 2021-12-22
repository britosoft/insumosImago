



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Administrar Insumos</h1>
          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="innicio">Inicio</a></li>
              <li class="breadcrumb-item active">Administrar Insumos</li>
            </ol>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">

        <div class="card-header">
             <button class="btn btn-dark" data-toggle="modal" data-target="#modalAgregarEmpleado">
          
          Agregar Insumo

        </button>

      </div>

      
        </div>

        <div class="empleado">          

       <table class="table  table table-striped table-bordered dt-responsive nowrap tablas tabla" style="width:100%; display: block;">
         
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
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>
          
          <?php
          //error_reporting(0);
    


                    $item  = "ruta";
                    $valor = $rutas[0];

                   $ubicaciones =ControladorEmpleados::ctrMostrarUbicacion($item, $valor);

                    $item1 =  $ubicaciones["id"];
                    $insumos = ControladorEmpleados::ctrMostrarInsumos($item1);

      

        foreach ($insumos as $key => $value) {

     
          
          echo'<tr>
            <td>'.($key + 1).'</td>
            <td>'.$value["codigo"].'</td>
            <td>'.$value["nombre"].'</td>
            <td class="bg-warnin">'.$value["cantidad"].'</td>
            <td>$'.$value["costo"].'</td>
            <td>'.$value["descripcion"].'</td>
            <td>'.$value["ubicacion"].'</td>               
            <td>'.$value["nombreUsuario"].'</td>
            <td>'.$value["fecha"].'</td>
            <td>

   <div class="btn-group">
        <a href="'.$url.$value["codigo"].'">
         <button type="button" class="btn btn-warning text-white"><i class="far fa-eye"></i></button>

        </a>

         <button type="button " class="btn btn-dark text-white transferir"  idInsumo="'.$value["id"].'" 
         data-toggle="modal" data-target="#modalInsumo" ><i class="fas fa-wrench"></i></button> 

         <button class="btn btn-warning transferir " idInsumo="'.$value["id"].'"
          data-toggle="modal" data-target="#modalEditarInsumo"><i class="fas fa-pencil-alt"></i></button>
           </div>
 
            </td>
  

            </tr>';
          }
?>
           

        </tbody>

       </table>

        
        </div>
        <!-- /.card-body -->
    
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->








<!--=====================================
MODAL  TRASNFERIR INSUMO
======================================-->

<div id="modalInsumo" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header bg-dark" style="color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title ml-2">Trasferir  Insumo</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">



                <!--=====================================
                ENTRADA DEL CODIGO PEDIDO
                ======================================--> 

                      <div class=" form-group">
                    <label>Codigo</label>

              
                      <div class="input-group">
                      <input type="text" class="form-control" id="codigoTrasferir" name="codigoh"  readonly>
                          <div class="input-group-append">
                   
                  </div>
                      </div>
          
                    </div>                   
        

            <!-- ENTRADA PARA EL NOMBRE -->


            <div class="form-group">
              <label>Usuario</label>
              
              <div class="input-group">
                 <?php  echo '<input type="text" class="form-control input-lg"  name="nombreUsuarioh" value="'.$_SESSION["nombre"].'"required readonly>';?>
                <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-user"></span>
            </div>
          </div>

              </div>

            </div>

             <input type="hidden" class="form-control input-lg" id="id" name="id" readonly="">

                <!-- ENTRADA PARA EL INSUMO -->

                 <div class="form-group">
              <label>Insumo</label>

              
              <div class="input-group">
                 <input type="text" class="form-control input-lg" class="insumo" id="insumo" name="insumoh"   placeholder="Nombre del Insumo"  required="" readonly="">
           
                <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-th"></span>
            </div>
          </div>
            </div>
            </div>


       <!-- ENTRADA PARA EL CANTIDAD-->

                 <div class="form-group">

              
              <div class="input-group">
                 <input type="hidden" class="form-control input-lg" name="cantidad" id="cantidad"    readonly="">
           
               
            </div>
            </div>

            <!-- ENTRADA PARA LA CANTIDAD -->

                 <div class="form-group">
              <label>Cantidad a trasferir</label>

              
              <div class="input-group">
                 <input type="number" class="form-control input-lg" name="trasfererenciah"  id="trasferencia" placeholder="¿Cuántos insumos desea trasferir?"  required="">
           
                <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-th"></span>
            </div>
          </div>
            </div>
            </div>
             <!-- COST0 -->

                 <div class="form-group">
              <label>Costo</label>

              
              <div class="input-group">
                 <input type="text" class="form-control input-lg" name="costoh" id="costo" placeholder="Costo del quipo"  required="" readonly="">
           
                <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-dollar-sign"></span>
            </div>
          </div>
            </div>
            </div>

              <!-- ENTRADA PARA LA UBICACION -->

                 <div class="form-group">

              
              <div class="input-group">
               <select class="form-control tituloHistorialCategoria"  name="id_ubicacionh" required="">

                 <option selected="">¿Hacia dónde desea trasfir?</option>
                   <?php 
              $item = null;
              $valor = null;
              $mostrarUbicacion =  ControladorEmpleados::ctrMostrarUbicacion($item, $valor);

              foreach ($mostrarUbicacion as $key => $value) {
                 echo'<option value="'.$value["id"].'">'.$value["ubicacion"].'</option>';
               }?>
                 </select>
                 
           
                <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-map-marker"></span>
            </div>
          </div>
            </div>
            </div>

                <input type="hidden" class="form-control input-lg histotialInsumo" name="ubicacionh"  readonly="">  

                 <input type="hidden" class="form-control input-lg " id="ubicacionHistorial" name="ubicacionHistorial"  readonly="">                           

                  <!-- ENTRADA PARA LA DESCRIPCION -->

               <div class="input-group mb-3">
               <div class=" input-group-append">

                 <textarea  rows="4" cols="50" maxlength="400" name="descripcionh" placeholder="Puedes darnos una breve descripcion sobre la trasferencia y el insumo"   required=""></textarea>

                
               </div>
          

            </div>

            </div>
            </div>



        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Trasferir Insumo</button>

        </div>

     <?php

         $ActualizarInsumos = new ControladorEmpleados();
         $ActualizarInsumos -> ctrActualizarInsumos();


          $HistorialInsumos = new ControladorEmpleados();
          $HistorialInsumos -> ctrCrearhistorialInsumos2();

           $HistorialInsumos = new ControladorEmpleados();
          $HistorialInsumos -> ctrCrearhistorialObjecto()

        ?> 

      </form>

    </div>

  </div>

</div>

 

<!--=====================================
MODAL  EDITAR INSUMO
======================================-->

<div id="modalEditarInsumo" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header bg-dark" style="color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title ml-2">Actualizar Insumo</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

                <!--=====================================
                ENTRADA DEL CODIGO PEDIDO
                ======================================--> 

                      <div class=" form-group">
                    <label>Codigo</label>

              
                      <div class="input-group">
                      <input type="text" class="form-control" id="editarCodigoTrasferir" name="codigoh"  readonly>
                          <div class="input-group-append">
                   
                  </div>
                      </div>
          
                    </div>                          

            <!-- ENTRADA PARA EL NOMBRE -->

            <div class="form-group">
              <label>Usuario</label>
              
              <div class="input-group">
                 <?php  echo '<input type="text" class="form-control input-lg"  name="nombreUsuarioh" value="'.$_SESSION["nombre"].'" readonly>';?>
                <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-user"></span>
            </div>
          </div>

              </div>

            </div>

             <input type="hidden" class="form-control input-lg" id="editarId" name="id" readonly="">

                <!-- ENTRADA PARA EL INSUMO -->

                 <div class="form-group">
              <label>Insumo</label>

              
              <div class="input-group">
                 <input type="text" class="form-control input-lg" class="insumo" id="editarInsumo" name="insumoh"   placeholder="Nombre del Insumo">
           
                <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-th"></span>
            </div>
          </div>
            </div>
            </div>


       <!-- ENTRADA PARA EL CANTIDAD-->

                 <div class="form-group">
              <label>Cantidad</label>

              
              <div class="input-group">
                 <input type="text" class="form-control input-lg" name="cantidadh" id="editarCantidad"  placeholder="Cantidadh">
           
                <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-th"></span>
            </div>
          </div>
            </div>
            </div>
           
            <input type="hidden" class="form-control input-lg histotialInsumo" name="ubicacionh"  readonly="">  

      <input type="hidden" class="form-control input-lg " id="editarUbicacionHistorial" name="ubicacionHistorial"  readonly="">                           


            
             <!-- COST0 -->

                 <div class="form-group">
              <label>Costo</label>

              
              <div class="input-group">
                 <input type="text" class="form-control input-lg" name="costoh" id="editarCosto" placeholder="Costo del quipo"  required="" readonly="">
           
                <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-dollar-sign"></span>
            </div>
          </div>
            </div>
            </div>

             

                               

                  <!-- ENTRADA PARA LA DESCRIPCION -->

               <div class="input-group mb-3">
               <div class=" input-group-append">

                 <textarea  rows="4" cols="50" maxlength="400"id="editarDescripcion"  name="descripcionh" placeholder="Puedes darnos una breve descripcion sobre la trasferencia y el insumo"   required=""></textarea>

                
               </div>
          

            </div>
            </div>



        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-dark">Actualizar Insumo</button>

        </div>

     <?php

         $ActualizarInsumos = new ControladorEmpleados();
         $ActualizarInsumos -> ctrActualizarInsumos();


          $HistorialInsumos = new ControladorEmpleados();
          $HistorialInsumos -> ctrCrearhistorialInsumos2();

        ?> 

      </form>

    </div>

  </div>

</div>
</div>


<!--=====================================
MODAL EDITAR Empleado
======================================-->

<div id="modalAgregarEmpleado" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

     
      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header bg-dark" style="color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title ml-2">Agregar  Insumo</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">



                <!--=====================================
                ENTRADA DEL CODIGO PEDIDO
                ======================================--> 

                 <?php
                 $item1 = null;
                    $insumos = ControladorEmpleados::ctrMostrarInsumos($item1);


                    if(!$insumos){

                      echo '
                      <div class=" form-group">
              
                      <div class="input-group">
                      <input type="text" class="form-control" id="codigo" name="codigo" value="10001" readonly>
                          <div class="input-group-append">
                   
                  </div>
                      </div>
          
                    </div>';
                  

                    }else{

                      foreach ($insumos as $key => $value) {
                        
                        
                      
                      }

                      $codigo = $value["codigo"] + 1;



                      echo '                   
            <div class=" form-group">
              
            <div class="input-group">
            <input type="text" class="form-control" id="codigo" name="codigo" value="'.$codigo.'" readonly>
                <div class="input-group-append">
          <div class="input-group-text">
            <span class="fa fa-code"></span>
          </div>
        </div>
            </div>

          </div>';
                  

                    }

                    ?>

            <!-- ENTRADA PARA EL NOMBRE -->


            <div class="form-group">
              
              <div class="input-group">
                 <?php  echo '<input type="text" class="form-control input-lg" name="nombreUsuario" value="'.$_SESSION["nombre"].'"required readonly>';?>
                <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-user"></span>
            </div>
          </div>

              </div>

            </div>


       <!-- ENTRADA PARA EL INSUMO -->

                 <div class="form-group">
              
              <div class="input-group">
                 <input type="text" class="form-control input-lg" name="insumo"   placeholder="Nombre del Insumo"  required="">
           
                <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-th"></span>
            </div>
          </div>
            </div>
            </div>

            <!-- ENTRADA PARA LA CANTIDAD -->

                 <div class="form-group">
              
              <div class="input-group">
                 <input type="number" class="form-control input-lg" name="cantidad"   placeholder="Cantidad"  required="">
           
                <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-th"></span>
            </div>
          </div>
            </div>
            </div>
             <!-- COST0 -->

                 <div class="form-group">
              
              <div class="input-group">
                 <input type="number" class="form-control input-lg" name="costo" placeholder="Costo del quipo"  required="">
           
                <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-th"></span>
            </div>
          </div>
            </div>
            </div>

              <!-- ENTRADA PARA LA UBICACION -->

                 <div class="form-group">
              
              <div class="input-group">
               <select class="form-control tituloCategoria" name="id_ubicacion" required="">

                 <option selected="">Ubicacion</option>
                   <?php 
              $item = null;
              $valor = null;
              $mostrarUbicacion = ControladorEmpleados::ctrMostrarUbicacion($item, $valor);

              foreach ($mostrarUbicacion as $key => $value) {
                 echo'<option value="'.$value["id"].'">'.$value["ubicacion"].'</option>';
               }?>
                 </select>
                 
           
                <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-map-marker"></span>
            </div>
          </div>
            </div>
            </div>
             <input type="hidden" class="form-control input-lg ubicacion ruta" name="ubicacion"  readonly="">                            

                

                  <!-- ENTRADA PARA LA DESCRIPCION -->

               <div class="input-group mb-3">
               <div class=" input-group-append">

                 <textarea  rows="4" cols="25" maxlength="400" name="descripcion" placeholder="Maximo 400 caráteres"   required=""></textarea>

                
               </div>
          

            </div>
            </div>


        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-dark">Agregar Insumo</button>

        </div>
       <?php

          $crearInsumos = new ControladorEmpleados();
          $crearInsumos -> ctrCrearInsumos();


          $crearHistorialInsumos = new ControladorEmpleados();
          $crearHistorialInsumos -> ctrCrearhistorialInsumos();

        ?> 
 

      </form>

    </div>

  </div>

</div>






