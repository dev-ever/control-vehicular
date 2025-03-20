<?php 

	
class ControladorSegurosVehiculos{ 
 

	/*============================================= 
	MOSTRAR MARCAS
	=============================================*/

	static public function ctrMostrarSegurosVehiculos($item, $valor){

		$tabla = "tb_vehiculos_seguros";

		$respuesta = ModeloSegurosVehiculos::mdlMostrarSegurosVehiculos($tabla, $item, $valor);

		return $respuesta;
	}




	static public function ctrCrearNuevoSeguro(){

		if(isset($_POST["nuevoVehiculoSeguro"])){

			if(preg_match('/^[^<>\'´´]+$/', $_POST["nuevaPoliza"]) && preg_match('/^[^<>\'´´]+$/', $_POST["nuevoInciso"])){

				date_default_timezone_set("America/Mexico_City"); 

				$tabla = "tb_vehiculos_seguros";

				$datos = array("vehiculo_id" => $_POST["nuevoVehiculoSeguro"],
								"seguro_id" => $_POST["nuevoSeguroVeh"],
								"poliza" => $_POST["nuevaPoliza"],
								"inciso" => $_POST["nuevoInciso"],
								"vigencia" => $_POST["nuevaVigencia"],
								"observaciones" => $_POST["nuevaObservacionesSeguro"],
								"usuario_id" => $_SESSION["idVehicular"],
								"created_at" => date("Y-m-d H:i:s"));


				$respuesta = ModeloSegurosVehiculos::mdlIngresarSeguroVehiculo($tabla, $datos);

				$modeloVehiculos = ControladorVehiculos::ctrMostrarVehiculos("idVehiculo", $_POST["nuevoVehiculoSeguro"]);
				$modeloVehiculo = $modeloVehiculos["modelo"].", serie: ".$modeloVehiculos["serie"];

				if($respuesta == "ok"){

					echo '<script>

						Swal.fire({
							position: "center",
							icon: "success",
							title: "El seguro al vehículo ha sido agregado correctamente",
							allowOutsideClick: false,
							showConfirmButton: true,
							confirmButtonText: "Aceptar"

							}).then((result)=> {

								if(result.value){

									window.location = "control-seguros";
								}

							});

						</script>';


						//AGREGAMOS LOG
						$nombreEquipo = gethostbyaddr($_SERVER['REMOTE_ADDR']);
						$ipCliente = $_SERVER['REMOTE_ADDR'];

						$table = "log";
						$data = array("actividad"=>"Registro de nuevo seguro al vehiculo ".$modeloVehiculo,
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
						title: "¡El seguro del vehículo no puede ir vacio o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"


						}).then((result)=> {

							if(result.value){

								window.location = "control-seguros";
							}

						}); 

					</script>'; 


			}

		}

	}




	static public function ctrEditarSeguroVehiculo(){

		if(isset($_POST["idSegVeh"])){

			if(preg_match('/^[^<>\'´´]+$/', $_POST["editarPoliza"]) && preg_match('/^[^<>\'´´]+$/', $_POST["editarInciso"])){

				date_default_timezone_set("America/Mexico_City"); 

				$tabla = "tb_vehiculos_seguros";

				$datos = array("vehiculo_id" => $_POST["editVehiculoSeguro"],
								"seguro_id" => $_POST["editSeguroVeh"],
								"poliza" => $_POST["editarPoliza"],
								"inciso" => $_POST["editarInciso"],
								"vigencia" => $_POST["editarVigencia"],
								"observaciones" => $_POST["editarObservacionesSeguro"],
								"usuario_id" => $_SESSION["idVehicular"],
								"created_at" => date("Y-m-d H:i:s"),
								"idSegVeh" => $_POST["idSegVeh"]);


				$respuesta = ModeloSegurosVehiculos::mdlEditarSeguroVehiculo($tabla, $datos);

				$modeloVehiculos = ControladorVehiculos::ctrMostrarVehiculos("idVehiculo", $_POST["editVehiculoSeguro"]);
				$modeloVehiculo = $modeloVehiculos["modelo"].", serie: ".$modeloVehiculos["serie"];

				if($respuesta == "ok"){

					echo '<script>

						Swal.fire({
							position: "center",
							icon: "success",
							title: "El seguro al vehículo ha sido editado correctamente",
							allowOutsideClick: false,
							showConfirmButton: true,
							confirmButtonText: "Aceptar"

							}).then((result)=> {

								if(result.value){

									window.location = "control-seguros";
								}

							});

						</script>';


						//AGREGAMOS LOG
						$nombreEquipo = gethostbyaddr($_SERVER['REMOTE_ADDR']);
						$ipCliente = $_SERVER['REMOTE_ADDR'];

						$table = "log";
						$data = array("actividad"=>"Edición de seguro al vehiculo ".$modeloVehiculo,
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
						title: "¡El seguro del vehículo no puede ir vacio o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"


						}).then((result)=> {

							if(result.value){

								window.location = "control-seguros";
							}

						}); 

					</script>'; 


			}

		}

	}
 






static public function ctrBorrarSeguroVehiculo(){

	if(isset($_GET["segVeh"])){

		date_default_timezone_set("America/Mexico_City"); 

		$tabla = "tb_vehiculos_seguros";
		$datos = $_GET["segVeh"];

		$itemResp = "idSegVeh";
		$valorResp = $_GET["segVeh"];



		$respuestaSegVehiculo = ControladorSegurosVehiculos::ctrMostrarSegurosVehiculos($itemResp, $valorResp);

		$idVehiculo = $respuestaSegVehiculo["vehiculo_id"];
		$idSeguro = $respuestaSegVehiculo["seguro_id"];



		$seguro = ControladorSeguros::ctrMostrarSeguros("idSeguro", $idSeguro);
		$nombreSeguro = $seguro["seguro"];

		$vehiculo = ControladorVehiculos::ctrMostrarVehiculos("idVehiculo", $idVehiculo);
		$nombreVehiculo = $vehiculo["modelo"];
		$serieVehiculo = $vehiculo["serie"];

		$respuesta = ModeloSegurosVehiculos::mdlBorrarSeguroVehiculo($tabla, $datos);

		if($respuesta == "ok"){

			$nombreEquipo = gethostbyaddr($_SERVER['REMOTE_ADDR']);
			$ipCliente = $_SERVER['REMOTE_ADDR'];

			$table = "log";
			$data = array("actividad"=>"Se eliminó el seguro para ".$nombreVehiculo.", serie: ".$serieVehiculo.", con seguro: ".$nombreSeguro,
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
						  title: "El seguro ha sido borrado correctamente!",
						  allowOutsideClick: false,
						  showConfirmButton: true,
						  confirmButtonText: "Aceptar"
				
						}).then((result)=> {

				 			if(result.value){

				 				window.location = "control-seguros";
				 			}

				 		});


				</script>';
		}


	}

}









}