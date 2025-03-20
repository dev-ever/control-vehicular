<?php 
 
	
class ControladorCombustibles{
 

	/*=============================================
	MOSTRAR PERFIlES
	=============================================*/

	static public function ctrMostrarCombustibles($item, $valor){

		$tabla = "tb_combustibles";

		$respuesta = ModeloCombustibles::mdlMostrarCombustibles($tabla, $item, $valor);

		return $respuesta;
	}




	static public function ctrCrearNuevoCombustible(){

		if(isset($_POST["nuevoCombustible"])){

			if(preg_match('/^[^<>\'´´]+$/', $_POST["nuevoCombustible"])){

				date_default_timezone_set("America/Mexico_City"); 

				$tabla = "tb_combustibles";

				$datos = array("combustible" => strtoupper($_POST["nuevoCombustible"]),
								"created_at" => date("Y-m-d H:i:s"),
								"usuario_id" => $_SESSION["idVehicular"]);

				$respuesta = ModeloCombustibles::mdlIngresarCombustible($tabla, $datos);

				if($respuesta == "ok"){

					echo '<script>

						Swal.fire({
							position: "center",
							icon: "success",
							title: "El registro ha sido agregado correctamente",
							allowOutsideClick: false,
							showConfirmButton: true,
							confirmButtonText: "Aceptar"

							}).then((result)=> {

								if(result.value){

									window.location = "altas-control-vehicular";
								}

							});

						</script>';


						//AGREGAMOS LOG
						$nombreEquipo = gethostbyaddr($_SERVER['REMOTE_ADDR']);
						$ipCliente = $_SERVER['REMOTE_ADDR'];

						$table = "log";
						$data = array("actividad"=>"Registro de nueva marca ".$_POST["nuevoCombustible"],
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
						title: "¡el registro no puede ir vacio o llevar caracteres especiales!",
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


	/*============================================= 
	EDITAR MARCAS
	=============================================*/

static public function ctrEditarCombustible(){

	if(isset($_POST["editarCombustible"])){

		if(preg_match('/^[^<>\'´´]+$/', $_POST["editarCombustible"])){

			date_default_timezone_set("America/Mexico_City"); 

			$tabla = "tb_combustibles";

			$datos = array("combustible" => strtoupper($_POST["editarCombustible"]),
						   "created_at" => date("Y-m-d H:i:s"),
						   "usuario_id" => $_SESSION["idVehicular"],
						   "idCombustible" => $_POST["idCombustible"]);

			// var_dump($datos);

			$respuesta = ModeloCombustibles::mdlEditarCombustible($tabla, $datos);

			// var_dump($respuesta);

			if($respuesta == "ok"){

				echo '<script>

					Swal.fire({
						position: "center",
						icon: "success",
						title: "El registro ha sido editado correctamente",
						allowOutsideClick: false,
						showConfirmButton: true,
						confirmButtonText: "Aceptar"

						}).then((result)=> {

							if(result.value){

								window.location = "altas-control-vehicular";
							}

						});

					</script>';


					//AGREGAMOS LOG
					$nombreEquipo = gethostbyaddr($_SERVER['REMOTE_ADDR']);
					$ipCliente = $_SERVER['REMOTE_ADDR'];

					$table = "log";
					$data = array("actividad"=>"Se editó el nombre del combustible ".$_POST["editarCombustible"],
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
					title: "¡El combustible no puede ir vacio o llevar caracteres especiales!",
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











static public function ctrBorrarCombustible(){

	if(isset($_GET["combs"])){

		date_default_timezone_set("America/Mexico_City"); 

		$tabla = "tb_combustibles";
		$datos = $_GET["combs"];

		$itemResp = "idCombustible";
		$valorResp = $_GET["combs"];

		$combustible = ControladorCombustibles::ctrMostrarCombustibles($itemResp, $valorResp);
		$nombreCombustible = $combustible["combustible"];

		$respuesta = ModeloCombustibles::mdlBorrarCombustible($tabla, $datos);

		if($respuesta == "ok"){

			$nombreEquipo = gethostbyaddr($_SERVER['REMOTE_ADDR']);
			$ipCliente = $_SERVER['REMOTE_ADDR'];

			$table = "log";
			$data = array("actividad"=>"Se eliminó el registro combustible ".$nombreCombustible,
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
						  title: "El registro ha sido borrado correctamente!",
						  allowOutsideClick: false,
						  showConfirmButton: true,
						  confirmButtonText: "Aceptar"
				
						}).then((result)=> {

				 			if(result.value){

				 				window.location = "altas-control-vehicular";
				 			}

				 		});


				</script>';
		}


	}

}











}



?>