<?php if($_SESSION["perfilVehicular"] == "1" || $_SESSION["perfilVehicular"] == "2" || $_SESSION["perfilVehicular"] == "5"){  //echo $_SERVER['DOCUMENT_ROOT']; ?>


<div class="content-wrapper">

	<section class="content-header">  

		<div class="container-fluid">

			<div class="row mb-2">

				<div class="col-sm-6">

					<h1 class="text-uppercase">Administración de documentos</h1>

				</div>
 
				<div class="col-sm-6">

					<ol class="breadcrumb float-sm-right">

						<li class="breadcrumb-item text-uppercase">

							<a href="inicio"><i class="fas fa-tachometer-alt"></i> Inicio</a>

						</li>

						<li class="breadcrumb-item active text-uppercase">

							Administracion de documentos

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

								<h5 class="text-info text-bold">Ingresando el modelo, placas o número económico para la busqueda | <span id="vehiculoCombo"></span></h5>

							</h3>

						</div>

						<div class="card-body">

							<!-- <form method="POST" enctype="multipart/form-data"> -->
								
								<div class="col-12 col-md-6">

									<div class="form-group">

										<select name="identidadVehiculo" id="identidadVehiculoId" class="form-control selectpicker" data-live-search="true" required="">

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
										
									</div>

									<div id="loaderVehiculo"></div>
									
								</div>


								<div class="col-12 col-md-12"  style="border:1px solid #efefef;padding: 10px;">

									<h6 class="text-danger text-uppercase text-bold" style="padding:10px;">Relación de documentos | <span class="label label-warning">Todo documento que sea más de una hoja unificarlo a una hoja en formato</span></h6>
 									<br>


 									<!-- 1 -->

 									<hr>

 									<div class="col-12 col-md-12 row">
		 							
		 								<div class="col-12 col-md-3">

		 									<h6 class="text-uppercase text-bold"> 1.- <span id="respuestaFacturaVehiculo" class="resDocumentacion mr-1 ml-1"></span> Factura | Carta Factura | Refactura </h6>
		 								
		 								</div>

		 								<div class="col-12 col-md-2 text-center">

		 									<label for="fileFacturaVehiculo" class="bg-success p-1 btn" data-tooltip='tooltip' title='Selecciona archivo' data-placement='top'>

		 										<i class="fa fa-paperclip"></i> Subir

		 									</label>

		 									<input type="hidden" id="idVehiculo" required="">
		 									<input type="hidden" id="folioVehiculo" required="">

		 									<input id="fileFacturaVehiculo" type="file" onchange="cambiarFacturaVehiculo()" name="subirFacturaVehiculo" class="form-control fileFacturaVehiculo" style="display: none;">

		 									<div id="info" class="text-center"></div>

		 								</div>

		 								<div class="col-12 col-md-2 text-center">
		 										
		 									<label for="btnConfirmarFacturaVehiculo">Confirmar</label>

		 									<button class="btn btn-info" type="button" id="btnConfirmarFacturaVehiculo" onclick="registrarFacturaVehiculo()" data-tooltip='tooltip' title='Click para subir' data-placement='top'><i class="fa fa-upload"></i></button>
		 									<div id="loaderFacturaVehiculo" class="text-center"></div>
		 									
		 								</div>

		 								<div class="col-12 col-md-2 text-center">
		 									
		 									<label class="modalPrevia" data-bs-toggle="modal" data-bs-target="#modalPreviaPDFVehiculo" onclick="pdfFacturaVehiculo();" for="" data-backdrop="static" data-keyboard="false"><span class="fa fa-search" style="cursor:pointer;"></span> </label><span id="respuestaFacturaPrevia" class="resDocumentacion ml-3"></span>

		 								</div>
		 									
		 								<div class="col-12 col-md-2 text-center">

		 									<button type="button" id="eliminarFacturaVehiculo" class="btn btn-danger btn-sm" onclick="eliminarFacturaVehiculo();">Eliminar</button>

		 								</div>

	 								</div>


	 								<!-- 2 - POLIZA DE SEGUROS  -->

	 								<hr>

	 								<div class="col-12 col-md-12 row">
										
										<!-- <hr> -->
		 							
			 								<div class="col-12 col-md-3">

			 									<h6 class="text-uppercase text-bold"> 2.- <span id="respuestaPolizaVehiculo" class="resDocumentacion mr-1 ml-1"></span> Poliza de seguros </h6>
			 								
			 								</div>

			 								<div class="col-12 col-md-2 text-center">

			 									<label for="filePolizaVehiculo" class="bg-success p-1 btn" data-tooltip='tooltip' title='Selecciona archivo' data-placement='top'>

			 										<i class="fa fa-paperclip"></i> Subir

			 									</label>

			 									<input id="filePolizaVehiculo" type="file" onchange="cambiarPolizaVehiculo()" name="subirFacturaVehiculo" class="form-control filePolizaVehiculo" style="display: none;">

			 									<div id="infoPoliza" class="text-center"></div>

			 								</div>

			 								<div class="col-12 col-md-2 text-center">
			 										
			 									<label for="btnConfirmarPolizaVehiculo">Confirmar</label>

			 									<button class="btn btn-info" type="button" id="btnConfirmarPolizaVehiculo" onclick="registrarPolizaVehiculo();" data-tooltip='tooltip' title='Click para subir' data-placement='top'><i class="fa fa-upload"></i></button>
			 									<div id="loaderPolizaVehiculo" class="text-center"></div>
			 									
			 								</div>

			 								<div class="col-12 col-md-2 text-center">
			 									
			 									<label class="modalPrevia" data-bs-toggle="modal" data-bs-target="#modalPreviaPDFVehiculo" onclick="pdfPolizaVehiculo();" for="" data-backdrop="static" data-keyboard="false"><span class="fa fa-search" style="cursor:pointer;"></span> </label><span id="respuestaPolizaPrevia" class="resDocumentacion ml-3"></span>

			 								
			 								</div>
			 									
			 								<div class="col-12 col-md-2 text-center">

			 									<button type="button" id="eliminarPolizaVehiculo" class="btn btn-danger btn-sm" onclick="eliminarPolizaVehiculo();">Eliminar</button>

			 								</div>

	 								</div>




	 								<!-- 3 - POLIZA DE SEGUROS  -->

	 								<hr>

	 								<div class="col-12 col-md-12 row">
										
										<!-- <hr> -->
		 							
			 								<div class="col-12 col-md-3">

			 									<h6 class="text-uppercase text-bold"> 3.- <span id="respuestaTenenciaVehiculo" class="resDocumentacion mr-1 ml-1"></span> Ultimas dos tenencias </h6>
			 								
			 								</div>

			 								<div class="col-12 col-md-2 text-center">

			 									<label for="fileTenenciaVehiculo" class="bg-success p-1 btn" data-tooltip='tooltip' title='Selecciona archivo' data-placement='top'>

			 										<i class="fa fa-paperclip"></i> Subir

			 									</label>

			 									<input id="fileTenenciaVehiculo" type="file" onchange="cambiarTenenciaVehiculo()" name="subirTenenciaVehiculo" class="form-control fileTenenciaVehiculo" style="display: none;">

			 									<div id="infoTenencia" class="text-center"></div>

			 								</div>

			 								<div class="col-12 col-md-2 text-center">
			 										
			 									<label for="btnConfirmarTenenciaVehiculo">Confirmar</label>

			 									<button class="btn btn-info" type="button" id="btnConfirmarTenenciaVehiculo" onclick="registrarTenenciaVehiculo();" data-tooltip='tooltip' title='Click para subir' data-placement='top'><i class="fa fa-upload"></i></button>
			 									<div id="loaderTenenciaVehiculo" class="text-center"></div>
			 									
			 								</div>

			 								<div class="col-12 col-md-2 text-center">
			 									
			 									<label class="modalPrevia" data-bs-toggle="modal" data-bs-target="#modalPreviaPDFVehiculo" onclick="pdfTenenciaVehiculo();" for="" data-backdrop="static" data-keyboard="false"><span class="fa fa-search" style="cursor:pointer;"></span> </label><span id="respuestaTenenciaPrevia" class="resDocumentacion ml-3"></span>

			 								
			 								</div>
			 									
			 								<div class="col-12 col-md-2 text-center">

			 									<button type="button" id="eliminarTenenciaVehiculo" class="btn btn-danger btn-sm" onclick="eliminarTenenciaVehiculo();">Eliminar</button>

			 								</div>

	 								</div>



	 								<!-- 4 - ULTIMA VERIFICACION  -->

	 	 							<hr>

	 								<div class="col-12 col-md-12 row">
										
									
		 							
			 								<div class="col-12 col-md-3">

			 									<h6 class="text-uppercase text-bold"> 4.- <span id="respuestaVerificacionVehiculo" class="resDocumentacion mr-1 ml-1"></span> ULTIMA verificacion</h6>
			 								
			 								</div>

			 								<div class="col-12 col-md-2 text-center">

			 									<label for="fileVerificacionVehiculo" class="bg-success p-1 btn" data-tooltip='tooltip' title='Selecciona archivo' data-placement='top'>

			 										<i class="fa fa-paperclip"></i> Subir

			 									</label>

			 									<input id="fileVerificacionVehiculo" type="file" onchange="cambiarVerificacionVehiculo();" name="subirVerificacionVehiculo" class="form-control fileVerificacionVehiculo" style="display: none;">

			 									<div id="infoVerificacion" class="text-center"></div>

			 								</div>

			 								<div class="col-12 col-md-2 text-center">
			 										
			 									<label for="btnConfirmarVerificacionVehiculo">Confirmar</label>

			 									<button class="btn btn-info" type="button" id="btnConfirmarVerificacionVehiculo" onclick="registrarVerificacionVehiculo();" data-tooltip='tooltip' title='Click para subir' data-placement='top'><i class="fa fa-upload"></i></button>
			 									<div id="loaderVerificacionVehiculo" class="text-center"></div>
			 									
			 								</div>

			 								<div class="col-12 col-md-2 text-center">
			 									
			 									<label class="modalPrevia" data-bs-toggle="modal" data-bs-target="#modalPreviaPDFVehiculo" onclick="pdfVerificacionVehiculo();" for="" data-backdrop="static" data-keyboard="false"><span class="fa fa-search" style="cursor:pointer;"></span> </label><span id="respuestaVerificacionPrevia" class="resDocumentacion ml-3"></span>

			 								
			 								</div>
			 									
			 								<div class="col-12 col-md-2 text-center">

			 									<button type="button" id="eliminarVerificacionVehiculo" class="btn btn-danger btn-sm" onclick="eliminarVerificacionVehiculo();">Eliminar</button>

			 								</div>

	 								</div> 



	 								<!-- 5 - PEDIMENTo  -->

	 	 							<hr>

	 								<div class="col-12 col-md-12 row">
										
			 								<div class="col-12 col-md-3">

			 									<h6 class="text-uppercase text-bold"> 5.- <span id="respuestaPedimentoVehiculo" class="resDocumentacion mr-1 ml-1"></span> pedimento | <small> Si es importado</small></h6>
			 								
			 								</div>

			 								<div class="col-12 col-md-2 text-center">

			 									<label for="filePedimentoVehiculo" class="bg-success p-1 btn" data-tooltip='tooltip' title='Selecciona archivo' data-placement='top'>

			 										<i class="fa fa-paperclip"></i> Subir

			 									</label>

			 									<input id="filePedimentoVehiculo" type="file" onchange="cambiarPedimentoVehiculo();" name="subirPedimentoVehiculo" class="form-control filePedimentoVehiculo" style="display: none;">

			 									<div id="infoPedimento" class="text-center"></div>

			 								</div>

			 								<div class="col-12 col-md-2 text-center">
			 										
			 									<label for="btnConfirmarPedimentoVehiculo">Confirmar</label>

			 									<button class="btn btn-info" type="button" id="btnConfirmarPedimentoVehiculo" onclick="registrarPedimentoVehiculo();" data-tooltip='tooltip' title='Click para subir' data-placement='top'><i class="fa fa-upload"></i></button>
			 									<div id="loaderPedimentoVehiculo" class="text-center"></div>
			 									
			 								</div>

			 								<div class="col-12 col-md-2 text-center">
			 									
			 									<label class="modalPrevia" data-bs-toggle="modal" data-bs-target="#modalPreviaPDFVehiculo" onclick="pdfPedimentoVehiculo();" for="" data-backdrop="static" data-keyboard="false"><span class="fa fa-search" style="cursor:pointer;"></span> </label><span id="respuestaPedimentoPrevia" class="resDocumentacion ml-3"></span>

			 								
			 								</div>
			 									
			 								<div class="col-12 col-md-2 text-center">

			 									<button type="button" id="eliminarPedimentoVehiculo" class="btn btn-danger btn-sm" onclick="eliminarPedimentoVehiculo();">Eliminar</button>

			 								</div>

	 								</div> 



	 								<!-- 6 - TARJETA DE CIRCULACION  -->

	 	 							<hr>

	 								<div class="col-12 col-md-12 row">
										
		 								<div class="col-12 col-md-3">

		 									<h6 class="text-uppercase text-bold"> 6.- <span id="respuestaTarjetaVehiculo" class="resDocumentacion mr-1 ml-1"></span> tarjeta de circulacion</h6>
		 								
		 								</div>

		 								<div class="col-12 col-md-2 text-center">

		 									<label for="fileTarjetaVehiculo" class="bg-success p-1 btn" data-tooltip='tooltip' title='Selecciona archivo' data-placement='top'>

		 										<i class="fa fa-paperclip"></i> Subir

		 									</label>

		 									<input id="fileTarjetaVehiculo" type="file" onchange="cambiarTarjetaVehiculo();" name="subirTarjetaVehiculo" class="form-control fileTarjetaVehiculo" style="display: none;">

		 									<div id="infoTarjeta" class="text-center"></div>

		 								</div>

		 								<div class="col-12 col-md-2 text-center">
		 										
		 									<label for="btnConfirmarTarjetaVehiculo">Confirmar</label>

		 									<button class="btn btn-info" type="button" id="btnConfirmarTarjetaVehiculo" onclick="registrarTarjetaVehiculo();" data-tooltip='tooltip' title='Click para subir' data-placement='top'><i class="fa fa-upload"></i></button>
		 									<div id="loaderTarjetaVehiculo" class="text-center"></div>
		 									
		 								</div>

		 								<div class="col-12 col-md-2 text-center">
		 									
		 									<label class="modalPrevia" data-bs-toggle="modal" data-bs-target="#modalPreviaPDFVehiculo" onclick="pdfTarjetaVehiculo();" for="" data-backdrop="static" data-keyboard="false"><span class="fa fa-search" style="cursor:pointer;"></span> </label><span id="respuestaTarjetaPrevia" class="resDocumentacion ml-3"></span>

		 								
		 								</div>
			 									
		 								<div class="col-12 col-md-2 text-center">

		 									<button type="button" id="eliminarTarjetaVehiculo" class="btn btn-danger btn-sm" onclick="eliminarTarjetaVehiculo();">Eliminar</button>

		 								</div>

	 								</div> 




	 								<!-- 7 - poliza de garantia  -->

	 	 							<hr>

	 								<div class="col-12 col-md-12 row">
										
		 								<div class="col-12 col-md-3">

		 									<h6 class="text-uppercase text-bold"> 7.- <span id="respuestaGarantiaVehiculo" class="resDocumentacion mr-1 ml-1"></span> poliza de garantia | <small>Si es que cuenta</small></h6> 
		 								
		 								</div>

		 								<div class="col-12 col-md-2 text-center">

		 									<label for="fileGarantiaVehiculo" class="bg-success p-1 btn" data-tooltip='tooltip' title='Selecciona archivo' data-placement='top'>

		 										<i class="fa fa-paperclip"></i> Subir

		 									</label>

		 									<input id="fileGarantiaVehiculo" type="file" onchange="cambiarGarantiaVehiculo();" name="subirGarantiaVehiculo" class="form-control fileGarantiaVehiculo" style="display: none;">

		 									<div id="infoGarantia" class="text-center"></div>

		 								</div>

		 								<div class="col-12 col-md-2 text-center">
		 										
		 									<label for="btnConfirmarGarantiaVehiculo">Confirmar</label>

		 									<button class="btn btn-info" type="button" id="btnConfirmarGarantiaVehiculo" onclick="registrarGarantiaVehiculo();" data-tooltip='tooltip' title='Click para subir' data-placement='top'><i class="fa fa-upload"></i></button>
		 									<div id="loaderGarantiaVehiculo" class="text-center"></div>
		 									
		 								</div>

		 								<div class="col-12 col-md-2 text-center">
		 									
		 									<label class="modalPrevia" data-bs-toggle="modal" data-bs-target="#modalPreviaPDFVehiculo" onclick="pdfGarantiaVehiculo();" for="" data-backdrop="static" data-keyboard="false"><span class="fa fa-search" style="cursor:pointer;"></span> </label><span id="respuestaGarantiaPrevia" class="resDocumentacion ml-3"></span>

		 								
		 								</div>
			 									
		 								<div class="col-12 col-md-2 text-center">

		 									<button type="button" id="eliminarGarantiaVehiculo" class="btn btn-danger btn-sm" onclick="eliminarGarantiaVehiculo();">Eliminar</button>

		 								</div>

	 								</div> 


	 								<!-- 8 - PERMISOS DE PLACAS  -->

	 	 							<hr>

	 								<div class="col-12 col-md-12 row">
										
		 								<div class="col-12 col-md-3">

		 									<h6 class="text-uppercase text-bold"> 8.- <span id="respuestaPermisoVehiculo" class="resDocumentacion mr-1 ml-1"></span> permisos | <small>Si es que la unidad no cuenta con placas</small></h6> 
		 								
		 								</div>

		 								<div class="col-12 col-md-2 text-center">

		 									<label for="filePermisoVehiculo" class="bg-success p-1 btn" data-tooltip='tooltip' title='Selecciona archivo' data-placement='top'>

		 										<i class="fa fa-paperclip"></i> Subir

		 									</label>

		 									<input id="filePermisoVehiculo" type="file" onchange="cambiarPermisoVehiculo();" name="subirPermisoVehiculo" class="form-control filePermisoVehiculo" style="display: none;">

		 									<div id="infoPermiso" class="text-center"></div>

		 								</div>

		 								<div class="col-12 col-md-2 text-center">
		 										
		 									<label for="btnConfirmarPermisoVehiculo">Confirmar</label>

		 									<button class="btn btn-info" type="button" id="btnConfirmarPermisoVehiculo" onclick="registrarPermisoVehiculo();" data-tooltip='tooltip' title='Click para subir' data-placement='top'><i class="fa fa-upload"></i></button>
		 									<div id="loaderPermisoVehiculo" class="text-center"></div>
		 									
		 								</div>

		 								<div class="col-12 col-md-2 text-center">
		 									
		 									<label class="modalPrevia" data-bs-toggle="modal" data-bs-target="#modalPreviaPDFVehiculo" onclick="pdfPermisoVehiculo();" for="" data-backdrop="static" data-keyboard="false"><span class="fa fa-search" style="cursor:pointer;"></span> </label><span id="respuestaPermisoPrevia" class="resDocumentacion ml-3"></span>

		 								
		 								</div>
			 									
		 								<div class="col-12 col-md-2 text-center">

		 									<button type="button" id="eliminarPermisoVehiculo" class="btn btn-danger btn-sm" onclick="eliminarPermisoVehiculo();">Eliminar</button>

		 								</div>

	 								</div> 


	 								<!-- 9 - COMPRA - VENTA  -->

	 	 							<hr>

	 								<div class="col-12 col-md-12 row">
										
		 								<div class="col-12 col-md-3">

		 									<h6 class="text-uppercase text-bold"> 9.- <span id="respuestaCompraVentaVehiculo" class="resDocumentacion mr-1 ml-1"></span> COMPRA - VENTA | <small>Si es que la unidad fue vendida</small></h6> 
		 								
		 								</div>

		 								<div class="col-12 col-md-2 text-center">

		 									<label for="fileCompraVentaVehiculo" class="bg-success p-1 btn" data-tooltip='tooltip' title='Selecciona archivo' data-placement='top'>

		 										<i class="fa fa-paperclip"></i> Subir

		 									</label>

		 									<input id="fileCompraVentaVehiculo" type="file" onchange="cambiarCompraVentaVehiculo();" name="subirCompraVentaVehiculo" class="form-control fileCompraVentaVehiculo" style="display: none;">

		 									<div id="infoCompraVenta" class="text-center"></div>

		 								</div>

		 								<div class="col-12 col-md-2 text-center">
		 										
		 									<label for="btnConfirmarCompraVentaVehiculo">Confirmar</label>

		 									<button class="btn btn-info" type="button" id="btnConfirmarCompraVentaVehiculo" onclick="registrarCompraVentaVehiculo();" data-tooltip='tooltip' title='Click para subir' data-placement='top'><i class="fa fa-upload"></i></button>
		 									<div id="loaderCompraVentaVehiculo" class="text-center"></div>
		 									
		 								</div>

		 								<div class="col-12 col-md-2 text-center">
		 									
		 									<label class="modalPrevia" data-bs-toggle="modal" data-bs-target="#modalPreviaPDFVehiculo" onclick="pdfCompraVentaVehiculo();" for="" data-backdrop="static" data-keyboard="false"><span class="fa fa-search" style="cursor:pointer;"></span> </label><span id="respuestaCompraVentaPrevia" class="resDocumentacion ml-3"></span>

		 								
		 								</div>
			 									
		 								<div class="col-12 col-md-2 text-center">

		 									<button type="button" id="eliminarCompraVentaVehiculo" class="btn btn-danger btn-sm" onclick="eliminarCompraVentaVehiculo();">Eliminar</button>

		 								</div>

	 								</div> 



	 								<!-- 10 - COMPRA - VENTA  -->

	 	 							<hr>

	 								<div class="col-12 col-md-12 row">
										
		 								<div class="col-12 col-md-3">

		 									<h6 class="text-uppercase text-bold"> 10.- <span id="respuestaUltimoTramiteVehiculo" class="resDocumentacion mr-1 ml-1"></span> ultimo tramite | <small>Cambio de placas, entidad, etc.</small></h6> 
		 								
		 								</div>

		 								<div class="col-12 col-md-2 text-center">

		 									<label for="fileUltimoTramiteVehiculo" class="bg-success p-1 btn" data-tooltip='tooltip' title='Selecciona archivo' data-placement='top'>

		 										<i class="fa fa-paperclip"></i> Subir

		 									</label>

		 									<input id="fileUltimoTramiteVehiculo" type="file" onchange="cambiarUltimoTramiteVehiculo();" name="subirUltimoTramiteVehiculo" class="form-control fileUltimoTramiteVehiculo" style="display: none;">

		 									<div id="infoUltimoTramite" class="text-center"></div>

		 								</div>

		 								<div class="col-12 col-md-2 text-center">
		 										
		 									<label for="btnConfirmarUltimoTramiteVehiculo">Confirmar</label>

		 									<button class="btn btn-info" type="button" id="btnConfirmarUltimoTramiteVehiculo" onclick="registrarUltimoTramiteVehiculo();" data-tooltip='tooltip' title='Click para subir' data-placement='top'><i class="fa fa-upload"></i></button>
		 									<div id="loaderUltimoTramiteVehiculo" class="text-center"></div>
		 									
		 								</div>

		 								<div class="col-12 col-md-2 text-center">
		 									
		 									<label class="modalPrevia" data-bs-toggle="modal" data-bs-target="#modalPreviaPDFVehiculo" onclick="pdfUltimoTramiteVehiculo();" for="" data-backdrop="static" data-keyboard="false"><span class="fa fa-search" style="cursor:pointer;"></span> </label><span id="respuestaUltimoTramitePrevia" class="resDocumentacion ml-3"></span>

		 								
		 								</div>
			 									
		 								<div class="col-12 col-md-2 text-center">

		 									<button type="button" id="eliminarUltimoTramiteVehiculo" class="btn btn-danger btn-sm" onclick="eliminarUltimoTramiteVehiculo();">Eliminar</button>

		 								</div>

	 								</div> 



	 									<!-- 11 - COMPRA - VENTA  -->

	 	 							<hr>

	 								<div class="col-12 col-md-12 row">
										
		 								<div class="col-12 col-md-3">

		 									<h6 class="text-uppercase text-bold"> 11.- <span id="respuestaFacturaOrigenVehiculo" class="resDocumentacion mr-1 ml-1"></span> factura origen</h6> 
		 								
		 								</div>

		 								<div class="col-12 col-md-2 text-center">

		 									<label for="fileFacturaOrigenVehiculo" class="bg-success p-1 btn" data-tooltip='tooltip' title='Selecciona archivo' data-placement='top'>

		 										<i class="fa fa-paperclip"></i> Subir

		 									</label>

		 									<input id="fileFacturaOrigenVehiculo" type="file" onchange="cambiarFacturaOrigenVehiculo();" name="subirFacturaOrigenVehiculo" class="form-control fileFacturaOrigenVehiculo" style="display: none;">

		 									<div id="infoFacturaOrigen" class="text-center"></div>

		 								</div>

		 								<div class="col-12 col-md-2 text-center">
		 										
		 									<label for="btnConfirmarFacturaOrigenVehiculo">Confirmar</label>

		 									<button class="btn btn-info" type="button" id="btnConfirmarFacturaOrigenVehiculo" onclick="registrarFacturaOrigenVehiculo();" data-tooltip='tooltip' title='Click para subir' data-placement='top'><i class="fa fa-upload"></i></button>
		 									<div id="loaderFacturaOrigenVehiculo" class="text-center"></div>
		 									
		 								</div>

		 								<div class="col-12 col-md-2 text-center">
		 									
		 									<label class="modalPrevia" data-bs-toggle="modal" data-bs-target="#modalPreviaPDFVehiculo" onclick="pdfFacturaOrigenVehiculo();" for="" data-backdrop="static" data-keyboard="false"><span class="fa fa-search" style="cursor:pointer;"></span> </label><span id="respuestaFacturaOrigenPrevia" class="resDocumentacion ml-3"></span>

		 								
		 								</div>
			 									
		 								<div class="col-12 col-md-2 text-center">

		 									<button type="button" id="eliminarFacturaOrigenVehiculo" class="btn btn-danger btn-sm" onclick="eliminarFacturaOrigenVehiculo();">Eliminar</button>

		 								</div>

	 								</div> 






	 						





									
								</div>











							<!-- </form> -->




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











<div id="modalPreviaPDFVehiculo" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg">
    
    <div class="modal-content">

          <div class="modal-header bg-success">

          
          	 <h4 class="modal-title text-center text-white"><span id="docs"></span></h4>

            <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
           
          </div>
    <!--=====================================
    =  CUERPO DE MODAL          =
    ======================================-->
          <div class="modal-body">

            <div class="box-body">

            	 <iframe id="framePDFVehiculo" src="" embedded="true" frameborder="0" width="100%" height="500px"></iframe>         

            </div>

          </div>

    <!--=====================================
    =  PIE DE MODAL          =
    ======================================-->
          <div class="text-center">
        	
        	<p> ¡ Si se muestra en blanco es por que aun no existe algun documento o no se ha realizado la busqueda !</p>


          </div>


 

    </div>
  </div>
</div>


<?php 


	$updateFacturaVehiculo =  new ControladorDocumentacionVehiculos(); 
	$updateFacturaVehiculo -> ctrActualizarFacturaVehiculo();

	$updatePolizaVehiculo =  new ControladorDocumentacionVehiculos(); 
	$updatePolizaVehiculo -> ctrActualizarPolizaVehiculo(); 

	$updateTenenciasVehiculo =  new ControladorDocumentacionVehiculos(); 
	$updateTenenciasVehiculo -> ctrActualizarTenenciaVehiculo();

	$updateVerificacionVehiculo =  new ControladorDocumentacionVehiculos(); 
	$updateVerificacionVehiculo -> ctrActualizarVerificacionVehiculo();

	$updatePedimentoVehiculo =  new ControladorDocumentacionVehiculos(); 
	$updatePedimentoVehiculo -> ctrActualizarPedimentoVehiculo();
	
	$updateTarjetaVehiculo =  new ControladorDocumentacionVehiculos(); 
	$updateTarjetaVehiculo -> ctrActualizarTarjetaVehiculo();

	$updateGarantiaVehiculo =  new ControladorDocumentacionVehiculos(); 
	$updateGarantiaVehiculo -> ctrActualizarGarantiaVehiculo();

	$updatePermisoVehiculo =  new ControladorDocumentacionVehiculos(); 
	$updatePermisoVehiculo -> ctrActualizarPermisoVehiculo();

	$updateCompraVentaVehiculo =  new ControladorDocumentacionVehiculos(); 
	$updateCompraVentaVehiculo -> ctrActualizarCompraVentaVehiculo();

	$updateUltimoTramiteVehiculo =  new ControladorDocumentacionVehiculos(); 
	$updateUltimoTramiteVehiculo -> ctrActualizarUltimoTramiteVehiculo();

	$updateFacturaOrigenVehiculo =  new ControladorDocumentacionVehiculos(); 
	$updateFacturaOrigenVehiculo -> ctrActualizarFacturaOrigenVehiculo();



 ?>