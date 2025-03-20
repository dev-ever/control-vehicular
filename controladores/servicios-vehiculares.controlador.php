<?php 

	
class ControladorServiciosVehiculares{
 

	/*=============================================
	MOSTRAR 
	=============================================*/

	static public function ctrMostrarServiciosVehiculares($item, $valor){

		$tabla = "tb_vehiculos_servicios";

		$respuesta = ModeloServiciosVehiculares::mdlMostrarServiciosVehiculares($tabla, $item, $valor);

		return $respuesta;
	}


	static public function ctrCrearNuevoServicioVehiculo(){

		if(isset($_POST["nuevoVehiculoServicio"])){

			if(preg_match('/^[^<>\'´´]+$/', $_POST["nuevoServicioVehiculo"]) && 
			   preg_match('/^[^<>\'´´]+$/', $_POST["nuevoTallerServicio"])){


				date_default_timezone_set("America/Mexico_City"); 

				$tabla = "tb_vehiculos_servicios";

				$datos = array("vehiculo_id" => $_POST["nuevoVehiculoServicio"],
								"servicio" => $_POST["nuevoServicioVehiculo"],
								"taller" => $_POST["nuevoTallerServicio"],
								"observaciones" => $_POST["nuevaObservacionesServicio"],
								"fecha" => $_POST["nuevaFechaServicio"],
							    "created_at" => date("Y-m-d H:i:s"),
							    "usuario_id" => $_SESSION["idVehicular"]);

				$respuesta = ModeloServiciosVehiculares::mdlIngresarServicioVehicular($tabla, $datos);

			    $modeloVehiculos = ControladorVehiculos::ctrMostrarVehiculos("idVehiculo", $_POST["nuevoVehiculoServicio"]);
				$modeloVehiculo = "folio: ".$modeloVehiculos["folio"]." - ".$modeloVehiculos["modelo"].", serie: ".$modeloVehiculos["serie"];

				if($respuesta == "ok"){

					echo '<script>

						Swal.fire({
							position: "center",
							icon: "success",
							title: "El servicio ha sido agregado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Aceptar"

							}).then((result)=> {

								if(result.value){

									window.location = "control-servicios";
								}

							});

						</script>';


						//AGREGAMOS LOG
						$nombreEquipo = gethostbyaddr($_SERVER['REMOTE_ADDR']);
						$ipCliente = $_SERVER['REMOTE_ADDR'];

						$table = "log";
						$data = array("actividad"=>"Registro de nuevo servicio para el vehículo ".$modeloVehiculo,
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
						title: "¡El servicio no puede ir vacio o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"


						}).then((result)=> {

							if(result.value){

								window.location = "control-servicios";
							}

						}); 

					</script>'; 


			}

		}

	}







	static public function ctrActualizarServicioVehiculo(){

		if(isset($_POST["idServicioVehiculo"])){

			if(preg_match('/^[^<>\'´´]+$/', $_POST["editarServicioVehiculo"]) && preg_match('/^[^<>\'´´]+$/', $_POST["editarTallerServicio"])){

				date_default_timezone_set("America/Mexico_City"); 

				$tabla = "tb_vehiculos_servicios";

				$datos = array("vehiculo_id" => $_POST["editarVehiculoServicio"],
								"servicio" => $_POST["editarServicioVehiculo"],
								"taller" => $_POST["editarTallerServicio"],
								"observaciones" => $_POST["editarObservacionesServicio"],
								"fecha" => $_POST["editarFechaServicio"],
							    "created_at" => date("Y-m-d H:i:s"),
							    "usuario_id" => $_SESSION["idVehicular"],
								"idVehiculoServicio" => $_POST["idServicioVehiculo"]);


				$respuesta = ModeloServiciosVehiculares::mdlEditarServicioVehicular($tabla, $datos);

				$modeloVehiculos = ControladorVehiculos::ctrMostrarVehiculos("idVehiculo", $_POST["editarVehiculoServicio"]);
				$modeloVehiculo =  "folio: ".$modeloVehiculos["folio"]." - ".$modeloVehiculos["modelo"].", serie: ".$modeloVehiculos["serie"];

				if($respuesta == "ok"){

					echo '<script>

						Swal.fire({
							position: "center",
							icon: "success",
							title: "El servicio al vehículo ha sido editado correctamente",
							allowOutsideClick: false,
							showConfirmButton: true,
							confirmButtonText: "Aceptar"

							}).then((result)=> {

								if(result.value){

									window.location = "control-servicios";
								}

							});

						</script>';


						//AGREGAMOS LOG
						$nombreEquipo = gethostbyaddr($_SERVER['REMOTE_ADDR']);
						$ipCliente = $_SERVER['REMOTE_ADDR'];

						$table = "log";
						$data = array("actividad"=>"Edición del servicio al vehiculo ".$modeloVehiculo,
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
						title: "¡El servicio del vehículo no puede ir vacio o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"


						}).then((result)=> {

							if(result.value){

								window.location = "control-servicios";
							}

						}); 

					</script>'; 


			}

		}

	}
 



static public function ctrBorrarServicioVehiculo(){

	if(isset($_GET["serVeh"])){

		date_default_timezone_set("America/Mexico_City"); 

		$tabla = "tb_vehiculos_servicios";
		$datos = $_GET["serVeh"];

		$itemResp = "idVehiculoServicio";
		$valorResp = $_GET["serVeh"];



		$respuestaServVehiculo = ControladorServiciosVehiculares::ctrMostrarServiciosVehiculares($itemResp, $valorResp);
		$idVehiculo = $respuestaServVehiculo["vehiculo_id"];

		$vehiculo = ControladorVehiculos::ctrMostrarVehiculos("idVehiculo", $idVehiculo);
		$folio = $vehiculo["folio"];
		$nombreVehiculo = $vehiculo["modelo"];
		$serieVehiculo = $vehiculo["serie"];

		$respuesta = ModeloServiciosVehiculares::mdlBorrarServicioVehiculo($tabla, $datos);

		if($respuesta == "ok"){

			$nombreEquipo = gethostbyaddr($_SERVER['REMOTE_ADDR']);
			$ipCliente = $_SERVER['REMOTE_ADDR'];

			$table = "log";
			$data = array("actividad"=>"Se eliminó el servicio para el folio ".$folio.", ".$nombreVehiculo.", serie: ".$serieVehiculo,
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
						  title: "El servicio ha sido borrado correctamente!",
						  allowOutsideClick: false,
						  showConfirmButton: true,
						  confirmButtonText: "Aceptar"
				
						}).then((result)=> {

				 			if(result.value){

				 				window.location = "control-servicios";
				 			}

				 		});


				</script>';
		}


	}

}













}