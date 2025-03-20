<?php if($_SESSION["perfilVehicular"] == "1" || $_SESSION["perfilVehicular"] == "2" || $_SESSION["perfilVehicular"] == "5"){ ?>

<div class="content-wrapper">

	<section class="content-header">  

		<div class="container-fluid">

			<div class="row mb-2">

				<div class="col-sm-6">

					<h1 class="text-uppercase">Administración de Servicios</h1>

				</div>

				<div class="col-sm-6">

					<ol class="breadcrumb float-sm-right text-uppercase">

						<li class="breadcrumb-item">

							<a href="inicio"><i class="fas fa-tachometer-alt"></i> Inicio</a>

						</li>

						<li class="breadcrumb-item active">

							Administracion de Servicios

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

								<button class="btn btn-success text-uppercase" data-bs-toggle="modal" data-bs-target="#modalAgregarServicio">Agregar nuevo servicio</button> 

							</h3>

						</div>

						<div class="card-body">

							<table class="table table-bordered table-hover tablas tablaServiciosVehiculares">

								<thead>

									<tr>
										<th style="width:10px" class="text-center">#</th>
										<th class="text-center">Folio</th>
										<th class="text-center">Vehículo</th>
										<th class="text-center">Servicio</th>
										<th class="text-center">Observaciones</th>
										<th class="text-center">Fecha de Servicio</th>
										<th class="text-center">Acciones</th>
									</tr>

								</thead>

								<tbody>

									<?php 

										$itemServicio = null;
										$valorServicio = null;

										$respuestaServicios = ControladorServiciosVehiculares::ctrMostrarServiciosVehiculares($itemServicio, $valorServicio);
										

										foreach ($respuestaServicios as $key => $value) {
											
											echo '<tr>

													<td class="text-center">'.($key+1).'</td>';

													$itemVehiculo = "idVehiculo";
													$valorVehiculo = $value["vehiculo_id"];

													$respuestaVehiculo = ControladorVehiculos::ctrMostrarVehiculos($itemVehiculo, $valorVehiculo);

											echo   '<td class="text-center">'.$respuestaVehiculo['folio'].'</td>
                                                    <td>'.$respuestaVehiculo["folio"].' - '.$respuestaVehiculo["placas"].' - '.$respuestaVehiculo['modelo'].'</td>
													<td class="text-center">'.$value['servicio'].'</td>
													<td class="text-center">'.$value['observaciones'].'</td>
													<td class="text-center">'.$value['fecha'].'</td>
													<td class="text-center">

													 <button class="btn btn-warning btn-xs btnEditarServicioVehiculo" idServicioVehiculo="'.$value["idVehiculoServicio"].'" data-bs-toggle="modal" data-bs-target="#modalEditarServicioVehiculo" data-tooltip="tooltip" data-original-title="Editar"><i class="fa fa-pen"></i></button>

                                                    <button class="btn btn-danger btn-xs btnEliminarServicioVehiculo" idServicioVehiculo="'.$value["idVehiculoServicio"].'"  data-tooltip="tooltip" data-original-title="Eliminar"><i class="fa fa-trash"></i></button>


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

<div id="modalAgregarServicio" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
    <!--=====================================
    =  TITULO DE MODAL          =
    ======================================-->
          <div class="modal-header bg-success">

          	 <h4 class="modal-title">Nuevo Servicio Vehiculo</h4>

            <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>
    <!--=====================================
    =  CUERPO DE MODAL          =
    ======================================-->
          <div class="modal-body">

            <div class="box-body">

            	<div class="row">

            		<div class="col-12 col-md-6">

            			<label for="nuevoVehiculoId">Seleccionar vehículo</label>

            			<div  class="input-group mb-2 mr-sm-2">

            				<span class="input-group-prepend">

            					<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-circle"></i></div>

            				</span>

            				<select name="nuevoVehiculoServicio" id="nuevoVehiculoId" class="form-control" required="">

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

            			<label for="nuevoServicioVehiculoId">Servicio:</label>

            			<div  class="input-group mb-2 mr-sm-2">

            				<input type="text" name="nuevoServicioVehiculo" id="nuevoServicioVehiculoId" placeholder="Ingresa servicio"  required class="form-control input-lg" maxlength="255">

            			</div>
            			

            		</div>


            		<div class="col-12 col-md-6">

            			<label for="nuevoTallerServicioId">Taller:</label>

            			<div  class="input-group mb-2 mr-sm-2">

            				<input type="text" name="nuevoTallerServicio" id="nuevoTallerServicioId" placeholder="Ingresa taller"  required class="form-control input-lg" maxlength="255">

            			</div>
            			

            		</div>


            		<div class="col-12 col-md-6">

            			<label for="nuevaFechaServicioId">Fecha:</label>

            			<div  class="input-group mb-2 mr-sm-2">

            				<input type="date" name="nuevaFechaServicio" id="nuevaFechaServicioId" placeholder="Fecha"  required class="form-control input-lg">

            			</div>
            			

            		</div>

            		<div class="col-12 col-md-12">

            			<label for="nuevaObservacionesServicioId">Observaciones:</label>

            			<div  class="input-group mb-2 mr-sm-2">

            				<textarea name="nuevaObservacionesServicio" id="nuevaObservacionesServicioId" cols="30" rows="3" placeholder="Ingresa Observaciones" class="form-control input-lg" maxlength="255"></textarea>

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

            <button type="submit" class="btn btn-success text-uppercase"> Registrar servicio</button>

          </div>

          <?php 

            $agregarServVehiculo = new ControladorServiciosVehiculares();
            $agregarServVehiculo -> ctrCrearNuevoServicioVehiculo();
            

           ?>

    </form>

    </div>

  </div>

</div>








 <!--=====================================
=  MODAL EDICION            =
======================================-->

<div id="modalEditarServicioVehiculo" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
    <!--=====================================
    =  TITULO DE MODAL          =
    ======================================-->
          <div class="modal-header bg-success">

          	 <h4 class="modal-title">Editar Servicio Vehiculo</h4>

            <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>
    <!--=====================================
    =  CUERPO DE MODAL          =
    ======================================-->
          <div class="modal-body">

            <div class="box-body">

            	<div class="row">

            		<div class="col-12 col-md-6">

            			<label for="editarVehiculoId">Seleccionar vehículo</label>

            			<div  class="input-group mb-2 mr-sm-2">

            				<span class="input-group-prepend">

            					<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-circle"></i></div>

            				</span>
            				<input type="hidden" class="form-control" name="idServicioVehiculo" id="idServicioVehiculoId" required="">

            				<select name="editarVehiculoServicio" id="editarVehiculoId" class="form-control" required="">

            					<option value="" id="editarVehiculoServicioId">Selecciona folio</option>
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

            			<label for="editarServicioVehiculoId">Servicio:</label>

            			<div  class="input-group mb-2 mr-sm-2">

            				<input type="text" name="editarServicioVehiculo" id="editarServicioVehiculoId" placeholder="Ingresa servicio"  required class="form-control input-lg" maxlength="255">

            			</div>
            			

            		</div>


            		<div class="col-12 col-md-6">

            			<label for="editarTallerServicioId">Taller:</label>

            			<div  class="input-group mb-2 mr-sm-2">

            				<input type="text" name="editarTallerServicio" id="editarTallerServicioId" placeholder="Ingresa taller"  required class="form-control input-lg" maxlength="255">

            			</div>
            			

            		</div>


            		<div class="col-12 col-md-6">

            			<label for="editarFechaServicioId">Fecha:</label>

            			<div  class="input-group mb-2 mr-sm-2">

            				<input type="date" name="editarFechaServicio" id="editarFechaServicioId" placeholder="Fecha"  required class="form-control input-lg">

            			</div>
            			

            		</div>

            		<div class="col-12 col-md-12">

            			<label for="editarObservacionesServicioId">Observaciones:</label>

            			<div  class="input-group mb-2 mr-sm-2">

            				<textarea name="editarObservacionesServicio" id="editarObservacionesServicioId" cols="30" rows="3" placeholder="Ingresa Observaciones" class="form-control input-lg" maxlength="255"></textarea>

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

            <button type="submit" class="btn btn-success text-uppercase"> Actualizar servicio</button>

          </div>

          <?php 

            $actualizarServVehiculo = new ControladorServiciosVehiculares();
            $actualizarServVehiculo -> ctrActualizarServicioVehiculo();
            

           ?>

    </form>

    </div>

  </div>

</div>

<?php 

	$DelServVehiculo = new ControladorServiciosVehiculares();
	$DelServVehiculo -> ctrBorrarServicioVehiculo();


?>

