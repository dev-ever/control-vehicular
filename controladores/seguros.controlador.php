<?php 

	
class ControladorSeguros{
 

	/*=============================================
	MOSTRAR PERFIlES
	=============================================*/
 
	static public function ctrMostrarSeguros($item, $valor){

		$tabla = "tb_seguros";

		$respuesta = ModeloSeguros::mdlMostrarSeguros($tabla, $item, $valor);

		return $respuesta;
	}



	static public function ctrCrearNuevoSeguro(){

		if(isset($_POST["nuevoSeguro"])){

			if(preg_match('/^[^<>\'´´]+$/', $_POST["nuevoSeguro"])){

				date_default_timezone_set("America/Mexico_City"); 

				$tabla = "tb_seguros";

				$datos = array("seguro" => strtoupper($_POST["nuevoSeguro"]),
								"created_at" => date("Y-m-d H:i:s"),
								"usuario_id" => $_SESSION["idVehicular"]);

				$respuesta = ModeloSeguros::mdlIngresarSeguro($tabla, $datos);

				if($respuesta == "ok"){

					echo '<script>

						Swal.fire({
							position: "center",
							icon: "success",
							title: "El seguro ha sido agregado correctamente",
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
						$data = array("actividad"=>"Registro de nuevo seguro ".$_POST["nuevoSeguro"],
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
						title: "¡El seguro no puede ir vacio o llevar caracteres especiales!",
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

static public function ctrEditarSeguro(){

	if(isset($_POST["editarSeguro"])){

		if(preg_match('/^[^<>\'´´]+$/', $_POST["editarSeguro"])){

			date_default_timezone_set("America/Mexico_City"); 

			$tabla = "tb_seguros";

			$datos = array("seguro" => strtoupper($_POST["editarSeguro"]),
						   "created_at" => date("Y-m-d H:i:s"),
						   "usuario_id" => $_SESSION["idVehicular"],
						   "idSeguro" => $_POST["idSeguro"]);

			// var_dump($datos);

			$respuesta = ModeloSeguros::mdlEditarSeguro($tabla, $datos);

			// var_dump($respuesta);

			if($respuesta == "ok"){

				echo '<script>

					Swal.fire({
						position: "center",
						icon: "success",
						title: "El seguro ha sido editado correctamente",
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
					$data = array("actividad"=>"Se editó el seguro ".$_POST["editarSeguro"],
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
					title: "¡El seguro no puede ir vacio o llevar caracteres especiales!",
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











static public function ctrBorrarSeguro(){

	if(isset($_GET["seg"])){

		date_default_timezone_set("America/Mexico_City"); 

		$tabla = "tb_seguros";
		$datos = $_GET["seg"];

		$itemResp = "idSeguro";
		$valorResp = $_GET["seg"];

		$seguro = ControladorSeguros::ctrMostrarSeguros($itemResp, $valorResp);
		$nombreSeguro = $seguro["seguro"];

		$respuesta = ModeloSeguros::mdlBorrarSeguro($tabla, $datos);

		if($respuesta == "ok"){

			$nombreEquipo = gethostbyaddr($_SERVER['REMOTE_ADDR']);
			$ipCliente = $_SERVER['REMOTE_ADDR'];

			$table = "log";
			$data = array("actividad"=>"Se eliminó el registro del seguro ".$nombreSeguro,
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
						  title: "El registro del seguro ha sido borrado correctamente!",
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