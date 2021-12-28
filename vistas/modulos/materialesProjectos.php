<style>

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>


<h2>Projectos</h2>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')">Oficina Imago</button>
<button class="tablinks" onclick="openCity(event, 'Paris')">Chiriquí UTP</button>


  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Gamboa</button>
</div>

<div id="London" class="tabcontent">
  <h3>Oficina Imago</h3>
  <table class="table  table table-striped table-bordered dt-responsive nowrap tablas tablaPedidos" style="width:100%; display: block;">
              
              <thead>
               
               <tr>
                 
                 <th style="width:10px">#</th>
                 <th>Nombre</th>
           <th>Cantidad</th>

                 <th>Agregar</th>
      
               </tr> 
      
              </thead>
      
              <tbody>
               <?php
      
                $url = Ruta::backend();
      
                $item = null;
               $insumos = ControladorEmpleados::ctrMostrarInsumos($item);
                foreach($insumos as $key => $value){

                  if($value["id_ubicacion"] == 8){
      
                
                echo'
                <tr>
                <td>'.($key + 1).'</td>
                <td>'.$value["nombre"].'</td> 
                <td>'.$value["cantidad"].'</td>
                 
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
                    }
                  ?>
      
      
              </tbody>
      
             </table>
</div>

<div id="Paris" class="tabcontent">
  <h3>Chiriquí UTP</h3>
  <table class="table  table table-striped table-bordered dt-responsive nowrap tablas tablaPedidos" style="width:100%; display: block;">
              
              <thead>
               
               <tr>
                 
                 <th style="width:10px">#</th>
                 <th>Nombre</th>
           <th>Cantidad</th>

                 <th>Agregar</th>
      
               </tr> 
      
              </thead>
      
              <tbody>
               <?php
      
                $url = Ruta::backend();
      
                $item = null;
               $insumos = ControladorEmpleados::ctrMostrarInsumos($item);
                foreach($insumos as $key => $value){

                  if($value["id_ubicacion"] == 1){
      
                
                echo'
                <tr>
                <td>'.($key + 1).'</td>
                  <td>'.$value["nombre"].'</td> 
                  <td>'.$value["cantidad"].'</td>
                 
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
                    }
                  ?>
      
      
              </tbody>
      
             </table>
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Gamboa</h3>
 
  <table class="table  table table-striped table-bordered dt-responsive nowrap tablas tablaPedidos" style="width:100%; display: block;">
              
              <thead>
               
               <tr>
                 
                 <th style="width:10px">#</th>
           <th>Nombre</th>
           <th>Cantidad</th>

           
                 <th>Agregar</th>
      
               </tr> 
      
              </thead>
      
              <tbody>
               <?php
      
                $url = Ruta::backend();
      
                $item = null;
               $insumos = ControladorEmpleados::ctrMostrarInsumos($item);
                foreach($insumos as $key => $value){

                  if($value["id_ubicacion"] == 5){
      
                
                echo'
                <tr>
                  <td>'.($key + 1).'</td>
                  <td>'.$value["nombre"].'</td> 
                  <td>'.$value["cantidad"].'</td>

                 </td>
                
                 
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
                    }
                  ?>
      
      
              </tbody>
      
             </table>
</div>
