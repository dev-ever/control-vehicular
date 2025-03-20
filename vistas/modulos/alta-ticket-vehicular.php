<?php if($_SESSION["perfilVehicular"] == "1" || $_SESSION["perfilVehicular"] == "2" || $_SESSION["perfilVehicular"] == "3" || $_SESSION["perfilVehicular"] == "4" ){ ?>

	<div class="content-wrapper">

		<section class="content-header"> 

			<div class="container-fluid">

				<div class="row mb-2"> 

					<div class="col-sm-6">
						<h4 class="text-uppercase">Administración de Solicitudes Area Control Vehicular</h4>
					</div>

					<div class="col-sm-6">

						<ol class="breadcrumb float-sm-right text-uppercase">

							<li class="breadcrumb-item">

								<a href="inicio"><i class="fas fa-tachometer-alt"></i> Inicio</a>

							</li>

							<li class="breadcrumb-item active">

								Administración de Solicitudes

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

									<button class="btn btn-success text-uppercase" data-bs-toggle="modal" data-bs-target="#modalAgregarSolicitudVehicular">Agregar solicitud</button> 

								</h3>

							</div>

							<div class="card-body">

								<table class="table table-bordered table-hover tablas tablaProveedores">

									<thead>

										<tr>
											<th style="width:10px" class="text-center">#</th>
											<th class="text-center">Titulo</th>
											<th class="text-center">Descripción</th>
											<th class="text-center">Estado</th>
											<th class="text-center"><i class="fa fa-file-pdf"></i> | <i class="fa fa-file-image"></i> </th>
											<th class="text-center">Observaciones Control Vehicular</th>
										</tr>

									</thead>

									<tbody>

										<?php 

											$itemSolicitudVehiculo = "solicitante_id";
											$valorSolicitudVehiculo = $_SESSION["idVehicular"]; 

											$respuestaSolicitudesVehiculos = ControladorVehiculos::ctrMostrarSolicitudesVehiculosPersonalizado($itemSolicitudVehiculo, $valorSolicitudVehiculo);

											// var_dump($respuestaSolicitudesVehiculos);

											foreach ($respuestaSolicitudesVehiculos as $key => $value) {
												
												echo '<tr>

														<td class="text-center">'.($key+1).'</td>

														<td class="text-center">'.$value["titulo"].'</td>

														<td class="text-center">'.$value["descripcion"].'</td>';

														if($value["estado"] == "0"){

															echo '<td class="text-center text-uppercase"> <span class="badge badge-light p-1">Solicitado</span> </td>';

														}else if ($value["estado"] == "1") {

															echo '<td class="text-center text-uppercase"> <span class="badge badge-info p-1">Iniciado</span> </td>';
															
														}else if ($value["estado"] == "2") {

															echo '<td class="text-center text-uppercase"> <span class="badge badge-warning p-1">Procesado</span> </td>';

														}else if ($value["estado"] == "3") {

															echo '<td class="text-center text-uppercase"> <span class="badge badge-success p-1">Finalizado</span> </td>';

														}else{

															echo '<td class="text-center text-uppercase"> <span class="badge badge-danger p-1"></span> </td>';
														}


														if(!empty($value["urlFile"])){


															echo  '<td class="text-center text-uppercase"> <a href="'.$value["urlFile"].'" target="_blank"> <i class="fa fa-search-plus" style="font-size:1.2rem;"></i></a> </td>';


														}else{

															echo  '<td class="text-center text-uppercase"> N/A </td>';

														}


												echo    '<td class="text-center">'.$value["observaciones"] .'</td>
														

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


  } else {

    echo '<script>


            let timerInterval;

            Swal.fire({
                icon:"error",
                text: "¡ NO TIENES PRIVILEGIOS !",
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
=  MODAL AGREGAR USUARIO           =
======================================-->

<div id="modalAgregarSolicitudVehicular" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
    <!--=====================================
    =  TITULO DE MODAL          =
    ======================================-->
          <div class="modal-header bg-success">

             <h4 class="modal-title text-uppercase">Nueva solicitud</h4>

            <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>
    <!--=====================================
    =  CUERPO DE MODAL          =
    ======================================-->
          <div class="modal-body">

            <div class="box-body">

            	<h6 class="text-center text-danger">Si requieres de algun servicio ó documentación vehicular, describe a detalle</h6>


            <h6 class="text-bold text-uppercase">Solicitante:</h6>

              <div class="input-group mb-2 mr-sm-2">

                   <h6 class="text-success ml-3 text-uppercase"><i class="fa fa-user"></i> <?php echo $_SESSION["nombreVehicular"]; ?></h6>

                   <input type="hidden" name="nuevoSolitanteVehiculo" value="<?php echo $_SESSION["idVehicular"]; ?>" required> 

              </div>



            <h6 class="text-bold text-uppercase">Titulo de Solicitud</h6>

              <div  class="input-group mb-2 mr-sm-2">

                <span class="input-group-prepend">

                  <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-align-center"></i></div>

                </span>

                   <input type="text" name="nuevaSolicitudVehiculo" placeholder="Ingresa solicitud" required class="form-control input-lg" maxlength="255">

              </div>


            <h6 class="text-bold text-uppercase">Descripción de Solicitud</h6>

              <div  class="input-group mb-2 mr-sm-2">

                <span class="input-group-prepend">

                  <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-align-center"></i></div>

                </span>

                <textarea name="nuevaDescripcionVehiculo" rows="5" id="nuevaDescripcionVehiculo" placeholder="Describe tu solicitud a detalle fundamentando el motivo / uso del documento / actividad a realizar" required="" class="form-control" maxlength="500"></textarea>

              </div>


              <h6 class="text-bold text-uppercase pt-2">Adjuntar (.pdf | .png | .jpg )</h6> <p style="color:#737373;">Peso máximo del archivo 2 MB</p>

              <div  class="input-group mb-2 mr-sm-2">

              	<input type="file" id="nuevoFileSolicitudId" name="nuevoFileSolicitud" class="nuevoFileSolicitud">

              </div>



            </div>

          </div>

    <!--=====================================
    =  PIE DE MODAL          =
    ======================================-->
          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left text-uppercase" data-bs-dismiss="modal">Cerrar</button>

            <button type="submit" class="btn btn-success text-uppercase"> Solicitar | Enviar </button>

          </div>

          <?php 

            $nuevaSolicitud = new ControladorVehiculos();
            $nuevaSolicitud -> ctrNuevaSolicitudVehiculo();

           ?>

    </form>

    </div>
  </div>
</div>

