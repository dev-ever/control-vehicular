<?php 
class ControladorVehiculos{  
 
 
	/*=============================================  
	MOSTRAR MARCAS  
	=============================================*/   
  
	static public function ctrMostrarVehiculos($item, $valor){

		$tabla = "tb_vehiculos";

		$respuesta = ModeloVehiculos::mdlMostrarVehiculos($tabla, $item, $valor);

		return $respuesta; 
	}
 	

 	static public function ctrMostrarVehiculosUsuario($item, $valor){

		$tabla = "tb_vehiculos";

		$respuesta = ModeloVehiculos::mdlMostrarVehiculosUsuario($tabla, $item, $valor);

		return $respuesta; 
	}



	static public function ctrMostrarVehiculosTotales($item, $valor){

		$tabla = "tb_vehiculos";  

		$respuesta = ModeloVehiculos::mdlMostrarVehiculosTotales($tabla, $item, $valor);

		return $respuesta;
	}


	static public function ctrMostrarUltimosVehiculos($item, $valor, $campo, $orden){

		$tabla = "tb_vehiculos"; 
  
		$respuesta = ModeloVehiculos::mdlUltimosVehiculos($tabla, $item, $valor, $campo, $orden);
		
		return $respuesta;  

	}



	static public function ctrCrearNuevoVehiculo(){ 

		if(isset($_POST["nuevaSerie"])){

			if(preg_match('/^[^<>\'´´]+$/', $_POST["nuevaMarca"]) &&
			   preg_match('/^[^<>\'´´]+$/', $_POST["nuevoNumECO"]) && 
			   preg_match('/^[^<>\'´´]+$/', $_POST["nuevaTarjetaCirculacion"]) && 
			   preg_match('/^[^<>\'´´]+$/', $_POST["nuevaFacturaOrigen"]) && 
			   preg_match('/^[^<>\'´´]+$/', $_POST["nuevaSerie"]) && 
			   preg_match('/^[^<>\'´´]+$/', $_POST["nuevoModelo"]) && 
			   preg_match('/^[^<>\'´´]+$/', $_POST["nuevasPlacas"]) && 
			   preg_match('/^[^<>\'´´]+$/', $_POST["nuevaTarjeta"]) && 
			   preg_match('/^[^<>\'´´]+$/', $_POST["nuevoNumeroMotor"]) && 
			   preg_match('/^[^<>\'´´]+$/', $_POST["nuevoColor"]) && 
			   preg_match('/^[^<>\'´´]+$/', $_POST["nuevoEstadoFisico"]) && 
			   preg_match('/^[^<>\'´´]+$/', $_POST["nuevoEstadoOperativo"]) && 
			   preg_match('/^[^<>\'´´]+$/', $_POST["nuevoNumeroFactura"]) && 
			   preg_match('/^[^<>\'´´]+$/', $_POST["nuevoProveedor"]) && 
			   preg_match('/^[^<>\'´´]+$/', $_POST["nuevaUbicacion"]) && 
			   preg_match('/^[^<>\'´´]+$/', $_POST["nuevoEstado"])){


			   date_default_timezone_set("America/Mexico_City"); 

			   $urlSvr = ControladorRutas::ctrUrlFrontEnd();
			   $urlBase = explode('/', $urlSvr); 




			   if(isset($_POST["nuevoCorresponsable"])){  //

		     	//TRAEMOS DATOS DEL CORRESPONSABLE
		     	$itemCorresponsable = "idResponsable";	
		     	$valorCorresponsable = $_POST["nuevoCorresponsable"];

		     	$respuestaCorresponsable = ControladorUsuarios::ctrMostrarUsuarios($itemCorresponsable, $valorCorresponsable);

		     	$datoUnidad = $respuestaCorresponsable["unidad_id"];

		     }else{

		     	$datoUnidad = 0;
		     }



				$tabla = "tb_vehiculos";

				/*=======================
				     GENERAR FOLIO
				=========================*/
				$itemVehiculos = null;
				$valorVehiculos = null;

				$respuestaVehiculos = ModeloVehiculos::mdlMostrarVehiculos("tb_vehiculos", $itemVehiculos, $valorVehiculos);

				if(!$respuestaVehiculos){

					$folioVehiculo = "0001";

				}else{

					foreach ($respuestaVehiculos as $key => $value) {

						$idFolio = $value["idVehiculo"];
					}

					$folioVehiculo = sprintf("%04d", $idFolio + 1);

				}
		
				 $datos = array("imagen" => "",
				 				"folio" => $folioVehiculo,
								"eco" => $_POST["nuevoNumECO"],
								"propietario_id" => $_POST["nuevoPropietario"],
								"nombreTarjeta" => $_POST["nuevaTarjetaCirculacion"],
								"facturaOrigen" => $_POST["nuevaFacturaOrigen"],
								"gps" => $_POST["nuevoGps"],
								"duplicadoLlaves" => $_POST["nuevoDuplicado"],
								"clase_id" => $_POST["nuevaClaseVehiculo"],
								"marca_id" => $_POST["nuevaMarca"],
								"subMarca_id" => $_POST["nuevaSubMarca"],
								"transporte_id" => $_POST["nuevoTipoTransporte"],
								"serie" => $_POST["nuevaSerie"],
								"modelo" => $_POST["nuevoModelo"],
								"anio" => $_POST["nuevoAnio"],
								"placas" => $_POST["nuevasPlacas"],
								"numTarjeta" => $_POST["nuevaTarjeta"],
								"combustible_id" => $_POST["nuevoCombustible"],
								"motor" => $_POST["nuevoNumeroMotor"],
								"km" => $_POST["nuevoKilometraje"],
								"hrs" => $_POST["nuevaHRS"],
								"color" => $_POST["nuevoColor"],
								"estadoFisico" => $_POST["nuevoEstadoFisico"],
								"estadoOperativo" => $_POST["nuevoEstadoOperativo"],
								"fechaCompra" => $_POST["nuevaFechaCompra"],
								"noFactura" => $_POST["nuevoNumeroFactura"],
								"seguro_id" => $_POST["nuevoSeguro"],
								"proveedorCompra" => $_POST["nuevoProveedor"],
								"ubicacion" => $_POST["nuevaUbicacion"],
								"estatus" => $_POST["nuevoEstado"],
								"descripcionVehiculo" => $_POST["nuevaDescripcion"],
								"accesoriosVehiculo" => $_POST["nuevoAccesorios"],
								"stock" => 1,
								"responsable_id" => $_POST["nuevoResponsable"],
								"observaciones" => $_POST["nuevaObservaciones"],
								"created_at" => date("Y-m-d H:i:s"),
								"usuario_id" => $_SESSION["idVehicular"],
								"area_id" => $_POST["nuevaUnidaNegocioVehiculo"],
								"usuario_asignado_id" => $_POST["nuevoCorresponsable"], 
							    "unidad_id" => $datoUnidad);

				 // var_dump($datos);

				$respuesta = ModeloVehiculos::mdlIngresarVehiculo($tabla, $datos); 

				//CREAMOS EL DIRECTORIO
				// $directorio = "vistas/img/vehiculos/".$folioVehiculo;
				$ruta = "/".$urlBase[3]."/vistas/img/vehiculos/".$folioVehiculo;

				$directorio = $_SERVER['DOCUMENT_ROOT'].$ruta;

				if(!file_exists($directorio)){

					mkdir($directorio, 0777, true);

				}

				// mkdir($directorio, 0777);

				$ultimoVehiculo = $respuesta;

				$tablaDocusVehiculo = "tb_documentacion_vehiculos";
				$datosDocusVehiculo = array("factura" => "NULL",
											"checkFactura" => 0,
											"poliza" => "NULL", 
											"checkPoliza" => 0,
											"tenencia" => "NULL",
											"checkTenencia" => 0,
											"verificacion" => "NULL",
											"checkVerificacion" => 0,
											"pedimento" => "NULL",
											"checkPedimento" => 0,
											"tarjeta" => "NULL",
											"checkTarjeta" => 0,
											"garantia" => "NULL",
											"checkGarantia" => 0,
											"permiso" => "NULL",
											"checkPermiso" => 0,
											"compraVenta" => "NULL",
											"checkCompraVenta" => 0,
											"ultimoTramite" => "NULL",
											"checkUltimoTramite" => 0,
											"facturaOrigen" => "NULL",
											"checkFacturaOrigen" => 0,
											"vehiculo_id" => $ultimoVehiculo);

				$respuestaDocsVehiculos = ModeloDocumentosVehiculos::mdlRegistrarDocumentosVehiculos($tablaDocusVehiculo, $datosDocusVehiculo);

				if($respuestaDocsVehiculos == "ok"){

					echo '<script>

						Swal.fire({
							position: "center",
							icon: "success",
							title: "El vehiculo ha sido agregado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Aceptar"

							}).then((result)=> {

								if(result.value){

									window.location = "nuevo-vehiculo";
								}

							});

						</script>';

						//AGREGAMOS LOG
						$nombreEquipo = gethostbyaddr($_SERVER['REMOTE_ADDR']);
						$ipCliente = $_SERVER['REMOTE_ADDR'];

						$table = "log";
						$data = array("actividad" => "Registro de nuevo vehículo modelo: ".$_POST["nuevoModelo"].", serie: ".$_POST["nuevaSerie"],
									   "tipo" => "Alta",
									   "usuario_id" => $_SESSION["idVehicular"],
									   "private_id" => $nombreEquipo,
									   "public_id" => $ipCliente,
									   "eject" => date("Y-m-d H:i:s"));

						$respuestaLog = ModeloLogs::mdlAgregarLog($table,$data);
				}

			}else{

				echo '<script>

						Swal.fire({

						position: "center",
						icon: "error",
						title: "¡El vehículo no puede ir vacio o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"


						}).then((result)=> {

							if(result.value){

								window.location = "altas-control-vehicular";
							}

						}); 

					</script>'; 

			}

		}

	}



static public function ctrEditarVehiculo(){

	if(isset($_POST["editarIdVehiculo"])){

		if(preg_match('/^[^<>\'´´]+$/', $_POST["editarMarca"]) &&
		   preg_match('/^[^<>\'´´]+$/', $_POST["editarNumECO"]) && 
		   preg_match('/^[^<>\'´´]+$/', $_POST["editarTarjetaCirculacion"]) && 
		   preg_match('/^[^<>\'´´]+$/', $_POST["editarFacturaOrigen"]) && 
		   preg_match('/^[^<>\'´´]+$/', $_POST["editarSerie"]) && 
		   preg_match('/^[^<>\'´´]+$/', $_POST["editarModelo"]) && 
		   preg_match('/^[^<>\'´´]+$/', $_POST["editarPlacas"]) && 
		   preg_match('/^[^<>\'´´]+$/', $_POST["editarTarjeta"]) && 
		   preg_match('/^[^<>\'´´]+$/', $_POST["editarNumeroMotor"]) && 
		   preg_match('/^[^<>\'´´]+$/', $_POST["editarColor"]) && 
		   preg_match('/^[^<>\'´´]+$/', $_POST["editarEstadoFisico"]) && 
		   preg_match('/^[^<>\'´´]+$/', $_POST["editarEstadoOperativo"]) && 
		   preg_match('/^[^<>\'´´]+$/', $_POST["editarNumeroFactura"]) && 
		   preg_match('/^[^<>\'´´]+$/', $_POST["editarProveedor"]) && 
		   preg_match('/^[^<>\'´´]+$/', $_POST["editarUbicacion"]) && 
		   preg_match('/^[^<>\'´´]+$/', $_POST["editarEstado"]) 
		   // preg_match('/^[^<>\'´´]+$/', $_POST["editarDescripcion"]) && 
		   // preg_match('/^[^<>\'´´]+$/', $_POST["editarObservaciones"]) && 
		  // preg_match('/^[^<>\'´´]+$/', $_POST["editarAccesorios"])
		  ){

			date_default_timezone_set("America/Mexico_City"); 

			// $urlSvr = ControladorRutas::ctrUrlFrontEnd();
			// $urlBase = explode('/', $urlSvr); 

		     if(isset($_POST["editarCorresponsable"])){  //

		     	//TRAEMOS DATOS DEL CORRESPONSABLE
		     	$itemCorresponsable = "idResponsable";	
		     	$valorCorresponsable = $_POST["editarCorresponsable"];

		     	$respuestaCorresponsable = ControladorUsuarios::ctrMostrarUsuarios($itemCorresponsable, $valorCorresponsable);

		     	$datoUnidad = $respuestaCorresponsable["unidad_id"];

		     }else{

		     	$datoUnidad = 0;
		     }


			 $tabla = "tb_vehiculos";
			 $datos = array("eco" => $_POST["editarNumECO"],	
							"propietario_id" => $_POST["editarPropietario"],
							"nombreTarjeta" => $_POST["editarTarjetaCirculacion"],
							"facturaOrigen" => $_POST["editarFacturaOrigen"],
							"gps" => $_POST["editarGps"],
							"duplicadoLlaves" => $_POST["editarDuplicado"],
							"clase_id" => $_POST["editarClaseVehiculo"],
							"marca_id" => $_POST["editarMarca"],
							"subMarca_id" => $_POST["editarSubMarca"],
							"transporte_id" => $_POST["editarTipoTransporte"],
							"serie" => $_POST["editarSerie"],
							"modelo" => $_POST["editarModelo"],
							"anio" => $_POST["editarAnio"],
							"placas" => $_POST["editarPlacas"],
							"numTarjeta" => $_POST["editarTarjeta"],
							"combustible_id" => $_POST["editarCombustible"],
							"motor" => $_POST["editarNumeroMotor"],
							"km" => $_POST["editarKilometraje"],
							"hrs" => $_POST["editarHRS"],
							"color" => $_POST["editarColor"],
							"estadoFisico" => $_POST["editarEstadoFisico"],
							"estadoOperativo" => $_POST["editarEstadoOperativo"],
							"fechaCompra" => $_POST["editarFechaCompra"],
							"noFactura" => $_POST["editarNumeroFactura"],
							"seguro_id" => $_POST["editarSeguro"],
							"proveedorCompra" => $_POST["editarProveedor"],
							"ubicacion" => $_POST["editarUbicacion"],
							"estatus" => $_POST["editarEstado"],
							"descripcionVehiculo" => $_POST["editarDescripcion"],
							"accesoriosVehiculo" => $_POST["editarAccesorios"],
							"responsable_id" => $_POST["editarResponsable"],
							"observaciones" => $_POST["editarObservaciones"],
							"created_at" => date("Y-m-d H:i:s"),
							"usuario_id" => $_SESSION["idVehicular"],
							"area_id" => $_POST["editarUnidaNegocioVehiculo"],
							"usuario_asignado_id" => $_POST["editarCorresponsable"],
							"unidad_id" => $datoUnidad,
							"idVehiculo" => $_POST["editarIdVehiculo"]);

			 // var_dump($datos);
				$respuesta = ModeloVehiculos::mdlEditarVehiculo($tabla, $datos);

				if($respuesta == "ok"){

					// $ruta = "/".$urlBase[3]."/vistas/img/vehiculos/".$_POST["editarNumECO"];

					// $directorio = $_SERVER['DOCUMENT_ROOT'].$ruta;

					// if(!file_exists($directorio)){

					// 	mkdir($directorio, 0777, true);

					// }

					$nombreEquipo = gethostbyaddr($_SERVER['REMOTE_ADDR']);
					$ipCliente = $_SERVER['REMOTE_ADDR'];

					$table = "log";
					$data = array("actividad" => "Se edito el vehiculo serie: ".$_POST["editarSerie"].", modelo: ".$_POST["editarModelo"],
									"tipo" => "Edición",
									"usuario_id" => $_SESSION["idVehicular"],
									"private_id" =>  $nombreEquipo,
									"public_id" => $ipCliente,
									"eject" => date("Y-m-d H:i:s"));

					$respuestaLog = ModeloLogs::mdlAgregarLog($table,$data);


					echo '<script>

							Swal.fire({

								position: "center",
								icon: "success",
								title: "El vehiculo ha sido editado correctamente!",
								showConfirmButton: true,
								confirmButtonText: "Aceptar"
								
								}).then((result)=> {

									if(result.value){

										window.location = "nuevo-vehiculo";
									}

								});

						</script>';
				}

		}else{

			echo '<script>

						Swal.fire({

							position: "center",
							icon: "error",
							title: "¡El vehículo no puede ir vacio o llevar caracteres especiales!",
							showConfirmButton: true,
							confirmButtonText: "Cerrar"

							}).then((result)=> {

								if(result.value){

									window.location = "nuevo-vehiculo";
								}

							}); 

					</script>'; 

		}

	}

}








public function ctrDescargarReportesVehiculos(){

	if(isset($_GET["vehiculosGral"])){

		date_default_timezone_set("America/Mexico_City");

		$name = $_GET["vehiculosGral"].'-'.date('Ymd-His').'.xls';

		$itemVehiculos = null;
		$valorVehiculos = null;

		$respuestaVehiculos = ControladorVehiculos::ctrMostrarVehiculos($itemVehiculos, $valorVehiculos);

		// var_dump($respuestaVehiculos);

		header('Expires: 0');
		header('Cache-control: private');
		header("Content-type: application/vnd.ms-excel");
		header("Cache-Control: cache, must-revalidate");
		header('Content-Description: File Transfer');
		header('Last-Modified: '.date('D, d M Y H:i:s'));
		header("Pragma: public");
		header('Content-Disposition:; filename="'.$name.'"');
		header("Content-Transfer-Encoding: binary");



		echo utf8_decode("<table border='0'>

					<tr>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>#</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Folio</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>#ECO</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Propietario</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Serie</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Modelo</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Año</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Placas</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Numero Tarjeta</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Motor</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Clase</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Marca</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>SubMarca</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Tipo transporte</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Tipo combustible</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Estado fisico</td>

						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Estado operativo</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>GPS</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Kilometraje</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>HRS</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Color</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Duplicado de llaves</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Nombre Tarjeta</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Fecha compra</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Seguro</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Número Factura</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Proveedor Compra</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Ubicación</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Estatus</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Descripción Vehiculo</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Accesorio Vehiculo</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Stock</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Responsable</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Observaciones</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Area Asignada</td>







					</tr>");

					foreach ($respuestaVehiculos as $key => $value) {

						$itemProp = "idPropietario";
						$valorProp = $value["propietario_id"];
						$respuestaPropietario = ControladorPropietarios::ctrMostrarPropietarios($itemProp, $valorProp);

                        $itemClase = "idClase";
                        $valorClase = $value["clase_id"];
                        $respuestaClase = ControladorClases::ctrMostrarClases($itemClase, $valorClase);

                        $itemMarca = "idMarca";
                        $valorMarca = $value["marca_id"];
                        $respuestaMarca = ControladorMarcas::ctrMostrarMarcas($itemMarca, $valorMarca);

                        $itemSubMarca = "idSubmarca";
                        $valorSubMarca = $value["subMarca_id"];
                        $respuestaSubMarca = ControladorSubMarcas::ctrMostrarSubMarcas($itemSubMarca, $valorSubMarca);

                        $itemTransporte = "idTransporte";
                        $valorTransporte = $value["transporte_id"];
                        $respuestaTransporte = ControladorTiposTransportes::ctrMostrarTransportes($itemTransporte, $valorTransporte);

                        $itemCombustible = "idCombustible";
                        $valorCombustible = $value["combustible_id"];
                        $respuestaCombustible = ControladorCombustibles::ctrMostrarCombustibles($itemCombustible, $valorCombustible);

                        $itemSeguro = "idSeguro";
                        $valorSeguro = $value["seguro_id"];
                        $respuestaSeguro = ControladorSeguros::ctrMostrarSeguros($itemSeguro, $valorSeguro);

                        if(is_array($respuestaSeguro)){

                        	$seguro = $respuestaSeguro["seguro"];

                        }else{

                        	$seguro = "SIN SEGURO";

                        }

                        $itemResponsable = "idResponsable";
                        $valorResponsable = $value["responsable_id"];
                        $respuestaResponsable = ControladorUsuarios::ctrMostrarUsuarios($itemResponsable, $valorResponsable);

                        $itemAreaVehiculo = "idAreaVehiculo";
                        $valorAreaVehiculo = $value["area_id"];
                        $respuestaAreas = ControladorAreasNegocios::ctrMostrarAreasNegocios($itemAreaVehiculo, $valorAreaVehiculo);

                        if($respuestaAreas){

                        	$asignacion = $respuestaAreas["area"];

                        }else{

                        	$asignacion = "SIN AREA";
                        }

                        if($value["gps"] == "0"){

                        	$gps = "No";

                        }else if($value["gps" == "1"]){

                        	$gps = "Si";
                        }

                         if($value["duplicadoLlaves"] == "0"){

                        	$duplicado = "No";

                        }else if($value["duplicadoLlaves" == "1"]){

                        	$duplicado = "Si";
                        }

						echo utf8_decode("<tr>
										  <td style='border:1px solid #eee;'>".($key+1)."</td>
										  <td style='border:1px solid #eee;'>".$value["folio"]."</td>
										  <td style='border:1px solid #eee;'>".$value["eco"]."</td>
										  <td style='border:1px solid #eee;'>".$respuestaPropietario["propietario"]."</td>
										  <td style='border:1px solid #eee;'>".$value["serie"]."</td>
										  <td style='border:1px solid #eee;'>".$value["modelo"]."</td>
										  <td style='border:1px solid #eee;'>".$value["anio"]."</td>
										  <td style='border:1px solid #eee;'>".$value["placas"]."</td>
										  <td style='border:1px solid #eee;'>".$value["numTarjeta"]."</td>
										  <td style='border:1px solid #eee;'>".$value["motor"]."</td>
										  <td style='border:1px solid #eee;'>".$respuestaClase["clase"]."</td>
										  <td style='border:1px solid #eee;'>".$respuestaMarca["marca"]."</td>
										  <td style='border:1px solid #eee;'>".$respuestaSubMarca["submarca"]."</td>
										  <td style='border:1px solid #eee;'>".$respuestaTransporte["transporte"]."</td>
										  <td style='border:1px solid #eee;'>".$respuestaCombustible["combustible"]."</td>
										  <td style='border:1px solid #eee;'>".$value["estadoFisico"]."</td>
										  <td style='border:1px solid #eee;'>".$value["estadoOperativo"]."</td>
										  <td style='border:1px solid #eee;'>".$gps."</td>
										  <td style='border:1px solid #eee;'>".$value["km"]."</td>
										  <td style='border:1px solid #eee;'>".$value["hrs"]."</td>
										  <td style='border:1px solid #eee;'>".$value["color"]."</td>
										  <td style='border:1px solid #eee;'>".$duplicado."</td>
										  <td style='border:1px solid #eee;'>".$value["nombreTarjeta"]."</td>
										  <td style='border:1px solid #eee;'>".$value["fechaCompra"]."</td>
										  <td style='border:1px solid #eee;'>".$seguro."</td>
										  <td style='border:1px solid #eee;'>".$value["noFactura"]."</td>
										  <td style='border:1px solid #eee;'>".$value["proveedorCompra"]."</td>
										  <td style='border:1px solid #eee;'>".$value["ubicacion"]."</td>
										  <td style='border:1px solid #eee;'>".$value["estatus"]."</td>
										  <td style='border:1px solid #eee;'>".$value["descripcionVehiculo"]."</td>
										  <td style='border:1px solid #eee;'>".$value["accesoriosVehiculo"]."</td>
										  <td style='border:1px solid #eee;'>".$value["stock"]."</td>
										  <td style='border:1px solid #eee;'>".$respuestaResponsable["responsable"]."</td>
										  <td style='border:1px solid #eee;'>".$value["observaciones"]."</td>
										  <td style='border:1px solid #eee;'>".$asignacion."</td></tr>");

						}
			
					echo "</table>";

	    }

    }




	/*================================================================================ 
	      EJECUCIÓN DE LLAMADO REPORTE POR EMPRESAS
	==================================================================================*/
public function ctrDescargarReportesVehiculosUnidad(){


	if(isset($_GET["vehiculosUnidad"])){

		date_default_timezone_set("America/Mexico_City");

		$name = $_GET["vehiculosUnidad"].'-'.date('Ymd-His').'.xls';

		$itemVehiculos = "area_id";
		$valorVehiculos = $_SESSION["unidadVehicular"]; 

		$respuestaVehiculos = ControladorVehiculos::ctrMostrarVehiculosTotales($itemVehiculos, $valorVehiculos);

		header('Expires: 0');
		header('Cache-control: private');
		header("Content-type: application/vnd.ms-excel");
		header("Cache-Control: cache, must-revalidate");
		header('Content-Description: File Transfer');
		header('Last-Modified: '.date('D, d M Y H:i:s'));
		header("Pragma: public");
		header('Content-Disposition:; filename="'.$name.'"');
		header("Content-Transfer-Encoding: binary");



		echo utf8_decode("<table border='0'>

					<tr>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>#</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Folio</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>#ECO</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Propietario</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Serie</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Modelo</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Año</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Placas</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Numero Tarjeta</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Motor</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Clase</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Marca</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>SubMarca</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Tipo transporte</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Tipo combustible</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Estado fisico</td>

						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Estado operativo</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>GPS</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Kilometraje</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>HRS</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Color</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Duplicado de llaves</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Nombre Tarjeta</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Fecha compra</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Seguro</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Número Factura</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Proveedor Compra</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Ubicación</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Estatus</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Descripción Vehiculo</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Accesorio Vehiculo</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Stock</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Responsable</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Observaciones</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Area Asignada</td>
						<td style='font-weight:bold;border:1px solid #eee;background:#efefef;'>Corresponsable</td>








					</tr>");

					foreach ($respuestaVehiculos as $key => $value) {

						$itemProp = "idPropietario";
						$valorProp = $value["propietario_id"];
						$respuestaPropietario = ControladorPropietarios::ctrMostrarPropietarios($itemProp, $valorProp);

                        $itemClase = "idClase";
                        $valorClase = $value["clase_id"];
                        $respuestaClase = ControladorClases::ctrMostrarClases($itemClase, $valorClase);

                        $itemMarca = "idMarca";
                        $valorMarca = $value["marca_id"];
                        $respuestaMarca = ControladorMarcas::ctrMostrarMarcas($itemMarca, $valorMarca);

                        $itemSubMarca = "idSubmarca";
                        $valorSubMarca = $value["subMarca_id"];
                        $respuestaSubMarca = ControladorSubMarcas::ctrMostrarSubMarcas($itemSubMarca, $valorSubMarca);

                        $itemTransporte = "idTransporte";
                        $valorTransporte = $value["transporte_id"];
                        $respuestaTransporte = ControladorTiposTransportes::ctrMostrarTransportes($itemTransporte, $valorTransporte);

                        $itemCombustible = "idCombustible";
                        $valorCombustible = $value["combustible_id"];
                        $respuestaCombustible = ControladorCombustibles::ctrMostrarCombustibles($itemCombustible, $valorCombustible);

                        $itemSeguro = "idSeguro";
                        $valorSeguro = $value["seguro_id"];
                        $respuestaSeguro = ControladorSeguros::ctrMostrarSeguros($itemSeguro, $valorSeguro);

                        $itemResponsable = "idResponsable";
                        $valorResponsable = $value["responsable_id"];
                        $respuestaResponsable = ControladorUsuarios::ctrMostrarUsuarios($itemResponsable, $valorResponsable);

                        $itemAreaVehiculo = "idAreaVehiculo";
                        $valorAreaVehiculo = $value["area_id"];
                        $respuestaAreas = ControladorAreasNegocios::ctrMostrarAreasNegocios($itemAreaVehiculo, $valorAreaVehiculo);

                        $itemCorresponsable = "idResponsable";
                        $valorCorresponsable = $value["usuario_asignado_id"];
                        $respuestaCorresponsable = ControladorUsuarios::ctrMostrarUsuarios($itemCorresponsable, $valorCorresponsable);

                        if($respuestaCorresponsable){

                        	$corresponsable = $respuestaCorresponsable["responsable"];

                        }else{

                        	$corresponsable = "N/A";
                        }




                        if($respuestaAreas){

                        	$asignacion = $respuestaAreas["area"];

                        }else{

                        	$asignacion = "SIN AREA";
                        }

                        if($value["gps"] == "0"){

                        	$gps = "No";

                        }else if($value["gps" == "1"]){

                        	$gps = "Si";
                        }

                         if($value["duplicadoLlaves"] == "0"){

                        	$duplicado = "No";

                        }else if($value["duplicadoLlaves" == "1"]){

                        	$duplicado = "Si";
                        }

						echo utf8_decode("<tr>
										  <td style='border:1px solid #eee;'>".($key+1)."</td>
										  <td style='border:1px solid #eee;'>".$value["folio"]."</td>
										  <td style='border:1px solid #eee;'>".$value["eco"]."</td>
										  <td style='border:1px solid #eee;'>".$respuestaPropietario["propietario"]."</td>
										  <td style='border:1px solid #eee;'>".$value["serie"]."</td>
										  <td style='border:1px solid #eee;'>".$value["modelo"]."</td>
										  <td style='border:1px solid #eee;'>".$value["anio"]."</td>
										  <td style='border:1px solid #eee;'>".$value["placas"]."</td>
										  <td style='border:1px solid #eee;'>".$value["numTarjeta"]."</td>
										  <td style='border:1px solid #eee;'>".$value["motor"]."</td>
										  <td style='border:1px solid #eee;'>".$respuestaClase["clase"]."</td>
										  <td style='border:1px solid #eee;'>".$respuestaMarca["marca"]."</td>
										  <td style='border:1px solid #eee;'>".$respuestaSubMarca["submarca"]."</td>
										  <td style='border:1px solid #eee;'>".$respuestaTransporte["transporte"]."</td>
										  <td style='border:1px solid #eee;'>".$respuestaCombustible["combustible"]."</td>
										  <td style='border:1px solid #eee;'>".$value["estadoFisico"]."</td>
										  <td style='border:1px solid #eee;'>".$value["estadoOperativo"]."</td>
										  <td style='border:1px solid #eee;'>".$gps."</td>
										  <td style='border:1px solid #eee;'>".$value["km"]."</td>
										  <td style='border:1px solid #eee;'>".$value["hrs"]."</td>
										  <td style='border:1px solid #eee;'>".$value["color"]."</td>
										  <td style='border:1px solid #eee;'>".$duplicado."</td>
										  <td style='border:1px solid #eee;'>".$value["nombreTarjeta"]."</td>
										  <td style='border:1px solid #eee;'>".$value["fechaCompra"]."</td>
										  <td style='border:1px solid #eee;'>".$respuestaSeguro["seguro"]."</td>
										  <td style='border:1px solid #eee;'>".$value["noFactura"]."</td>
										  <td style='border:1px solid #eee;'>".$value["proveedorCompra"]."</td>
										  <td style='border:1px solid #eee;'>".$value["ubicacion"]."</td>
										  <td style='border:1px solid #eee;'>".$value["estatus"]."</td>
										  <td style='border:1px solid #eee;'>".$value["descripcionVehiculo"]."</td>
										  <td style='border:1px solid #eee;'>".$value["accesoriosVehiculo"]."</td>
										  <td style='border:1px solid #eee;'>".$value["stock"]."</td>
										  <td style='border:1px solid #eee;'>".$respuestaResponsable["responsable"]."</td>
										  <td style='border:1px solid #eee;'>".$value["observaciones"]."</td>
										  <td style='border:1px solid #eee;'>".$asignacion."</td>
										  <td style='border:1px solid #eee;'>".$corresponsable."</td></tr>");

						}
			
					echo "</table>";

	    }

    }













 



	/*================================================================================ 
	      EJECUCIÓN DE LLAMADO REPORTE GLOBAL DE SEGUROS, TENENCIAS, VERIFICACIONES
	==================================================================================*/

	static public function ctrConsultaGlobalVehiculos($itemVehiculo, $valorVehiculo){

		$respuesta = ModeloVehiculos::mdlConsultaGlobaVehiculo($itemVehiculo, $valorVehiculo);

		return $respuesta;
	}

   static public function ctrConsultaGlobal(){

		$respuesta = ModeloVehiculos::mdlConsultaGlobal();

		return $respuesta; 
	}
 



	static public function ctrNuevaSolicitudVehiculo(){
		
		$url = $_SERVER['REQUEST_URI'];

		if(isset($_POST["nuevaSolicitudVehiculo"])){

			if(preg_match('/^[^<>\'´´]+$/', $_POST["nuevaSolicitudVehiculo"]) &&
			   preg_match('/^[^<>\'´´]+$/', $_POST["nuevaDescripcionVehiculo"])){

			    date_default_timezone_set('America/Mexico_City');

				$urlSvr = ControladorRutas::ctrUrlFrontEnd();
				$urlBase = explode('/', $urlSvr); 

				

				$ruta = "";
				$ruta2 = "";

				//PROCESAMOS EL INPUT FILE
				if(!empty($_FILES["nuevoFileSolicitud"]["tmp_name"])){

					$adjuntarFile = $_FILES["nuevoFileSolicitud"];

					$tipoMime = mime_content_type($adjuntarFile['tmp_name']);

					$datoAdjunto = null;

					if($tipoMime == "application/pdf"){

						$renombre = "Solicitud-".date("ymdHis").".pdf";

					} else if ($tipoMime == "image/png") {

						$renombre = "Solicitud-" . date("ymdHis") . ".png";

					} else if ($tipoMime == "image/jpeg") {

						$renombre = "Solicitud-" . date("ymdHis") . ".jpg";

					}

					 // DEFINIMOS LAS RUTAS
					$ruta = "/" . $urlBase[3] . "/vistas/img/solicVehiculos/";
					$ruta2 = "vistas/img/solicVehiculos/" . $renombre;
					$fichero = $_SERVER['DOCUMENT_ROOT'] . $ruta;

    				// CREAR LE DIRECTORIO SI NO EXISTE
					if (!file_exists($fichero)) {

						mkdir($fichero, 0777, true);
					}

					// MOVER EL ARCHVIO A LA RUTA DEFINIDA 
					if (move_uploaded_file($adjuntarFile["tmp_name"], $fichero . $renombre)) {
						
        			// PASAMOS LA RUTA COMPLETA A ENVIAR EMAIL
						$archivoAdjunto = ['tmp_name' => $fichero . $renombre,
										   'name' => $renombre];
					}

				}

			   	$tabla = "tb_vehiculos_solicitudes";
			   	$datos = array("solicitante_id" => $_POST["nuevoSolitanteVehiculo"],
			   					"titulo" => $_POST["nuevaSolicitudVehiculo"],
			   					"descripcion" => $_POST["nuevaDescripcionVehiculo"],
			   					"estado" => 0,
			   					"created_at" => date("Y-m-d H:i:s"),
			   					"observaciones" => "",
			   					"urlFile" => $ruta2);

			  	$respuesta = ModeloVehiculos::mdlAltaSolicitudVehiculo($tabla, $datos);

			   	if($respuesta == "ok"){

			   		//LlAMADO DE CORREO DE CONTROL VEHICULAR
			   		$itemControlVehicular = "perfil_id";
			   		$valorControlVehicular = 5; // EL 5 CORRESPONDE A CONTROL VEHICULAR
			   		$itemEstadoVehicular = "estado";
			   		$valorEstadoVehicular = 1;

			   		$respuestaEmailVehicular = ControladorUsuarios::ctrMostrarUsuariosActivos($itemControlVehicular, $valorControlVehicular, $itemEstadoVehicular, $valorEstadoVehicular);

			   		$destinatarios = array();

			   		foreach ($respuestaEmailVehicular as $key => $value) {

			   			array_push($destinatarios, $value["email"]);
			   		}

				  // $destinatarios = array('emauro@frasangroup.com','developer.c0d3@gmail.com');
				
					//LLAMADO DE SOLICITANTE
				  $itemSolicitante = "idResponsable";
				  $valorSolicitante = $_POST["nuevoSolitanteVehiculo"];

				  $respuestaSolicitante = ControladorUsuarios::ctrMostrarUsuarios($itemSolicitante, $valorSolicitante);

				  $asunto = 'NUEVA SOLICITUD DE CONTROL VEHICULAR';
				  $fromEmail = "notificaciones@frasangroup.com";
				  $fromName = "SISTEMA DE NOTIFICACIONES CONTROL VEHICULAR";

				  $mensajeHTML = '<div style="width: 100%; background: #eee; position: relative; font-family: sans-serif;padding: 40px">

										<center>

											<img src="https://www.hubfrasangroup.com/control-vehicular/vistas/img/plantilla/frasan-logo-correos.png" alt="" style="padding: 20px; width: 15%;">

										</center>

										<div style="position: relative;margin: auto;width: 600px; background: white; padding: 20px">

											<center>

												<img src="https://www.hubfrasangroup.com/control-vehicular/vistas/img/plantilla/email.png" style="padding: 20px; width: 15%" >

													<h3 style="font-weight: 100; color: #444; font-family: Century-Gothic,Arial";>NUEVA SOLICITUD A CONTROL VEHICULAR </h3>

													<h3 style="font-weight: 100; color: #444; font-family: Century-Gothic,Arial;text-align: center";>Descripción de la solicitud:<br></h3>

													<hr style="border: 1px solid #ccc; width: 90%">

													<h4 style="font-weight: 100; color: #444; font-family: Century-Gothic,Arial";> El usuario: <b>'.$respuestaSolicitante["responsable"].'</b> te ha solicitado: <b>'.$_POST["nuevaSolicitudVehiculo"].'</b>, '.$_POST["nuevaDescripcionVehiculo"].'</h4>

													<hr style="border: 1px solid #ccc; width: 90%">

													<h4 style="font-size:10px;font-weight: bold; color:#444;padding: 0 20px;font-family: Century-Gothic,Arial;text-transform:uppercase;"> Departamento de Sistemas y Desarrollo</h4>

											</center>

										</div>

									</div>';

					

				  ControladorNotificaciones::enviarEmail($destinatarios, $asunto, $mensajeHTML, $fromEmail, $fromName, $archivoAdjunto);

			   		echo '<script>

						Swal.fire({
							position: "center",
							icon: "success",
							title: "La solicitud ha sido agregado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Aceptar"

							}).then((result)=> {

								if(result.value){

									window.location = "'.$url.'";
								}

							});

						</script>';
			   	}

			}else{


				echo '<script>

						Swal.fire({

						position: "center",
						icon: "error",
						title: "¡El vehículo no puede ir vacio o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"


						}).then((result)=> {

							if(result.value){

								window.location = "'.$url.'";
							}

						}); 

					</script>'; 



			}

	   }

		
	}



/*==================================================================================
  ==================================================================================
  ==================================================================================

	      CONTEXTO DE EJECUCION DE TICKETS A SOLICITUDES DE VEHICULOS

  ==================================================================================
  ==================================================================================
===================================================================================*/

	static public function ctrMostrarSolicitudesVehiculos($item, $valor){

		$tabla = "tb_vehiculos_solicitudes"; 
 
		$respuesta = ModeloVehiculos::mdlMostrarSolicitudesVehiculos($tabla, $item, $valor);

		return $respuesta;
	}

	static public function ctrMostrarSolicitudesVehiculosEstado($item, $valor){

		$tabla = "tb_vehiculos_solicitudes";
 
		$respuesta = ModeloVehiculos::mdlMostrarSolicitudesVehiculosEstado($tabla, $item, $valor);

		return $respuesta;
	}


	static public function ctrActualizarSolicitud($item1, $valor1, $item2, $valor2){ 

		$tabla = "tb_vehiculos_solicitudes";
		
		$respuesta = ModeloVehiculos::mdlActualizarSolicitudVehiculo($tabla, $item1, $valor1, $item2, $valor2);

		return $respuesta;
	}
  
	static public function ctrMostrarSolicitudesVehiculosPersonalizado($item, $valor){

		$tabla = "tb_vehiculos_solicitudes";
 
		$respuesta = ModeloVehiculos::mdlMostrarSolicitudesVehiculosPersonalizado($tabla, $item, $valor);

		return $respuesta;
	}









	static public function ctrActualizarSolicitudVehiculo(){

		$url = $_SERVER['REQUEST_URI'];

		if(isset($_POST["idSolicitudVehiculo"])){

			if(preg_match('/^[^<>\'´´]+$/', $_POST["nuevaObservacionesSolicitud"])){


				$tabla = "tb_vehiculos_solicitudes";
				$item1 = "observaciones";
				$valor1 = $_POST["nuevaObservacionesSolicitud"];
				$item2 = "idSolicitud";
				$valor2 = $_POST["idSolicitudVehiculo"];
		
				$respuesta = ModeloVehiculos::mdlActualizarSolicitudVehiculo($tabla, $item1, $valor1, $item2, $valor2);

				if($respuesta == "ok"){

			   		echo '<script>

						Swal.fire({
							position: "center",
							icon: "success",
							title: "La solicitud ha sido actualizado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Aceptar"

							}).then((result)=> {

								if(result.value){

									window.location = "'.$url.'";
								}

							});

						</script>';
			   	}




			}else{


				echo '<script>

						Swal.fire({

						position: "center",
						icon: "error",
						title: "¡El vehículo no puede ir vacio o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"


						}).then((result)=> {

							if(result.value){

								window.location = "'.$url.'";
							}

						}); 

					</script>'; 



			}

		}

	}



static public function ctrBorrarVehiculo(){

	if(isset($_GET["vd"])){

		$tabla = "tb_vehiculos";
		$datos = $_GET["vd"];

		$itemVehiculo = "idVehiculo";
		$valorVehiculo = $_GET["vd"];

		$vehiculo = ControladorVehiculos::ctrMostrarVehiculos($itemVehiculo,$valorVehiculo);
		$folio = $vehiculo["folio"];

		//EJECUCION DE ELIMINACION VEHICULOS
		$respuesta = ModeloVehiculos::mdlBorrarVehiculo($tabla, $datos);

		$tabla2 = "tb_documentacion_vehiculos"; 
		ModeloDocumentosVehiculos::mdlBorrarDocumentoVehiculo($tabla2, $valorVehiculo);

		if($respuesta == "ok"){

			//PROCEDEMOS A ELIMINAR ARCHIVOS Y CARPETAS
			$urlSvr = ControladorRutas::ctrUrlFrontEnd();
			$urlBase = explode('/', $urlSvr); 

			$ruta = "/".$urlBase[3]."/vistas/img/vehiculos/".$folio;

			$directorio = $_SERVER['DOCUMENT_ROOT'].$ruta;

			if(file_exists($directorio)){

				self::eliminarDirectorioCompleto($directorio);

				if (rmdir($directorio)) {

				// mkdir($directorio, 0777, true);
				 // rmdir($directorio);

	

			$nombreEquipo = gethostbyaddr($_SERVER['REMOTE_ADDR']);
			$ipCliente = $_SERVER['REMOTE_ADDR'];

			$table = "log";
			$data = array("actividad" => "Se eliminó el vehiculo ".$folio,
							"tipo" => "Eliminación",
							"usuario_id" => $_SESSION["idVehicular"],
							"private_id" => $nombreEquipo,
							"public_id" => $ipCliente,
							"eject" => date("Y-m-d H:i:s"));

			$respuestaLog = ModeloLogs::mdlAgregarLog($table,$data);

			echo '<script> 
						Swal.fire({
						  position: "center",
						  icon: "success",
						  title: "¡ El vehiculo ha sido borrado correctamente !",
						  showConfirmButton: true,
						  confirmButtonText: "Aceptar"
				
						}).then((result)=> {

				 			if(result.value){
				 				
				 				window.location = "nuevo-vehiculo";
				 			}

				 		});


				</script>';

			}else{


					echo "No se pudo eliminar el directorio principal.";
			}

		}


		}
	}
}




	static private function eliminarDirectorioCompleto($directorio) {

	    $archivos = array_diff(scandir($directorio), ['.', '..']);

	    foreach ($archivos as $archivo) {

	        $rutaCompleta = $directorio . DIRECTORY_SEPARATOR . $archivo;

	        if (is_dir($rutaCompleta)) {

	            self::eliminarDirectorioCompleto($rutaCompleta); // Llamada recursiva

	        } else {

	            unlink($rutaCompleta); // Eliminar archivo
	        }

	    }

	}





	static public function ctrActualizarFoto(){

		if(isset($_POST["editarFotoId"])){

			// $url = ControladorRutas::ctrUrlFrontEnd();
			// $urlBase = explode('/', $url);

			$url = $_SERVER['REQUEST_URI'];


			if(!empty($_FILES["editarFotoVehiculo"])){

				$adjuntarFile = $_FILES["editarFotoVehiculo"];
				$tipoMine = mime_content_type($adjuntarFile["tmp_name"]);
				// $datoAdjunto = null;

				if($tipoMine == "image/jpeg"){ 

					$renombre = $_POST["folioVehiculo"]."-".$_POST["numEco"]."-".date('ymdHis').".jpg";
				}

				if($tipoMine == "image/png"){

					$renombre = $_POST["folioVehiculo"]."-".$_POST["numEco"]."-".date('ymdHis').".png";
				}

				$ruta = "vistas/img/vehiculos/".$_POST["folioVehiculo"]."/".$renombre;
				$fichero = $_SERVER["DOCUMENT_ROOT"]."/vistas/img/vehiculos/".$_POST["folioVehiculo"];


				if(!file_exists($fichero)){

					mkdir($fichero, 0777, true);

				}

				if(move_uploaded_file($adjuntarFile["tmp_name"], $fichero."/".$renombre)){

					chmod($fichero.$renombre, 0777);

					$archivoAdjunto = ['tmp_name' => $fichero.$renombre, 'name' => $renombre ];
				}

			}


			$tabla = "tb_vehiculos";
			$item1 = "imagen";
			$valor1 = $ruta;
			$item2 = "idVehiculo";
			$valor2 = $_POST["editarFotoId"];
			// $datos = array("imagen" => $ruta,
			// 				"idVehiculo" => $_POST["editarFotoId"]);
			$respuesta = ModeloVehiculos::mdlActualizarSolicitudVehiculo($tabla, $item1, $valor1, $item2, $valor2);

			if($respuesta == "ok"){

				$nombreEquipo = gethostbyaddr($_SERVER['REMOTE_ADDR']);
				$ipCliente = $_SERVER['REMOTE_ADDR'];

				$table = "log";
				$data = array("actividad" => "Se edito el vehiculo con folio".$_POST["folioVehiculo"],
								"tipo" => "Edición",
								"usuario_id" => $_SESSION["idVehicular"],
								"private_id" => $nombreEquipo,
								"public_id" => $ipCliente,
								"eject" => date("Y-m-d H:i:s"));

				$respuestaLog = ModeloLogs::mdlAgregarLog($table,$data);

				echo '<script>

						Swal.fire({
							position: "center",
							icon: "success",
							title: "Se ha actualizado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Aceptar"

							}).then((result)=> {

							if(result.value){

								window.location = "'.$url.'";
							}

							});

						</script>';


			}else{


				echo '<script>

						Swal.fire({
							position: "center",
							icon: "ERROR",
							title: "Ocurrio un error al intentar actualizar",
							showConfirmButton: true,
							confirmButtonText: "Aceptar"

							}).then((result)=> {

							if(result.value){

								window.location = "'.$url.'";
							}

							});

						</script>';
			}

		}

	}





}




?>
