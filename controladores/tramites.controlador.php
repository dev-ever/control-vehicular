<?php 

	
class ControladorTramites{
 

	/*=============================================
	MOSTRAR TRAMITES
	=============================================*/

	static public function ctrMostrarTramites($item, $valor){

		$tabla = "tb_tramites";

		$respuesta = ModeloTramites::mdlMostrarTramites($tabla, $item, $valor);

		return $respuesta;
	}





	static public function ctrCrearNuevoTramite(){

		if(isset($_POST["nuevoTramite"])){

			if(preg_match('/^[^<>\'´´]+$/', $_POST["nuevoTramite"])){

				date_default_timezone_set("America/Mexico_City"); 

				$tabla = "tb_tramites";

				$datos = array("tramite" => strtoupper($_POST["nuevoTramite"]),
								"created_at" => date("Y-m-d H:i:s"),
								"usuario_id" => $_SESSION["idVehicular"]);

				$respuesta = ModeloTramites::mdlIngresarTramite($tabla, $datos);

				if($respuesta == "ok"){

					echo '<script>

						Swal.fire({
							position: "center",
							icon: "success",
							title: "El trámite ha sido agregado correctamente",
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
						$data = array("actividad"=>"Registro de nuevo trámite ".$_POST["nuevoTramite"],
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

								window.location = "altas-control-vehicular";
							}

						}); 

					</script>'; 


			}

		}

	}






/*============================================= 
	EDITAR TRAMITE
=============================================*/

static public function ctrEditarTramite(){

	if(isset($_POST["editarTramite"])){

		if(preg_match('/^[^<>\'´´]+$/', $_POST["editarTramite"])){

			date_default_timezone_set("America/Mexico_City"); 

			$tabla = "tb_tramites";

			$datos = array("tramite" => strtoupper($_POST["editarTramite"]),
						   "created_at" => date("Y-m-d H:i:s"),
						   "usuario_id" => $_SESSION["idVehicular"],
						   "idTramite" => $_POST["idTramite"]);

			// var_dump($datos);

			$respuesta = ModeloTramites::mdlEditarTramite($tabla, $datos);

			// var_dump($respuesta);

			if($respuesta == "ok"){

				echo '<script>

					Swal.fire({
						position: "center",
						icon: "success",
						title: "El trámite ha sido editado correctamente",
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
					$data = array("actividad"=>"Se editó el trámite ".$_POST["editarTramite"],
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
					title: "¡El trámite no puede ir vacio o llevar caracteres especiales!",
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








static public function ctrBorrarTramite(){

	if(isset($_GET["tram"])){

		date_default_timezone_set("America/Mexico_City"); 

		$tabla = "tb_tramites";
		$datos = $_GET["tram"];

		$itemResp = "idTramite";
		$valorResp = $_GET["tram"];

		$tramite = ControladorTramites::ctrMostrarTramites($itemResp, $valorResp);
		$nombreTramite = $tramite["tramite"];

		$respuesta = ModeloTramites::mdlBorrarTramite($tabla, $datos);

		if($respuesta == "ok"){

			$nombreEquipo = gethostbyaddr($_SERVER['REMOTE_ADDR']);
			$ipCliente = $_SERVER['REMOTE_ADDR'];

			$table = "log";
			$data = array("actividad"=>"Se eliminó el registro del trámite ".$nombreTramite,
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
						  title: "El trámite del seguro ha sido borrado correctamente!",
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