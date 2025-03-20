<?php if($_SESSION["perfilVehicular"] == "1" || $_SESSION["perfilVehicular"] == "2"){ ?>

<div class="content-wrapper">

	<section class="content-header">

		<div class="container-fluid">

			<div class="row mb-2">

				<div class="col-sm-6">

					<h1 class="text-uppercase"> perfiles del sistema</h1>

				</div>

				<div class="col-sm-6">

					<ol class="breadcrumb float-sm-right text-uppercase">

						<li class="breadcrumb-item">

							<a href="inicio"><i class="fas fa-tachometer-alt"></i> Inicio</a>

						</li>

						<li class="breadcrumb-item active">

							perfiles sistema

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

								<?php 


									if($_SESSION["perfilVehicular"] == "1"){

										echo '<button class="btn btn-success text-uppercase" data-bs-toggle="modal" data-bs-target="#modalAgregarPerfil"> + Agregar perfil</button>';

									}else if($_SESSION["perfilVehicular"] == "2"){

										echo '<button class="btn btn-success text-uppercase" disabled > + Agregar perfil</button>';
									}else{

										echo '<span class="text-uppercase">Relación de perfiles</span>';
									}


								 ?>

								

							</h3>
						
						</div>

						 <div class="card-body">


			                <table class="table table-bordered table-hover tablas tablaPerfiles">

			                  <thead>

				                  <tr>
				                   <th style="width:10px" class="text-center">#</th>
						           <th>Perfil</th>
						           <th class="text-center">Decripcion</th>
						           <th class="text-center">Fecha Alta</th>
						           <th class="text-center">Usuario</th>
						           <th class="text-center">Acciones</th>
				                  </tr>
				                  
			                  </thead>
			                  
			                  <tbody>

			                  	<?php 

			                  		$itemPerfil = null;
			                  		$valorPerfil = null;

			                  		$respuestaPerfiles = ControladorPerfiles::ctrMostrarPerfiles($itemPerfil, $valorPerfil);

			                  		foreach ($respuestaPerfiles as $key => $value) {
			                  			
			                  			echo '<tr> 
			                  					<td>'.($key+1).'</td>
			                  					<td class="text-left">'.$value["perfil"].'</td>
			                  					<td>'.$value["observaciones"].'</td>
			                  					<td>'.ControladorPlantilla::FechaLarga($value["created_at"]).'</td>';

			                  					$respuestaUsuario = ControladorUsuarios::ctrMostrarUsuarios("idResponsable", $value["usuario_id"]);

			                  					if(is_array($respuestaUsuario)){

			                  						echo '<td>'.$respuestaUsuario["responsable"].'</td>';

			                  					}else{

			                  						echo '<td>-</td>';
			                  					}

			                  			echo	'<td>

			                  						<button class="btn btn-success btn-xs btnEditarPerfilSistema text-uppercase" idPerfilSistema='.$value["idPerfil"].' data-bs-toggle="modal" data-bs-target="#modalEditarPerfil" data-tooltip="tooltip" data-original-title="Editar">Editar</button>

			                  						<button class="btn btn-danger btn-xs btnEliminarPerfilSistema text-uppercase" idPerfilSistema="'.$value["idPerfil"].'" data-tooltip="tooltip" data-original-title="Eliminar">Eliminar</button>

			                  					</td>
			                  					
			                  			      </tr>';
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

<div id="modalAgregarPerfil" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
    <!--=====================================
    =  TITULO DE MODAL          =
    ======================================-->
          <div class="modal-header bg-success">

          	 <h4 class="modal-title text-uppercase">Agregar Perfil</h4>

            <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>
    <!--=====================================
    =  CUERPO DE MODAL          =
    ======================================-->
          <div class="modal-body">

            <div class="box-body">

              <label for="nuevoPerfilId">Nombre del perfil:</label>

              <div  class="input-group mb-2 mr-sm-2">

              	<span class="input-group-prepend">

              		<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-user"></i></div>

              	</span>

              	<input type="text" name="nuevoPerfil" id="nuevoPerfilId" class="form-control input-lg" placeholder="Perfil">

              </div>


              <label for="nuevoDescripcionPerfilId">Descripción del perfil:</label>

              <div  class="input-group mb-2 mr-sm-2">

              	<span class="input-group-prepend">

              		<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-user"></i></div>

              	</span>

              	<textarea name="nuevoDescripcionPerfil" id="nuevoDescripcionPerfilId" class="form-control input-lg" placeholder="Descripción"></textarea>

              </div>

           
            </div>

          </div>

    <!--=====================================
    =  PIE DE MODAL          =
    ======================================-->
          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left text-uppercase" data-bs-dismiss="modal">Cerrar</button>

            <button type="submit" class="btn btn-success text-uppercase"> Guardar Perfil</button>

          </div>

          <?php 

            $crearPerfil = new ControladorPerfiles();
            $crearPerfil -> ctrIngresoPerfil();
    

           ?>

    </form>

    </div>
  </div>
</div>



<div id="modalEditarPerfil" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
    <!--=====================================
    =  TITULO DE MODAL          =
    ======================================-->
          <div class="modal-header bg-success">

          	 <h4 class="modal-title text-uppercase">Editar Perfil</h4>

            <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>
    <!--=====================================
    =  CUERPO DE MODAL          =
    ======================================-->
          <div class="modal-body">

            <div class="box-body">

              <label for="editarPerfilId">Nombre del perfil:</label>

              <div  class="input-group mb-2 mr-sm-2">

              	<span class="input-group-prepend">

              		<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-user"></i></div>

              	</span>

              	<input type="text" name="editarPerfil" id="editarPerfilId" class="form-control input-lg" placeholder="Perfil" required>
              	<input type="hidden" name="editarValorPerfil" id="editarValorPerfilId" class="form-control input-lg" placeholder="Perfil" required="">

              </div>


              <label for="editarDescripcionPerfilId">Descripción del perfil:</label>

              <div  class="input-group mb-2 mr-sm-2">

              	<span class="input-group-prepend">

              		<div class="input-group-text border-right-0"><i class="fa fa-user"></i></div>

              	</span>

              	<textarea name="editarDescripcionPerfil" id="editarDescripcionPerfilId" class="form-control input-lg" placeholder="Descripción"></textarea>

              </div>

           
            </div>

          </div>

    <!--=====================================
    =  PIE DE MODAL          =
    ======================================-->
          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left text-uppercase" data-bs-dismiss="modal">Cerrar</button>

            <button type="submit" class="btn btn-success text-uppercase"> Guardar cambios</button>

          </div>

          <?php 

            $edicionPerfil = new ControladorPerfiles();
            $edicionPerfil -> ctrEditarPerfil();
    

           ?>

    </form>

    </div>
  </div>
</div>




  <?php 



    $eliminarPerfil = new ControladorPerfiles();
    $eliminarPerfil -> ctrBorrarPerfil();


   ?>