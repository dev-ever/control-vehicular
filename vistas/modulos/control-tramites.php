<?php if($_SESSION["perfilVehicular"] == "1" || $_SESSION["perfilVehicular"] == "2" || $_SESSION["perfilVehicular"] == "5"){ ?>

<div class="content-wrapper"> 

	<section class="content-header"> 

		<div class="container-fluid">

			<div class="row mb-2">

				<div class="col-sm-6">

					<h1 class="text-uppercase">Administración de Trámites</h1>

				</div>

				<div class="col-sm-6">

					<ol class="breadcrumb float-sm-right text-uppercase">

						<li class="breadcrumb-item">

							<a href="inicio"><i class="fas fa-tachometer-alt"></i> Inicio</a>

						</li>

						<li class="breadcrumb-item active">

							Administracion de Trámites

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

								<button class="btn btn-success text-uppercase" data-bs-toggle="modal" data-bs-target="#modalAgregarTramiteVeh" data-backdrop="static">Agregar nuevo trámite</button> 

							</h3>

						</div>

						<div class="card-body">

							<table class="table table-bordered table-hover tablas tablaTramitesVehiculos">

								<thead>

									<tr>
										<th style="width:10px" class="text-center">#</th>
										<th class="text-center">Folio</th>
										<th class="text-center">Vehículo</th>
                                        <th class="text-center">Estado</th>
										<th class="text-center">Tramite</th>
										<th class="text-center">Observaciones</th>
										<th class="text-center">Fecha de tramite</th>
										<th class="text-center">Acciones</th>
									</tr>

								</thead>

								<tbody>

									<?php 

										$itemTramite = null;
										$valorTramite = null;

										$respuestaTramite = ControladorTramitesVehiculares::ctrMostrarTramitesVehiculares($itemTramite, $valorTramite);

										foreach ($respuestaTramite as $key => $value) {
											
											echo '<tr>

													<td class="text-center">'.($key+1).'</td>';

													$itemVehiculo = "idVehiculo";
													$valorVehiculo = $value["vehiculo_id"];

													$respuestaVehiculo = ControladorVehiculos::ctrMostrarVehiculos($itemVehiculo, $valorVehiculo);

													$itemTramite = "idTramite";
													$valorTramite = $value["tramite_id"];

													$respuestaTramite = ControladorTramites::ctrMostrarTramites($itemTramite, $valorTramite);

                                                    

											echo   '<td class="text-center">'.$respuestaVehiculo["folio"].'</td>
                                                    <td>'.$respuestaVehiculo["folio"].' - '.$respuestaVehiculo["placas"].' - '.$respuestaVehiculo['modelo'].'</td>';

                                                    if($value["estado"] == "1"){

                                                        echo '<td class="text-center"><span class="badge badge-success p-2">Procesado<span></td>';
                                                        
                                                    }else if($value["estado"] =="0"){

                                                        echo '<td class="text-center"><span class="badge badge-warning p-2">Pendiente<span></td>';

                                                    }


											echo	'<td class="text-center">'.$respuestaTramite["tramite"].'</td>
													<td class="text-center">'.$value["observaciones"].'</td>
													<td class="text-center">'.$value["fecha"].'</td>
													
													<td class="text-center">

													<button class="btn btn-warning btn-xs btnEditarTramiteVeh" idTramiteVeh="'.$value["idTramiteVehiculo"].'" data-bs-toggle="modal" data-bs-target="#modalEditarrTramiteVeh" data-backdrop="static" data-tooltip="tooltip" data-original-title="Editar"><i class="fa fa-pen"></i></button>

													<button class="btn btn-danger btn-xs btnEliminarTramiteVeh" idTramiteVeh="'.$value["idTramiteVehiculo"].'"  data-tooltip="tooltip" data-original-title="Eliminar"><i class="fa fa-trash"></i></button>
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







 <!--=====================================
=  MODAL AGREGAR            =
======================================-->

<div id="modalAgregarTramiteVeh" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
    <!--=====================================
    =  TITULO DE MODAL          =
    ======================================-->
          <div class="modal-header bg-success">

          	 <h4 class="modal-title">Nuevo Trámite Vehículo</h4>

            <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>
    <!--=====================================
    =  CUERPO DE MODAL          =
    ======================================-->
          <div class="modal-body">

            <div class="box-body">

            	<div class="row">

            		<div class="col-12 col-md-6">

            			<label for="nuevoVehiculoTramiteId">Seleccionar vehículo</label>

            			<div  class="input-group mb-2 mr-sm-2">

            				<span class="input-group-prepend">

            					<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-circle"></i></div>

            				</span>

            				<select name="nuevoVehiculoTramite" id="nuevoVehiculoTramiteId" class="form-control" required="">

            					<option value="">Selecciona folio</option>
            					<?php 

            						$itemVe = null;
            						$valorVe = null;

            						$respuestaVe = ControladorVehiculos::ctrMostrarVehiculos($itemVe, $valorVe);

            						foreach ($respuestaVe as $key => $value) {
            							
            							echo '<option value="'.$value["idVehiculo"].'">'.$value["folio"].' - '.$value["placas"]." - ".$value["modelo"].'</option>';
            						}

            					 ?>
            				</select>

            			</div>

            		</div>


                    <div class="col-12 col-md-6">

                        <label for="nuevoTramiteVehId">Seleccionar tramite</label>

                        <div  class="input-group mb-2 mr-sm-2">

                            <span class="input-group-prepend">

                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-circle"></i></div>

                            </span>

                            <select name="nuevoTramiteVeh" id="nuevoTramiteVehId" class="form-control" required="">

                                <option value=""> -- Seleccionar -- </option>

                                <?php 

                                    $itemTramite = null;
                                    $valorTramite = null;

                                    $respuestaTramites = ControladorTramites::ctrMostrarTramites($itemTramite, $valorTramite);

                                    foreach ($respuestaTramites as $key => $value) {
                                        
                                        echo '<option value="'.$value["idTramite"].'">'.$value["tramite"].'</option>';
                                    }
                                 ?>
                            </select>

                        </div>

                    </div>


                    <div class="col-12 col-md-6">

                        <label for="nuevoEstatusTramiteId">Estatus:</label>

                        <div  class="input-group mb-2 mr-sm-2">

                            <select name="nuevoEstatusTramite" id="nuevoEstatusTramiteId" required class="form-control input-lg">

                                <option value=""> -- Seleccionar -- </option>
                                <option value="0">Pendiente</option>
                                <option value="1">Realizado</option>
                                
                            </select>

                        </div>
                        
                    </div>



            		<div class="col-12 col-md-6">

            			<label for="nuevaFechaTramiteId">Fecha:</label>

            			<div  class="input-group mb-2 mr-sm-2">

            				<input type="date" name="nuevaFechaTramite" id="nuevaFechaTramiteId" placeholder="Fecha"  required class="form-control input-lg">

            			</div>
            			

            		</div>

            		<div class="col-12 col-md-12">

            			<label for="nuevaObservacionesTramiteId">Observaciones:</label>

            			<div  class="input-group mb-2 mr-sm-2">

            				<textarea name="nuevaObservacionesTramite" id="nuevaObservacionesTramiteId" cols="30" rows="3" required class="form-control input-lg" placeholder="Ingresa observaciones del trámite"></textarea>

            				

            			</div>
            			

            		</div>



            	</div>

            </div>

          </div>

    <!--=====================================
    =  PIE DE MODAL          =
    ======================================-->
          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left text-uppercase" data-bs-dismiss="modal">Cerrar</button>

            <button type="submit" class="btn btn-success text-uppercase"> Registrar trámite</button>

          </div>

          <?php 

            $agregarTramVehiculo = new ControladorTramitesVehiculares();
            $agregarTramVehiculo -> ctrCrearNuevoTramiteVehiculo();
            

           ?>

    </form>

    </div>

  </div>

</div>





 <!--=====================================
=  MODAL AGREGAR            =
======================================-->

<div id="modalEditarrTramiteVeh" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
    <!--=====================================
    =  TITULO DE MODAL          =
    ======================================-->
          <div class="modal-header bg-success">

          	 <h4 class="modal-title">Editar Trámite Vehículo</h4>

            <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>
    <!--=====================================
    =  CUERPO DE MODAL          =
    ======================================-->
          <div class="modal-body">

            <div class="box-body">

            	<div class="row">

            		<div class="col-12 col-md-6">

            			<label for="editarVehiculoTramiteId">Seleccionar vehículo</label>

            			<div  class="input-group mb-2 mr-sm-2">

            				<span class="input-group-prepend">

            					<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-circle"></i></div>

            				</span>

            				<input type="hidden" id="TramiteVehiculoId" name="idTramiteVehiculo" class="form-control" required="">

            				<select name="editarVehiculoTramite" id="editarVehiculoTramiteId" class="form-control" required="">

            					<option value="" id="editarVehiculoTramiteId2">Selecciona folio</option>
            					<?php 

            						$itemVe = null;
            						$valorVe = null;

            						$respuestaVe = ControladorVehiculos::ctrMostrarVehiculos($itemVe, $valorVe);

            						foreach ($respuestaVe as $key => $value) {
            							
            							echo '<option value="'.$value["idVehiculo"].'">'.$value["folio"].' - '.$value["placas"]." - ".$value["modelo"].'</option>';
            						}
            						
            					 ?>
            				</select>

            			</div>

            		</div>


                    <div class="col-12 col-md-6">

                        <label for="editarTramiteVehId">Seleccionar tramite</label>

                        <div  class="input-group mb-2 mr-sm-2">

                            <span class="input-group-prepend">

                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-circle"></i></div>

                            </span>

                            <select name="editarTramiteVeh" id="editarTramiteVehId" class="form-control" required="">

                                <option value="" id="editarTramiteVehId2">Seleccionar</option>

                                <?php 

                                    $itemTramite = null;
                                    $valorTramite = null;

                                    $respuestaTramites = ControladorTramites::ctrMostrarTramites($itemTramite, $valorTramite);

                                    foreach ($respuestaTramites as $key => $value) {
                                        
                                        echo '<option value="'.$value["idTramite"].'">'.$value["tramite"].'</option>';
                                    }
                                 ?>
                            </select>

                        </div>

                    </div>


                    <div class="col-12 col-md-6">

                        <label for="editarEstatusTramiteId">Estatus:</label>

                        <div  class="input-group mb-2 mr-sm-2">

                            <select name="editarEstatusTramite" id="editarEstatusTramiteId" required class="form-control input-lg">
                                <option value="" id="estatusTramiteId"> -- Seleccionar -- </option>
                                <option value="0">Pendiente</option>
                                <option value="1">Realizado</option>
                            </select>

                        </div>
                        
                    </div>




            		<div class="col-12 col-md-6">

            			<label for="editarFechaTramiteId">Fecha:</label>

            			<div  class="input-group mb-2 mr-sm-2">

            				<input type="date" name="editarFechaTramite" id="editarFechaTramiteId" placeholder="Fecha"  required class="form-control input-lg">

            			</div>
            			

            		</div>

            		<div class="col-12 col-md-12">

            			<label for="nuevaObservacionesTramiteId">Observaciones:</label>

            			<div  class="input-group mb-2 mr-sm-2">

            				<textarea name="editarObservacionesTramite" id="editarObservacionesTramiteId" cols="30" rows="3" required class="form-control input-lg" placeholder="Ingresa observaciones del trámite"></textarea>

            				

            			</div>
            			

            		</div>



            	</div>

            </div>

          </div>

    <!--=====================================
    =  PIE DE MODAL          =
    ======================================-->
          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left text-uppercase" data-bs-dismiss="modal">Cerrar</button>

            <button type="submit" class="btn btn-success text-uppercase"> Actualizar trámite</button>

          </div>

          <?php 

            $editarTramVehiculo = new ControladorTramitesVehiculares();
            $editarTramVehiculo -> ctrActualizarTramiteVehiculo();
            

           ?>

    </form>

    </div>

  </div>

</div>


<?php 

	$eliminarTramVehiculo = new ControladorTramitesVehiculares();
	$eliminarTramVehiculo -> ctrBorrarTramiteVehiculo();


?>