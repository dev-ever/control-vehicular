<?php if($_SESSION["perfilVehicular"] == "1" || $_SESSION["perfilVehicular"] == "2" || $_SESSION["perfilVehicular"] == "5"){ ?>

<div class="content-wrapper">

	<section class="content-header"> 

		<div class="container-fluid">

			<div class="row mb-2">

				<div class="col-sm-6">

					<h1 class="text-uppercase">Administración de Control Vehicular</h1>
  
				</div>

				<div class="col-sm-6">

					<ol class="breadcrumb float-sm-right">

						<li class="breadcrumb-item text-uppercase">

							<a href="inicio"><i class="fas fa-tachometer-alt"></i> Inicio</a>

						</li>

						<li class="breadcrumb-item active text-uppercase">

							Control Vehicular

						</li>

					</ol>

				</div>

			</div>

		</div>

	</section>


	<section class="content">

		<div class="container-fluid">

			<div class="row">


		<!-- bloque 1 -->
				<div class="col-12 col-md-6">
					
					<div class="card bg-gradient-light">

						<div class="card-header border-0 ui-sortable-handle" style="cursor: move;">

							<h3 class="card-title text-uppercase mr-2"><i class="fas fa-users mr-2"></i>Propietarios</h3>

							<div class="card-tools">

								<button type="button" class="btn bg-light btn-sm" data-card-widget="collapse">

									<i class="fas fa-minus"></i>

								</button>

								<button type="button" class="btn bg-light btn-sm" data-card-widget="remove">

									<i class="fas fa-times"></i>

								</button>

							</div>

						</div>


						<div class="card-header">

							<h3 class="card-title text-center">

								<button class="btn btn-block btn-outline-success rounded-0 text-uppercase" data-bs-toggle="modal" data-bs-target="#modalNuevoPropietario"><i class="fa fa-pen mr-2"></i> Nuevo Propietario</button> 

							</h3>
						
						</div>

						 <div class="card-body">


						 	<table id="tablaVehiculos" class="table table-bordered table-hover table-sm tablaVehicular tablaPropietario">

						 		<thead>

						 			<tr>
						 				<th style="width:10px" class="text-center">#</th>
						 				<!-- <th class="text-center bg-danger">ID Base Datos</th> -->
						 				<th class="text-center">Nombre</th>
						 				<th class="text-center">Acciones</th>
						 			</tr>

						 		</thead>

						 		<tbody>

						 			<?php 

						 				$itemProp =  null;
						 				$valorTProp = null;

						 				$respuestaProp = ControladorPropietarios::ctrMostrarPropietarios($itemProp, $valorTProp);

						 				foreach ($respuestaProp as $key => $value) {
						 					
						 					echo '<tr>
						 							<td class="text-center">'.($key+1).'</td>
						 							
						 							<td class="text-center">'.$value["propietario"].'</td>
						 							<td class="text-center">

						 							 <button class="btn btn-warning btn-xs btnEditarPropietario" idPropietario="'.$value["idPropietario"].'" data-bs-toggle="modal" data-bs-target="#modalEditarPropietario" data-tooltip="tooltip" data-original-title="Editar"><i class="fa fa-pen"></i></button>

						                             <button class="btn btn-danger btn-xs btnEliminarPropietario" idPropietario="'.$value["idPropietario"].'"  data-tooltip="tooltip" data-original-title="Eliminar"><i class="fa fa-trash"></i></button>

						 							</td>
						 					     </tr>';
						 				}

						 			 ?>

						 		</tbody>

						 	</table>

						 </div>


					</div>

				</div>


<!-- bloque 2 -->
<!-- 				<div class="col-12 col-md-6">
					
					<div class="card bg-gradient-light">

						<div class="card-header border-0 ui-sortable-handle" style="cursor: move;">

							<h3 class="card-title text-uppercase mr-2"><i class="fas fa-users mr-2"></i>Responsables</h3>

							<div class="card-tools">

								<button type="button" class="btn bg-light btn-sm" data-card-widget="collapse">

									<i class="fas fa-minus"></i>

								</button>

								<button type="button" class="btn bg-light btn-sm" data-card-widget="remove">

									<i class="fas fa-times"></i>

								</button>

							</div>

						</div>



						<div class="card-header">

							<h3 class="card-title text-center">

								<button class="btn btn-block btn-outline-success rounded-0" data-toggle="modal" data-target="#modalAgregarResponsable"> <i class="fa fa-pen mr-2"></i> Nuevo</button>

							</h3>
						
						</div>

						 <div class="card-body">


						 	<table id="tablaVehiculos" class="table table-bordered table-hover tablaVehicular tablaResponsable">

						 		<thead>

						 			<tr>
						 				<th style="width:10px" class="text-center">#</th>
						 				<th class="text-center bg-danger">ID Base Datos</th>
						 				<th class="text-center">Nombre del resposable</th>
						 			
						 				<th class="text-center">Acciones</th>
						 			</tr>

						 		</thead>

						 		<tbody>

						 			<?php 

						 				/*$itemResponsable = null;
						 				$valorResponsable = null;

						 				$respuestaResponsable = ControladorResponsables::ctrMostrarResponsables($itemResponsable, $valorResponsable);


						 				foreach ($respuestaResponsable as $key => $value) {
						 					
						 					echo '<tr>

						 							<td class="text-center">'.($key+1).'</td>

						 							<td class="text-center">'.$value["idResponsable"].'</td>

						 							<td class="text-center">'.$value["responsable"].'</td>
						 							
						 							<td class="text-center">

						 							 <button class="btn btn-warning btn-xs btnEditarResponsable" idResponsable="'.$value["idResponsable"].'" data-toggle="modal" data-target="#modalEditarResponsable" data-tooltip="tooltip" data-original-title="Editar"><i class="fa fa-pen"></i></button>

						                             <button class="btn btn-danger btn-xs btnEliminarResponsable" idResponsable="'.$value["idResponsable"].'"  data-tooltip="tooltip" data-original-title="Eliminar"><i class="fa fa-trash"></i></button>

						 							</td>

						 					     </tr>';
						 				}*/

						 				?>

						 		</tbody>

						 	</table>



						 </div>


					</div>

				</div> -->




<!-- bloque 3 -->
				<div class="col-12 col-md-6">
					
					<div class="card bg-gradient-light">

						<div class="card-header border-0 ui-sortable-handle" style="cursor: move;">

							<h3 class="card-title text-uppercase mr-2"><i class="fas fa-th mr-2"></i>Tipos de transporte</h3>

							<div class="card-tools">

								<button type="button" class="btn bg-light btn-sm" data-card-widget="collapse">

									<i class="fas fa-minus"></i>

								</button>

								<button type="button" class="btn bg-light btn-sm" data-card-widget="remove">

									<i class="fas fa-times"></i>

								</button>

							</div>

						</div>


						<div class="card-header">

							<h3 class="card-title text-center">

								<button class="btn btn-block btn-outline-success rounded-0 text-uppercase" data-bs-toggle="modal" data-bs-target="#modalTipoTransporte"><i class="fa fa-pen mr-2"></i> Nuevo transporte</button> 

							</h3>
						
						</div>

						 <div class="card-body">


						 	<table id="tablaVehiculos" class="table table-bordered table-hover table-sm tablaVehicular tablaTransporte">

						 		<thead>

						 			<tr>
						 				<th style="width:10px" class="text-center">#</th>
						 				<!-- <th class="text-center bg-danger">ID Base Datos</th> -->
						 				<th class="text-center">Tipo transporte</th>
						 				<th class="text-center">Acciones</th>
						 			</tr>

						 		</thead>

						 		<tbody>

						 			<?php 

						 				$itemTranporte =  null;
						 				$valorTransporte = null;

						 				$respuestaTransporte = ControladorTiposTransportes::ctrMostrarTransportes($itemTranporte, $valorTransporte);

						 				foreach ($respuestaTransporte as $key => $value) {
						 					
						 					echo '<tr>
						 							<td class="text-center">'.($key+1).'</td>
						 							
						 							<td class="text-center">'.$value["transporte"].'</td>
						 							<td class="text-center">

						 							 <button class="btn btn-warning btn-xs btnEditarTransporte" idTransporte="'.$value["idTransporte"].'" data-bs-toggle="modal" data-bs-target="#modalEditarTransporte" data-tooltip="tooltip" data-original-title="Editar"><i class="fa fa-pen"></i></button>

						                             <button class="btn btn-danger btn-xs btnEliminarTransporte" idTransporte="'.$value["idTransporte"].'"  data-tooltip="tooltip" data-original-title="Eliminar"><i class="fa fa-trash"></i></button>

						 							</td>
						 					     </tr>';
						 				}

						 			 ?>

						 		</tbody>

						 	</table>

						 </div>


					</div>

				</div>


<!-- bloque 4 -->
				<div class="col-12 col-md-6">
					
					<div class="card bg-gradient-light">

						<div class="card-header border-0 ui-sortable-handle" style="cursor: move;">

							<h3 class="card-title text-uppercase mr-2"><i class="fas fa-th mr-2"></i>Tipos de marca</h3>

							<div class="card-tools">

								<button type="button" class="btn bg-light btn-sm" data-card-widget="collapse">

									<i class="fas fa-minus"></i>

								</button>

								<button type="button" class="btn bg-light btn-sm" data-card-widget="remove">

									<i class="fas fa-times"></i>

								</button>

							</div>

						</div>



						<div class="card-header">

							<h3 class="card-title text-center">

								<button class="btn btn-block btn-outline-success rounded-0 text-uppercase" data-bs-toggle="modal" data-bs-target="#modalAgregarMarca"> <i class="fa fa-pen mr-2"></i> Nueva marca</button>

							</h3>
						
						</div>

						 <div class="card-body">


						 	<table id="tablaVehiculos" class="table table-bordered table-hover table-sm tablaVehicular tablaMarcas">

						 		<thead>

						 			<tr>
						 				<th style="width:10px" class="text-center">#</th>
						 				<!-- <th class="text-center bg-danger">ID Base Datos</th> -->
						 				<th class="text-center">Tipo Marca</th>
						 				<th class="text-center">Acciones</th>
						 			</tr>

						 		</thead>

						 		<tbody>

						 			<?php 

						 				$itemMarca =  null;
						 				$valorTMarca = null;

						 				$respuestaMarca = ControladorMarcas::ctrMostrarMarcas($itemMarca, $valorTMarca);

						 				foreach ($respuestaMarca as $key => $value) {
						 					
						 					echo '<tr>
						 							<td class="text-center">'.($key+1).'</td>
						 							
						 							<td class="text-center">'.$value["marca"].'</td>
						 							<td class="text-center">
						 							 <button class="btn btn-warning btn-xs  btnEditarMarca" idMarca="'.$value["idMarca"].'" data-bs-toggle="modal" data-bs-target="#modalEditarMarca" data-tooltip="tooltip" data-original-title="Editar"><i class="fa fa-pen"></i></button>

						                             <button class="btn btn-danger btn-xs btnEliminarMarca" idMarca="'.$value["idMarca"].'"  data-tooltip="tooltip" data-original-title="Eliminar"><i class="fa fa-trash"></i></button>
						 							</td>
						 					     </tr>';
						 				}

						 				?>

						 		</tbody>

						 	</table>



						 </div>


					</div>

				</div>



	<!-- bloque 5 submarca -->
				<div class="col-12 col-md-6">
					
					<div class="card bg-gradient-light">

						<div class="card-header border-0 ui-sortable-handle" style="cursor: move;">

							<h3 class="card-title text-uppercase mr-2"><i class="fas fa-th mr-2"></i>Tipos de sub marca</h3>

							<div class="card-tools">

								<button type="button" class="btn bg-light btn-sm" data-card-widget="collapse">

									<i class="fas fa-minus"></i>

								</button>

								<button type="button" class="btn bg-light btn-sm" data-card-widget="remove">

									<i class="fas fa-times"></i>

								</button>

							</div> 

						</div>



						<div class="card-header">

							<h3 class="card-title text-center">

								<button class="btn btn-block btn-outline-success rounded-0 text-uppercase" data-bs-toggle="modal" data-bs-target="#modalAgregarSubMarca"> <i class="fa fa-pen mr-2"></i> Nueva submarca</button>

							</h3>
						
						</div>

						 <div class="card-body">


						 	<table id="tablaVehiculos" class="table table-bordered table-hover table-sm tablaVehicular tablaSubMarcas">

						 		<thead>

						 			<tr>
						 				<th style="width:10px" class="text-center">#</th>
						 				<!-- <th class="text-center bg-danger">ID Base Datos</th> -->
						 				<th class="text-center">Marca</th>
						 				<th class="text-center">Sub Marca</th>
						 				<th class="text-center">Acciones</th>
						 			</tr>

						 		</thead>

						 		<tbody>

						 			<?php 

						 				$itemSubMarca =  null;
						 				$valorSubMarca = null;

						 				$respuestaSubMarca = ControladorSubMarcas::ctrMostrarSubMarcas($itemSubMarca, $valorSubMarca);

						 				foreach ($respuestaSubMarca as $key => $value) {
						 					
						 					echo '<tr>

						 							<td class="text-center">'.($key+1).'</td>';
						 							

						 							$itemCat = "idMarca";
						 							$valorCat = $value["marca_id"];

						 							$respuestaMarcas = ControladorMarcas::ctrMostrarMarcas($itemCat, $valorCat);



						 					  echo '<td class="text-center">'.$respuestaMarcas["marca"].'</td>
						 							<td class="text-center">'.$value["submarca"].'</td>
						 							<td class="text-center">

						 							 <button class="btn btn-warning btn-xs  btnEditarSubMarca" idSubMarca="'.$value["idSubmarca"].'" data-bs-toggle="modal" data-bs-target="#modalEditarSubMarca" data-tooltip="tooltip" data-original-title="Editar"><i class="fa fa-edit"></i></button>

						                             <button class="btn btn-danger btn-xs  btnEliminarSubMarca" idSubMarca="'.$value["idSubmarca"].'"  data-tooltip="tooltip" data-original-title="Eliminar"><i class="fa fa-trash"></i></button>

						 							</td>

						 					     </tr>';
						 				}

						 				?>

						 		</tbody>

						 	</table>



						 </div>


					</div>

				</div>




<!-- bloque 6 -->
				<div class="col-12 col-md-6">
					
					<div class="card bg-gradient-light">

						<div class="card-header border-0 ui-sortable-handle" style="cursor: move;">

							<h3 class="card-title text-uppercase mr-2"><i class="fas fa-th mr-2"></i>Tipos de clases</h3>

							<div class="card-tools">

								<button type="button" class="btn bg-light btn-sm" data-card-widget="collapse">

									<i class="fas fa-minus"></i>

								</button>

								<button type="button" class="btn bg-light btn-sm" data-card-widget="remove">

									<i class="fas fa-times"></i>

								</button>

							</div>

						</div>



						<div class="card-header">

							<h3 class="card-title text-center">

								<button class="btn btn-block btn-outline-success rounded-0 text-uppercase" data-bs-toggle="modal" data-bs-target="#modalAgregarClase"><i class="fa fa-pen mr-2"></i> Nueva clase</button> 

							</h3>
						
						</div>

						 <div class="card-body">


						 	<table id="tablaVehiculos" class="table table-bordered table-hover table-sm tablaVehicular tablaClases">

						 		<thead>

						 			<tr>
						 				<th style="width:10px" class="text-center">#</th>
						 				<!-- <th class="text-center bg-danger">ID Base Datos</th> -->
						 				<th class="text-center">Tipo Clase</th>
						 				<th class="text-center">Acciones</th>
						 			</tr>

						 		</thead>

						 		<tbody>

						 			<?php 

						 				$itemClases =  null;
						 				$valorClases = null;

						 				$respuestaClases = ControladorClases::ctrMostrarClases($itemClases, $valorClases);

						 				foreach ($respuestaClases as $key => $value) {
						 					
						 					echo '<tr>

						 							<td class="text-center">'.($key+1).'</td>


						 							<td class="text-center">'.$value["clase"].'</td>
						 							
						 							<td class="text-center">

						 							 <button class="btn btn-warning btn-xs btnEditarClase" idClase="'.$value["idClase"].'" data-bs-toggle="modal" data-bs-target="#modalEditarClase" data-tooltip="tooltip" data-original-title="Editar"><i class="fa fa-pen"></i></button>

						                             <button class="btn btn-danger btn-xs btnEliminarClase" idClase="'.$value["idClase"].'"  data-tooltip="tooltip" data-original-title="Eliminar"><i class="fa fa-trash"></i></button>

						 							</td>
						 							
						 					     </tr>';
						 				}

						 				?>

						 		</tbody>

						 	</table>


						 </div>


					</div>

				</div>

			




<!-- bloque 7 -->
				<div class="col-12 col-md-6">
					
					<div class="card bg-gradient-light">

						<div class="card-header border-0 ui-sortable-handle" style="cursor: move;">

							<h3 class="card-title text-uppercase mr-2"><i class="fas fa-th mr-2"></i>Tipos de combustibles</h3>

							<div class="card-tools">

								<button type="button" class="btn bg-light btn-sm" data-card-widget="collapse">

									<i class="fas fa-minus"></i>

								</button>

								<button type="button" class="btn bg-light btn-sm" data-card-widget="remove">

									<i class="fas fa-times"></i>

								</button>

							</div>

						</div>


						<div class="card-header">

							<h3 class="card-title text-center">

								<button class="btn btn-block btn-outline-success rounded-0 text-uppercase" data-bs-toggle="modal" data-bs-target="#modalAgregarCombustible"><i class="fa fa-pen mr-2"></i> Nuevo combustible</button> 

							</h3>
						
						</div>

						 <div class="card-body">


						 	<table id="tablaVehiculos" class="table table-bordered table-hover table-sm tablaVehicular tablaCombustibles">

						 		<thead>

						 			<tr>
						 				<th style="width:10px" class="text-center">#</th>
						 				<!-- <th class="text-center bg-danger">ID Base Datos</th> -->
						 				<th class="text-center">Tipo combustible</th>
						 		
						 				<th class="text-center">Acciones</th>
						 			</tr>

						 		</thead>

						 		<tbody>

						 			<?php 

						 				$itemCombustibles =  null;
						 				$valorCombustibles = null;

						 				$respuestaCombustibles = ControladorCombustibles::ctrMostrarCombustibles($itemCombustibles, $valorCombustibles);

						 				foreach ($respuestaCombustibles as $key => $value) {
						 					
						 					echo '<tr>

						 							<td class="text-center">'.($key+1).'</td>

						 							

						 							<td class="text-center">'.$value["combustible"].'</td>
						 						
						 							<td class="text-center">

						 							 <button class="btn btn-warning btn-xs btnEditarCombustible" idCombustible="'.$value["idCombustible"].'" data-bs-toggle="modal" data-bs-target="#modalEditarCombustible" data-tooltip="tooltip" data-original-title="Editar"><i class="fa fa-pen"></i></button>

						                             <button class="btn btn-danger btn-xs btnEliminarCombustible" idCombustible="'.$value["idCombustible"].'"  data-tooltip="tooltip" data-original-title="Eliminar"><i class="fa fa-trash"></i></button>

						 							</td>

						 					     </tr>';
						 				}

						 				?>

						 		</tbody>

						 	</table>


						 </div>


					</div>

				</div>


<!-- bloque 8 -->
				<div class="col-12 col-md-6">
					
					<div class="card bg-gradient-light">

						<div class="card-header border-0 ui-sortable-handle" style="cursor: move;">

							<h3 class="card-title text-uppercase mr-2"><i class="fas fa-th mr-2"></i>Tipos de seguros</h3>

							<div class="card-tools">

								<button type="button" class="btn bg-light btn-sm" data-card-widget="collapse">

									<i class="fas fa-minus"></i>

								</button>

								<button type="button" class="btn bg-light btn-sm" data-card-widget="remove">

									<i class="fas fa-times"></i>

								</button>

							</div>

						</div>



						<div class="card-header">

							<h3 class="card-title text-center">

								<button class="btn btn-block btn-outline-success rounded-0 text-uppercase" data-bs-toggle="modal" data-bs-target="#modalAgregarSeguro"><i class="fa fa-pen mr-2"></i>Nuevo seguro</button> 

							</h3>
						
						</div>

						 <div class="card-body">


						 	<table id="tablaVehiculos" class="table table-bordered table-hover table-sm tablaVehicular tablaSeguros">

						 		<thead>

						 			<tr>
						 				<th style="width:10px" class="text-center">#</th>
						 				
						 				<th class="text-center">Tipo seguro</th>
						 				<th class="text-center">Acciones</th>
						 			</tr>

						 		</thead>

						 		<tbody>

						 			<?php 

						 				$itemSeguros =  null;
						 				$valorSeguros = null;

						 				$respuestaSeguros = ControladorSeguros::ctrMostrarSeguros($itemSeguros, $valorSeguros);

						 				foreach ($respuestaSeguros as $key => $value) {
						 					
						 					echo '<tr>

						 							<td class="text-center">'.($key+1).'</td>

						 							

						 							<td class="text-center">'.$value["seguro"].'</td>
						 						
						 							<td class="text-center">

						 							 <button class="btn btn-warning btn-xs btnEditarSeguro" idSeguro="'.$value["idSeguro"].'" data-bs-toggle="modal" data-bs-target="#modalEditarSeguro" data-tooltip="tooltip" data-original-title="Editar"><i class="fa fa-pen"></i></button>

						                             <button class="btn btn-danger btn-xs btnEliminarSeguro" idSeguro="'.$value["idSeguro"].'"  data-tooltip="tooltip" data-original-title="Eliminar"><i class="fa fa-trash"></i></button>

						 							</td>

						 					     </tr>';
						 				}

						 				?>
						 		</tbody>

						 	</table>


						 </div>


					</div>

				</div>


<!-- bloque 9 -->
				<div class="col-12 col-md-6">
					
					<div class="card bg-gradient-light">

						<div class="card-header border-0 ui-sortable-handle" style="cursor: move;">

							<h3 class="card-title text-uppercase mr-2"><i class="fas fa-th mr-2"></i>Tipos de tramites</h3>

							<div class="card-tools">

								<button type="button" class="btn bg-light btn-sm" data-card-widget="collapse">

									<i class="fas fa-minus"></i>

								</button>

								<button type="button" class="btn bg-light btn-sm" data-card-widget="remove">

									<i class="fas fa-times"></i>

								</button>

							</div>

						</div>



						<div class="card-header">

							<h3 class="card-title text-center">

								<button class="btn btn-block btn-outline-success rounded-0 text-uppercase" data-bs-toggle="modal" data-bs-target="#modalAgregarTramite"><i class="fa fa-pen mr-2"></i>Nuevo tramite</button> 

							</h3>
						
						</div>

						 <div class="card-body">


						 	<table id="tablaVehiculos" class="table table-bordered table-hover table-sm tablaVehicular tablaTramites">

						 		<thead>

						 			<tr>
						 				<th style="width:10px" class="text-center">#</th>
						 				
						 				<th class="text-center">Tipo tramite</th>
						 				<th class="text-center">Acciones</th>
						 			</tr>

						 		</thead>

						 		<tbody>

						 			<?php 

						 				$itemTramites =  null;
						 				$valorTramites = null;

						 				$respuestaTramites = ControladorTramites::ctrMostrarTramites($itemTramites, $valorTramites);

						 				foreach ($respuestaTramites as $key => $value) {
						 					
						 					echo '<tr>
						 							<td class="text-center">'.($key+1).'</td>

						 							
						 							<td class="text-center">'.$value["tramite"].'</td>
						 						
						 							<td class="text-center">

						 							 <button class="btn btn-warning btn-xs btnEditarTramite" idTramite="'.$value["idTramite"].'" data-bs-toggle="modal" data-bs-target="#modalEditarTramite" data-tooltip="tooltip" data-original-title="Editar"><i class="fa fa-pen"></i></button>

						                             <button class="btn btn-danger btn-xs btnEliminarTramite" idTramite="'.$value["idTramite"].'"  data-tooltip="tooltip" data-original-title="Eliminar"><i class="fa fa-trash"></i></button>

						 							</td>
						 					     </tr>';
						 				}
						 				?>

						 		</tbody>

						 	</table>


						 </div>


					</div>

				</div>

				<!-- bloque 10 -->
<!-- 				<div class="col-12 col-md-6">
					
					<div class="card bg-gradient-light">

						<div class="card-header border-0 ui-sortable-handle" style="cursor: move;">

							<h3 class="card-title text-uppercase mr-2"><i class="fas fa-th mr-2"></i>Tipos de Areas</h3>

							<div class="card-tools">

								<button type="button" class="btn bg-light btn-sm" data-card-widget="collapse">

									<i class="fas fa-minus"></i>

								</button>

								<button type="button" class="btn bg-light btn-sm" data-card-widget="remove">

									<i class="fas fa-times"></i>

								</button>

							</div>

						</div>



						<div class="card-header">

							<h3 class="card-title text-center">

								<button class="btn btn-block btn-outline-success rounded-0" data-toggle="modal" data-target="#modalAgregarArea"><i class="fa fa-pen mr-2"></i>Nuevo</button> 

							</h3>
						
						</div>

						 <div class="card-body">


						 	<table id="tablaVehiculos" class="table table-bordered table-hover tablaVehicular tablaAreas">

						 		<thead>

						 			<tr>
						 				<th style="width:10px" class="text-center">#</th>
						 				<th class="text-center bg-danger">ID Base Datos</th>
						 				<th class="text-center">Tipo Area</th>
						 				<th class="text-center">Acciones</th>
						 			</tr>

						 		</thead>

						 		<tbody>

						 			<?php 

						 				/*$itemArea =  null;
						 				$valorArea = null;

						 				$respuestaAreas = ControladorAreas::ctrMostrarAreas($itemArea, $valorArea);

						 				foreach ($respuestaAreas as $key => $value) {
						 					
						 					echo '<tr>
						 							<td class="text-center">'.($key+1).'</td>

						 							<td class="text-center">'.$value["idAreaVehiculo"].'</td>
						 							<td class="text-center">'.$value["area"].'</td>
						 						
						 							<td class="text-center">

						 							 <button class="btn btn-warning btn-xs btnEditarArea" idAreaVehiculo="'.$value["idAreaVehiculo"].'" data-toggle="modal" data-target="#modalEditarArea" data-tooltip="tooltip" data-original-title="Editar"><i class="fa fa-pen"></i></button>

						                             <button class="btn btn-danger btn-xs btnEliminarArea" idAreaVehiculo="'.$value["idAreaVehiculo"].'"  data-tooltip="tooltip" data-original-title="Eliminar"><i class="fa fa-trash"></i></button>

						 							</td>
						 					     </tr>';
						 				}*/
						 				?>

						 			</tbody>

						 		</table>


						 	</div>


						 </div>

						</div> -->



					</div>

				</div>

			</div>

		</div>



		</div>

	</section>

</div>






















<!-- 
/*===================================================================
  ===================================================================
  ===================================================================
	MODALES PROPIETARIO
  ===================================================================
======================================================================*/ -->




<!--=====================================
=  MODAL AGREGAR RESPOSNABLE           =
======================================-->

<!-- <div id="modalAgregarResponsable" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">


          <div class="modal-header bg-info">

          	 <h4 class="modal-title">Nuevo Responsable</h4>

            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>


          <div class="modal-body">

            <div class="box-body">

            <label for="nuevoNombreResponsableId">Nombre completo</label>

              <div  class="input-group mb-2 mr-sm-2">

                <span class="input-group-prepend">

                	<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-user"></i></div>

                </span>

                   <input type="text" name="nuevoNombreResponsable" id="nuevoNombreResponsableId" placeholder="Ingresa nombre completo del responsable" required class="form-control input-lg">

              </div>

            </div>

          </div>


          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>

            <button type="submit" class="btn btn-info"> Registrar </button>

          </div>

          <?php 

            // $crearResponsable = new ControladorResponsables();
            // $crearResponsable -> ctrCrearNuevoResponsable();
            

           ?>

    </form>

    </div>

  </div>

</div> -->




<!--=====================================
=  MODAL EDITAR PROPIETARIO           =
======================================-->

<!-- <div id="modalEditarResponsable" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
 

          <div class="modal-header bg-info">

          	 <h4 class="modal-title">Editar Propietario | <span id="nombreResponsable"></span></h4>

            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>

          <div class="modal-body">

            <div class="box-body">

            <label for="editarResponsableId">Nombre del responsable</label>

              <div  class="input-group mb-2 mr-sm-2">

                <span class="input-group-prepend">

                	<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-user"></i></div>

                </span>

                   <input type="text" name="editarResponsable" id="editarResponsableId" placeholder="Ingresa nombre propietario" required class="form-control input-lg">
                   <input type="hidden" name="idResponsable" id="responsableId" class="form-control" required="">

              </div>

            </div>

          </div>


          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>

            <button type="submit" class="btn btn-info"> Actualizar </button>

          </div>

          <?php 

            // $editarResponsable = new ControladorResponsables();
            // $editarResponsable -> ctrEditarResponsable();
            

           ?>

    </form>

    </div>
  </div>
</div>
 -->

<?php 

	// $eliminarResponsable = new ControladorResponsables();
	// $eliminarResponsable -> ctrBorrarResponsable();

 ?>










<!--=====================================
=  MODAL AGREGAR PROPIETARIO           =
======================================-->

<div id="modalNuevoPropietario" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
    <!--=====================================
    =  TITULO DE MODAL          =
    ======================================-->
          <div class="modal-header bg-success">

          	 <h4 class="modal-title text-uppercase">Nuevo Propietario</h4>

            <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>
    <!--=====================================
    =  CUERPO DE MODAL          =
    ======================================-->
          <div class="modal-body">

            <div class="box-body">

            <label for="nuevoNombrePropietarioId">Nombre completo</label>

              <div  class="input-group mb-2 mr-sm-2">

                <span class="input-group-prepend">

                	<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-user"></i></div>

                </span>

                   <input type="text" name="nuevoNombrePropietario" id="nuevoNombrePropietarioId" placeholder="Ingresa nombre completo del propietario" required class="form-control input-lg">

              </div>

            </div>

          </div>

    <!--=====================================
    =  PIE DE MODAL          =
    ======================================-->
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left text-uppercase" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-success text-uppercase"> Registrar propietario </button>
          </div>

          <?php 

            $crearProp = new ControladorPropietarios();
            $crearProp -> ctrCrearNuevoPropietario();
            

           ?>

    </form>

    </div>

  </div>

</div>




<!--=====================================
=  MODAL EDITAR PROPIETARIO           =
======================================-->

<div id="modalEditarPropietario" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
    <!--=====================================
    =  TITULO DE MODAL          =
    ======================================-->
          <div class="modal-header bg-success">

          	 <h4 class="modal-title text-uppercase">Editar Propietario | <span id="nombrePropietario"></span></h4>

            <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>
    <!--=====================================
    =  CUERPO DE MODAL          =
    ======================================-->
          <div class="modal-body">

            <div class="box-body">

            <label for="editarPropietarioId">Nombre del propietario</label>

              <div  class="input-group mb-2 mr-sm-2">

                <span class="input-group-prepend">

                	<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-user"></i></div>

                </span>

                   <input type="text" name="editarPropietario" id="editarPropietarioId" placeholder="Ingresa nombre propietario" required class="form-control input-lg">
                   <input type="hidden" name="idPropietario" id="propietarioId" class="form-control" required="">

              </div>

            </div>

          </div>

    <!--=====================================
    =  PIE DE MODAL          =
    ======================================-->
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-info bg-success text-uppercase"> Actualizar propietario</button>
          </div>

          <?php 

            $editarProp = new ControladorPropietarios();
            $editarProp -> ctrEditarPropietario();
            

           ?>

    </form>

    </div>
  </div>
</div>


<?php 

	$eliminarProp = new ControladorPropietarios();
	$eliminarProp -> ctrBorrarPropietario();

 ?>




<!--=====================================
=  MODAL AGREGAR TRANSPORTE           =
======================================-->

<div id="modalTipoTransporte" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
    <!--=====================================
    =  TITULO DE MODAL          =
    ======================================-->
          <div class="modal-header bg-success">

          	 <h4 class="modal-title text-uppercase">Nuevo Transporte</h4>

            <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>
    <!--=====================================
    =  CUERPO DE MODAL          =
    ======================================-->
          <div class="modal-body">

            <div class="box-body">

            <label for="nuevoTipoTransporteId">Nombre de transporte</label>

              <div  class="input-group mb-2 mr-sm-2">

                <span class="input-group-prepend">

                	<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-user"></i></div>

                </span>

                   <input type="text" name="nuevoTipoTransporte" id="nuevoTipoTransporteId" placeholder="Ingresa tipo (Ejemplo: Automovil)" required class="form-control input-lg">

              </div>

            </div>

          </div>

    <!--=====================================
    =  PIE DE MODAL          =
    ======================================-->
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left text-uppercase" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-info bg-success text-uppercase"> Registrar transporte </button>
          </div>

          <?php 

            $crearTransporte = new ControladorTiposTransportes();
            $crearTransporte -> ctrCrearNuevoTransporte();
            

           ?>

    </form>

    </div>

  </div>

</div>




<!--=====================================
=  MODAL EDITAR TRANSPORTE           =
======================================-->

<div id="modalEditarTransporte" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
    <!--=====================================
    =  TITULO DE MODAL          =
    ======================================-->
          <div class="modal-header bg-success">

          	 <h4 class="modal-title text-uppercase">Editar Transporte | <span id="nombreTransporte"></span></h4>

            <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>
    <!--=====================================
    =  CUERPO DE MODAL          =
    ======================================-->
          <div class="modal-body">

            <div class="box-body">

            <label for="editarTipoTransporteId">Nombre de transporte</label>

              <div  class="input-group mb-2 mr-sm-2">

                <span class="input-group-prepend">

                	<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-user"></i></div>

                </span>

                   <input type="text" name="editarTipoTransporte" id="editarTipoTransporteId" placeholder="Ingresa tipo (Ejemplo: Automovil)" required class="form-control input-lg">
                   <input type="hidden" name="idTransporte" id="transporteId" class="form-control" required="">

              </div>

            </div>

          </div>

    <!--=====================================
    =  PIE DE MODAL          =
    ======================================-->
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-info text-uppercase bg-success"> Actualizar </button>
          </div>

          <?php 

            $editarTransporte = new ControladorTiposTransportes();
            $editarTransporte -> ctrEditarTransporte();
            

           ?>

    </form>

    </div>
  </div>
</div>


<?php 

	$eliminarTransporte = new ControladorTiposTransportes();
	$eliminarTransporte -> ctrBorrarTransporte();

 ?>








<!--=====================================
=  MODAL AGREGAR MARCA           =
======================================-->

<div id="modalAgregarMarca" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
    <!--=====================================
    =  TITULO DE MODAL          =
    ======================================-->
          <div class="modal-header bg-success">

          	 <h4 class="modal-title text-uppercase">Nuevo Marca</h4>

            <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>
    <!--=====================================
    =  CUERPO DE MODAL          =
    ======================================-->
          <div class="modal-body">

            <div class="box-body">

            <label for="nuevaMarcaId">Nombre de la marca</label>

              <div  class="input-group mb-2 mr-sm-2">

                <span class="input-group-prepend">

                	<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-user"></i></div>

                </span>

                   <input type="text" name="nuevaMarca" id="nuevaMarcaId" placeholder="Ingresa marca" required class="form-control input-lg">

              </div>

            </div>

          </div>

    <!--=====================================
    =  PIE DE MODAL          =
    ======================================-->
          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left text-uppercase" data-bs-dismiss="modal">Cerrar</button>

            <button type="submit" class="btn btn-info text-uppercase bg-success"> Registrar marca</button>

          </div>

          <?php 

            $crearMarca = new ControladorMarcas();
            $crearMarca -> ctrCrearNuevaMarca();
            

           ?>

    </form>

    </div>

  </div>

</div>




<!--=====================================
=  MODAL EDITAR TRANSPORTE           =
======================================-->

<div id="modalEditarMarca" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
    <!--=====================================
    =  TITULO DE MODAL          =
    ======================================-->
          <div class="modal-header bg-success">

          	 <h4 class="modal-title text-uppercase">Editar Marca | <span id="nombreMarca"></span></h4>

            <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>
    <!--=====================================
    =  CUERPO DE MODAL          =
    ======================================-->
          <div class="modal-body">

            <div class="box-body">

            <label for="editarMarcaId">Nombre de la marca</label>

              <div  class="input-group mb-2 mr-sm-2">

                <span class="input-group-prepend">

                	<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-user"></i></div>

                </span>

                   <input type="text" name="editarMarca" id="editarMarcaId" placeholder="Ingresa la marca" required class="form-control input-lg">
                   <input type="hidden" name="idMarca" id="marcaId" class="form-control" required="">

              </div>

            </div>

          </div>

    <!--=====================================
    =  PIE DE MODAL          =
    ======================================-->
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left text-uppercase" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-info bg-success text-uppercase"> Actualizar marca</button>
          </div>

          <?php 

            $editarMarca = new ControladorMarcas();
            $editarMarca -> ctrEditarMarca();
            

           ?>

    </form>

    </div>
  </div>
</div>


<?php 

	$eliminarMarca = new ControladorMarcas();
	$eliminarMarca -> ctrBorrarMarca();

 ?>







<!--=====================================
=  MODAL AGREGAR SUBMARCA           =
======================================-->

<div id="modalAgregarSubMarca" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
    <!--=====================================
    =  TITULO DE MODAL          =
    ======================================-->
          <div class="modal-header bg-success">

          	 <h4 class="modal-title text-uppercase">Nuevo Sub Marca</h4>

            <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>
    <!--=====================================
    =  CUERPO DE MODAL          =
    ======================================-->
          <div class="modal-body">

            <div class="box-body">

           	  <label for="nuevaSubMarcaId">Seleccionar la marca</label>

              <div  class="input-group mb-2 mr-sm-2">

                <span class="input-group-prepend">

                	<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-circle"></i></div>

                </span>

                   <select name="nuevaMarcaSub" id="nuevaMarcaSubId" class="form-control" required="">

                   	<option value="">Seleccionar marca</option>

                   	<?php 
                   		$itemMar = null;
                   		$valorMar = null;

                   		$respuestMar = ControladorMarcas::ctrMostrarMarcas($itemMar, $valorMar);

                   		foreach ($respuestMar as $key => $value) {
                   			
                   			echo '<option value="'.$value["idMarca"].'">'.$value["marca"].'</option>';
                   		}


                   	 ?>
                   	
                   </select>

              </div>



            <label for="nuevaSubMarcaId">Nombre de la submarca</label>

              <div  class="input-group mb-2 mr-sm-2">

                <span class="input-group-prepend">

                	<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-circle"></i></div>

                </span>

                   <input type="text" name="nuevaSubMarca" id="nuevaSubMarcaId" placeholder="Ingresa submarca" required class="form-control input-lg">

              </div>

            </div>

          </div>

    <!--=====================================
    =  PIE DE MODAL          =
    ======================================-->
          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left text-uppercase" data-bs-dismiss="modal">Cerrar</button>

            <button type="submit" class="btn btn-success text-uppercase"> Registrar Submarca</button>

          </div>

          <?php 

            $crearSubMarca = new ControladorSubMarcas();
            $crearSubMarca -> ctrCrearNuevaSubMarca();
            

           ?>

    </form>

    </div>

  </div>

</div>




<!--=====================================
=  MODAL EDITAR TRANSPORTE           =
======================================-->

<div id="modalEditarSubMarca" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
    <!--=====================================
    =  TITULO DE MODAL          =
    ======================================-->
          <div class="modal-header bg-success">

          	 <h4 class="modal-title text-uppercase">Editar SubMarca | <span id="nombreSubMarca"></span></h4>

            <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>
    <!--=====================================
    =  CUERPO DE MODAL          =
    ======================================-->
          <div class="modal-body">

            <div class="box-body">

            <label for="editarMarcaId">Nombre de la submarca</label>

              <div  class="input-group mb-2 mr-sm-2">

                <span class="input-group-prepend">

                	<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-user"></i></div>

                </span>

                   <input type="text" name="editarSubMarca" id="editarSubMarcaId" placeholder="Ingresa la marca" required class="form-control input-lg">
                   <input type="hidden" name="idMarca2" id="marca2Id" class="form-control" required="">
                   <input type="hidden" name="idSubMarca" id="subMarcaId" class="form-control" required="">

              </div>

            </div>

          </div>

    <!--=====================================
    =  PIE DE MODAL          =
    ======================================-->
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left text-uppercase" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-success text-uppercase"> Actualizar submarca</button>
          </div>

          <?php 

            $editarSubMarca = new ControladorSubMarcas();
            $editarSubMarca -> ctrEditarSubMarca();
            

           ?>

    </form>

    </div>
  </div>
</div>


<?php 

	$eliminarSubMarca = new ControladorSubMarcas();
	$eliminarSubMarca -> ctrBorrarSubMarca();

 ?>





 <!--=====================================
=  MODAL AGREGAR CLASE           =
======================================-->

<div id="modalAgregarClase" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
    <!--=====================================
    =  TITULO DE MODAL          =
    ======================================-->
          <div class="modal-header bg-success">

          	 <h4 class="modal-title text-uppercase">Nueva Clase</h4>

            <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>
    <!--=====================================
    =  CUERPO DE MODAL          =
    ======================================-->
          <div class="modal-body">

            <div class="box-body">

            <label for="nuevaClaseId">Nombre de la clase</label>

              <div  class="input-group mb-2 mr-sm-2">

                <span class="input-group-prepend">

                	<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-user"></i></div>

                </span>

                   <input type="text" name="nuevaClase" id="nuevaClaseId" placeholder="Ingresa clase" required class="form-control input-lg">

              </div>

            </div>

          </div>

    <!--=====================================
    =  PIE DE MODAL          =
    ======================================-->
          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left text-uppercase" data-bs-dismiss="modal">Cerrar</button>

            <button type="submit" class="btn btn-success text-uppercase"> Registrar clase</button>

          </div>

          <?php 

            $crearClase = new ControladorClases();
            $crearClase -> ctrCrearNuevaClase();
            

           ?>

    </form>

    </div>

  </div>

</div>




<!--=====================================
=  MODAL EDITAR CLASE           =
======================================-->

<div id="modalEditarClase" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
    <!--=====================================
    =  TITULO DE MODAL          =
    ======================================-->
          <div class="modal-header bg-success">

          	 <h4 class="modal-title text-uppercase">Editar Clase | <span id="nombreClase"></span></h4>

            <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>
    <!--=====================================
    =  CUERPO DE MODAL          =
    ======================================-->
          <div class="modal-body">

            <div class="box-body">

            <label for="editarMarcaId">Nombre de la marca</label>

              <div  class="input-group mb-2 mr-sm-2">

                <span class="input-group-prepend">

                	<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-user"></i></div>

                </span>

                   <input type="text" name="editarClase" id="editarClaseId" placeholder="Ingresa la clase" required class="form-control input-lg">
                   <input type="hidden" name="idClase" id="claseId" class="form-control" required="">

              </div>

            </div>

          </div>

    <!--=====================================
    =  PIE DE MODAL          =
    ======================================-->
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left text-uppercase" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-success text-uppercase"> Actualizar clase </button>
          </div>

          <?php 

            $editarClase = new ControladorClases();
            $editarClase -> ctrEditarClase();
            

           ?>

    </form>

    </div>
  </div>
</div>


<?php 

	$eliminarClase = new ControladorClases();
	$eliminarClase -> ctrBorrarClase();

 ?>







 <!--=====================================
=  MODAL AGREGAR CLASE           =
======================================-->

<div id="modalAgregarCombustible" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
    <!--=====================================
    =  TITULO DE MODAL          =
    ======================================-->
          <div class="modal-header bg-success">

          	 <h4 class="modal-title text-uppercase">Nuevo Combustible</h4>

            <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>
    <!--=====================================
    =  CUERPO DE MODAL          =
    ======================================-->
          <div class="modal-body">

            <div class="box-body">

            <label for="nuevoCombustibleId">Nombre del combustible</label>

              <div  class="input-group mb-2 mr-sm-2">

                <span class="input-group-prepend">

                	<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-user"></i></div>

                </span>

                   <input type="text" name="nuevoCombustible" id="nuevoCombustibleId" placeholder="Ingresa combustible" required class="form-control input-lg">

              </div>

            </div>

          </div>

    <!--=====================================
    =  PIE DE MODAL          =
    ======================================-->
          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left text-uppercase" data-bs-dismiss="modal">Cerrar</button>

            <button type="submit" class="btn btn-success text-uppercase"> Registrar combustible</button>

          </div>

          <?php 

            $crearCombustible = new ControladorCombustibles();
            $crearCombustible -> ctrCrearNuevoCombustible();
            

           ?>

    </form>

    </div>

  </div>

</div>




<!--=====================================
=  MODAL EDITAR COMBUSTIBLE           =
======================================-->

<div id="modalEditarCombustible" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
    <!--=====================================
    =  TITULO DE MODAL          =
    ======================================-->
          <div class="modal-header bg-success">

          	 <h4 class="modal-title text-uppercase">Editar Combustible | <span id="nombreCombustible"></span></h4>

            <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>
    <!--=====================================
    =  CUERPO DE MODAL          =
    ======================================-->
          <div class="modal-body">

            <div class="box-body">

            <label for="editarCombustibleId">Nombre del combustible</label>

              <div  class="input-group mb-2 mr-sm-2">

                <span class="input-group-prepend">

                	<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-user"></i></div>

                </span>

                   <input type="text" name="editarCombustible" id="editarCombustibleId" placeholder="Ingresa del combustible" required class="form-control input-lg">
                   <input type="hidden" name="idCombustible" id="combustibleId" class="form-control" required="">

              </div>

            </div>

          </div>

    <!--=====================================
    =  PIE DE MODAL          =
    ======================================-->
          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left text-uppercase" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-success text-uppercase"> Actualizar combustible</button>
          </div>

          <?php 

            $editarCombustible = new ControladorCombustibles();
            $editarCombustible -> ctrEditarCombustible();
            

           ?>

    </form>

    </div>
  </div>
</div>


<?php 

	$eliminarCombustible = new ControladorCombustibles();
	$eliminarCombustible -> ctrBorrarCombustible();

 ?>








 <!--=====================================
=  MODAL AGREGAR SEGURO           =
======================================-->

<div id="modalAgregarSeguro" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
    <!--=====================================
    =  TITULO DE MODAL          =
    ======================================-->
          <div class="modal-header bg-success">

          	 <h4 class="modal-title text-uppercase">Nuevo Seguro</h4>

            <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>
    <!--=====================================
    =  CUERPO DE MODAL          =
    ======================================-->
          <div class="modal-body">

            <div class="box-body">

            <label for="nuevoSeguroId">Nombre del seguro</label>

              <div  class="input-group mb-2 mr-sm-2">

                <span class="input-group-prepend">

                	<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-user"></i></div>

                </span>

                   <input type="text" name="nuevoSeguro" id="nuevoSeguroId" placeholder="Ingresa seguro" required class="form-control input-lg">

              </div>

            </div>

          </div>

    <!--=====================================
    =  PIE DE MODAL          =
    ======================================-->
          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left text-uppercase" data-bs-dismiss="modal">Cerrar</button>

            <button type="submit" class="btn btn-success text-uppercase"> Registrar seguro</button>

          </div>

          <?php 

            $crearSeguro = new ControladorSeguros();
            $crearSeguro -> ctrCrearNuevoSeguro();
            

           ?>

    </form>

    </div>

  </div>

</div>




<!--=====================================
=  MODAL EDITAR COMBUSTIBLE           =
======================================-->

<div id="modalEditarSeguro" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
    <!--=====================================
    =  TITULO DE MODAL          =
    ======================================-->
          <div class="modal-header bg-success">

          	 <h4 class="modal-title text-uppercase">Editar Seguro | <span id="nombreSeguro"></span></h4>

            <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>
    <!--=====================================
    =  CUERPO DE MODAL          =
    ======================================-->
          <div class="modal-body">

            <div class="box-body">

            <label for="editarSeguroId">Nombre del seguro</label>

              <div  class="input-group mb-2 mr-sm-2">

                <span class="input-group-prepend">

                	<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-user"></i></div>

                </span>

                   <input type="text" name="editarSeguro" id="editarSeguroId" placeholder="Ingresa del seguro" required class="form-control input-lg">
                   <input type="hidden" name="idSeguro" id="seguroId" class="form-control" required="">

              </div>

            </div>

          </div>

    <!--=====================================
    =  PIE DE MODAL          =
    ======================================-->
          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left text-uppercase" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-success text-uppercase"> Actualizar seguro</button>
          </div>

          <?php 

            $editarSeguro = new ControladorSeguros();
            $editarSeguro -> ctrEditarSeguro();
            

           ?>

    </form>

    </div>
  </div>
</div>


<?php 

	$eliminarSeguro = new ControladorSeguros();
	$eliminarSeguro -> ctrBorrarSeguro();

 ?>









 <!--=====================================
=  MODAL AGREGAR SEGURO           =
======================================-->

<div id="modalAgregarTramite" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
    <!--=====================================
    =  TITULO DE MODAL          =
    ======================================-->
          <div class="modal-header bg-success">

          	 <h4 class="modal-title text-uppercase">Nuevo Trámite</h4>

            <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>
    <!--=====================================
    =  CUERPO DE MODAL          =
    ======================================-->
          <div class="modal-body">

            <div class="box-body">

            <label for="nuevoTramiteId">Nombre del trámite</label>

              <div  class="input-group mb-2 mr-sm-2">

                <span class="input-group-prepend">

                	<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-circle"></i></div>

                </span>

                   <input type="text" name="nuevoTramite" id="nuevoTramiteId" placeholder="Ingresa tramite" required class="form-control input-lg">

              </div>

            </div>

          </div>

    <!--=====================================
    =  PIE DE MODAL          =
    ======================================-->
          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left text-uppercase" data-bs-dismiss="modal">Cerrar</button>

            <button type="submit" class="btn btn-success text-uppercase"> Registrar tramite </button>

          </div>

          <?php 

            $crearTramite = new ControladorTramites();
            $crearTramite -> ctrCrearNuevoTramite();
            

           ?>

    </form>

    </div>

  </div>

</div>




<!--=====================================
=  MODAL EDITAR TRAMITE           =
======================================-->

<div id="modalEditarTramite" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
    <!--=====================================
    =  TITULO DE MODAL          =
    ======================================-->
          <div class="modal-header bg-success">

          	 <h4 class="modal-title text-uppercase">Editar Trámite | <span id="nombreTramite"></span></h4>

            <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>
    <!--=====================================
    =  CUERPO DE MODAL          =
    ======================================-->
          <div class="modal-body">

            <div class="box-body">

            <label for="editarSeguroId">Nombre del trámite</label>

              <div  class="input-group mb-2 mr-sm-2">

                <span class="input-group-prepend">

                	<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-user"></i></div>

                </span>

                   <input type="text" name="editarTramite" id="editarTramiteId" placeholder="Ingresa el trámite" required class="form-control input-lg">
                   <input type="hidden" name="idTramite" id="tramiteId" class="form-control" required="">

              </div>

            </div>

          </div>

    <!--=====================================
    =  PIE DE MODAL          =
    ======================================-->
          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left text-uppercase" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-success text-uppercase"> Actualizar tramite</button>
          </div>

          <?php 

            $editarTramite = new ControladorTramites();
            $editarTramite -> ctrEditarTramite();
            

           ?>

    </form>

    </div>
  </div>
</div>


<?php 

	$eliminarTramite = new ControladorTramites();
	$eliminarTramite -> ctrBorrarTramite();

 ?>







 <!--=====================================
=  MODAL AGREGAR SEGURO           =
======================================-->

<!-- <div id="modalAgregarArea" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">

          <div class="modal-header bg-info">

          	 <h4 class="modal-title text-uppercase">Nueva Area</h4>

            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>

          <div class="modal-body">

            <div class="box-body">

            <label for="nuevoAreaId">Nombre del area</label>

              <div  class="input-group mb-2 mr-sm-2">

                <span class="input-group-prepend">

                	<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-circle"></i></div>

                </span>

                   <input type="text" name="nuevaArea" id="nuevoAaeaId" placeholder="Ingresa area" required class="form-control input-lg">

              </div>

            </div>

          </div>

          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>

            <button type="submit" class="btn btn-info"> Registrar </button>

          </div>

          <?php 

            // $crearArea = new ControladorAreas();
            // $crearArea -> ctrCrearNuevaArea();
            

           ?>

    </form>

    </div>

  </div>

</div> -->




<!--=====================================
=  MODAL EDITAR TRAMITE           =
======================================-->

<!-- <div id="modalEditarArea" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">

          <div class="modal-header bg-info">

          	 <h4 class="modal-title">Editar Area | <span id="nombreArea"></span></h4>

            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>

          <div class="modal-body">

            <div class="box-body">

            <label for="editarSeguroId">Nombre del área</label>

              <div  class="input-group mb-2 mr-sm-2">

                <span class="input-group-prepend">

                	<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-user"></i></div>

                </span>

                   <input type="text" name="editarArea" id="editarAreaId" placeholder="Ingresa el area" required class="form-control input-lg">
                   <input type="hidden" name="idAreaVehiculo" id="areaId" class="form-control" required="">

              </div>

            </div>

          </div>

  
          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-info"> Actualizar </button>
          </div>

          <?php 

            // $editarArea = new ControladorAreas();
            // $editarArea -> ctrEditarArea();
            

           ?>

    </form>

    </div>
  </div>
</div> -->


<?php 

	// $eliminarArea = new ControladorAreas();
	// $eliminarArea -> ctrBorrarTramite();

 ?>



<?php 


}else {

  echo '<script>


          let timerInterval;

          Swal.fire({
              icon:"error",
              title: "¡ NO TIENES PRIVILEGIOS !",
              timer: 2000,
              timerProgressBar: true,

              didOpen: () => {

                Swal.showLoading();

                const timer = Swal.getPopup().querySelector("b");

                timerInterval = setInterval(() => {

                        timer.textContent = `${Swal.getTimerLeft()}`;

                    }, 100);

                  },

                  willClose: () => {

                    clearInterval(timerInterval);

                }

                }).then((result) => {

                   window.location = "inicio";

                });

        </script>';


} 



?>
