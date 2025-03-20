<?php 

	
class ControladorVerificaciones{   
 

	/*============================================= 
	MOSTRAR 
	=============================================*/

	static public function ctrMostrarVerificaciones($item, $valor){

		$tabla = "tb_vehiculos_verificaciones";

		$respuesta = ModeloVerificaciones::mdlMostrarVerificaciones($tabla, $item, $valor);

		return $respuesta;
	}



	static public function ctrMostrarVerificacion($item, $valor, $item2, $valor2){

		$tabla = "tb_vehiculos_verificaciones";

		$respuesta = ModeloVerificaciones::mdlMostrarVerificacion($tabla, $item, $valor, $item2, $valor2);

		return $respuesta;
	} 

	static public function ctrMostrarVerificacionGral($item, $valor){

		$tabla = "tb_vehiculos_verificaciones";

		$respuesta = ModeloVerificaciones::mdlMostrarVerificacionGral($tabla, $item, $valor);

		return $respuesta;
	} 


 





	static public function ctrCrearNuevaVerificacion(){

		if(isset($_POST["nuevoVehiculoVerificacion"])){

			if(preg_match('/^[^<>\'´´]+$/', $_POST["nuevaObservacion"])){

				date_default_timezone_set("America/Mexico_City"); 

				$tabla = "tb_vehiculos_verificaciones";

				$datos = array("vehiculo_id" => $_POST["nuevoVehiculoVerificacion"],
								"idVerif" => $_POST["nuevoIDVerificacion"],
								"tipoVerificacion" => $_POST["nuevoTipoVerificacion"],
								"verificacion" => $_POST["nuevaVerificacion"],
								"estatus" => $_POST["nuevoEstatusVerificdo"],
								"anio" => $_POST["nuevoAnioVerificacion"],
								"fecha" => $_POST["nuevaFechaPago"],
								"observaciones" => $_POST["nuevaObservacion"],
								"created_at" => date('Y-m-d H:i:s'),
								"usuario_id" => $_SESSION["idVehicular"]);

					// var_dump($datos);

					$respuesta = ModeloVerificaciones::mdlIngresarVerificacion($tabla, $datos);
				
					//LLAMDO DE MODELO DE VEHICULO
					$modeloVehiculos = ControladorVehiculos::ctrMostrarVehiculos("idVehiculo", $_POST["nuevoVehiculoVerificacion"]);
					$modeloVehiculo = $modeloVehiculos["modelo"].", serie: ".$modeloVehiculos["serie"];

					if($respuesta == "ok"){

						echo '<script>

							Swal.fire({
								position: "center",
								icon: "success",
								title: "La verificación ha sido agregado correctamente",
								showConfirmButton: true,
								confirmButtonText: "Aceptar"

								}).then((result)=> {

									if(result.value){

										window.location = "control-verificaciones";
									}

								});

							</script>';


							//AGREGAMOS LOG
							$nombreEquipo = gethostbyaddr($_SERVER['REMOTE_ADDR']);
							$ipCliente = $_SERVER['REMOTE_ADDR'];

							$table = "log";
							$data = array("actividad"=>"Registro de la primera verificación de ".$modeloVehiculo,
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
						title: "¡La verificación no puede ir vacio o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"


						}).then((result)=> {

							if(result.value){

								window.location = "control-verificaciones;
							}

						}); 

					</script>'; 


			}

		}

	}
 






static public function ctrEditarVerificacion(){

		if(isset($_POST["editarVehiculoVerificacion"])){

			 if(preg_match('/^[^<>\'´´]+$/', $_POST["editarVerificacion"]) && 
				preg_match('/^[^<>\'´´]+$/', $_POST["editarAnioVerificacion"])){

				date_default_timezone_set("America/Mexico_City"); 

				$tabla = "tb_vehiculos_verificaciones";

				$datos = array("vehiculo_id" => $_POST["editarVehiculoVerificacion"],
								"idVerif" => $_POST["editaridVerificacion"],
								"tipoVerificacion" => $_POST["editarTipoVerificacion"],
								"verificacion" => $_POST["editarVerificacion"],
								"estatus" => $_POST["editarEstatusVerificdo"],
								"anio" => $_POST["editarAnioVerificacion"],
								"fecha" => $_POST["editarFechaPago"],
								"observaciones" => $_POST["editarObservacion"],
								"created_at" => date('Y-m-d H:i:s'),
								"usuario_id" => $_SESSION["idVehicular"], 
								"idVerificacion" => $_POST["identidadVerificacion"]);

				// var_dump($datos);

				$respuesta = ModeloVerificaciones::mdlEditarVerificacion($tabla, $datos);

				// var_dump($respuesta);

				if($respuesta == "ok"){

					/*echo '<script>

							Swal.fire({

								icon: "success",
								html: `
									<div style="text-align: center; margin-left: 10px">

									<strong>Procesado!</strong><br>

											La verificación ha sido editado correctamente !

									</div>`,

									toast: true,



								allowOutsideClick: false,
								showConfirmButton: true,
								confirmButtonText: "Aceptar",
									didOpen: (toast) => {
										toast.addEventListener("click", ()=> Swal.close())
									}

							
							}).then((result)=> {

									if(result.value){

										window.location = "control-verificaciones";
									}

								});


					     </script>';*/



					echo '<script>

							Swal.fire({
								position: "center",
								icon: "success",
								title: "La verificación ha sido editado correctamente",
								allowOutsideClick: false,
								showConfirmButton: true,
								confirmButtonText: "Aceptar"

								}).then((result)=> {

									if(result.value){

										window.location = "control-verificaciones";
									}

								});

							</script>';


						//AGREGAMOS LOG
							$nombreEquipo = gethostbyaddr($_SERVER['REMOTE_ADDR']);
							$ipCliente = $_SERVER['REMOTE_ADDR'];

							$table = "log";
							$data = array("actividad"=>"Se editó la verificación con ID ".$_POST["editaridVerificacion"],
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
						title: "¡La verificación no puede ir vacio o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"


						}).then((result)=> {

							if(result.value){

								window.location = "control-verificaciones;
							}

						}); 

					</script>'; 


			}


		}


	}



static public function ctrBorrarVerificacion(){

	if(isset($_GET["verif"])){

		date_default_timezone_set("America/Mexico_City"); 

		$tabla = "tb_vehiculos_verificaciones";
		$datos = $_GET["verif"];

		$itemResp = "idVerificacion";
		$valorResp = $_GET["verif"];

		$verificaciones = ControladorVerificaciones::ctrMostrarVerificaciones($itemResp, $valorResp);
		$nombreVerificaciones = $verificaciones["idVerif"];

		$respuesta = ModeloVerificaciones::mdlBorrarVerificacion($tabla, $datos);

		if($respuesta == "ok"){

			$nombreEquipo = gethostbyaddr($_SERVER['REMOTE_ADDR']);
			$ipCliente = $_SERVER['REMOTE_ADDR'];

			$table = "log";
			$data = array("actividad"=>"Se eliminó la verificación con ID ".$nombreVerificaciones,
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
						  title: "La verificación ha sido borrado correctamente!",
						  allowOutsideClick: false,
						  showConfirmButton: true,
						  confirmButtonText: "Aceptar"
				
						}).then((result)=> {

				 			if(result.value){

				 				window.location = "control-verificaciones";
				 			}

				 		});


				</script>';
		}


	}

}








}

?>