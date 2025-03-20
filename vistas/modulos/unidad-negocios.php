<?php if($_SESSION["perfilVehicular"] == "1" || $_SESSION["perfilVehicular"] == "2" || $_SESSION["perfilVehicular"] == "3" || $_SESSION["perfilVehicular"] == "5"){ ?> 


<div class="content-wrapper">

	<section class="content-header">

		<div class="container-fluid">

			<div class="row mb-2">

				<div class="col-sm-6">

					<h1 class="text-uppercase"> Unidades de negocios</h1>

				</div>

				<div class="col-sm-6">

					<ol class="breadcrumb float-sm-right text-uppercase">

						<li class="breadcrumb-item">

							<a href="inicio"><i class="fas fa-tachometer-alt"></i> Inicio</a>

						</li> 

						<li class="breadcrumb-item active">

							Unidades negocios 

						</li>

					</ol>

				</div>

			</div>

		</div>

	</section>


	<section class="content">

		<div class="container-fluid">

			<div class="row">

				<div class="col-12">
					
					<div class="card">


						<div class="card-header">

							<h3 class="card-title text-center">

								<button class="btn btn-success btn-md text-uppercase" data-bs-toggle="modal" data-bs-target="#modalAgregarUnidad"> + Agregar Unidad</button> 

							</h3>
						
						</div>

						 <div class="card-body">


			                <table class="table table-bordered table-hover tablas tablaAreas">

			                  <thead>

				                  <tr>
				                   <th style="width:10px" class="text-center">#</th>
						           <th class="text-center">AREA | UNIDAD DE NEGOCIO</th>
						           <th class="text-center">Fecha de Alta</th>
						           <th class="text-center">Usuario registrado</th>
						           <th class="text-center">Acciones</th>
				                  </tr>
				                  
			                  </thead>
			                  
			                  <tbody>
 
			                  	<?php 

			                  		$itemAreas = null;
			                  		$valorAreas = null;

			                  		$respuestaAreas = ControladorAreasNegocios::ctrMostrarAreasNegocios($itemAreas, $valorAreas);

			                  		foreach ($respuestaAreas as $key => $value) {
			                  			
			                  			echo '<tr> 
			                  					<td>'.($key+1).'</td>
			                  					<td>'.$value["area"].'</td>
			                  					<td>'.ControladorPlantilla::FechaLarga($value["created_at"]).'</td>';

			                  					$respuestaUsuario = ControladorUsuarios::ctrMostrarUsuarios("idResponsable", $value["usuario_id"]);

			                  					if(is_array($respuestaUsuario)){

			                  						echo '<td>'.$respuestaUsuario["responsable"].'</td>';

			                  					}else{

			                  						echo '<td>-</td>';
			                  					}


			                  					if($_SESSION["perfilVehicular"] == "1" || $_SESSION["perfilVehicular"] == "1"){

			                  						echo '<td>

			                  						        <button class="btn btn-success btn-xs btnEditarUnidad" idUnidad='.$value["idAreaVehiculo"].' data-bs-toggle="modal" data-bs-target="#modalEditarUnidad" data-tooltip="tooltip" data-original-title="Editar">EDITAR</button>

			                  						        <button class="btn btn-danger btn-xs btnEliminarUnidad" idUnidad="'.$value["idAreaVehiculo"].'" data-tooltip="tooltip" data-original-title="Eliminar">ELIMINAR</button>

			                  					       </td>';


			                  					}else{

			                  						echo '<td>

			                  						       <button class="btn btn-success btn-xs btnEditarUnidad" idUnidad='.$value["idAreaVehiculo"].' data-bs-toggle="modal" data-bs-target="#modalEditarUnidad" data-tooltip="tooltip" data-original-title="Editar">EDITAR</button>
			                  					       </td>';

			                  					}

			                  					

			                  			echo '</tr>';
			                  		}

			                  	 ?>
			                
			                  </tbody>

			              	</table>

						 

			              </div>
			            
			            </div>

					</div>
				</div>
				
			</div>
			
	
	</section>

</div>


<?php 


}else {

	echo '<script>
	
	window.location = "inicio";

	</script>';
} 



?>







<!--=====================================
=  MODAL AGREGAR            =
======================================-->

<div id="modalAgregarUnidad" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
    <!--=====================================
    =  TITULO DE MODAL          =
    ======================================-->
          <div class="modal-header bg-success">

          	 <h4 class="modal-title text-uppercase">Agregar Unidad / Area</h4>

            <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>
    <!--=====================================
    =  CUERPO DE MODAL          =
    ======================================-->
          <div class="modal-body">

            <div class="box-body">

            	<label for="nuevoNombreNegocioId">Unidad o Area</label>

              <div  class="input-group mb-2 mr-sm-2">
                
                <span class="input-group-prepend">
                
                	<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-user"></i></div>
                
                  </span>
                
                   <input type="text" id="nuevoNombreNegocioId" name="nuevoNombreNegocio" placeholder="Ingresa Nombre negocio" required class="form-control input-lg">
              
              </div>






            </div>

          </div>

    <!--=====================================
    =  PIE DE MODAL          =
    ======================================-->
          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left text-uppercase" data-bs-dismiss="modal">Cerrar</button>

            <button type="submit" class="btn btn-success text-uppercase"> Guardar </button>

          </div>

          <?php 

             $crearNegocio = new ControladorAreasNegocios();
             $crearNegocio -> ctrCrearAreaNegocio();

           ?>

    </form>

    </div>
  </div>
</div>





<!--=====================================
=  MODAL EDITAR            =
======================================-->

<div id="modalEditarUnidad" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">

      <div class="modal-header bg-success">

      	 <h4 class="modal-title text-uppercase">Editar Unidad / Area</h4>

        <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
       
      </div>


      <div class="modal-body">

        <div class="box-body">

        	<label for="editarNombreNegocioId">Unidad o Area:</label>

          <div  class="input-group mb-2 mr-sm-2">
            
            <span class="input-group-prepend">
            
            	<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-user"></i></div>
            
              </span>
            
               <input type="text" id="editarNombreNegocioId" name="editarNombreNegocio" placeholder="Ingresa Nombre del negocio" required class="form-control input-lg">
               <input type="hidden" id="valorIdNegocio" name="valorNegocio" required="">
          
          </div>

        </div>

      </div>

    <!--=====================================
    =  PIE DE MODAL          =
    ======================================-->
          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left text-uppercase" data-bs-dismiss="modal">Cerrar</button>

            <button type="submit" class="btn btn-success text-uppercase"> Guardar </button>

          </div>

          <?php 

            $editarNegocio = new ControladorAreasNegocios();
            $editarNegocio -> ctrEditarAreaNegocio();
    
           ?>

    </form>

    </div>
  </div>
</div>




<?php 

	$eliminarNegocio = new ControladorAreasNegocios();
	$eliminarNegocio -> ctrBorrarAreaNegocio();

 ?>