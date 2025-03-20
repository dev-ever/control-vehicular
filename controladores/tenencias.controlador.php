<?php 

	
class ControladorTenencias{ 
 

	/*============================================= 
	MOSTRAR 
	=============================================*/

	static public function ctrMostrarTenencias($item, $valor){

		$tabla = "tb_vehiculos_tenencias";

		$respuesta = ModeloTenencias::mdlMostrarTenencias($tabla, $item, $valor);

		return $respuesta; 
	}


	static public function ctrMostrarTenenciasGral($item, $valor){

		$tabla = "tb_vehiculos_tenencias";

		$respuesta = ModeloTenencias::mdlMostrarTenenciasGral($tabla, $item, $valor);

		return $respuesta; 
	}






	


	static public function ctrCrearNuevaTenencia(){

		if(isset($_POST["nuevoVehiculoTenencia"])){

			if(preg_match('/^[^<>\'´´]+$/', $_POST["nuevoAnio"])){

				date_default_timezone_set("America/Mexico_City"); 

				$tabla = "tb_vehiculos_tenencias";

				$datos = array("tipo" => "Pago de Tenencia",
								"anio" => $_POST["nuevoAnio"],
								"pago" => $_POST["nuevoPago"],
								"fechaPago" => $_POST["nuevaFechaPago"],
								"vehiculo_id" => $_POST["nuevoVehiculoTenencia"],
								"usuario_id" => $_SESSION["idVehicular"],
								"created_at" => date("Y-m-d H:i:s"));

				$respuesta = ModeloTenencias::mdlIngresarTenencia($tabla, $datos);
			
				//LLAMDO DE MODELO DE VEHICULO
				$modeloVehiculos = ControladorVehiculos::ctrMostrarVehiculos("idVehiculo", $_POST["nuevoVehiculoTenencia"]);
				$modeloVehiculo = $modeloVehiculos["modelo"].", serie: ".$modeloVehiculos["serie"];

				if($respuesta == "ok"){

					echo '<script>

						Swal.fire({
							position: "center",
							icon: "success",
							title: "La tenencia ha sido agregado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Aceptar"

							}).then((result)=> {

								if(result.value){

									window.location = "control-tenencias";
								}

							});

						</script>';


						//AGREGAMOS LOG
						$nombreEquipo = gethostbyaddr($_SERVER['REMOTE_ADDR']);
						$ipCliente = $_SERVER['REMOTE_ADDR'];

						$table = "log";
						$data = array("actividad"=>"Registro de nueva tenencia de ".$modeloVehiculo,
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
						title: "¡La tenencia no puede ir vacio o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"


						}).then((result)=> {

							if(result.value){

								window.location = "control-tenencias;
							}

						}); 

					</script>'; 


			}

		}

	}


	/*============================================= 
	EDITAR MARCAS
	=============================================*/

static public function ctrEditarTenencia(){

		if(isset($_POST["idTenencia"])){

			if(preg_match('/^[^<>\'´´]+$/', $_POST["editarAnio"])){

				date_default_timezone_set("America/Mexico_City"); 

				$tabla = "tb_vehiculos_tenencias";
				$datos = array("anio" => $_POST["editarAnio"],
								"pago" => $_POST["editarPago"],
								"fechaPago" => $_POST["editarFechaPago"],
								"vehiculo_id" => $_POST["editarVehiculoTenencia"],
								"usuario_id" => $_SESSION["idVehicular"],
								"created_at" => date("Y-m-d H:i:s"),
								"idTenencia" => $_POST["idTenencia"]);



				$respuesta = ModeloTenencias::mdlEditarTenencia($tabla, $datos);

				$modeloVehiculos = ControladorVehiculos::ctrMostrarVehiculos("idVehiculo", $_POST["editarVehiculoTenencia"]);
				$modeloVehiculo = $modeloVehiculos["modelo"].", serie: ".$modeloVehiculos["serie"];

				if($respuesta == "ok"){

					echo '<script>

						Swal.fire({
							position: "center",
							icon: "success",
							title: "La tenencia ha sido editado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Aceptar"

							}).then((result)=> {

								if(result.value){

									window.location = "control-tenencias";
								}

							});

						</script>';


						//AGREGAMOS LOG
						$nombreEquipo = gethostbyaddr($_SERVER['REMOTE_ADDR']);
						$ipCliente = $_SERVER['REMOTE_ADDR'];

						$table = "log";
						$data = array("actividad"=>"Se editó la tenencia de ".$modeloVehiculo,
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
						title: "¡La marca no puede ir vacio o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"


						}).then((result)=> {

							if(result.value){

								window.location = "control-tenencias";
							}

						}); 

					</script>'; 


			}

		}

	}











static public function ctrBorrarTendencia(){

	if(isset($_GET["tenen"])){

		date_default_timezone_set("America/Mexico_City"); 

		$tabla = "tb_vehiculos_tenencias";
		$datos = $_GET["tenen"];

		$itemResp = "idTenencia";
		$valorResp = $_GET["tenen"];

		$respuestaTenencia = ControladorTenencias::ctrMostrarTenencias($itemResp, $valorResp);
		$idVehiculo = $respuestaTenencia["vehiculo_id"];

		$modeloVehiculos = ControladorVehiculos::ctrMostrarVehiculos("idVehiculo", $idVehiculo);
		$modeloVehiculo = $modeloVehiculos["modelo"].", serie: ".$modeloVehiculos["serie"];

		$respuesta = ModeloTenencias::mdlBorrarTenencia($tabla, $datos);

		if($respuesta == "ok"){

			$nombreEquipo = gethostbyaddr($_SERVER['REMOTE_ADDR']);
			$ipCliente = $_SERVER['REMOTE_ADDR'];

			$table = "log";
			$data = array("actividad"=>"Se eliminó la tenencia de".$modeloVehiculo,
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
						  title: "La marca ha sido borrado correctamente!",
						  showConfirmButton: true,
						  confirmButtonText: "Aceptar"
				
						}).then((result)=> {

				 			if(result.value){

				 				window.location = "control-tenencias";
				 			}

				 		});


				</script>';
		}


	}

}










}



?>