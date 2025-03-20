<?php if($_SESSION["perfilVehicular"] == "1" || $_SESSION["perfilVehicular"] == "2" || $_SESSION["perfilVehicular"] == "3" || $_SESSION["perfilVehicular"] == "4" || $_SESSION["perfilVehicular"] == "5"){ ?>

<div class="content-wrapper">

	<section class="content-header">

		<div class="container-fluid">

			<div class="row mb-2">

				<div class="col-sm-6">

					<h1 class="text-uppercase">Dashboard | MI perfil</h1>

				</div>

				<div class="col-sm-6">

					<ol class="breadcrumb float-sm-right text-uppercase">

						<li class="breadcrumb-item">

							<a href="inicio"><i class="fas fa-tachometer-alt"></i> Inicio</a>

						</li>

						<li class="breadcrumb-item active">

							Mi perfil

						</li>

					</ol>

				</div>

			</div>

		</div>

	</section>


	<section class="content">

		<div class="container-fluid">

			<div class="row">

				<div class="col-12 col-md-3">
					
					<div class="card card-border-info-2 border-top border-info">

						 <div class="card-body">

						 	<?php 

						 	$itemUsuario = 'idResponsable';
						 	$valorUsuario = $_SESSION['idVehicular'];

						 	$respuestaUsuarios = ControladorUsuarios::ctrMostrarUsuarios($itemUsuario, $valorUsuario);

						 	if($respuestaUsuarios['foto']){

						 		echo '<img class="profile-user-img img-responsive img-circle d-flex previsualizarPerfil" src="'.$respuestaUsuarios['foto'].'" alt="foto perfil usuario">';

						 	}else{

						 		echo '<img class="profile-user-img img-responsive img-circle previsualizarPerfil" src="vistas/img/usuarios/default/anonymous.png " alt="foto perfil usuario">';

						 	}

						 	?>



						 	<h4 class="profile-username text-center text-uppercase"><?php echo $respuestaUsuarios['responsable']; ?></h4>

						 	<h5 class="text-muted text-center"><?php echo $respuestaUsuarios['email']; ?></h5>

						 	<h6 class="text-muted text-center"><span class="badge badge-success p-2"><?php echo ControladorPlantilla::fechaLarga($respuestaUsuarios["fecha"]); ?> </span></h6>

						 	<ul class="list-group list-group-unbordered mb-3">

						 		<li class="list-group-item">

						 			<b>Usuario</b> <a class="float-right text-success"><?php echo $respuestaUsuarios['usuario']; ?></a>

						 		</li>

						 		<li class="list-group-item">

						 			<b>Ultimo Acceso</b> <a class="float-right text-success"><?php echo ControladorPlantilla::fechaLarga($respuestaUsuarios['ultimoLogin']); ?></a>

						 		</li>

						 		<li class="list-group-item">

						 			<b>Unidad Negocio</b> 

						 			<a class="float-right text-success">

						 				<?php  

						 				$itemEmpresa = "idAreaVehiculo";
						 				$valorEmpresa = $respuestaUsuarios["unidad_id"];
						 				$respuestaNegocio = ControladorAreasNegocios::ctrMostrarAreasNegocios($itemEmpresa, $valorEmpresa);

						 				echo $respuestaNegocio['area'];

						 				?>

						 			</a>

						 		</li>

						 	</ul>


			              </div>
			            
			            </div>

					</div>





					<div class="col-md-9">

	    			<div class="card card-border-info-2 border-top border-info">

		              <div class="card-header p-2">

		                <ul class="nav nav-pills">

		                  <li class="nav-item"><a class="nav-link active text-uppercase bg-success" href="#settings" data-toggle="tab"><i></i>Mis datos</a></li>
		                
		                </ul>

		              </div><!-- /.card-header -->


		              <div class="card-body">

		                <div class="tab-content">

		                  <div class="active tab-pane" id="settings">

		                    <form class="form-horizontal" method="POST" id="formEditarUsuario" enctype="multipart/form-data" autocomplete="off">

		                      <div class="form-group row">

		                        <label for="editarNombreId" class="col-sm-2 col-form-label">Nombre:</label>

		                        <div class="col-sm-10">

		                          <input type="text" class="form-control" id="editarNombreId" name="editarNombre" placeholder="Name" value="<?php echo $respuestaUsuarios['responsable']; ?>">

		                        </div>

		                      </div>

		                      <div class="form-group row">

		                        <label for="inputEmailId" class="col-sm-2 col-form-label">Correo electrónico:</label>

		                        <div class="col-sm-10">

		                          <input type="email" class="form-control" id="inputEmailId" name="editarEmail" placeholder="Email" value="<?php echo $respuestaUsuarios['email']; ?>">

		                        </div>

		                      </div>

		                      <div class="form-group row">

		                        <label for="editarUsuarioId" class="col-sm-2 col-form-label">Usuario:</label>

		                         <div class="col-sm-10">

		                          <input type="text" class="form-control" id="editarUsuarioId" placeholder="Usuario" value="<?php echo $respuestaUsuarios['usuario']; ?>" readonly>
		                          <input type="hidden" name="editarUsuarioPerfil" value="<?php echo $respuestaUsuarios['usuario']; ?>" required>

		                        </div>

		                      </div>

		                      <div class="form-group row">

		                        <label for="editarPasswordId" class="col-sm-2 col-form-label">Password:</label>

		                        <div class="col-sm-10">

		                         <input type="password" class="form-control" name="editarPassword" id="editarPasswordId" placeholder="Ingresa password" autocomplete="off">
		                         <input type="hidden" name="passwordActual" required="" value="<?php echo $respuestaUsuarios['password']; ?>">
		                         <small class="form-text text-bold"> ¡ Solo se actualiza si agregas nueva contraseña !</small>

		                        </div>

		                      </div>

		                      <div class="form-group row">

		                        <label for="editarFotoId" class="col-sm-2 col-form-label">Foto</label>

		                        <div class="col-sm-10">

		                         <input type="file" id="editarFotoId" name="editarFotoPerfil" class="editarFotoPerfil">
		                         <input type="hidden" name="fotoUsuarioActual" value="<?php echo $respuestaUsuarios['foto']; ?>">
		                         <input type="hidden" name="idUsuarioEditar" value="<?php echo $respuestaUsuarios['idResponsable']; ?>" required="">

		                        </div>

		                      </div>

		                      <hr>

		                      <div class="form-group row bg-light py-2 rounded">

		                        <div class="offset-sm-2 col-sm-10">

		                          <button type="submit" class="btn btn-success text-bold text-uppercase float-right">Actualizar mis datos</button>

		                        </div>

		                      </div>

		                      <?php 

		                      	$actualizarPerfilUsuario = new ControladorUsuarios();
		                      	$actualizarPerfilUsuario -> ctrActualizarPerfilUsuario();


		                       ?>

		                    </form>
 
		                  </div>
		                

		                </div>
		             

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


