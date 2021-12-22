
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mis Pedidos</h1>
          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
              <li class="breadcrumb-item active">Mis Pedidos</li>
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
             <a href="crear-pedidos">
             <button class="btn btn-dark" data-toggle="modal" data-target="#modalAgregarEmpleado">
          
          Hacer Pedido

        </button>

             </a>

      </div>

      
        </div>

        <div class="empleado">
          

       <table class="table  table table-striped table-bordered dt-responsive nowrap tablas" style="width:100%; display: block;">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>codigo</th>
           <th>Comentario</th>
           
           <th>Solicitante</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>
          <?php

          $url = Ruta::backend();

          $item = null;
          $valor = null;

          $MostrarPedidos = ControladorPedidos::ctrMostrarPedidos($item, $valor);

          foreach($MostrarPedidos as $key => $value){

          
          echo'<tr>
            <td>'.($key + 1).'</td>
            <td>'.$value["codigo"].'</td>
            <td>'.$value["comentario"].'</td>            
  
            <td>'.$value["solicitante"].'</td>
            
             <td>
              <div class="btn-group">
              <a href="'.$value["codigo"].'">
              <div class="bg-primary"><i class="far fa-eye m-2 pt-1  bg-primary" style="color: #fff"></i></a></div>

              <button class="btn btn-warning EditarEmpleado"
               idEmpleado="" data-toggle="modal" 
               data-target="#modalEditarEmpleado"
                idEmpleado="'.$value["id"].'" >
                <i class="fa fa-user-edit" style="color: #fff"></i></button>

                  <button class="btn btn-danger EliminarEmpleado"  idEmpleado=""
                fotoEmpleado="" empleado="" ><i class="fa fa-times" style="color: #fff"></i></button>
                          

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
MODAL Agregar Empleado
======================================-->

<div id="modalAgregarEmpleado" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header bg-dark" style=" color:white">
          <div class="form-group">                       

              <img src="vistas/imagenes/portada/logoImagoo.jpeg" class="img-thumbnail ml-2" id="avatar" width="50px" >

            </div>
    <p class="ml-3">!compras!</p>
           


          <button type="button" class="close" data-dismiss="modal">&times;</button>
   


        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->


        <div class="modal-body">
          <div class="box-body">

            <!-- INPUT HIDDEN-->
            <input type="hidden" name="proyecto" id="proyecto">
            <!-- ENTRADA PARA LA DESCRIPCIÓN -->


            <div class="form-group">
              <label>¿Qué quieres pedir?</label>
                 <textarea class="form-control" rows="4" cols="50"></textarea>
                <div class="input-group-append">
            

              </div>

            </div>  
        </div>
</div>
        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn bg-dark">Enviar</button>

        </div>

     <?php

          $crearEmpeado = new ControladorEmpleados();
          $crearEmpeado -> ctrCrearEmpleado();

        ?> 

      </form>

    </div>

  </div>

</div>



<!--=====================================
MODAL EDITAR EMPLEADO
======================================-->

<div id="modalEditarEmpleado" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header bg-dark" style=" color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title ml-2">Actualizar  Empleado</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->


            <div class="form-group">
              
              <div class="input-group">
                 <input type="text" class="form-control input-lg" id="editarNombre" name="editarNombre" value="" required>
                <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-user"></span>
            </div>
          </div>

              </div>

            </div>

            <!-- ENTRADA PARA EL USUARIO -->

            <div class="form-group">
              
              <div class="input-group">
              <input type="text" class="form-control input-lg" id="editarUsuario" name="editarUsuario" value="" readonly>
                <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-key"></span>
            </div>
          </div>

              </div>

            </div>

            <!-- ENTRADA PARA LA CONTRASEÑA -->

                 <div class="form-group">
              
              <div class="input-group">
                 <input type="password" class="form-control input-lg" name="editarPassword" placeholder="Escriba la nueva contraseña">
                  <input type="hidden" id="passwordActual" name="passwordActual">
           
                <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-lock"></span>
            </div>
          </div>

              </div>

            </div>



            <!-- ENTRADA PARA SELECCIONAR SU ROL -->
             <div class="form-group">
              
              <div class="input-group">
          <select class="form-control input-lg" name="editarRol">
            <option value="" id="editarRol"></option>
            <option value="Administrador">Administrador</option>
            <option value="Suplente">Suplente</option>
              
                </select>
                  <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-home"></span>
            </div>
          </div>

              </div>

            </div>


            <!-- ENTRADA PARA SUBIR FOTO -->

             <div class="form-group">
              
              <div class="panel">SUBIR FOTO</div>

              <input type="file" class="nuevaFoto" name="editarFoto" id="editarFoto" >

              <p class="help-block">Peso máximo de la foto 2MB</p>

              <img src="vistas/imagenes/usuarios/user.png" id="previsualizarImagenEditar" class="img-thumbnail"  width="100px" >

              <input type="hidden" name="fotoActual" id="fotoActual" value="">

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-dark">Acualizar  Empleado</button>

        </div>

     <?php

          $editarEmpleado = new ControladorEmpleados();
          $editarEmpleado -> ctrEditarEmpleados();

        ?> 

      </form>

    </div>

  </div>

</div>

<?php

  $borrarEmpleado = new ControladorEmpleados();
  $borrarEmpleado -> ctrBorrarEmpleado();

?> 
