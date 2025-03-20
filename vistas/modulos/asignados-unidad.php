<?php if($_SESSION["perfilVehicular"] == "1" || $_SESSION["perfilVehicular"] == "2" || $_SESSION["perfilVehicular"] == "3" || $_SESSION["perfilVehicular"] == "4"){ ?>

<div class="content-wrapper">
 
	<section class="content-header"> 

		<div class="container-fluid">

			<div class="row mb-2">

				<div class="col-sm-6">

					<h1 class="text-uppercase">Administración de Vehiculos <?php  $unidad = ControladorAreasNegocios::ctrMostrarAreasNegocios("idAreaVehiculo", $_SESSION["unidadVehicular"]); echo $unidad["area"]; ?></h1> 

				</div>

				<div class="col-sm-6">

					<ol class="breadcrumb float-sm-right">

						<li class="breadcrumb-item text-uppercase">

							<a href="inicio"><i class="fas fa-tachometer-alt"></i> Inicio</a>

						</li>

						<li class="breadcrumb-item active text-uppercase">

							Administracion de Vehiculos Asignados

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

						<div class="card-header bg-light">

							<h3 class="card-title text-center text-uppercase text-bold">
							 
                                
                                 <a href="vistas/modulos/reportes/reporte-gral-vehiculoUnidad.php?vehiculosUnidad=vehiculosUnidad" class="btn btn-sm btn-tool" data-tooltip="tooltip" data-original-title="Descarga Vehiculos (.xls)">
                                 <button  type="button" class="btn btn-info btn-md text-uppercase"><i class="fas fa-file-excel text-white"></i> Descargar Vehiculos</button>
                               </a> 

                               <button class="btn btn-success btn-md btnGralReporteVehiculoXlsUnidad text-uppercase"  data-tooltip="tooltip" data-original-title="Descargar Servicios General (.xlsx)"><i class="fa fa-download text-white"></i> Servicios Generales
                               </button>

							</h3>

						</div>

						<div class="card-body">

							<table class="table table-bordered table-hover tablas tablaVehiculos" style="width: 100%;">

								<thead>

									<tr>
										<th style="width:10px" class="text-center">#</th>
										<th class="text-center">Folio</th>
										<th class="text-center">#ECO</th>
										<th class="text-center">Propietario</th>
                                        <th class="text-center">Area</th>
										<th class="text-center">Ubicación</th>
										<th class="text-center">Modelo</th>
										<th class="text-center">Serie</th>
										<th class="text-center">Placas</th> 
										<th class="text-center">Numero Tarjeta</th>
										<th class="text-center">Motor</th>
										<th class="text-center">Clase</th>
										<th class="text-center">Marca</th>
										<th class="text-center">SubMarca</th>
										<th class="text-center">Tipo transporte</th>
										<th class="text-center">Tipo combustible</th>
										<th class="text-center">Responsable</th>
										<th class="text-center">Corresponsable</th>
										<!-- <th class="text-center">Acciones</th> -->
									</tr>

								</thead>

								<tbody>

                                      <?php 
 
                                            $itemVeh = "area_id";
                                            $valorVeh = $_SESSION["unidadVehicular"];
                                            // echo $itemSesion = "id";
                                            // echo $valorSesion = $_SESSION["unidadVehicular"];


                                            $respuestaVeh = ControladorVehiculos::ctrMostrarVehiculosTotales($itemVeh, $valorVeh);
                                            
                                            if(is_array($respuestaVeh)){

                                            foreach($respuestaVeh as $key => $value){

                                                  echo '<tr>
                                                        <td class="text-center">'.($key+1).'</td>
                                                        <td class="text-center">'.$value["folio"].'</td>
                                                        <td class="text-center">'.$value["eco"].'</td>';

                                                        $itemProp = "idPropietario";
                                                        $valorProp = $value["propietario_id"];

                                                        $respuestaPropietario = ControladorPropietarios::ctrMostrarPropietarios($itemProp, $valorProp);

                                                        if(is_array($respuestaPropietario)){

                                                            echo '<td>'.$respuestaPropietario["propietario"].'</td>';

                                                        }else{

                                                            echo '<td>Sin Registro</td>';
                                                        }

                                                        $itemArea = "idAreaVehiculo";
                                                        $valorArea = $value["area_id"];

                                                        $respuestaAreas = ControladorAreasNegocios::ctrMostrarAreasNegocios($itemArea, $valorArea);

                                                  echo '<td class="text-center">'.$respuestaAreas["area"].'</td>
                                                        <td class="text-center">'.$value["ubicacion"].'</td>
                                                        <td class="text-center">'.$value["modelo"].'</td>
                                                        <td class="text-center">'.$value["serie"].'</td>
                                                        <td class="text-center">'.$value["placas"].'</td>
                                                        <td class="text-center">'.$value["numTarjeta"].'</td>
                                                        <td class="text-center">'.$value["motor"].'</td>';


                                                        $itemClase = "idClase";
                                                        $valorClase = $value["clase_id"];

                                                        $respuestaClase = ControladorClases::ctrMostrarClases($itemClase, $valorClase);


                                                  echo  '<td class="text-center">'.$respuestaClase["clase"].'</td>';


                                                        $itemMarca = "idMarca";
                                                        $valorMarca = $value["marca_id"];

                                                        $respuestaMarca = ControladorMarcas::ctrMostrarMarcas($itemMarca, $valorMarca);

 
                                                  echo  '<td class="text-center">'.$respuestaMarca["marca"].'</td>';

                                                        $itemSubMarca = "idSubmarca";
                                                        $valorSubMarca = $value["subMarca_id"];

                                                        $respuestaSubMarca = ControladorSubMarcas::ctrMostrarSubMarcas($itemSubMarca, $valorSubMarca);

                                                  echo  '<td class="text-center">'.$respuestaSubMarca["submarca"].'</td>';

                                                        $itemTransporte = "idTransporte";
                                                        $valorTransporte = $value["transporte_id"];

                                                        $respuestaTransporte = ControladorTiposTransportes::ctrMostrarTransportes($itemTransporte, $valorTransporte);


                                                  echo '<td class="text-center">'.$respuestaTransporte["transporte"].'</td>';

                                                        $itemCombustible = "idCombustible";
                                                        $valorCombustible = $value["combustible_id"];

                                                        $respuestaCombustible = ControladorCombustibles::ctrMostrarCombustibles($itemCombustible, $valorCombustible);

                                                  echo  '<td class="text-center">'.$respuestaCombustible["combustible"].'</td>';

                                                        $itemResp = "idResponsable";
                                                        $valorResp = $value["responsable_id"];

                                                        $respuestaResponsable = ControladorUsuarios::ctrMostrarUsuarios($itemResp, $valorResp);


                                                  echo  '<td class="text-center">'.$respuestaResponsable["responsable"].'</td>';

		                                                $itemCo = "idResponsable";
		                                                $valorCo = $value["usuario_asignado_id"];

		                                                $respuestaCo = ControladorUsuarios::ctrMostrarUsuarios($itemCo, $valorCo);

                                                        if(is_array($respuestaCo)){

                                                            echo '<td class="text-center">'.$respuestaCo["responsable"].'</td>';

                                                        }else{
                                                        
                                                            echo '<td class="text-center">-</td>';
                                                        }

                                                    


                                                   echo '</tr>';

                                            }

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
=  MODAL AGREGAR VEHIcULO           =
======================================-->

<div id="modalAgregarVehiculo" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-xl">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off" id="formAltaVehiculo">
    <!--=====================================
    =  TITULO DE MODAL          =
    ======================================-->
          <div class="modal-header bg-info">

          	 <h4 class="modal-title">Nuevo Vehiculo </h4>

            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>
    <!--=====================================
    =  CUERPO DE MODAL          =
    ======================================-->
          <div class="modal-body"> 

            <div class="box-body">

            	<div class="row1">

            		<div class="row col-12">

        <!--     			<div class="col-12 col-md-3">

            				<label for="nuevoTipoTransporteId">Folio</label>

            				<div  class="input-group mb-2 mr-sm-2">

            					<span class="input-group-prepend">

            						<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

            					</span>

            					<input type="text" name="nuevoTipoTransporte" id="nuevoTipoTransporteId" placeholder="Ingresa folio" required class="form-control input-lg">

            				</div>
            				
            			</div> -->


            			<div class="col-12 col-md-2 py-2">

            				<label for="nuevoNumECOId"># ECO:</label>

            				<div  class="input-group mb-2 mr-sm-2">

            					<span class="input-group-prepend">

            						<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

            					</span>

            					<input type="text" name="nuevoNumECO" id="nuevoNumECOId" placeholder="#Económico" required class="form-control input-lg">

            				</div>
            				
            			</div>



            			<div class="col-12 col-md-6 py-2">

            				<label for="nuevoPropietarioId">Propietario:</label>

            				<div  class="input-group mb-2 mr-sm-2">

            					<span class="input-group-prepend">

            						<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

            					</span>

            					<select name="nuevoPropietario" id="nuevoPropietarioId" class="form-control" required="">

            						<option value="">Selecciona</option>

	                       <?php 

                            $itemPropietario = null;
                            $valorPropietario = null;

                            $responsablePropietario = ControladorPropietarios::ctrMostrarPropietarios($itemPropietario, $valorPropietario);

                            foreach ($responsablePropietario as $key => $value) {
                                  
                                  echo '<option value="'.$value["idPropietario"].'">'.$value["propietario"].'</option>';
                            }


                           ?>
            					</select>

            				</div>
            				
            			</div>


            			<div class="col-12 col-md-4 py-2">

            				<label for="nuevaTarjetaCirculacionId">Nombre tarjeta circulación:</label>

            				<div  class="input-group mb-2 mr-sm-2">

            					<span class="input-group-prepend">

            						<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

            					</span>

            					<input type="text" name="nuevaTarjetaCirculacion" id="nuevaTarjetaCirculacionId" class="form-control" placeholder="Ingresa nombre" required="">

            				</div>
            				
            			</div>



            			<div class="col-12 col-md-4 py-2">

            				<label for="nuevaFacturaOrigenId">Factura origen / Pedimento:</label>

            				<div  class="input-group mb-2 mr-sm-2">

            					<span class="input-group-prepend">

            						<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

            					</span>

            					<input type="text" name="nuevaFacturaOrigen" id="nuevaFacturaOrigenId" placeholder="Ingresa factura origen" required class="form-control input-lg">

            				</div>
            				
            			</div>


            			<div class="col-12 col-md-4 py-2">

            				<label for="nuevoGpsId">GPS:</label>

            				<div  class="input-group mb-2 mr-sm-2">

            					<span class="input-group-prepend">

            						<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

            					</span>

            					<select name="nuevoGps" id="nuevoGpsId" class="form-control" required="">
            						<option value="">Selecciona</option>
            						<option value="1">Si</option>
            						<option value="0">No</option>
            					</select>

            				</div>
            				
            			</div>


            			<div class="col-12 col-md-4 py-2">

            				<label for="nuevoDuplicadoId">Duplicado de llaves:</label>

            				<div  class="input-group mb-2 mr-sm-2">

            					<span class="input-group-prepend">

            						<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

            					</span>

            					<select name="nuevoDuplicado" id="nuevoDuplicadoId" class="form-control" required="">
            						<option value="">Selecciona</option>
            						<option value="1">Si</option>
            						<option value="0">No</option>
            					</select>

            				</div>
            				
            			</div>


            			<div class="col-12 col-md-4 py-2">

            				<label for="nuevaClaseVehiculoId">Clase de vehiculo:</label>

            				<div  class="input-group mb-2 mr-sm-2">

            					<span class="input-group-prepend">

            						<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

            					</span>

            					<select name="nuevaClaseVehiculo" id="nuevaClaseVehiculoId" class="form-control" required="">

            						<option value="">Selecciona</option>

            						<?php 

                                                      $itemClase = null;
                                                      $valorClase = null;

                                                      $clases = ControladorClases::ctrMostrarClases($itemClase, $valorClase);

                                                      foreach ($clases as $key => $value) {
                                                            
                                                            echo '<option value="'.$value["idClase"].'">'.$value["clase"].'</option>';
                                                      }

                                                 ?>

            					</select>

            				</div>
            				
            			</div>



            			<div class="col-12 col-md-4 py-2">

            				<label for="nuevaMarcaId">Marca:</label>

            				<div  class="input-group mb-2 mr-sm-2">

            					<span class="input-group-prepend">

            						<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

            					</span>

            					<select name="nuevaMarca" id="nuevaMarcaId" class="form-control" required="">

            						<option value="">Selecciona</option>

            						<?php 

                                                      $itemMarca = null;
                                                      $valorMarca = null;

                                                      $marcas = ControladorMarcas::ctrMostrarMarcas($itemMarca, $valorMarca);

                                                      foreach ($marcas as $key => $value) {
                                                            
                                                            echo '<option value="'.$value["idMarca"].'">'.$value["marca"].'</option>';
                                                      }


                                                 ?>
            					</select>

            				</div>
            				
            			</div>



            			<div class="col-12 col-md-4 py-2">

            				<label for="nuevaSubMarcaId">Sub Marca:</label>

            				<div  class="input-group mb-2 mr-sm-2">

            					<span class="input-group-prepend">

            						<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

            					</span>

            					<select name="nuevaSubMarca" id="nuevaSubMarcaId" class="form-control" required="">

            						<option value="">Selecciona</option>
            						
                                                <?php 

                                                      $itemMSubarca = null;
                                                      $valorSubMarca = null;

                                                      $submarcas = ControladorSubMarcas::ctrMostrarSubMarcas($itemMSubarca, $valorSubMarca);

                                                      foreach ($submarcas as $key => $value) {
                                                            
                                                            echo '<option value="'.$value["idSubmarca"].'">'.$value["submarca"].'</option>';
                                                      }


                                                 ?>

            					</select>

            				</div>
            				
            			</div>



            			<div class="col-12 col-md-4 py-2">

            				<label for="nuevoTipoTransporteId">Tipo transporte:</label>

            				<div  class="input-group mb-2 mr-sm-2">

            					<span class="input-group-prepend">

            						<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

            					</span>

            					<select name="nuevoTipoTransporte" id="nuevoTipoTransporteId" class="form-control" required="">

            						<option value="">Selecciona</option>
            						<?php 

            							$itemTranporte = null;
            							$valorTransporte = null;

            							$respuestaTransporte = ControladorTiposTransportes::ctrMostrarTransportes($itemTranporte, $valorTransporte);

            							foreach ($respuestaTransporte as $key => $value) {
            								
            								echo '<option value="'.$value["idTransporte"].'">'.$value["transporte"].'</option>';
            							}


            						 ?>
            					</select>

            				</div>
            				
            			</div>


            				<div class="col-12 col-md-4 py-2">

            				<label for="nuevaSerieId">Serie:</label>

            				<div  class="input-group mb-2 mr-sm-2">

            					<span class="input-group-prepend">

            						<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

            					</span>

            					<input type="text" name="nuevaSerie" id="nuevaSerieId" placeholder="Ingresa serie" required class="form-control input-lg">

            				</div>
            				
            			</div>



            				<div class="col-12 col-md-4 py-2">

            				<label for="nuevoModeloId">Modelo:</label>

            				<div  class="input-group mb-2 mr-sm-2">

            					<span class="input-group-prepend">

            						<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

            					</span>

            				
            					<input type="text" name="nuevoModelo" id="nuevoModeloId" placeholder="Ingresa modelo" required class="form-control input-lg">

            				</div>
            				
            			</div>


            				<div class="col-12 col-md-4 py-2">

            				<label for="nuevoAnioId">Año:</label>

            				<div  class="input-group mb-2 mr-sm-2">

            					<span class="input-group-prepend">

            						<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

            					</span>

            				
            					<input type="text" name="nuevoAnio" id="nuevoAnioId" placeholder="Año" required class="form-control input-lg">

            				</div>
            				
            			</div>





						<div class="col-12 col-md-4 py-2">

            				<label for="nuevaPlacasId">Placas:</label>

            				<div  class="input-group mb-2 mr-sm-2">

            					<span class="input-group-prepend">

            						<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

            					</span>

            				
            					<input type="text" name="nuevasPlacas" id="nuevaPlacasId" placeholder="Placas" required class="form-control input-lg">

            				</div>
            				
            			</div>


            				<div class="col-12 col-md-4 py-2">

            				<label for="nuevaTarjetaId">Tarjeta circulacion:</label>

            				<div  class="input-group mb-2 mr-sm-2">

            					<span class="input-group-prepend">

            						<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

            					</span>

            				
            					<input type="text" name="nuevaTarjeta" id="nuevaTarjetaId" placeholder="Tarjeta" required class="form-control input-lg">

            				</div>
            				
            			</div>


            			<div class="col-12 col-md-4 py-2">

            				<label for="nuevoCombustibleId">Combustible:</label>

            				<div  class="input-group mb-2 mr-sm-2">

            					<span class="input-group-prepend">

            						<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

            					</span>

            				
            					<select name="nuevoCombustible" id="nuevoCombustibleId" class="form-control" required="">

            						<option value="">Selecciona</option>

            						<?php 

                                                      $itemCombustible = null;
                                                      $valorCombustibles = null;

                                                      $combustible = ControladorCombustibles::ctrMostrarCombustibles($itemCombustible, $valorCombustibles);

                                                      foreach ($combustible as $key => $value) {
                                                            
                                                            echo '<option value="'.$value["idCombustible"].'">'.$value["combustible"].'</option>';
                                                      }



                                                 ?>
            						
            					</select>

            				</div>
            				
            			</div>


            			<div class="col-12 col-md-4 py-2">

            				<label for="numeroMotorId">No. Motor:</label>

            				<div  class="input-group mb-2 mr-sm-2">

            					<span class="input-group-prepend">

            						<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

            					</span>

            				
            					<input type="text" name="nuevoNumeroMotor" id="numeroMotorId" placeholder="Motor" required class="form-control input-lg">

            				</div>
            				
            			</div>


            			<div class="col-12 col-md-2 py-2">

            				<label for="nuevoKilometrajeId">KM:</label>

            				<div  class="input-group mb-2 mr-sm-2">

            					<span class="input-group-prepend">

            						<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

            					</span>

            				
            					<input type="text" name="nuevoKilometraje" id="nuevoKilometrajeId" placeholder="KM" required class="form-control input-lg">

            				</div>
            				
            			</div>


                              <div class="col-12 col-md-2 py-2">

                                    <label for="nuevaHRSId">HRS:</label>

                                    <div  class="input-group mb-2 mr-sm-2">

                                          <span class="input-group-prepend">

                                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

                                          </span>

                                    
                                          <input type="text" name="nuevaHRS" id="nuevaHRSId" placeholder="Hrs uso" required class="form-control input-lg">

                                    </div>
                                    
                              </div>





            			<div class="col-12 col-md-4 py-2">

            				<label for="nuevoColorId">Color:</label>

            				<div  class="input-group mb-2 mr-sm-2">

            					<span class="input-group-prepend">

            						<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

            					</span>

            				
            					<input type="text" name="nuevoColor" id="nuevoColorId" placeholder="Color" required class="form-control input-lg">

            				</div>
            				
            			</div>


            			<div class="col-12 col-md-4 py-2">

            				<label for="nuevoEstadoFisicoId">Estado Fisico:</label>

            				<div  class="input-group mb-2 mr-sm-2">

            					<span class="input-group-prepend">

            						<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

            					</span>

            				
            					<select name="nuevoEstadoFisico" id="nuevoEstadoFisicoId" class="form-control" required="">
            						<option value="">Selecciona</option>
            						<option value="Bueno">Bueno</option>
            						<option value="Regular">Regular</option>
            						<option value="Malo">Malo</option>
            						
            					</select>

            				</div>
            				
            			</div>

            			<div class="col-12 col-md-4 py-2">

            				<label for="nuevoEstadoOperativoId">Estado Operativo:</label>

            				<div  class="input-group mb-2 mr-sm-2">

            					<span class="input-group-prepend">

            						<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

            					</span>

            				
            					<select name="nuevoEstadoOperativo" id="nuevoEstadoOperativoId" class="form-control" required="">
            						<option value="">Selecciona</option>
            						<option value="Bueno">Bueno</option>
            						<option value="Regular">Regular</option>
            						<option value="Malo">Malo</option>
            						
            					</select>

            				</div>
            				
            			</div>





            			<div class="col-12 col-md-4 py-2">

            				<label for="nuevaFechaCompraId">Fecha compra:</label>

            				<div  class="input-group mb-2 mr-sm-2">

            					<span class="input-group-prepend">

            						<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

            					</span>

            				
            					<input type="date" name="nuevaFechaCompra" id="nuevaFechaCompraId" placeholder="Color" class="form-control input-lg">

            				</div>
            				
            			</div>



            			<div class="col-12 col-md-4 py-2">

            				<label for="nuevoNumeroFacturaId">No. factura:</label>

            				<div  class="input-group mb-2 mr-sm-2">

            					<span class="input-group-prepend">

            						<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

            					</span>

            				
            					<input type="text" name="nuevoNumeroFactura" id="nuevoNumeroFacturaId" placeholder="Factura" required class="form-control input-lg">

            				</div>
            				
            			</div>


            			<div class="col-12 col-md-4 py-2">

            				<label for="nuevoSeguroId">Seguro:</label>

            				<div  class="input-group mb-2 mr-sm-2">

            					<span class="input-group-prepend">

            						<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

            					</span>

            				
            					<select name="nuevoSeguro" id="nuevoSeguroId" class="form-control">
            						<option value="">Selecciona</option>
            						<?php 

                        $itemSeguro = null;
                        $valorSeguro = null;

                        $seguros = ControladorSeguros::ctrMostrarSeguros($itemSeguro, $valorSeguro);

                        foreach ($seguros as $key => $value) {

                          echo '<option value="'.$value["idSeguro"].'">'.$value["seguro"].'</option>';
                        }


                        ?>
            						
            					</select>

            				</div>
            				
            			</div>



            			<div class="col-12 col-md-6 py-2">

            				<label for="nuevoProveedorId">Proveedor compra:</label>

            				<div  class="input-group mb-2 mr-sm-2">

            					<span class="input-group-prepend">

            						<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

            					</span>

            				  <input type="text" name="nuevoProveedor" id="nuevoProveedorId" placeholder="Nombre del proveedor" class="form-control" required="">

            				</div>
            				
            			</div>



            			


            			<div class="col-12 col-md-3 py-2">

            				<label for="nuevaUbicacionId">Ubicación:</label>

            				<div  class="input-group mb-2 mr-sm-2">

            					<span class="input-group-prepend">

            						<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

            					</span>

            				
            					<input type="text" name="nuevaUbicacion" id="nuevaUbicacionId" placeholder="Ubicación" required class="form-control input-lg">

            				</div>
            				
            			</div>

            				<div class="col-12 col-md-3 py-2">

            				<label for="nuevoEstadoId">Estatus</label>

            				<div  class="input-group mb-2 mr-sm-2">

            					<span class="input-group-prepend">

            						<div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

            					</span>

            				
            						
            					<select name="nuevoEstado" id="nuevoEstadoId" class="form-control" required="">
            						<option value="">Selecciona</option>
            						<option value="Activo">Activo</option>
            						<option value="Inactivo">Inactivo</option>
                                    <option value="Renta">Renta</option>
                                    <option value="Ventas">Ventas</option>
                                    <option value="Baja">Baja</option>
                                    <option value="Como dato">Como dato</option>
                                    <option value="Mantenimiento">Mantenimiento</option>
            						
            						
            					</select>
            				</div>
            				
            			</div>


                              <div class="col-12 col-md-6 py-2">

                                    <label for="nuevaDescripcionId">Descripción vehículo</label>

                                    <div  class="input-group mb-2 mr-sm-2">

                                          <span class="input-group-prepend">

                                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

                                          </span>

                                    
                                          <textarea name="nuevaDescripcion" id="nuevaDescripcionId" cols="30" rows="2" class="form-control" maxlength="255" placeholder="Descripción del vehiculo"></textarea>

                                    </div>
                                    
                              </div>






                              <div class="col-12 col-md-6 py-2">

                                    <label for="nuevoAccesoriosId">Accesorios vehículo</label>

                                    <div  class="input-group mb-2 mr-sm-2">

                                          <span class="input-group-prepend">

                                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

                                          </span>

                                    
                                          <textarea name="nuevoAccesorios" id="nuevoAccesoriosId" cols="30" rows="2" class="form-control" maxlength="255" placeholder="Accesorios del vehículo"></textarea>

                                    </div>
                                    
                              </div>



                                <div class="col-12 col-md-6 py-2">

                                    <label for="nuevoResponsableId">Responsable:</label>

                                    <div  class="input-group mb-2 mr-sm-2">

                                          <span class="input-group-prepend">

                                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

                                          </span>

                                    
                                          <select name="nuevoResponsable" id="nuevoResponsableId" class="form-control" required="">

                                                <option value="">Seleccionar</option>

                                                <?php 

                                                      $itemResponsable = null;
                                                      $valorResponsable = null;

                                                      $responsable = ControladorUsuarios::ctrMostrarUsuarios($itemResponsable, $valorResponsable);

                                                      foreach ($responsable as $key => $value) {
                                                            
                                                            echo '<option value="'.$value["idResponsable"].'">'.$value["responsable"].'</option>';
                                                      }


                                                 ?>
                                          </select>

                                    </div>
                                    
                              </div>






                              <div class="col-12 col-md-6 py-2">

                                    <label for="nuevaObservacionesId">Observaciones</label>

                                    <div  class="input-group mb-2 mr-sm-2">

                                          <span class="input-group-prepend">

                                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

                                          </span>

                                    
                                          <textarea name="nuevaObservaciones" id="nuevaObservacionesId" maxlength="255" cols="30" rows="2" class="form-control" placeholder="Observaciones"></textarea>

                                    </div>
                                    
                              </div>

            			
            		</div>
            		
            	</div>

            </div>

          </div>

    <!--=====================================
    =  PIE DE MODAL          =
    ======================================-->
          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-info"> Registrar Vehículo</button>

          </div>

          <?php 

            $crearVehiculo = new ControladorVehiculos();
            $crearVehiculo -> ctrCrearNuevoVehiculo(); 
            

           ?>

    </form>

    </div>

  </div>

</div>





<!--=====================================
=  MODAL AGREGAR TRANSPORTE           =
======================================-->

<div id="modalEditarVehiculo" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-xl">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off" id="formAltaVehiculo">
    <!--=====================================
    =  TITULO DE MODAL          =
    ======================================-->
          <div class="modal-header bg-info">

             <h4 class="modal-title">Editar Vehiculo | <span id="nombreVehiculo"></span></h4>

            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>
    <!--=====================================
    =  CUERPO DE MODAL          =
    ======================================-->
          <div class="modal-body">

            <div class="box-body">

                  <div class="row1">

                        <div class="row col-12">

                              <div class="col-12 col-md-2 py-2">

                                    <label for="editarNumECOId"># ECO:</label>

                                    <div  class="input-group mb-2 mr-sm-2">

                                          <span class="input-group-prepend">

                                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

                                          </span>

                                          <input type="text" name="editarNumECO" id="editarNumECOId" placeholder="#Económico" required class="form-control input-lg">
                                          <input type="hidden" name="editarIdVehiculo" id="vehiculoId" required class="form-control input-lg">

                                    </div>
                                    
                              </div>



                              <div class="col-12 col-md-6 py-2">

                                    <label for="editarPropietarioId">Propietario:</label>

                                    <div  class="input-group mb-2 mr-sm-2">

                                          <span class="input-group-prepend">

                                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

                                          </span>

                                          <select name="editarPropietario" id="editarPropietarioId" class="form-control" required="">

                                                <option value="" id="editarPropietarioId2">Selecciona</option>

                                                <?php 

                                                      $itemPropietario = null;
                                                      $valorPropietario = null;

                                                      $responsablePropietario = ControladorPropietarios::ctrMostrarPropietarios($itemPropietario, $valorPropietario);

                                                      foreach ($responsablePropietario as $key => $value) {
                                                            
                                                            echo '<option value="'.$value["idPropietario"].'">'.$value["propietario"].'</option>';
                                                      }


                                                 ?>
                                          </select>

                                    </div>
                                    
                              </div>


                              <div class="col-12 col-md-4 py-2">

                                    <label for="editarTarjetaCirculacionId">Nombre tarjeta circulación:</label>

                                    <div  class="input-group mb-2 mr-sm-2">

                                          <span class="input-group-prepend">

                                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

                                          </span>

                                          <input type="text" name="editarTarjetaCirculacion" id="editarTarjetaCirculacionId" class="form-control" placeholder="Ingresa nombre" required="">

                                    </div>
                                    
                              </div>



                              <div class="col-12 col-md-4 py-2">

                                    <label for="editarFacturaOrigenId">Factura origen / Pedimento:</label>

                                    <div  class="input-group mb-2 mr-sm-2">

                                          <span class="input-group-prepend">

                                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

                                          </span>

                                          <input type="text" name="editarFacturaOrigen" id="editarFacturaOrigenId" placeholder="Ingresa factura origen" required class="form-control input-lg">

                                    </div>
                                     
                              </div>


                              <div class="col-12 col-md-4 py-2">

                                    <label for="editarGpsId">GPS:</label>

                                    <div  class="input-group mb-2 mr-sm-2">

                                          <span class="input-group-prepend">

                                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

                                          </span>

                                          <select name="editarGps" id="editarGpsId" class="form-control" required="">
                                                <option value="" id="editarGpsId2">Selecciona</option>
                                                <option value="1">Si</option>
                                                <option value="0">No</option>
                                          </select>

                                    </div>
                                    
                              </div>


                              <div class="col-12 col-md-4 py-2">

                                    <label for="editarDuplicadoId">Duplicado de llaves:</label>

                                    <div  class="input-group mb-2 mr-sm-2">

                                          <span class="input-group-prepend">

                                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

                                          </span>

                                          <select name="editarDuplicado" id="editarDuplicadoId" class="form-control" required="">
                                                <option value="" id="editarDuplicadoId2">Selecciona</option>
                                                <option value="1">Si</option>
                                                <option value="0">No</option>
                                          </select>

                                    </div>
                                    
                              </div>


                              <div class="col-12 col-md-4 py-2">

                                    <label for="editarClaseVehiculoId">Clase de vehiculo:</label>

                                    <div  class="input-group mb-2 mr-sm-2">

                                          <span class="input-group-prepend">

                                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

                                          </span>

                                          <select name="editarClaseVehiculo" id="editarClaseVehiculoId" class="form-control" required="">

                                                <option value="" id="editarClaseVehiculoId2">Selecciona</option>

                                                <?php 

                                                      $itemClase = null;
                                                      $valorClase = null;

                                                      $clases = ControladorClases::ctrMostrarClases($itemClase, $valorClase);

                                                      foreach ($clases as $key => $value) {
                                                            
                                                            echo '<option value="'.$value["idClase"].'">'.$value["clase"].'</option>';
                                                      }

                                                 ?>

                                          </select>

                                    </div>
                                    
                              </div>



                              <div class="col-12 col-md-4 py-2">

                                    <label for="editarMarcaId">Marca:</label>

                                    <div  class="input-group mb-2 mr-sm-2">

                                          <span class="input-group-prepend">

                                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

                                          </span>

                                          <select name="editarMarca" id="editarMarcaId" class="form-control" required="">

                                                <option value="" id="editarMarcaId2">Selecciona</option>

                                                <?php 

                                                      $itemMarca = null;
                                                      $valorMarca = null;

                                                      $marcas = ControladorMarcas::ctrMostrarMarcas($itemMarca, $valorMarca);

                                                      foreach ($marcas as $key => $value) {
                                                            
                                                            echo '<option value="'.$value["idMarca"].'">'.$value["marca"].'</option>';
                                                      }


                                                 ?>
                                          </select>

                                    </div>
                                    
                              </div>



                              <div class="col-12 col-md-4 py-2">

                                    <label for="editarSubMarcaId">Sub Marca:</label>

                                    <div  class="input-group mb-2 mr-sm-2">

                                          <span class="input-group-prepend">

                                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

                                          </span>

                                          <select name="editarSubMarca" id="editarSubMarcaId" class="form-control" required="">

                                                <option value="" id="editarSubMarcaId2">Selecciona</option>
                                                
                                                <?php 

                                                      $itemMSubarca = null;
                                                      $valorSubMarca = null;

                                                      $submarcas = ControladorSubMarcas::ctrMostrarSubMarcas($itemMSubarca, $valorSubMarca);

                                                      foreach ($submarcas as $key => $value) {
                                                            
                                                            echo '<option value="'.$value["idSubmarca"].'">'.$value["submarca"].'</option>';
                                                      }


                                                 ?>

                                          </select>

                                    </div>
                                    
                              </div>



                              <div class="col-12 col-md-4 py-2">

                                    <label for="editarTipoTransporteId">Tipo transporte:</label>

                                    <div  class="input-group mb-2 mr-sm-2">

                                          <span class="input-group-prepend">

                                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

                                          </span>

                                          <select name="editarTipoTransporte" id="editarTipoTransporteId" class="form-control" required="">

                                                <option value="" id="editarTipoTransporteId2">Selecciona</option>
                                                <?php 

                                                      $itemTranporte = null;
                                                      $valorTransporte = null;

                                                      $respuestaTransporte = ControladorTiposTransportes::ctrMostrarTransportes($itemTranporte, $valorTransporte);

                                                      foreach ($respuestaTransporte as $key => $value) {
                                                            
                                                            echo '<option value="'.$value["idTransporte"].'">'.$value["transporte"].'</option>';
                                                      }


                                                 ?>
                                          </select>

                                    </div>
                                    
                              </div>


                                    <div class="col-12 col-md-4 py-2">

                                    <label for="editarSerieId">Serie:</label>

                                    <div  class="input-group mb-2 mr-sm-2">

                                          <span class="input-group-prepend">

                                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

                                          </span>

                                          <input type="text" name="editarSerie" id="editarSerieId" placeholder="Ingresa serie" required class="form-control input-lg">

                                    </div>
                                    
                              </div>



                                    <div class="col-12 col-md-4 py-2">

                                    <label for="editarModeloId">Modelo:</label>

                                    <div  class="input-group mb-2 mr-sm-2">

                                          <span class="input-group-prepend">

                                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

                                          </span>

                                    
                                          <input type="text" name="editarModelo" id="editarModeloId" placeholder="Ingresa modelo" required class="form-control input-lg">

                                    </div>
                                    
                              </div>


                                    <div class="col-12 col-md-4 py-2">

                                    <label for="editarAnioId">Año:</label>

                                    <div  class="input-group mb-2 mr-sm-2">

                                          <span class="input-group-prepend">

                                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

                                          </span>

                                    
                                          <input type="text" name="editarAnio" id="editarAnioId" placeholder="Año" required class="form-control input-lg">

                                    </div>
                                    
                              </div>





                                    <div class="col-12 col-md-4 py-2">

                                    <label for="editarlacasId">Placas:</label>

                                    <div  class="input-group mb-2 mr-sm-2">

                                          <span class="input-group-prepend">

                                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

                                          </span>

                                    
                                          <input type="text" name="editarPlacas" id="editarlacasId" placeholder="Placas" required class="form-control input-lg">

                                    </div>
                                    
                              </div>


                                    <div class="col-12 col-md-4 py-2">

                                    <label for="editarTarjetaId">Tarjeta circulacion:</label>

                                    <div  class="input-group mb-2 mr-sm-2">

                                          <span class="input-group-prepend">

                                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

                                          </span>

                                    
                                          <input type="text" name="editarTarjeta" id="editarTarjetaId" placeholder="Tarjeta" required class="form-control input-lg">

                                    </div>
                                    
                              </div>


                              <div class="col-12 col-md-4 py-2">

                                    <label for="editarCombustibleId">Combustible:</label>

                                    <div  class="input-group mb-2 mr-sm-2">

                                          <span class="input-group-prepend">

                                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

                                          </span>

                                    
                                          <select name="editarCombustible" id="editarCombustibleId" class="form-control" required="">

                                                <option value="" id="editarCombustibleId2">Selecciona</option>

                                                <?php 

                                                      $itemCombustible = null;
                                                      $valorCombustibles = null;

                                                      $combustible = ControladorCombustibles::ctrMostrarCombustibles($itemCombustible, $valorCombustibles);

                                                      foreach ($combustible as $key => $value) {
                                                            
                                                            echo '<option value="'.$value["idCombustible"].'">'.$value["combustible"].'</option>';
                                                      }



                                                 ?>
                                                
                                          </select>

                                    </div>
                                    
                              </div>


                              <div class="col-12 col-md-4 py-2">

                                    <label for="editaroMotorId">No. Motor:</label>

                                    <div  class="input-group mb-2 mr-sm-2">

                                          <span class="input-group-prepend">

                                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

                                          </span>

                                    
                                          <input type="text" name="editarNumeroMotor" id="editaroMotorId" placeholder="Motor" required class="form-control input-lg">

                                    </div>
                                    
                              </div>


                              <div class="col-12 col-md-2 py-2">

                                    <label for="editarKilometrajeId">KM:</label>

                                    <div  class="input-group mb-2 mr-sm-2">

                                          <span class="input-group-prepend">

                                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

                                          </span>

                                    
                                          <input type="text" name="editarKilometraje" id="editarKilometrajeId" placeholder="KM" required class="form-control input-lg">

                                    </div>
                                    
                              </div>


                              <div class="col-12 col-md-2 py-2">

                                    <label for="editarHRSId">HRS:</label>

                                    <div  class="input-group mb-2 mr-sm-2">

                                          <span class="input-group-prepend">

                                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

                                          </span>

                                    
                                          <input type="text" name="editarHRS" id="editarHRSId" placeholder="Hrs uso" required class="form-control input-lg">

                                    </div>
                                    
                              </div>





                              <div class="col-12 col-md-4 py-2">

                                    <label for="editarColorId">Color:</label>

                                    <div  class="input-group mb-2 mr-sm-2">

                                          <span class="input-group-prepend">

                                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

                                          </span>

                                    
                                          <input type="text" name="editarColor" id="editarColorId" placeholder="Color" required class="form-control input-lg">

                                    </div>
                                    
                              </div>


                              <div class="col-12 col-md-4 py-2">

                                    <label for="editarEstadoFisicoId">Estado Fisico:</label>

                                    <div  class="input-group mb-2 mr-sm-2">

                                          <span class="input-group-prepend">

                                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

                                          </span>

                                    
                                          <select name="editarEstadoFisico" id="editarEstadoFisicoId" class="form-control" required="">
                                                <option value="" id="editarEstadoFisicoId2">Selecciona</option>
                                                <option value="Bueno">Bueno</option>
                                                <option value="Regular">Regular</option>
                                                <option value="Malo">Malo</option>
                                                
                                          </select>

                                    </div>
                                    
                              </div>

                              <div class="col-12 col-md-4 py-2">

                                    <label for="editarEstadoOperativoId">Estado Operativo:</label>

                                    <div  class="input-group mb-2 mr-sm-2">

                                          <span class="input-group-prepend">

                                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

                                          </span>

                                    
                                          <select name="editarEstadoOperativo" id="editarEstadoOperativoId" class="form-control" required="">
                                                <option value="" id="editarEstadoOperativoId2">Selecciona</option>
                                                <option value="Bueno">Bueno</option>
                                                <option value="Regular">Regular</option>
                                                <option value="Malo">Malo</option>
                                                
                                          </select>

                                    </div>
                                    
                              </div>





                              <div class="col-12 col-md-4 py-2">

                                    <label for="editarFechaCompraId">Fecha compra:</label>

                                    <div  class="input-group mb-2 mr-sm-2">

                                          <span class="input-group-prepend">

                                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

                                          </span>

                                    
                                          <input type="date" name="editarFechaCompra" id="editarFechaCompraId" placeholder="Color" class="form-control input-lg">

                                    </div>
                                    
                              </div>



                              <div class="col-12 col-md-4 py-2">

                                    <label for="editarNumeroFacturaId">No. factura:</label>

                                    <div  class="input-group mb-2 mr-sm-2">

                                          <span class="input-group-prepend">

                                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

                                          </span>

                                    
                                          <input type="text" name="editarNumeroFactura" id="editarNumeroFacturaId" placeholder="Factura" required class="form-control input-lg">

                                    </div>
                                    
                              </div>


                              <div class="col-12 col-md-4 py-2">

                                    <label for="editarSeguroId">Seguro:</label>

                                    <div  class="input-group mb-2 mr-sm-2">

                                          <span class="input-group-prepend">

                                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

                                          </span>

                                    
                                          <select name="editarSeguro" id="editarSeguroId" class="form-control">
                                                <option value="" id="editarSeguroId2">Selecciona</option>
                                                <?php 

                                                      $itemSeguro = null;
                                                      $valorSeguro = null;

                                                      $seguros = ControladorSeguros::ctrMostrarSeguros($itemSeguro, $valorSeguro);

                                                      foreach ($seguros as $key => $value) {
                                                            
                                                            echo '<option value="'.$value["idSeguro"].'">'.$value["seguro"].'</option>';
                                                      }


                                                 ?>
                                                
                                          </select>

                                    </div>
                                    
                              </div>



                              <div class="col-12 col-md-6 py-2">

                                    <label for="editarProveedorId">Proveedor compra:</label>

                                    <div  class="input-group mb-2 mr-sm-2">

                                          <span class="input-group-prepend">

                                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

                                          </span>

                                      <input type="text" name="editarProveedor" id="editarProveedorId" placeholder="Nombre del proveedor" class="form-control" required="">

                                    </div>
                                    
                              </div>



                              


                              <div class="col-12 col-md-3 py-2">

                                    <label for="editarUbicacionId">Ubicación:</label>

                                    <div  class="input-group mb-2 mr-sm-2">

                                          <span class="input-group-prepend">

                                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

                                          </span>

                                    
                                          <input type="text" name="editarUbicacion" id="editarUbicacionId" placeholder="Ubicación" required class="form-control input-lg">

                                    </div>
                                    
                              </div>

                                    <div class="col-12 col-md-3 py-2">

                                    <label for="editarEstadoId">Estatus</label>

                                    <div  class="input-group mb-2 mr-sm-2">

                                          <span class="input-group-prepend">

                                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

                                          </span>

                                    
                                                
                                          <select name="editarEstado" id="editarEstadoId" class="form-control" required="">

                                                <option value="" id="editarEstadoId2">Selecciona</option>
                                                <option value="Activo">Activo</option>
                                                <option value="Inactivo">Inactivo</option>
                                                <option value="Renta">Renta</option>
                                                <option value="Ventas">Ventas</option>
                                                <option value="Baja">Baja</option>
                                                <option value="Como dato">Como dato</option>
                                                <option value="Mantenimiento">Mantenimiento</option>

                                          </select>
                                    </div>
                                    
                              </div>


                              <div class="col-12 col-md-6 py-2">

                                    <label for="editarDescripcionId">Descripción vehículo</label>

                                    <div  class="input-group mb-2 mr-sm-2">

                                          <span class="input-group-prepend">

                                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

                                          </span>

                                    
                                          <textarea name="editarDescripcion" id="editarDescripcionId" cols="30" rows="2" class="form-control" maxlength="255" placeholder="Descripción del vehiculo"></textarea>

                                    </div>
                                    
                              </div>






                              <div class="col-12 col-md-6 py-2">

                                    <label for="editarAccesoriosId">Accesorios vehículo</label>

                                    <div  class="input-group mb-2 mr-sm-2">

                                          <span class="input-group-prepend">

                                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

                                          </span>

                                    
                                          <textarea name="editarAccesorios" id="editarAccesoriosId" cols="30" rows="2" class="form-control" maxlength="255" placeholder="Accesorios del vehículo"></textarea>

                                    </div>
                                    
                              </div>



                                <div class="col-12 col-md-6 py-2">

                                    <label for="editarResponsableId">Responsable:</label>

                                    <div  class="input-group mb-2 mr-sm-2">

                                          <span class="input-group-prepend">

                                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

                                          </span>

                                    
                                          <select name="editarResponsable" id="editarResponsableId" class="form-control" required="">

                                                <option value="" id="editarResponsableId2">Seleccionar</option>

                                                <?php 

                                                      $itemRespon = null;
                                                      $valorRespon = null;

                                                      $respons = ControladorUsuarios::ctrMostrarUsuarios($itemRespon, $valorRespon);

                                                      foreach ($respons as $key => $value) {
                                                            
                                                            echo '<option value="'.$value["idResponsable"].'">'.$value["responsable"].'</option>';

                                                      }


                                                 ?>
                                          </select>

                                    </div>
                                    
                              </div>






                              <div class="col-12 col-md-6 py-2">

                                    <label for="editarObservacionesId">Observaciones</label>

                                    <div  class="input-group mb-2 mr-sm-2">

                                          <span class="input-group-prepend">

                                                <div class="input-group-text bg-transparent border-right-0"><i class="fa fa-th-list"></i></div>

                                          </span>

                                    
                                          <textarea name="editarObservaciones" id="editarObservacionesId" maxlength="855" cols="30" rows="2" class="form-control" placeholder="Observaciones"></textarea>

                                    </div>
                                    
                              </div>

                              
                        </div>
                        
                  </div>

            </div>

          </div>

    <!--=====================================
    =  PIE DE MODAL          =
    ======================================-->
          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-info"> Actualizar Vehículo</button>

          </div>

          <?php 

            $editarVehiculo = new ControladorVehiculos(); 
            $editarVehiculo -> ctrEditarVehiculo();
            

           ?>

    </form>

    </div>

  </div>

</div>



    <!--=====================================
      VER RESUMEN
    ======================================-->

<div id="modalResumenVehiculo" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg">
    
    <div class="modal-content">

          <div class="modal-header bg-info">

             <h4 class="modal-title">Resumen</h4>

            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>
    <!--=====================================
    =  CUERPO DE MODAL          =
    ======================================-->
    <div class="modal-body">

      <div class="box-body">

            <div class="jumbotron">
                <h1 class="display-4">Hello, world!</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
          </div>



    </div>

</div>

    <!--=====================================
    =  PIE DE MODAL          =
    ======================================-->
          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
           
          </div>



    </div>
  </div>
</div>



<?php 

$eliminarVehiculo = new ControladorVehiculos();
$eliminarVehiculo -> ctrBorrarVehiculo();


?>
