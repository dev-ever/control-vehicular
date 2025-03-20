<?php 
	
class ControladorPropietarios{
	/*============================================= 
	MOSTRAR TRANSPORTES
	=============================================*/

	static public function ctrMostrarPropietarios($item, $valor){

		$tabla = "tb_propietarios";

		$respuesta = ModeloPropietarios::mdlMostrarPropietarios($tabla, $item, $valor);

		return $respuesta;
	}


	static public function ctrCrearNuevoPropietario(){

		if(isset($_POST["nuevoNombrePropietario"])){

			if(preg_match('/^[^<>\'´´]+$/', $_POST["nuevoNombrePropietario"])){

				date_default_timezone_set("America/Mexico_City"); 

				$tabla = "tb_propietarios";
				$datos = array("propietario" => strtoupper($_POST["nuevoNombrePropietario"]),
								"created_at" => date("Y-m-d H:i:s"),
								"usuario_id" => $_SESSION["idVehicular"]);

				$respuesta = ModeloPropietarios::mdlIngresarPropietario($tabla, $datos); 

				if($respuesta == "ok"){

					echo '<script> 

						Swal.fire({
							position: "center",
							icon: "success",
							title: "El propietario ha sido agregado correctamente",
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
						$data = array("actividad"=>"Registro de nuevo propietario ".$_POST["nuevoNombrePropietario"],
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
						title: "¡El propietario no puede ir vacio o llevar caracteres especiales!",
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


	static public function ctrEditarPropietario(){

		if(isset($_POST["editarPropietario"])){

			if(preg_match('/^[^<>\'´´]+$/', $_POST["editarPropietario"])){

				date_default_timezone_set("America/Mexico_City"); 

				$tabla = "tb_propietarios";
				$datos = array("propietario" => $_POST["editarPropietario"],
								"created_at" => date("Y-m-d H:i:s"),
								"usuario_id" => $_SESSION["idVehicular"],
								"idPropietario" => $_POST["idPropietario"]);

				$respuesta = ModeloPropietarios::mdlEditarPropietario($tabla, $datos);

				if($respuesta == "ok"){

					echo '<script>

						Swal.fire({
							position: "center",
							icon: "success",
							title: "El propietario ha sido editado correctamente",
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
						$data = array("actividad"=>"Se editó del propietario ".$_POST["editarPropietario"],
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
						title: "¡El propietario no puede ir vacio o llevar caracteres especiales!",
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






static public function ctrBorrarPropietario(){

	if(isset($_GET["prop"])){

		date_default_timezone_set("America/Mexico_City"); 

		$tabla = "tb_propietarios";
		$datos = $_GET["prop"];

		$itemProp = "idPropietario";
		$valorProp = $_GET["prop"];

		$propietario = ControladorPropietarios::ctrMostrarPropietarios($itemProp, $valorProp);
		$nombrePropietario = $propietario["propietario"];

		$respuesta = ModeloPropietarios::mdlBorrarPropietario($tabla, $datos);

		if($respuesta == "ok"){

			$nombreEquipo = gethostbyaddr($_SERVER['REMOTE_ADDR']);
			$ipCliente = $_SERVER['REMOTE_ADDR'];

			$table = "log";
			$data = array("actividad"=>"Se eliminó el propietario ".$nombrePropietario,
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
						  title: "El propietario ha sido borrado correctamente!",
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