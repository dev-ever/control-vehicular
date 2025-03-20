<?php if($_SESSION["perfilVehicular"] == "1" || $_SESSION["perfilVehicular"] == "2" || $_SESSION["perfilVehicular"] == "5"){ ?>
    
<div class="content-wrapper">

	<section class="content-header"> 

		<div class="container-fluid"> 

			<div class="row mb-2">

				<div class="col-sm-6">

					<h1 class="text-uppercase">Administración de Verificaciones</h1>

				</div>

				<div class="col-sm-6">
 
					<ol class="breadcrumb float-sm-right text-uppercase">

						<li class="breadcrumb-item">

							<a href="inicio"><i class="fas fa-tachometer-alt"></i> Inicio</a>

						</li>

						<li class="breadcrumb-item active">

							Administracion de Verificaciones

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

								<button class="btn btn-success text-uppercase" data-bs-toggle="modal" data-bs-target="#modalAgregarVerificacion">Agregar nueva verificación</button> 

							</h3>

						</div>

						<div class="card-body">

							<table class="table table-bordered table-hover tablas tablaVerificaciones">

								<thead>

									<tr>
										<th style="width:10px" class="text-center">#</th>
										<th class="text-center">ID Verificación</th>
                                        <th>Folio</th>
                                        <th class="text-center">Vehiculo</th>
                                        <th class="text-center">Tipo</th>
										<th class="text-center">Periodo</th>
                                        <th class="text-center">Año</th>
                                        <th class="text-center">Estado</th>
                                        <th class="text-center">Fecha</th>
										<th class="text-center">Observaciones</th>
										<th class="text-center">Acciones</th>

									</tr>

								</thead>

								<tbody> 

									<?php 

										$itemVerificacion = null;
										$valorVerificacion = null;

										$verificaciones = ControladorVerificaciones::ctrMostrarVerificaciones($itemVerificacion, $valorVerificacion);

                                        foreach ($verificaciones as $key => $value) {
                                            
                                            echo '<tr>
                                                    <td class="text-center">'.($key+1).'</td>
                                                    <td class="text-center">'.$value["idVerif"].'</td>';

                                                    $itemVehiculo = "idVehiculo";
                                                    $valorVehiculo = $value["vehiculo_id"];

                                                    $respuesta = ControladorVehiculos::ctrMostrarVehiculos($itemVehiculo, $valorVehiculo);

                                            echo   '<td class="text-center">'.$respuesta['folio'].'</td>

                                                    <td>'.$respuesta["folio"].' - '.$respuesta["placas"].' - '.$respuesta['modelo'].'</td>';

                                                     if($value["tipoVerificacion"] == "1"){

                                                        echo '<td class="text-center"><span class="badge badge-light p-2">1er Periodo<span></td>';
                                                        
                                                    }else if($value["tipoVerificacion"] == "2"){

                                                        echo '<td class="text-center"><span class="badge badge-secondary p-2">2do Periodo<span></td>';

                                                    }
                                               
                                            echo   '<td class="text-center">'.$value["verificacion"].'</td>
                                                    <td class="text-center">'.$value["anio"].'</td>';


                                                    if($value["estatus"] == "0"){

                                                        echo '<td class="text-center"><span class="badge badge-warning p-2">Pendiente<span></td>';
                                                        
                                                    }else if($value["estatus"] == "1"){

                                                        echo '<td class="text-center"><span class="badge badge-success p-2">Verificado<span></td>';

                                                    }else if($value["estatus"] == "2"){

                                                        echo '<td class="text-center"><span class="badge badge-light p-2">N/A<span></td>';

                                                    }else if($value["estatus"] == "3"){

                                                        echo '<td class="text-center"><span class="badge badge-light p-2">Exento / 00<span></td>';

                                                    }else{

                                                         echo '<td class="text-center"><span class="badge badge-danger p-2">No definido<span></td>';
                                                    }

                                                    // if($value["estatus2"] == "1"){

                                                    //     echo '<td class="text-center"><span class="badge badge-success p-2">Verificado<span></td>';
                                                        
                                                    // }else if($value["estatus2"] =="0"){

                                                    //     echo '<td class="text-center"><span class="badge badge-warning p-2">Pendiente<span></td>';

                                                    // }

                                            echo   '<td class="text-center">'.$value["fecha"].'</td>
                                                    
                                                    <td class="text-center">'.$value["observaciones"].'</td>
                                                    <td class="text-center">

                                                        <button class="btn btn-warning btn-xs btnEditarVerificacion" idVerificacion="'.$value["idVerificacion"].'" data-bs-toggle="modal" data-bs-target="#modalEditarVerificacion" data-tooltip="tooltip" data-original-title="Editar"><i class="fa fa-pen"></i></button>

                                                    <button class="btn btn-danger btn-xs btnEliminarVerificacion" idVerificacion="'.$value["idVerificacion"].'"  data-tooltip="tooltip" data-original-title="Eliminar"><i class="fa fa-trash"></i></button>


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

<div id="modalAgregarVerificacion" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
    <!--=====================================
    =  TITULO DE MODAL          =
    ======================================-->
          <div class="modal-header bg-success">

          	 <h4 class="modal-title">Nueva Verificación</h4>

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

            				<select name="nuevoVehiculoVerificacion" id="nuevoVehiculoId" class="form-control nuevoVehiculoVerificacion" required="">

            					<option value="">Selecciona folio</option>
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

            		<div class="col-12 col-md-3">

            			<label for="nuevoIDVerificacionId">ID de Verificación</label>

            			<div  class="input-group mb-2 mr-sm-2">

            				<input type="text" name="nuevoIDVerificacion" id="nuevoIDVerificacionId" placeholder="Ingresa ID" required class="form-control input-lg">

            			</div>
            			

            		</div>


                    <div class="col-12 col-md-3">

                        <label for="nuevoAnioVerificacionId">Año:</label>

                        <div  class="input-group mb-2 mr-sm-2">

                            <input type="text" name="nuevoAnioVerificacion" id="nuevoAnioVerificacionId" placeholder="Ingresa año" required class="form-control input-lg">

                        </div>
                        

                    </div>

 


                    <div class="col-12 col-md-6">

                        <label for="nuevoTipoVerificacionId">Tipo Semestre:</label>

                        <div  class="input-group mb-2 mr-sm-2">

                          <select name="nuevoTipoVerificacion" id="nuevoTipoVerificacionId" class="form-control" required="">
                              <option value="">Seleccionar</option>
                              <option value="1">Primer Semestre</option>
                              <option value="2">Segundo Semestre</option>
                          </select>

                        </div>
                        

                    </div>




            		<div class="col-12 col-md-6">

            			<label for="nuevaVericacionId">Periodos de Verificación:</label>

            			<div  class="input-group mb-2 mr-sm-2">

            				<input type="text" name="nuevaVerificacion" id="nuevaVericacionId" placeholder="ENE - FEB"  required class="form-control input-lg">

            			</div>
            			

            		</div>


                    <div class="col-12 col-md-6">

                        <label for="nuevoEstatusVerificdoId">Estatus:</label>

                        <div  class="input-group mb-2 mr-sm-2">

                            <select name="nuevoEstatusVerificdo" id="nuevoEstatusVerificdoId" required="" class="form-control input-lg">
                                <option value=""> -- Seleccionar -- </option>
                                <option value="0">Pendiente</option>
                                <option value="1">Verificado</option>
                                <option value="2">N/A</option>
                                <option value="3">Exento / 00</option>
                            </select>

                     

                        </div>
                        

                    </div>





            		<div class="col-12 col-md-6">

            			<label for="nuevaFechaPagoId">Fecha de verificacion:</label>

            			<div  class="input-group mb-2 mr-sm-2">

            				<input type="date" name="nuevaFechaPago" id="nuevaFechaPagoId" placeholder="Ingresa" required class="form-control input-lg">

            			</div>
            			

            		</div>



                    <div class="col-12 col-md-12">

                        <label for="nuevaObservacionId">Observaciones:</label>

                        <div  class="input-group mb-2 mr-sm-2">

                            <textarea name="nuevaObservacion" id="nuevaObservacionId" cols="30" rows="3" required placeholder="Observaciones..." class="form-control input-lg"></textarea>

                         

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

            <button type="submit" class="btn btn-success text-uppercase"> Registrar Verificación</button>

          </div>

          <?php 

            $agregarVerificacion = new ControladorVerificaciones();
            $agregarVerificacion -> ctrCrearNuevaVerificacion();
            

           ?>

    </form>

    </div>

  </div>

</div>




 <!--=====================================
=  MODAL EDITAR            =
======================================-->

<div id="modalEditarVerificacion" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
    <!--=====================================
    =  TITULO DE MODAL          =
    ======================================-->
          <div class="modal-header bg-success">

          	 <h4 class="modal-title">Editar Verificación | <span id="tituloVerificacion"></span> | <span id="tituloEstado"></span></h4>

            <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>
    <!--=====================================
    =  CUERPO DE MODAL          =
    ======================================-->
          <div class="modal-body">

            <div class="box-body">

            	<div class="row">

            		<div class="col-12 col-md-6">

            			<label for="editarVehiculoId">* Seleccionar vehículo:</label>

            			<div  class="input-group mb-2 mr-sm-2">

            				<span class="input-group-prepend">

            					<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-circle"></i></div>

            				</span>

            				<select name="editarVehiculoVerificacion" id="editarVehiculoId" class="form-control editarVehiculoVerificacion" required="">

            					<option value="" id="editarVehiculoId2">Seleccionar</option>

            					<?php 

            						$itemVe = null;
            						$valorVe = null;

            						$respuestaVe = ControladorVehiculos::ctrMostrarVehiculos($itemVe, $valorVe);

            						foreach ($respuestaVe as $key => $value) {
            							
            							// echo '<option value="'.$value["idVehiculo"].'">'.$value["modelo"].'</option>';
                                        echo '<option value="'.$value["idVehiculo"].'">'.$value["folio"]." - ".$value["placas"]." - ".$value["modelo"].'</option>';
            						}
            					 ?>

            				</select>

            			</div>

            		</div>

            		<div class="col-12 col-md-3">

            			<label for="editaridVerificacionId">* ID de Verificación:</label>

            			<div  class="input-group mb-2 mr-sm-2">

            				<input type="text" name="editaridVerificacion" id="editaridVerificacionId" placeholder="Ingresa" required class="form-control input-lg">

                            <input type="hidden" name="identidadVerificacion" id="identidadVerificacionId" required class="form-control input-lg">

            			</div>
            			

            		</div>


                     <div class="col-12 col-md-3">

                        <label for="editarAnioVerificacionId">* Año:</label>

                        <div  class="input-group mb-2 mr-sm-2">

                            <input type="text" name="editarAnioVerificacion" id="editarAnioVerificacionId" placeholder="Ingresa año" required class="form-control input-lg">

                        </div>
                        

                    </div>



                     <div class="col-12 col-md-6">

                        <label for="editarTipoVerificacionId">Tipo Semestre:</label>

                        <div  class="input-group mb-2 mr-sm-2">

                          <select name="editarTipoVerificacion" id="editarTipoVerificacionId" class="form-control" required="">
                              <option value="" id="editarIdTipoVeri">Seleccionar</option>
                              <option value="1">Primer Semestre</option>
                              <option value="2">Segundo Semestre</option>
                          </select>

                        </div>
                        

                    </div>




                    <div class="col-12 col-md-6">

                        <label for="editarVericacionId">Periodos de Verificación:</label>

                        <div  class="input-group mb-2 mr-sm-2">

                            <input type="text" name="editarVerificacion" id="editarVericacionId" placeholder="ENE - FEB"  required class="form-control input-lg">

                        </div>
                        

                    </div>


                    <div class="col-12 col-md-6">

                        <label for="editarEstatusVerificdoId">* Estatus:</label>

                        <div  class="input-group mb-2 mr-sm-2">

                            <select name="editarEstatusVerificdo" id="editarEstatusVerificdoId" required="" class="form-control input-lg">
                                <option value="" id="ideditarEstatusVerificdoId"> -- Seleccionar -- </option>
                                <option value="0">Pendiente</option>
                                <option value="1">Verificado</option>
                                <option value="2">N/A</option>
                                <option value="3">Exento / 00</option>
                            </select>

                     

                        </div>
                        

                    </div>





                    <div class="col-12 col-md-6">

                        <label for="editarFechaPagoId">* Fecha de verificacion:</label>

                        <div  class="input-group mb-2 mr-sm-2">

                            <input type="date" name="editarFechaPago" id="editarFechaPagoId" placeholder="Ingresa" required class="form-control input-lg">

                        </div>
                        

                    </div>



                    <div class="col-12 col-md-12">

                        <label for="editarObservacionId">* Observaciones:</label>

                        <div  class="input-group mb-2 mr-sm-2">

                            <textarea name="editarObservacion" id="editarObservacionId" cols="30" rows="3" required placeholder="Observaciones..." class="form-control input-lg"></textarea>

                         

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

            <button type="submit" class="btn btn-success text-uppercase"> Actualizar verificación</button>

          </div>

          <?php 

            $editarVerificacion = new ControladorVerificaciones();
            $editarVerificacion -> ctrEditarVerificacion();
            

           ?>

    </form>

    </div>

  </div>

</div>



<?php 

	$eliminarVerificacion = new ControladorVerificaciones();
	$eliminarVerificacion -> ctrBorrarVerificacion();


?>


