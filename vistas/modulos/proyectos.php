


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Proyectos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Proyectos</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Default box -->
      <div class="card">

        <div class="card-header">
             <button class="btn btn-dark" data-toggle="modal" data-target="#modalAgregarProyectos">
          
          Agregar Proyectos

        </button>

      </div>

      
        </div>

    <!-- Main content -->
    <section class="content">


       <table class="table  table table-striped table-bordered dt-responsive nowrap tablas" style="width:100%; display: block;">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Nombre</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>

          <?php
       $url = Ruta::frontend();

        
              $item = null;
              $valor = null;
              $mostrarUbicacion =  ControladorEmpleados::ctrMostrarUbicacion($item, $valor);

              foreach ($mostrarUbicacion as $key => $value) {
          echo'<tr>
            <td>'.($key + 1).'</td>
            <td>'.$value["ubicacion"].'</td>
                      
            <td>

              <div class="btn-group">
                  
               
              <div class="btn-group">
                  
        <button class="btn btn-warning EditarUbicacion" 
        idUbicacion="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarProyecto"><i class="fas fa-pencil-alt"></i></button>

               <button class="btn btn-danger EliminarProyecto" idUbicacion="'.$value["id"].'" data-toggle="modal" data-target="#modalEliminarProyecto">
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
    
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>


<!--=====================================
MODAL AGREGAR PROYECTOS
======================================-->

<div id="modalAgregarProyectos" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header bg-dark">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title ml-2">Actualizar  Proyectos</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA PROYECTO -->


            <div class="form-group">
              
              <div class="input-group">
                 <input type="text" class="form-control input-lg tituloProyecto" name="ubicacion" placeholder="Ingresar Proyecto" required>
                <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-hammer"></span>
            </div>
          </div>

              </div>

            </div>

            <!-- RUTA -->

            <div class="form-group">
              
              <div class="input-group">
              <input type="text" class="form-control input-lg  rutaProyecto"  name="ruta" readonly>
                <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-hammer"></span>
            </div>
          </div>

              </div>

            </div>

           

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-dark">Agregar Proyecto</button>

        </div>

     <?php

          $CrearProyecto = new ControladorEmpleados();
          $CrearProyecto -> ctrCrearProyectos();

        ?> 

      </form>

    </div>

  </div>

</div>
</div>
</div>



<!--=====================================
MODAL Editar PROYECTOS
======================================-->

<div id="modalEditarProyecto" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header bg-dark">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title ml-2">Actualizar  Proyectos</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA PROYECTO -->


            <div class="form-group">
              
              <div class="input-group">
                 <input type="text" class="form-control input-lg EditarTituloProyecto" id="ubicacion" name="editarUbicacion" required>

                 <input type="hidden" class="form-control input-lg " id="idUbicacion" name="idUbicacion" required>

                <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-hammer"></span>
            </div>
          </div>

              </div>

            </div>

            <!-- RUTA -->

            <div class="form-group">
              
              <div class="input-group">
              <input type="text" class="form-control input-lg  EditarRutaProyecto"  name="editarRuta" readonly>   

                <div class="input-group-append">                
            <div class="input-group-text">
              <span class="fa fa-hammer"></span>
            </div>
          </div>

              </div>

            </div>

           

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-dark">Agregar Proyecto</button>

        </div>

     <?php

          $EditarProyecto = new ControladorEmpleados();
          $EditarProyecto -> ctrEditarUbicacion();

        ?> 

      </form>

    </div>

  </div>

</div>
</div>
</div>
<?php

  $borrarEmpleado = new ControladorEmpleados();
  $borrarEmpleado -> ctrBorrarUbicacion();

?> 
