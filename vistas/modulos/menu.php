
 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="inicio" class="brand-link">
      <img src="<?php echo $servidor; ?>vistas/imagenes/portada/logoImagoo.jpeg" alt="Semaforo Laboral" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Insumos Imago</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
     <!-- Sidebar user (optional) -->

     

      <div class=" mt-3 pb-3 mb-3 d-flex">
      
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <?php
        if($_SESSION["foto"] == ""){

          echo'  <div class="image">
          <img src="'.$url.'vistas/imagenes/usuarios/user.png" class="img-circle elevation-2" alt="User Image">
        </div>';
        }else{

          echo'  <div class="image">
          <img src="'.$servidor.$_SESSION["foto"].'" class="img-circle elevation-2" alt="User Image">
        </div>';

        }


         ?>
      

        <div class="info">
          <a href="inicio" class="d-block text-uppercase"><?php echo $_SESSION["nombre"] ?><br>    

            <div style="background: green; border-radius: 50%; height: 10px; width: 10px; margin-right: 3px">
              <p class="ml-3" style="top:  -5px; position: relative; font-size: 12px">En linea</p>
            </div>
          </a>

        </div>

          <div>
        </div>
      </div>
    </div>


    <!-- Sidebar -->
    <div class="sidebar sidebar-menu">
  

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                          <?php
        if($_SESSION["rol"] == "Administrador"){


                  echo'
           <li class="nav-item">
                <a href="'.$servidor.'inicio" class="nav-link">
                  <i class="fa fa-home"></i>
                  <p>Inicio</p>
                </a>
              </li>
       <li class="nav-item">
                <a href="'.$servidor.'usuarios" class="nav-link">
                  <i class="fas fa-user"></i>
                  <p>Usuarios</p>
                </a>
              </li>';
            }
            ?>
             <li class="nav-item">
                <a href="<?php echo $servidor; ?>materiales" class="nav-link">
                <i class="fas fa-toolbox"></i>
                  <p>Materiales</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="<?php echo $servidor; ?>crear-pedidos" class="nav-link">
                  <i class="fas fa-truck"></i>
                  <p>Crear Pedidos</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo $servidor; ?>mi_pedidos" class="nav-link">
                  <i class="fas fa-truck-loading"></i>
                  <p>Mi Pedidos</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo $servidor; ?>proyectos" class="nav-link">
                  <i class="fas fa-hammer"></i>
                  <p>Proyectos</p>
                </a>
              </li>


         <li class="nav-item">
            <a href="#" class="nav-link">
              <i class=" fas fa-users"></i>
              <p>
            Insumos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <?php 
              $item = null;
              $valor = null;
              $mostrarUbicacion =  ControladorEmpleados::ctrMostrarUbicacion($item, $valor);

              foreach ($mostrarUbicacion as $key => $value) {
             
            echo'<li class="nav-item">
                <a href="'.$value["ruta"].'" class="nav-link">
                  <i class="fa fa-map-marker"></i>
                  <p>'.$value["ubicacion"].'</p>
                </a>
              </li>';
               }
               ?>
          </li>

          
            </ul>

            
         
          
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
