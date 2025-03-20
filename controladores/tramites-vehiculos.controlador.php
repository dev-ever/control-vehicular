<?php 

	
class ControladorTramitesVehiculares{
 

	/*=============================================
	MOSTRAR 
	=============================================*/

	static public function ctrMostrarTramitesVehiculares($item, $valor){

		$tabla = "tb_vehiculos_tramites";

		$respuesta = ModeloTramitesVehiculares::mdlMostrarTramitesVehiculares($tabla, $item, $valor);

		return $respuesta;
	}


	static public function ctrCrearNuevoTramiteVehiculo(){

		if(isset($_POST["nuevoVehiculoTramite"])){

			if(preg_match('/^[^<>\'´´]+$/', $_POST["nuevaObservacionesTramite"])){


				date_default_timezone_set("America/Mexico_City"); 

				$tabla = "tb_vehiculos_tramites";

				$datos = array("vehiculo_id" => $_POST["nuevoVehiculoTramite"],
								"tramite_id" => $_POST["nuevoTramiteVeh"],
								"estado" => $_POST["nuevoEstatusTramite"],
								"fecha" => $_POST["nuevaFechaTramite"],
								"observaciones" => $_POST["nuevaObservacionesTramite"],
							    "created_at" => date("Y-m-d H:i:s"),
							    "usuario_id" => $_SESSION["idVehicular"]);


				$respuesta = ModeloTramitesVehiculares::mdlIngresarTramiteVehicular($tabla, $datos);


			    $modeloVehiculos = ControladorVehiculos::ctrMostrarVehiculos("idVehiculo", $_POST["nuevoVehiculoTramite"]);
				$modeloVehiculo = "folio: ".$modeloVehiculos["folio"]." - ".$modeloVehiculos["modelo"].", serie: ".$modeloVehiculos["serie"];

				if($respuesta == "ok"){

					echo '<script>

						Swal.fire({
							position: "center",
							icon: "success",
							title: "El trámite ha sido agregado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Aceptar"

							}).then((result)=> {

								if(result.value){

									window.location = "control-tramites";
								}

							});

						</script>';


						//AGREGAMOS LOG
						$nombreEquipo = gethostbyaddr($_SERVER['REMOTE_ADDR']);
						$ipCliente = $_SERVER['REMOTE_ADDR'];

						$table = "log";
						$data = array("actividad"=>"Registro de nuevo trámite para el vehículo ".$modeloVehiculo,
													"tipo"=>"Alta",
													"usuario_id"=>$_SESSION["idVehicular"],
													"private_id"=> $nombreEquipo,
													"public_id"=>$ipCliente,
													"eject"=>date("Y-m-d H:i:s"));

						$respuestaLog = ModeloLogs::mdlAgregarLog($table,$data);
				}



			}else{


					echo '<script>

						Swal.fire({

						position: "center",
						icon: "error",
						title: "¡El trámite no puede ir vacio o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"


						}).then((result)=> {

							if(result.value){

								window.location = "control-tramites";
							}

						}); 

					</script>'; 


			}

		}

	}







	static public function ctrActualizarTramiteVehiculo(){
 
		if(isset($_POST["idTramiteVehiculo"])){

			if(preg_match('/^[^<>\'´´]+$/', $_POST["editarObservacionesTramite"])){

				date_default_timezone_set("America/Mexico_City"); 

				$tabla = "tb_vehiculos_tramites";

				$datos = array("vehiculo_id" => $_POST["editarVehiculoTramite"],
								"tramite_id" => $_POST["editarTramiteVeh"],
								"estado" => $_POST["editarEstatusTramite"],
								"fecha" => $_POST["editarFechaTramite"],
								"observaciones" => $_POST["editarObservacionesTramite"],
							    "created_at" => date("Y-m-d H:i:s"),
							    "usuario_id" => $_SESSION["idVehicular"],
								"idTramiteVehiculo" => $_POST["idTramiteVehiculo"]);


				$respuesta = ModeloTramitesVehiculares::mdlEditarTramiteVehicular($tabla, $datos);

				$modeloVehiculos = ControladorVehiculos::ctrMostrarVehiculos("idVehiculo", $_POST["editarVehiculoTramite"]);
				$modeloVehiculo =  "folio: ".$modeloVehiculos["folio"]." - ".$modeloVehiculos["modelo"].", serie: ".$modeloVehiculos["serie"];

				if($respuesta == "ok"){

					echo '<script>

						Swal.fire({
							position: "center",
							icon: "success",
							title: "El trámite al vehículo ha sido editado correctamente",
							allowOutsideClick: false,
							showConfirmButton: true,
							confirmButtonText: "Aceptar"

							}).then((result)=> {

								if(result.value){

									window.location = "control-tramites";
								}

							});

						</script>';


						//AGREGAMOS LOG
						$nombreEquipo = gethostbyaddr($_SERVER['REMOTE_ADDR']);
						$ipCliente = $_SERVER['REMOTE_ADDR'];

						$table = "log";
						$data = array("actividad"=>"Edición del trámite al vehiculo ".$modeloVehiculo,
													"tipo"=>"Edición",
													"usuario_id"=>$_SESSION["idVehicular"],
													"private_id"=> $nombreEquipo,
													"public_id"=>$ipCliente,
													"eject"=>date("Y-m-d H:i:s"));

						$respuestaLog = ModeloLogs::mdlAgregarLog($table,$data);
				}

			
			}else{

				echo '<script>

						Swal.fire({

						position: "center",
						icon: "error",
						title: "¡El trámite del vehículo no puede ir vacio o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"


						}).then((result)=> {

							if(result.value){

								window.location = "control-tramites";
							}

						}); 

					</script>'; 


			}

		}

	}
 



static public function ctrBorrarTramiteVehiculo(){

	if(isset($_GET["tratVeh"])){

		date_default_timezone_set("America/Mexico_City"); 

		$tabla = "tb_vehiculos_tramites";
		$datos = $_GET["tratVeh"];

		$itemResp = "idTramiteVehiculo";
		$valorResp = $_GET["tratVeh"];



		$respuestaTratVehiculo = ControladorTramitesVehiculares::ctrMostrarTramitesVehiculares($itemResp, $valorResp);
		$idVehiculo = $respuestaTratVehiculo["vehiculo_id"];

		$vehiculo = ControladorVehiculos::ctrMostrarVehiculos("idVehiculo", $idVehiculo);
		$folio = $vehiculo["folio"];
		$nombreVehiculo = $vehiculo["modelo"];
		$serieVehiculo = $vehiculo["serie"];

		$respuesta = ModeloTramitesVehiculares::mdlBorrarTramiteVehiculo($tabla, $datos);

		if($respuesta == "ok"){

			$nombreEquipo = gethostbyaddr($_SERVER['REMOTE_ADDR']);
			$ipCliente = $_SERVER['REMOTE_ADDR'];

			$table = "log";
			$data = array("actividad"=>"Se eliminó el trámite del vehiculo, folio ".$folio.", ".$nombreVehiculo.", serie: ".$serieVehiculo,
							"tipo"=>"Eliminación",
							"usuario_id"=>$_SESSION["idVehicular"],
							"private_id"=> $nombreEquipo,
							"public_id"=>$ipCliente,
							"eject"=>date("Y-m-d H:i:s"));

			$respuestaLog = ModeloLogs::mdlAgregarLog($table,$data);


			echo '<script>
						Swal.fire({
						  position: "center",
						  icon: "success",
						  title: "El trámite ha sido borrado correctamente!",
						  allowOutsideClick: false,
						  showConfirmButton: true,
						  confirmButtonText: "Aceptar"
				
						}).then((result)=> {

				 			if(result.value){

				 				window.location = "control-tramites";
				 			}

				 		});


				</script>';
		}


	}

}













}