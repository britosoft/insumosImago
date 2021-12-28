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
            <h1>Administrar Empleados</h1>
          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="innicio">Inicio</a></li>
              <li class="breadcrumb-item active">Administrar Empleados</li>
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
          
          Agregar empleado

        </button>

      </div>

      
        </div>

        <div class="empleado">
          

       <table class="table  table table-striped table-bordered dt-responsive nowrap tablas" style="width:100%; display: block;">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Nombre/Apellido</th>
           <th>Cedula</th>
           <th>Foto</th>
           <th>Rol</th>
            <th>Proyecto</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>
          <?php

          $url = Ruta::backend();

          $item = null;
          $valor = null;

          $MostrarEmpleados = ControladorEmpleados::ctrMostrarEmpleados($item, $valor);

          foreach($MostrarEmpleados as $key => $value){

          
          echo'<tr>
            <td>'.($key + 1).'</td>
            <td>'.$value["nombre"].'</td>
            <td>'.$value["usuario"].'</td>
            <td>';
            if($value["foto"] == ""){
              echo'<img src="vistas/imagenes/materiales/no-image.png" class="img-thumbnail" width="40px">';
            }else{
               echo'<img src="'.$url.$value["foto"].'" class="img-thumbnail" width="40px">';
            }
 

          echo' </td>
            <td>'.$value["rol"].'</td>
            <td>'.$value["proyecto"].'</td>
            
             <td>
              <div class="btn-group">
              <button class="btn btn-warning EditarEmpleado" idEmpleado="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarEmpleado" idEmpleado="'.$value["id"].'" ><i class="fa fa-user-edit" style="color: #fff"></i></button>

                  <button class="btn btn-danger EliminarEmpleado"  idEmpleado="'.$value["id"].'"
                fotoEmpleado="'.$value["foto"].'" empleado="'.$value["usuario"].'" ><i class="fa fa-times" style="color: #fff"></i></button>
              

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

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title ml-2">Agregar  Empleado</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->


            <div class="form-group">
              
              <div class="input-group">
                 <input type="text" class="form-control input-lg" id="nombre" name="nuevoNombre" value="" placeholder="Ingrese Nombre y Apellido" required >
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
              <input type="text" class="form-control input-lg" id="usuario" name="nuevoUsuario" placeholder="Ingrese un Usuario" required="">
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
                 <input type="password" class="form-control input-lg" name="nuevoPassword" placeholder="Escriba la nueva contraseña" required="">
           
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
          <select class="form-control input-lg" id="rol" name="NuevoRol" required="">
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
              <input type="hidden" name="noImagen" value="no-image.png">

              <input type="file" id="nuevaFoto" name="nuevaFoto">

              <p class="help-block">Peso máximo de la foto 200 MB</p>

              <img src="" class="img-thumbnail" id="previsualizarImagen"  width="100px" >
              <img src="vistas/imagenes/materiales/no-image.png" class="img-thumbnail" id="avatar" width="100px" >

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn bg-dark">Agregar Empleado</button>

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
                  <input type="hidden"  name="passwordActual" id="passwordActual">
           
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
