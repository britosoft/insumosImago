
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gestor del Sistema</h1>
          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="innicio">Inicio</a></li>
              <li class="breadcrumb-item active">Gestor del Sistema</li>
            </ol>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="row content ">

      <!-- Default box COMENTARIOS SOBRE LOS USUARIOS -->
      <div class="col-sm-12 col-lg-12 ">
      <div class="card">

        <div class="card-header">
             <button class="btn btn-primary">
          
          Comentarios Sobre Las Empresas

        </button>

      </div>

      
        </div>




<!--COMENTARIOS SOBRE LAS EMPRESAS-->

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas">
         
        <thead>

         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Comentario</th>
           <th>Empleado</th>
           <th>Ced-Pass</th>
           <th>Foto/Empleado</th>
           <th>Empresa</th>
           <th>Foto/Empresa</th>
           <th>Fecha</th>
           <th>Acciones</th>


         </tr> 

        </thead>

        <tbody>


<?php

$url = Ruta::frontend();

$historialEmpresa = SistemaControlador::ctrMostrarHistorialEmpresa2();


foreach ($historialEmpresa as $key => $value) {

  $item = "id";
  $valor = $value["id_usuario"];


  $Empresas = SistemaControlador::ctrMostrarEmpresa($item, $valor);




         
         echo' <tr>
            <td>'.($key + 1).'</td>
            <td>'.$value["comentario"].'</td>
               <td>'.$value["NombreUsuario"].'</td>
               <td>'.$value["cedula"].'</td> ';
               if($value["foto"] == ""){
              echo'
              <td><img src="'.$url.'vistas/imagenes/usuarios/user.png " class="img-responsive" width="50" style=" border-radius: 50%;"><span class="text-uppercase ml-2"></td>

              ';
            }else{
              echo'<td class="text-uppercase"><img src="'.$url.$value["foto"].'" class="img-responsive" width="60"></td>';
            }

              echo' <td>'.$Empresas["NombreEmpresa"].'</td>';

                      if($Empresas["foto"] == ""){
              echo'
              <td><img src="'.$url.'vistas/imagenes/usuarios/user.png " class="img-responsive" width="50" style=" border-radius: 50%;"><span class="text-uppercase ml-2"></td>

              ';
            }else{
              echo'<td class="text-uppercase"><img src="'.$url.$Empresas["foto"].'" class="img-responsive" width="60"></td>';
            }
               echo'<td>'.$value["fecha"].'</td>

           
            <td>

              <div class="btn-group">
                  
                <button class="btn btn-danger EliminarComentariosEmpresa" idComentariosEmpresa="'.$value["id"].'"><i class="fa fa-times"></i></button>

              </div>  

            </td>

          </tr> ';

  
}

//}


   
?>    

           
       
        </tbody>

       </table>

      </div>
      </div>

      <!-- Default box -->
      <div class="col-sm-12 col-lg-12 ">
      <div class="card">

        <div class="card-header">
             <button class="btn btn-primary">
          
          Comentarios Sobre Los Usuarios

        </button>

      </div>

      
        </div>






      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Comentario</th>
           <th>Empresa</th>
           <th>Foto/Empresa</th>
           <th>Empleado</th>
           <th>Foto/Empleado</th>
           <th>Fecha</th>
           <th>Acciones</th>


         </tr> 

        </thead>

        <tbody>
         

<?php

$url = Ruta::frontend();

$historialUsuario = SistemaControlador::ctrMostrarHistorialUsuario();


foreach ($historialUsuario as $key => $value1) {

  $item = "id";
  $valor = $value1["idEmpleado"];


  $usuarios = SistemaControlador::ctrMostrarUsuario($item, $valor);

//var_dump($usuarios);

     
        
           echo' <td>'.($key+1).'</td>
            <td>'.$value1["comentario"].'</td>
               <td>'.$value1["NombreEmpresa"].'</td>';
                  if($value1["foto"] == ""){
              echo'
              <td><img src="'.$url.'vistas/imagenes/usuarios/user.png " class="img-responsive" width="50" style=" border-radius: 50%;"><span class="text-uppercase ml-2"></td>

              ';
            }else{
              echo'<td class="text-uppercase"><img src="'.$url.$value1["foto"].'" class="img-responsive" width="60"></td>';
            }


            echo'
             <td>'.$usuarios["nombre"].'</td>';

              if($usuarios["foto"] == ""){
              echo'
              <td><img src="'.$url.'vistas/imagenes/usuarios/user.png " class="img-responsive" width="50" style=" border-radius: 50%;"><span class="text-uppercase ml-2"></td>

              ';
            }else{
              echo'<td class="text-uppercase"><img src="'.$url.$usuarios["foto"].'" class="img-responsive" width="60"></td>';
            }


            echo'
             <td>'.$value1["fecha"].'</td>
      
            <td>

              <div class="btn-group">
                  
                <button class="btn btn-danger EliminarComentariosUsuarios" id="'.$value1["id"].'"><i class="fa fa-times"></i></button>

              </div>  

            </td>

          </tr> ';
           }

             ?>    

           
       
        </tbody>

       </table>

      </div>
      </div>






            <!-- Default box OCUPACION -->
      <div class="col-sm-12 col-lg-12 ">
      <div class="card">

        <div class="card-header">
             <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarOcupacion">
          
          Agregar Ocupación

        </button>

      </div>

      
        </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Ocupación</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>
 <?php
 $item = null;
 $valor = null;
 $subcategorias = SistemaControlador::ctrMostrarSubCategorias($item, $valor);

 foreach ($subcategorias as $key => $value2) {
         
          echo'<tr>
            <td>'.($key + 1).'</td>
            <td>'.$value2["subcategorias"].'</td>
           
      
            <td>

              <div class="btn-group">
                  
                <button class="btn btn-danger " id="EliminarOcupaciones" idOcupacion="'.$value2["id"].'"><i class="fa fa-times"></i></button>

              </div>  

            </td>

          </tr> ';

          }
          ?>    

           
       
        </tbody>

       </table>

      </div>
      </div>



  </section> <!--section contenct¡--> 




</div>


<!--=====================================
MODAL AGREGAR OCUPACIÓN
======================================-->

<div id="modalAgregarOcupacion" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar Ocupación</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->

            <div class="form-group">
              
              <div class="input-group">
                   <input type="text" class="form-control input-lg" name="nuevaSubCategoria" placeholder="Nueva Ocupación" required>
                  <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-th"></span>
            </div>
          </div>
              </div>

            </div>

  
          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Agregar ocupacion</button>

        </div>

        <?php

          $AgregarOcupacion = new SistemaControlador();
          $AgregarOcupacion-> ctrAgregarSubCategorias();

        ?>

      </form>

    </div>

  </div>

</div>
 

<?php
// ELIMINAR COMENTARIOS EMPRESAS
  $EliminarComentariosEmpresa = new SistemaControlador();
  $EliminarComentariosEmpresa -> ctrBorrarComentario();
// ELIMINAR COMENTARIOS USUARIOS
  $EliminarComentariosUsuarios = new SistemaControlador();
  $EliminarComentariosUsuarios -> ctrBorrarComentarioUsuarios();
// ELIMINAR OCUPACION
  $EliminarOcupacion = new SistemaControlador();
  $EliminarOcupacion -> ctrBorrarOcupacion();
?>


