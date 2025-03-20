<?php if($_SESSION["perfilVehicular"] == "1" || $_SESSION["perfilVehicular"] == "2" || $_SESSION["perfilVehicular"] == "5"){ ?>

<div class="content-wrapper">

	<section class="content-header"> 

		<div class="container-fluid">

			<div class="row mb-2">

				<div class="col-sm-6">

					<h1>Administración de Solicitudes Vehiculares</h1> 

				</div>

				<div class="col-sm-6">

					<ol class="breadcrumb float-sm-right">

						<li class="breadcrumb-item">

							<a href="inicio"><i class="fas fa-tachometer-alt"></i> Inicio</a>

						</li>

						<li class="breadcrumb-item active">

							Administracion de Solicitudes

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

								<button class="btn btn-dark btn-md p-2 text-uppercase" data-bs-toggle="modal" data-bs-target="#modalAgregarSolictudVehiculo"><i class="fa fa-pen"></i> Nueva Solicitud</button> 

							</h3>

						</div>

						<div class="card-body">

							<table id="tablaSolicitudesVehiculos" class="table table-bordered table-hover tablaSolicitudesVehiculos" style="width: 100%;">

								<thead>

									<tr>
										<th style="width:10px" class="text-center">#</th>
										<th class="text-center">Solicitante</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Solicitud</th>
                    <th class="text-center">Descripción</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center"><i class="fa fa-file-pdf"></i> | <i class="fa fa-file-image"></i> </th>
                    <th class="text-center">Fecha</th>
										<th class="text-center">Acciones</th>
                    <th class="text-center">Comentarios</th>
                    <th class="text-center">Enviar</th>
									</tr>

								</thead>

								<tbody>

                  <?php   

                      $item = null;
                      $valor = null;

                      $respuestaSolicitudes = ControladorVehiculos::ctrMostrarSolicitudesVehiculos($item, $valor);

                      foreach ($respuestaSolicitudes as $key => $value) {
                        
                        echo '<tr>

                                <td class="text-center">'.($key+1).'</td>';

                                $itemSolicitante = "idResponsable";
                                $valorSolitante = $value["solicitante_id"];

                                $respuestaSolicitante = ControladorUsuarios::ctrMostrarUsuarios($itemSolicitante, $valorSolitante);
                               

                        echo  '<td class="text-left">'.$respuestaSolicitante["responsable"].'</td>';

                                if($respuestaSolicitante["email"] == ""){

                                  echo  '<td class="text-center"> - </td>';

                                }else{

                                  echo  '<td class="text-center text-lowercase">'.$respuestaSolicitante["email"].'</td>';

                                }
                        
                          echo '<td class="text-center">'.$value["titulo"].'</td>
                                <td class="text-center">'.$value["descripcion"].'</td>';

                                if($value["estado"] == "0"){

                                  echo '<td class="text-center text-uppercase"><span class="badge badge-light p-1">Solicitado</span></td>';

                                }else if($value["estado"] == "1"){

                                  echo  '<td class="text-center text-uppercase"><span class="badge badge-info p-1">Iniciado</span></td>';

                                }else if($value["estado"] == "2"){

                     
                                  echo  '<td class="text-center text-uppercase"><span class="badge badge-warning p-1">Procesado</span></td>';


                                }else if($value["estado"] == "3"){

                                   echo  '<td class="text-center text-uppercase"><span class="badge badge-success p-1">Finalizado</span></td>';

                                }else{

                                  echo  '<td class="text-center text-uppercase"><span class="badge badge-error p-1">Ninguno</span></td>';
                                }



                                if(!empty($value["urlFile"])){
                                

                                  echo  '<td class="text-center text-uppercase"> 

                                            <a href="'.$value["urlFile"].'" target="_blank"> 

                                              <i class="fa fa-search-plus" style="font-size:1.2rem;"></i>

                                            </a> 

                                          </td>';


                                }else if($value["urlFile"] == ""){

                                  echo  '<td class="text-center text-uppercase"> N/A </td>';

                                }else{

                                    echo  '<td class="text-center text-uppercase"> N/A </td>';
                                }

                                  
 
                                  echo  '<td class="text-center">'.$value["created_at"].'</td>

                                        <td class="text-center">';

                                        if($value["estado"] == "0"){

                                          echo '<button class="btn btn-light btn-xs btnIniciarSolicitud" idSolicitud='.$value["idSolicitud"].' data-tooltip="tooltip" data-original-title="Paso 1 - Iniciar"><i class="fa fa-play-circle"></i></button>
                                                <button disabled class="btn btn-info btn-xs btnProcesarSolicitud" data-tooltip="tooltip" data-original-title="Paso 2 - Procesar"><i class="fa fa-spinner"></i></button>
                                                <button disabled class="btn btn-primary btn-xs btnFinalizarSolicitud" data-tooltip="tooltip" data-original-title="Paso 3 - Finalizar"><i class="fa fa-check"></i></button>
                                                <button disabled class="btn btn-success btn-xs btnTerminarSolicitud" data-tooltip="tooltip" data-original-title="Paso 4 - Terminar"><i class="fa fa-check-circle"></i></button>';


                                        }else if($value["estado"] == "1"){

                                          echo '<button disabled class="btn btn-light btn-xs btnIniciarSolicitud" data-tooltip="tooltip" data-original-title="Paso 1 - Iniciar"><i class="fa fa-play-circle"></i></button>
                                                <button class="btn btn-info btn-xs btnProcesarSolicitud" idSolicitud='.$value["idSolicitud"].' data-tooltip="tooltip" data-original-title="Paso 2 - Procesar"><i class="fa fa-spinner"></i></button>
                                                <button disabled class="btn btn-primary btn-xs btnFinalizarSolicitud" data-tooltip="tooltip" data-original-title="Paso 3 - Finalizar"><i class="fa fa-check"></i></button>
                                                <button disabled class="btn btn-success btn-xs btnTerminarSolicitud" data-tooltip="tooltip" data-original-title="Paso 4 - Terminar"><i class="fa fa-check-circle"></i></button>';


                                        }else if($value["estado"] == "2"){

                                           echo '<button disabled class="btn btn-light btn-xs btnIniciarSolicitud" data-tooltip="tooltip" data-original-title="Paso 1 - Iniciar"><i class="fa fa-play-circle"></i></button>
                                                <button disabled class="btn btn-info btn-xs btnProcesarSolicitud" data-tooltip="tooltip" data-original-title="Paso 2 - Procesar"><i class="fa fa-spinner"></i></button>
                                                <button class="btn btn-primary btn-xs btnFinalizarSolicitud" idSolicitud='.$value["idSolicitud"].' data-tooltip="tooltip" data-original-title="Paso 3 - Finalizar"><i class="fa fa-check"></i></button>
                                                <button disabled class="btn btn-success btn-xs btnTerminarSolicitud"  data-tooltip="tooltip" data-original-title="Paso 4 - Terminar"><i class="fa fa-check-circle"></i></button>';


                                        }else if($value["estado"] == "3"){

                                          echo '<button disabled class="btn btn-light btn-xs btnIniciarSolicitud" data-tooltip="tooltip" data-original-title="Paso 1 - Iniciar"><i class="fa fa-play-circle"></i></button>
                                                <button disabled class="btn btn-info btn-xs btnProcesarSolicitud" data-tooltip="tooltip" data-original-title="Paso 2 - Procesar"><i class="fa fa-spinner"></i></button>
                                                <button disabled class="btn btn-primary btn-xs btnFinalizarSolicitud" data-tooltip="tooltip" data-original-title="Paso 3 - Finalizar"><i class="fa fa-check"></i></button>
                                                <button class="btn btn-success btn-xs btnTerminarSolicitud" idSolicitud='.$value["idSolicitud"].' data-bs-toggle="modal" data-bs-target="#modalTerminarSolictudVehiculo" data-tooltip="tooltip" data-original-title="Paso 4 - Terminar"><i class="fa fa-check-circle"></i></button>';


                                        }else{

                                          echo '<button disabled class="btn btn-light btn-xs btnIniciarSolicitud" data-tooltip="tooltip" data-original-title="Paso 1 - Iniciar"><i class="fa fa-play-circle"></i></button>
                                              <button disabled class="btn btn-info btn-xs btnProcesarSolicitud" data-tooltip="tooltip" data-original-title="Paso 2 - Procesar"><i class="fa fa-spinner"></i></button>
                                              <button disabled class="btn btn-primary btn-xs btnFinalizarSolicitud" data-tooltip="tooltip" data-original-title="Paso 3 - Finalizar"><i class="fa fa-check"></i></button>
                                              <button disabled class="btn btn-success btn-xs btnTerminarSolicitud" data-tooltip="tooltip" data-original-title="Paso 4 - Terminar"><i class="fa fa-check-circle"></i></button>';

                                        }

                                  echo   '</td>';

                                  echo  '<td class="text-center">'.$value["observaciones"].'</td>

                                         <td class="text-center">';

                                            if($respuestaSolicitante["email"] == ""){

                                              echo '<span class="text-bold badge badge-warning p-2"> SIN CORREO </span>';

                                            }else{

                                              echo '<button class="btn btn-info btn-xs btnEnviarEmail text-uppercase" idEmail='.$value["solicitante_id"].'  data-bs-toggle="modal" data-bs-target="#modalEnviarEmail">Enviar email</button>';
                                            }

                                            
                                   echo  '</td>

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
=  MODAL AGREGAR USUARIO           =
======================================-->

<div id="modalAgregarSolictudVehiculo" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
    <!--=====================================
    =  TITULO DE MODAL          =
    ======================================-->
          <div class="modal-header bg-dark">

             <h4 class="modal-title text-uppercase">Nueva solicitud</h4>

            <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>
    <!--=====================================
    =  CUERPO DE MODAL          =
    ======================================-->
          <div class="modal-body">

            <div class="box-body">

              <h6 class="text-center text-danger">Si requieres de algun servicio ó documentación vehicular, describe a detalle</h6>


            <h6 class="text-bold text-uppercase pt-2">Solicitante:</h6>

              <div class="input-group mb-2 mr-sm-2">

                   <h6 class="text-danger ml-3 text-uppercase"><i class="fa fa-user"></i> <?php echo $_SESSION["nombreVehicular"]; ?></h6>
                   <input type="hidden" name="nuevoSolitanteVehiculo" value="<?php echo $_SESSION["idVehicular"]; ?>" required> 

              </div>



            <h6 class="text-bold text-uppercase pt-2">Titulo de Solicitud</h6>

              <div  class="input-group mb-2 mr-sm-2">

                <span class="input-group-prepend">

                  <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-align-center"></i></div>

                </span>

                   <input type="text" name="nuevaSolicitudVehiculo" placeholder="Ingresa solicitud" required class="form-control input-lg" maxlength="255">

              </div>


            <h6 class="text-bold text-uppercase pt-2">Descripción de Solicitud</h6>

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

            <button type="submit" class="btn btn-dark text-uppercase"> Solicitar | Enviar </button>

          </div>

          <?php 

            $nuevaSolicitud = new ControladorVehiculos();   
            $nuevaSolicitud -> ctrNuevaSolicitudVehiculo();

           ?>

    </form>

    </div>
  </div>
</div>



 




<div id="modalTerminarSolictudVehiculo" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
    <!--=====================================
    =  TITULO DE MODAL          =
    ======================================-->
          <div class="modal-header bg-dark">

             <h4 class="modal-title text-uppercase">Agregar observaciones</h4>

            <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>
    <!--=====================================
    =  CUERPO DE MODAL          =
    ======================================-->
          <div class="modal-body">

            <div class="box-body">

            <h6 class="text-bold">Solicitante:</h6>

              <div class="input-group mb-2 mr-sm-2">

                  <h6><span class="text-danger" id="nombreSolicitante"></span> <span class="text-danger" id="tituloSolicitante"></span></h6>
          
                   <input type="hidden" name="idSolicitudVehiculo" id="idSolicitudVehiculo" required> 

              </div>

            <h6 class="text-bold">Observaciones de Solicitud:</h6>

              <div  class="input-group mb-2 mr-sm-2">

                <span class="input-group-prepend">

                  <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-align-center"></i></div>

                </span>

                <textarea name="nuevaObservacionesSolicitud" rows="5" id="nuevaObservacionesSolicitud" placeholder="Comentarios..." required="" class="form-control" maxlength="500"></textarea>

              </div>

            </div>

          </div>

    <!--=====================================
    =  PIE DE MODAL          =
    ======================================-->
          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left text-uppercase" data-bs-dismiss="modal">Cerrar</button>

            <button type="submit" class="btn btn-dark text-uppercase"> Guardar </button>

          </div>

          <?php 

            $actualizarSolicitud = new ControladorVehiculos();
            $actualizarSolicitud -> ctrActualizarSolicitudVehiculo();

           ?>

    </form>

    </div>
  </div>
</div>









<div id="modalEnviarEmail" class="modal fade" id="exampleModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
    <!--=====================================
    =  TITULO DE MODAL          =
    ======================================-->
          <div class="modal-header bg-dark">

             <h4 class="modal-title text-uppercase">Enviar email | <span id="emailEnvio"></span></h4>

            <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>
    <!--=====================================
    =  CUERPO DE MODAL          =
    ======================================-->
          <div class="modal-body">

            <div class="box-body">


              <div class="py-2">


              <h6 class="text-bold">Vehiculo:</h6>

                <select name="identidadVehiculoEmail" id="identidadVehiculoEmailId" class="form-control selectpicker" data-live-search="true" required="">

                  <option value="">Selecciona la #economico del vehiculo</option>

                  <?php

                      $itemVe = null;
                      $valorVe = null;

                      $respuestaVe = ControladorVehiculos::ctrMostrarVehiculos($itemVe, $valorVe);

                      foreach ($respuestaVe as $key => $value) {
                        
                        echo '<option value="'.$value["idVehiculo"].'">'.$value["folio"].' - '.$value["placas"]." - ".$value["modelo"].'</option>';
                      }

                     ?>


                </select>
                    
                <div id="loaderVehiculoEmail"></div>

                <input type="hidden" name="nuevoCorreoEnvio" id="emailEnvia" required="" class="form-control">
                <input type="hidden" name="datosVehiculo" id="datosVehiculoId" required=""  class="form-control">

                </div>

                <hr>



                <div>

               

                  <div class="input-group">

                    <div class="input-group-prepend">

                      <div class="" id="rdoFacturaName">

                        <input type="radio" id="rdoFactura" class="nuevoElemetoItem" aria-label="Radio button for following text input"> <span class="text-uppercase">Factura o carta factura, refactura</span> 

                      </div>

                    </div>

                    <input  readonly="" id="opt1" type="hidden" class="form-control opt1" aria-label="Text input with radio button">
                  
                  </div>
                  
                  <!--  -->

                  <div class="input-group">

                    <div class="input-group-prepend">

                      <div class="" id="rdoPolizaName">

                        <input type="radio" id="rdoPoliza" class="nuevoElemetoItem" aria-label="Radio button for following text input"> <span class="text-uppercase"> Poliza de seguro</span>

                      </div>

                    </div>

                    <input readonly="" id="opt2" type="hidden" class="form-control opt2" aria-label="Text input with radio button">
                  
                  </div>

                  <!--  -->

                  <div class="input-group">

                    <div class="input-group-prepend">

                      <div class="" id="rdoTenenciaName">

                        <input type="radio" id="rdoTenencia" class="nuevoElemetoItem"   aria-label="Radio button for following text input"> <span class="text-uppercase"> Ultimas dos tenencias</span>

                      </div>

                    </div>

                    <input readonly="" id="opt3" type="hidden" class="form-control opt3" aria-label="Text input with radio button">
                  
                  </div>


                  <!--  -->

                  <div class="input-group">

                    <div class="input-group-prepend">

                      <div class="" id="rdoVerificacionName">

                        <input type="radio" id="rdoVerificacion" class="nuevoElemetoItem"  aria-label="Radio button for following text input"> <span class="text-uppercase"> Ultima Verificación</span>

                      </div>

                    </div>

                    <input readonly="" id="opt4" type="hidden" class="form-control opt4" aria-label="Text input with radio button">
                  
                  </div>


                   <!--  -->

                  <div class="input-group">

                    <div class="input-group-prepend">

                      <div class="" id="rdoPedimentoName">

                        <input type="radio" id="rdoPedimento" class="nuevoElemetoItem"  aria-label="Radio button for following text input"> <span class="text-uppercase"> Pedimento</span>

                      </div>

                    </div>

                    <input readonly="" id="opt5" type="hidden" class="form-control opt5" aria-label="Text input with radio button">
                  
                  </div>


                  <!--  -->

                  <div class="input-group">

                    <div class="input-group-prepend">

                      <div class="" id="rdoTarjetaName">

                        <input type="radio" id="rdoTarjeta" class="nuevoElemetoItem"  aria-label="Radio button for following text input"> <span class="text-uppercase"> Tarjeta de circulación</span>

                      </div>

                    </div>

                    <input readonly="" id="opt6" type="hidden" class="form-control opt6" aria-label="Text input with radio button">
                  
                  </div>

                   <!--  -->

                  <div class="input-group">

                    <div class="input-group-prepend">

                      <div class="" id="rdoGarantiaName">

                        <input type="radio" id="rdoGarantia" class="nuevoElemetoItem"  aria-label="Radio button for following text input"><span class="text-uppercase"> Poliza de garantia</span>

                      </div>

                    </div>

                    <input readonly="" id="opt7" type="hidden"  class="form-control opt7" aria-label="Text input with radio button">
                  
                  </div>

                        <!--  -->

                  <div class="input-group">

                    <div class="input-group-prepend">

                      <div class="" id="rdoPermisoName">

                        <input type="radio" id="rdoPermiso" class="nuevoElemetoItem"  aria-label="Radio button for following text input"> <span class="text-uppercase">Permisos (placas)</span>

                      </div>

                    </div>

                    <input readonly="" id="opt8" type="hidden" class="form-control opt8" aria-label="Text input with radio button">
                  
                  </div>


                <!--  -->

                  <div class="input-group">

                    <div class="input-group-prepend">

                      <div class="" id="rdoCompraVentaName">

                        <input type="radio" id="rdoCompraVenta" class="nuevoElemetoItem"  aria-label="Radio button for following text input"> <span class="text-uppercase">Compra - venta</span>

                      </div>

                    </div>

                    <input readonly="" id="opt9" type="hidden" class="form-control opt9" aria-label="Text input with radio button">
                  
                  </div>


                <!--  -->

                  <div class="input-group">

                    <div class="input-group-prepend">

                      <div class="" id="rdoUltimoTramiteName">

                        <input type="radio" id="rdoUltimoTramite" class="nuevoElemetoItem" aria-label="Radio button for following text input"> <span class="text-uppercase">Ultimo Tramite</span>

                      </div>

                    </div>

                    <input readonly="" id="opt10" type="hidden" class="form-control opt10" aria-label="Text input with radio button">
                  
                  </div>

                <!--  -->

                  <div class="input-group">

                    <div class="input-group-prepend">

                      <div class="" id="rdoFacturaOrigenName">

                        <input type="radio" id="rdoFacturaOrigen" class="nuevoElemetoItem" aria-label="Radio button for following text input"> <span class="text-uppercase">Factura Origen</span>

                      </div>

                    </div>

                    <input readonly="" id="opt11" type="hidden" class="form-control opt11" aria-label="Text input with radio button">


                    <input type="hidden" name="elementosEnviadosItem" id="elementosEnviadosIdItem" required="">
                  
                  </div>







                </div>



            </div>

          </div>

    <!--=====================================
    =  PIE DE MODAL          =
    ======================================-->
          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left text-uppercase" data-bs-dismiss="modal">Cerrar</button>

            <button type="submit" class="btn btn-dark text-uppercase"> Enviar </button>

          </div>

          <?php 

            $procesarEmail = new ControladorDocumentacionVehiculos();
            $procesarEmail -> ctrEnviarEmailDocumentos();

           ?>

    </form>

    </div>
  </div>
</div>

