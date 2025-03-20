<?php if($_SESSION["perfilVehicular"] == "1" || $_SESSION["perfilVehicular"] == "2" || $_SESSION["perfilVehicular"] == "5"){ ?>
    
<div class="content-wrapper">

	<section class="content-header"> 

		<div class="container-fluid">

			<div class="row mb-2">

				<div class="col-sm-6">

					<h1 class="text-uppercase">Administración de Tenencias</h1>

				</div>

				<div class="col-sm-6">

					<ol class="breadcrumb float-sm-right text-uppercase">

						<li class="breadcrumb-item">

							<a href="inicio"><i class="fas fa-tachometer-alt"></i> Inicio</a>

						</li>

						<li class="breadcrumb-item active">

							Administracion de Tenencias

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

								<button class="btn btn-success text-uppercase" data-bs-toggle="modal" data-bs-target="#modalAgregarTenencia">Agregar nuevo pago</button> 

							</h3>

						</div>

						<div class="card-body">

							<table class="table table-bordered table-hover tablas tablaTenencia">

								<thead>

									<tr>
										<th style="width:10px" class="text-center">#</th>
										<th class="text-center">Tipo</th>
                                        <th class="text-center">Folio</th>
										<th class="text-center">Vehículo</th>
										<th class="text-center">Placas</th>
										<th class="text-center">Año</th>
										<th class="text-center">Cantidad</th>
										<th class="text-center">Fecha de Pago</th>
										<th class="text-center">Acciones</th>
									</tr>

								</thead>

								<tbody> 

									<?php 

										$itemTenencia = null;
										$valorTenencia = null;

                                        setlocale(LC_TIME, "spanish");

										$respuestaTenencia = ControladorTenencias::ctrMostrarTenencias($itemTenencia, $valorTenencia);

										foreach ($respuestaTenencia as $key => $value) {
											
											echo '<tr>
													<td class="text-center">'.($key+1).'</td>
													<td class="text-center">'.$value["tipo"].'</td>';

													$itemTipo = "idVehiculo";
													$valorTipo = $value["vehiculo_id"];

													$respuestaTipo = ControladorVehiculos::ctrMostrarVehiculos($itemTipo, $valorTipo);

											echo   '<td class="text-center">'.$respuestaTipo['folio'].'</td>
                                                    <td>'.$respuestaTipo["folio"].' - '.$respuestaTipo["placas"].' - '.$respuestaTipo['modelo'].'</td>
													<td class="text-center">'.$respuestaTipo["placas"].'</td>
													<td class="text-center">'.$value["anio"].'</td>
													<td class="text-center">$'.number_format($value["pago"], 2,".",",").'</td>
													<td class="text-center">'.ControladorPlantilla::fechaLarga($value["fechaPago"]).'</td>
													<td class="text-center">

													<button class="btn btn-warning btn-xs btnEditarTenencia" idTenencia="'.$value["idTenencia"].'" data-bs-toggle="modal" data-bs-target="#modalEditarTenencia" data-tooltip="tooltip" data-original-title="Editar"><i class="fa fa-pen"></i></button>

													<button class="btn btn-danger btn-xs btnEliminarTenencia" idTenencia="'.$value["idTenencia"].'"  data-tooltip="tooltip" data-original-title="Eliminar"><i class="fa fa-trash"></i></button>



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
=  MODAL AGREGAR TENENCIA           =
======================================-->

<div id="modalAgregarTenencia" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
    <!--=====================================
    =  TITULO DE MODAL          =
    ======================================-->
          <div class="modal-header bg-success">

          	 <h4 class="modal-title">Nueva Tenencia</h4>

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

            				<select name="nuevoVehiculoTenencia" id="nuevoVehiculoId" class="form-control" required="">
            					<option value="">Seleccionar folio</option>
            					<?php 

            						$itemVe = null;
            						$valorVe = null;

            						$respuestaVe = ControladorVehiculos::ctrMostrarVehiculos($itemVe, $valorVe);

            						foreach ($respuestaVe as $key => $value) {
            							
            							echo '<option value="'.$value["idVehiculo"].'">'.$value["folio"]." - ".$value["placas"]." - ".$value["modelo"].'</option>';
            						}
            					 ?>
            				</select>

            			</div>

            		</div>

            		<div class="col-12 col-md-6">

            			<label for="nuevoAnioId">Año</label>

                        <div  class="input-group mb-2 mr-sm-2">

                            <input type="text" name="nuevoAnio" id="nuevoAnioId" placeholder="Ingresa año" required class="form-control input-lg">

                        </div>
    
                    </div>





            		<div class="col-12 col-md-6">

            			<label for="nuevoPagoId">Total de pago:</label>

            			<div  class="input-group mb-2 mr-sm-2">

            				<input type="number" step=".01" name="nuevoPago" id="nuevoPagoId" placeholder="Ingresa" min="0" value="0" required class="form-control input-lg">

            			</div>
            			

            		</div>


            		<div class="col-12 col-md-6">

            			<label for="nuevaFechaPagoIdTenencia">Fecha de pago:</label>

            			<div  class="input-group mb-2 mr-sm-2">

            				<input type="date" name="nuevaFechaPago" id="nuevaFechaPagoIdTenencia" placeholder="Ingresa" required class="form-control input-lg">

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

            <button type="submit" class="btn btn-success text-uppercase"> Registrar tenencia</button>

          </div>

          <?php 

            $agregarTenencia = new ControladorTenencias();
            $agregarTenencia -> ctrCrearNuevaTenencia();
            

           ?>

    </form>

    </div>

  </div>

</div>




 <!--=====================================
=  MODAL AGREGAR TENENCIA           =
======================================-->

<div id="modalEditarTenencia" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
    <!--=====================================
    =  TITULO DE MODAL          =
    ======================================-->
          <div class="modal-header bg-success">

          	 <h4 class="modal-title">Editar Tenencia</h4>

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

            				<select name="editarVehiculoTenencia" id="editarVehiculoId" class="form-control" required="">
            					<option value="" id="nuevoVehiculoId2">Seleccionar</option>
            					<?php 

            						$itemVe = null;
            						$valorVe = null;

            						$respuestaVe = ControladorVehiculos::ctrMostrarVehiculos($itemVe, $valorVe);

            						foreach ($respuestaVe as $key => $value) {
            							
            							echo '<option value="'.$value["idVehiculo"].'">'.$value["folio"]." - ".$value["placas"]." - ".$value["modelo"].'</option>';
            						}
            					 ?>
            				</select>

            			</div>

            		</div>

            		<div class="col-12 col-md-6">

            			<label for="editarAnioId">Año</label>

            			<div  class="input-group mb-2 mr-sm-2">

            				<input type="text" name="editarAnio" id="editarAnioId" placeholder="Ingresa" required class="form-control input-lg">

            			</div>
            			

            		</div>


            		<div class="col-12 col-md-6">

            			<label for="editarPagoId">Total de pago:</label>

            			<div  class="input-group mb-2 mr-sm-2">

            				<input type="number" step=".01" name="editarPago" id="editarPagoId" placeholder="Ingresa" min="0"  required class="form-control input-lg">

            			</div>
            			

            		</div>


            		<div class="col-12 col-md-6">

            			<label for="editarFechaPagoIdTenencia">Fecha de pago:</label>

            			<div  class="input-group mb-2 mr-sm-2">

            				<input type="date" name="editarFechaPago" id="editarFechaPagoIdTenencia" placeholder="Ingresa" required class="form-control input-lg">

            				<input type="hidden" name="idTenencia" id="idTenenciaId" placeholder="Ingresa" required class="form-control input-lg">

            			</div>
            			

            		</div>

            	</div>

            </div>

          </div>

    <!--=====================================
    =  PIE DE MODAL          =
    ======================================-->
          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-lef text-uppercase" data-bs-dismiss="modal">Cerrar</button>

            <button type="submit" class="btn btn-success text-uppercase"> Actualizar tenencia </button>

          </div>

          <?php 

            $editarTenencia = new ControladorTenencias();
            $editarTenencia -> ctrEditarTenencia();
            

           ?>

    </form>

    </div>

  </div>

</div>



<?php 

	$eliminarTenencia = new ControladorTenencias();
	$eliminarTenencia -> ctrBorrarTendencia();


?>


