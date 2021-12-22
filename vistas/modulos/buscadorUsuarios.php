

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Usuarios</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Usuarios</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">

        <div class="card-body">

               <div class="">
          
         



    <!-- Main content -->

 
        <div class="card-body">
          

       <table class="table  table table-striped table-bordered dt-responsive nowrap tablas tablaUsuarios" style="width:100%; display: block;">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Nombre/Apellido</th>
           <th>Hoja de Vida</th>
           <th>Edad</th>
           <th>Cédula/Pas</th>
           <th>Foto</th>
           <th>Localidad</th>
           <th>Ocupacion</th>
           <th>Celular</th>
           <th>Puntaje</th>
           <th>Historial</th>
           <th>Eliminar</th>
         </tr> 

        </thead>

        <tbody>
          <?php


$busqueda = $rutas[1];
$usuarios = ControladorEmpleados::ctrUsuariosBusqueda($busqueda);



$item = null;
$valor = null;

foreach ($usuarios as $key => $value) {


  //var_dump($value);

 // return;
  
      echo'
            <tr>
            <td>'.($key+1).'</td>
            <td class="text-uppercase">'.$value["nombre"].'</td>
            <td class="text-uppercase">';

            if($value["hojaDeVida"] != ""){

             
   echo' <a href="'.$url.$value["hojaDeVida"].'" download="">

      <button type="button" class="btn btn-success m-1">Descargar</label><i class="fas  fa-download m-1" style="font-size:10px" style="background: #00d5c3"></i> </button></a>

  
    <a href=" '.$url.$value["hojaDeVida"].'" target="_blanck" >
     <button type="button" class="leerPdf  btn btn-info m-1">
     Leer</label><i class="fas  fa-eye m-1" style="font-size:10px"></i> </button></a>';
   }else{

    echo"";

   }

           echo' </td>
            <td class="text-uppercase">'.$value["edad"].'</td>
            <td class="text-uppercase">'.$value["cedulaPasaporte"].'</td>';
            if($value["foto"] == ""){
              echo'
              <td><img src="'.$url.'vistas/imagenes/usuarios/user.png " class="img-responsive" width="50" style=" border-radius: 50%;"><span class="text-uppercase ml-2"></td>

              ';
            }else{
              echo'<td class="text-uppercase"><img src="'.$url.$value["foto"].'" class="img-responsive" width="60"></td>';
            }
            echo'
            <td class="text-uppercase">'.$value["localidad"].'</td>
            <td class="text-uppercase">'.$value["ocupacion"].'</td>
            <td class="text-uppercase">'.$value["celular"].'</td>';


     
                /*CONVIRTIENDO LOS COLORES EN NUMEROS*/
             if($value["puntaje"] == "AMARRILLO"){

              echo'

            <td class="text-uppercase bg-warning">69</td>';

            }   else if($value["puntaje"] == "VERDE"){

              echo'

            <td class="text-uppercase bg-success">80</td>';

            }  else if($value["puntaje"] == "ROJO"){

              echo'

            <td class="text-uppercase bg-danger">50</td>';
           

            } else if($value["puntaje"] == "NEGRO"){

              echo'

            <td class="text-uppercase bg-dark">30</td>';
            /*FIN DE LA CONDICIÓN COLOR BLA BLANCO*/
                /*DANDOLES COLORES A LOS PUNTAJES*/

            }else 
                 if($value["puntaje"] <= "30"){

              echo'<td class="text-uppercase bg-dark">'.$value["puntaje"].'</td>';

            }else if($value["puntaje"] >= "31" && $value["puntaje"] <= "50"){

           echo' <td class="text-uppercase bg-danger">'.$value["puntaje"].'</td>';


            }else if($value["puntaje"] >= "51" && $value["puntaje"] <= "70"){

           echo' <td class="text-uppercase bg-warning">'.$value["puntaje"].'</td>';


            }else if($value["puntaje"] >= "71" && $value["puntaje"] <= "80"){

           echo' <td class="text-uppercase bg-success">'.$value["puntaje"].'</td>';


            }else if($value["puntaje"] >= "81"){

           echo' <td class="text-uppercase">'.$value["puntaje"].'</td>';


            }


            else{
             echo'
            <td class="text-uppercase ">'.$value["puntaje"].'</td>';
              
            }


           echo' 
           <td class="text-uppercase">
           <a href="'.$url.$value["id"].'">
           <button type="button" class=" btn btn-info m-1 ">
           </label><i class="far fa-eye m-1" style="font-size:30px"></i> </button>
           </a>
           
           </td>
           
           <td>

                    <div class="col-lg-12 btn-group">
                        
                   

  <button class="btn btn-danger EliminarUsuario" idUsuario="'.$value["id"].'" fotoUsuario="'.$value["foto"].'"><i class="fas fa-user-times" ></i></button>

               </div>  

                  </td>
           

          </tr>';

           }


 ?>

        </tbody>

       </table>
<?php

  $borrarUsuario = new ControladorEmpleados();
  $borrarUsuario -> ctrBorrarUsuario();

?> 
        
      
            
   </div>



      </div>



        </div>
        

    </section>
    <!-- /.content -->
  </div>

  


 