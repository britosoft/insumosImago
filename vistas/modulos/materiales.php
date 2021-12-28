
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Agregar Materiales</h1>
          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
              <li class="breadcrumb-item active">Administrar Materiales</li>
            </ol>
          </div>

        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">

        <div class="card-header">
             <button class="btn btn-dark" data-toggle="modal" data-target="#modalMateriales">
          
          Crear Materiales

        </button>

      </div>

      
        </div>

        <div class="empleado">
          
  <table class="table  table table-striped table-bordered dt-responsive nowrap tablas" style="width:100%; display: block;">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Codigo</th>          
           <th>Material</th>          
            <th>Imagen</th>
           <th>Descripción</th>
           <th>Presupuesto</th>
           <th>Materiales</th>

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
            <td>'.$value["codigo"].'</td>
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
                  
                <button class="btn btn-warning EditarMaterial " idMaterial="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarMaterial"><i class="fas fa-pencil-alt"></i></button>

               <button class="btn btn-danger EliminarMaterial" idMaterial="'.$value["id"].'" data-toggle="modal" data-target="#modalEliminarMaterial" idImagen="'.$value["imagen"].'" material="'.$value["material"].'">
             <i class="fas fa-times"></i>
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
        <!-- /.card-body -->
    
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->






<!--=====================================
MODAL Agregar Materiales
======================================-->

<div id="modalMateriales" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

     
      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header bg-dark" style=" color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title ml-2">Agregar  Materiales</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->
        <div class="modal-body">

          <div class="box-body">
             <!-- ENTRADA PARA EL CÓDIGO -->
             <?php

                    $item = null;
                    $valor = null;

                    $ventas = ControladorMateriales::ctrMostrarMateriales($item, $valor);

                    if(!$ventas){

                      echo '
                      <div class=" form-group">
              
                      <div class="input-group">
                      <input type="text" class="form-control" id="nuevaVenta" name="codigo" value="10001" readonly>
                          <div class="input-group-append">
                   
                  </div>
                      </div>
          
                    </div>';
                  

                    }else{

                      foreach ($ventas as $key => $value) {
                        
                        
                      
                      }

                      $codigo = $value["codigo"] + 1;



                      echo '                   
            <div class=" form-group">
            <label>Código</label>

              
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
                 <input type="text" class="form-control input-lg"  name="nuevoMaterial" value="" placeholder="Ingrese el material" required >
                <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-hammer"></span>
            </div>
          </div>

              </div>

            </div>


            <!-- ENTRADA LA DESCRIPCION-->

            <div class="form-group">
              
              <div class="input-group">
              <textarea class="form-control" placeholder="Descripción"  name="descripcion"></textarea>
                <div class="input-group-append">
            <div class="input-group-text">
              <span class="far fa-comments"></span>
            </div>
          </div>

              </div>

            </div>

            <!-- ENTRADA PARA LA CONTRASEÑA -->

                 <div class="form-group">
              
              <div class="input-group">
                 <input type="number" class="form-control input-lg" name="presupuesto" placeholder="
                 Presupuesto" required="">
           
                <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-sliders-h"></span>
            </div>
          </div>

              </div>

            </div>
       
          
            <!-- ENTRADA PARA SUBIR FOTO -->

             <div class="form-group">
              
              <div class="panel">SUBIR FOTO</div>

              <input type="file" id="nuevaFoto" name="nuevaFoto">

              <p class="help-block">Peso máximo de la foto 200 MB</p>

              <img src="" class="img-thumbnail" id="previsualizarImagen"  width="100px" >
              

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn bg-dark">Agregar Material</button>

        </div>

     <?php

          $agregarMaterial = new ControladorMateriales();
          $agregarMaterial -> ctrCrearMaterial();

        ?> 

      </form>

    </div>

  </div>

</div>





<!--=====================================
MODAL Editar Materiales
======================================-->

<div id="modalEditarMaterial" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

     
      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header bg-dark" style=" color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title ml-2">Agregar  Materiales</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- material-->

            <div class="form-group">
              
              <div class="input-group">
                 <input type="text" class="form-control input-lg"  id="material" name="editarMaterial">

                 <input type="hidden" class="form-control input-lg"  id="idMaterial" name="idMaterial">

                <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-hammer"></span>
            </div>
          </div>

              </div>

            </div>

            <!-- DESCRIPCION-->

            <div class="form-group">
              
              <div class="input-group">
              <textarea class="form-control" placeholder="Descripción" id="descripcion" name="editarDescripcion"></textarea>
                <div class="input-group-append">
            <div class="input-group-text">
              <span class="far fa-comments"></span>
            </div>
          </div>

              </div>

            </div>

            <!-- ENTRADA PARA LA CONTRASEÑA -->

                 <div class="form-group">
              
              <div class="input-group">
                 <input type="number" class="form-control input-lg" id="presupuesto" name="editarPresupuesto" placeholder="
                 Presupuesto" required="">
           
                <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-sliders-h"></span>
            </div>
          </div>

              </div>

            </div>
       


          
            <!-- ENTRADA PARA SUBIR FOTO -->

             <div class="form-group">
              
              <div class="panel">SUBIR FOTO</div>

              
              <input type="file" class="nuevaFoto" name="editarFoto" id="editarFoto" >

              <p class="help-block">Peso máximo de la foto 2MB</p>

              <img src="vistas/imagenes/materiales/no-image.png" id="previsualizarImagenEditar" class="img-thumbnail"  width="100px" >

              <input type="hidden" name="fotoActual" id="fotoActual" value="">

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn bg-dark">Actualizar Material</button>

        </div>

     <?php

          $EditarMaterial = new ControladorMateriales();
          $EditarMaterial -> ctrEditarMateriales();

        ?> 

      </form>

    </div>

  </div>

</div>



     <?php

          $BorrarMaterial = new ControladorMateriales();
          $BorrarMaterial -> ctrBorrarMaterial();

        ?> 