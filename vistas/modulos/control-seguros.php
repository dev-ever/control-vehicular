<?php if($_SESSION["perfilVehicular"] == "1" || $_SESSION["perfilVehicular"] == "2" || $_SESSION["perfilVehicular"] == "5"){ ?>

<div class="content-wrapper">

	<section class="content-header"> 

		<div class="container-fluid"> 

			<div class="row mb-2">

				<div class="col-sm-6">
 
					<h1 class="text-uppercase">Administración de Seguros</h1>

				</div>

				<div class="col-sm-6">

					<ol class="breadcrumb float-sm-right text-uppercase">

						<li class="breadcrumb-item">

							<a href="inicio"><i class="fas fa-tachometer-alt"></i> Inicio</a>

						</li>

						<li class="breadcrumb-item active">

							Administracion de Seguros

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

								<button class="btn btn-success text-uppercase" data-bs-toggle="modal" data-bs-target="#modalAgregarSeguroVehiculo">Agregar seguro a vehiculo</button> 

							</h3>

						</div>

						<div class="card-body">

							<table class="table table-bordered table-hover tablas tablaSegVeh">

								<thead>

									<tr>
										<th style="width:10px" class="text-center">#</th>
									    <th class="text-center">Folio</th>
                                        <th class="text-center">Vehiculo</th>
										<th class="text-center">Seguro</th>
                                        <th class="text-center">Poliza</th>
										<th class="text-center">Inciso</th>
                                        <th class="text-center">Vigencia</th>
                                        
										<th class="text-center">Acciones</th>
									</tr>

								</thead>

								<tbody>

									<?php 

										$itemSeguros = null;
										$valorSeguros = null;

										$segurosVeh = ControladorSegurosVehiculos::ctrMostrarSegurosVehiculos($itemSeguros, $valorSeguros);

                                        foreach ($segurosVeh as $key => $value) {
                                            
                                            echo '<tr>

                                                    <td class="text-center">'.($key+1).'</td>';
                                           
                                                    $itemVehiculo = "idVehiculo";
                                                    $valorVehiculo = $value["vehiculo_id"];
                                                    $respuesta = ControladorVehiculos::ctrMostrarVehiculos($itemVehiculo, $valorVehiculo);

                                                    $itemSeguro = "idSeguro";
                                                    $valorSeguro = $value["seguro_id"];
                                                    $respuestaSeguro = ControladorSeguros::ctrMostrarSeguros($itemSeguro, $valorSeguro);

                                            echo   '<td class="text-center">'.$respuesta['folio'].'</td>
                                                    <td>'.$respuesta["folio"].' - '.$respuesta["placas"].' - '.$respuesta['modelo'].'</td>
                                                    <td class="text-center">'.$respuestaSeguro["seguro"].'</td>
                                                    <td class="text-center">'.$value["poliza"].'</td>
                                                    <td class="text-center">'.$value["inciso"].'</td>
                                                    <td class="text-center">'.$value["vigencia"].'</td>
                                                    
                                                    <td class="text-center">

                                                        <button class="btn btn-warning btn-xs btnEditarSeguroVehiculo" idSegVeh="'.$value["idSegVeh"].'" data-bs-toggle="modal" data-bs-target="#modalEditarSeguroVehiculo" data-tooltip="tooltip" data-original-title="Editar"><i class="fa fa-pen"></i></button>

                                                    <button class="btn btn-danger btn-xs btnEliminarSeguroVehiculo" idSegVeh="'.$value["idSegVeh"].'"  data-tooltip="tooltip" data-original-title="Eliminar"><i class="fa fa-trash"></i></button>


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

<div id="modalAgregarSeguroVehiculo" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
    <!--=====================================
    =  TITULO DE MODAL          =
    ======================================-->
          <div class="modal-header bg-success">

          	 <h4 class="modal-title">Nuevo Seguro Vehiculo</h4>

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

            				<select name="nuevoVehiculoSeguro" id="nuevoVehiculoId" class="form-control" required="">

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

                        <label for="nuevoSeguroVehId">Seleccionar seguro</label>

                        <div  class="input-group mb-2 mr-sm-2">

                            <span class="input-group-prepend">

                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-circle"></i></div>

                            </span>

                            <select name="nuevoSeguroVeh" id="nuevoSeguroVehId" class="form-control" required="">

                                <option value="">Seleccionar</option>

                                <?php 

                                    $itemSegVh = null;
                                    $valorSegVh = null;

                                    $respuestaSegVh = ControladorSeguros::ctrMostrarSeguros($itemSegVh, $valorSegVh);

                                    foreach ($respuestaSegVh as $key => $value) {
                                        
                                        echo '<option value="'.$value["idSeguro"].'">'.$value["seguro"].'</option>';
                                    }
                                 ?>
                            </select>

                        </div>

                    </div>


            		<div class="col-12 col-md-6">

            			<label for="nuevaPOlizaId">Poliza:</label>

            			<div  class="input-group mb-2 mr-sm-2">

            				<input type="text" name="nuevaPoliza" id="nuevaPOlizaId" placeholder="Poliza"  required class="form-control input-lg">

            			</div>
            			 

            		</div>

            		<div class="col-12 col-md-6">

            			<label for="nuevoIncisoId">Inciso:</label>

            			<div  class="input-group mb-2 mr-sm-2">

            				<input type="text" name="nuevoInciso" id="nuevoIncisoId" placeholder="Inciso"  required class="form-control input-lg">

            			</div>
            			

            		</div>

                    <div class="col-12 col-md-6">

                        <label for="nuevaVigenciaId">Vigencia:</label>

                        <div  class="input-group mb-2 mr-sm-2">

                           <input type="text" name="nuevaVigencia" id="nuevaVigenciaId" placeholder="Vigencia"  required class="form-control input-lg">

                         

                        </div>
                        

                    </div>


                    <div class="col-12 col-md-6">

                        <label for="nuevaObservacionesSeguroId">Observaciones:</label>

                        <div  class="input-group mb-2 mr-sm-2">

                            <textarea cols="10" rows="3" name="nuevaObservacionesSeguro" id="nuevaObservacionesSeguroId" placeholder="Ingresa observaciones..."  class="form-control input-lg"></textarea>


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

            <button type="submit" class="btn btn-success text-uppercase"> Registrar seguro</button>

          </div>

          <?php 

            $agregarSegVehiculo = new ControladorSegurosVehiculos();
            $agregarSegVehiculo -> ctrCrearNuevoSeguro();
            

           ?>

    </form>

    </div>

  </div>

</div>







 <!--=====================================
=  MODAL AGREGAR            =
======================================-->

<div id="modalEditarSeguroVehiculo" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
    <!--=====================================
    =  TITULO DE MODAL          =
    ======================================-->
          <div class="modal-header bg-success">

             <h4 class="modal-title">Editar Seguro Vehiculo</h4>

            <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>
    <!--=====================================
    =  CUERPO DE MODAL          =
    ======================================-->
          <div class="modal-body">

            <div class="box-body">

                <div class="row">

                    <div class="col-12 col-md-6">

                        <label for="editVehiculoId">Seleccionar vehículo</label>

                        <div  class="input-group mb-2 mr-sm-2">

                            <span class="input-group-prepend">

                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-circle"></i></div>

                            </span>

                            <select name="editVehiculoSeguro" id="editVehiculoId" class="form-control" required="">

                                <option value="" id="editSegVehiculoId2">Seleccionar</option>
                                <?php 

                                    $itemVe = null;
                                    $valorVe = null;

                                    $respuestaVe = ControladorVehiculos::ctrMostrarVehiculos($itemVe, $valorVe);

                                    foreach ($respuestaVe as $key => $value) {
                                        
                                        // echo '<option value="'.$value["idVehiculo"].'">'.$value["modelo"].'</option>';
                                        echo '<option value="'.$value["idVehiculo"].'">'.$value["folio"].' - '.$value["placas"]." - ".$value["modelo"].'</option>';
                                    }
                                 ?>
                            </select>

                        </div>

                    </div>


                    <div class="col-12 col-md-6">

                        <label for="editSeguroVehId">Seleccionar seguro</label>

                        <div  class="input-group mb-2 mr-sm-2">

                            <span class="input-group-prepend">

                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-circle"></i></div>

                            </span>

                            <select name="editSeguroVeh" id="editSeguroVehId" class="form-control" required="">

                                <option value="" id="editSeguroVehId2">Seleccionar</option>

                                <?php 

                                    $itemSegVh = null;
                                    $valorSegVh = null;

                                    $respuestaSegVh = ControladorSeguros::ctrMostrarSeguros($itemSegVh, $valorSegVh);

                                    foreach ($respuestaSegVh as $key => $value) {
                                        
                                        echo '<option value="'.$value["idSeguro"].'">'.$value["seguro"].'</option>';
                                    }
                                 ?>
                            </select>

                        </div>

                    </div>


                    <div class="col-12 col-md-6">

                        <label for="editarPOlizaId">Poliza:</label>

                        <div  class="input-group mb-2 mr-sm-2">

                            <input type="text" name="editarPoliza" id="editarPOlizaId" placeholder="Poliza"  required class="form-control input-lg">

                        </div>
                        

                    </div>

                    <div class="col-12 col-md-6">

                        <label for="editarIncisoId">Inciso:</label>

                        <div  class="input-group mb-2 mr-sm-2">

                            <input type="text" name="editarInciso" id="editarIncisoId" placeholder="Inciso"  required class="form-control input-lg">

                        </div>
                        

                    </div>

                    <div class="col-12 col-md-6">

                        <label for="editarVigenciaId">Vigencia:</label>

                        <div  class="input-group mb-2 mr-sm-2">

                           <input type="text" name="editarVigencia" id="editarVigenciaId" placeholder="Vigencia"  required class="form-control input-lg">
                           
                           <input type="hidden" name="idSegVeh" id="idSegVehId" placeholder="Vigencia"  required class="form-control input-lg">
                         

                        </div>
                        

                    </div>


                     <div class="col-12 col-md-6">

                        <label for="editarObservacionesSeguroId">Observaciones:</label>

                        <div  class="input-group mb-2 mr-sm-2">

                            <textarea cols="10" rows="3" name="editarObservacionesSeguro" id="editarObservacionesSeguroId" placeholder="Ingresa observaciones..." class="form-control input-lg"></textarea>


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

            <button type="submit" class="btn btn-success text-uppercase"> Actualizar seguro</button>

          </div>

          <?php 

            $editarSegVehiculo = new ControladorSegurosVehiculos();
            $editarSegVehiculo -> ctrEditarSeguroVehiculo();
            

           ?>

    </form>

    </div>

  </div>

</div>


<?php 

    $delSegVehiculo = new ControladorSegurosVehiculos();
    $delSegVehiculo -> ctrBorrarSeguroVehiculo();


 ?>