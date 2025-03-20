<?php 

	
class ControladorTiposTransportes{
 

	/*============================================= 
	MOSTRAR TRANSPORTES
	=============================================*/

	static public function ctrMostrarTransportes($item, $valor){

		$tabla = "tb_tipoTransporte";

		$respuesta = ModeloTransportes::mdlMostrarTransportes($tabla, $item, $valor);

		return $respuesta;
	}

   
	static public function ctrCrearNuevoTransporte(){

		if(isset($_POST["nuevoTipoTransporte"])){

			if(preg_match('/^[^<>\'´´]+$/', $_POST["nuevoTipoTransporte"])){

				date_default_timezone_set("America/Mexico_City"); 

				$tabla = "tb_tipoTransporte";
				$datos = array("transporte" => strtoupper($_POST["nuevoTipoTransporte"]),
								"created_at" => date("Y-m-d H:i:s"),
								"usuario_id" => $_SESSION["idVehicular"]);

				$respuesta = ModeloTransportes::mdlIngresarTransporte($tabla, $datos);

				if($respuesta == "ok"){

					echo '<script>

						Swal.fire({
							position: "center",
							icon: "success",
							title: "El transporte ha sido agregado correctamente",
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
						$data = array("actividad"=>"Registro de nuevo transporte ".$_POST["nuevoTipoTransporte"],
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
						title: "¡El transporte no puede ir vacio o llevar caracteres especiales!",
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


	static public function ctrEditarTransporte(){

		if(isset($_POST["editarTipoTransporte"])){

			if(preg_match('/^[^<>\'´´]+$/', $_POST["editarTipoTransporte"])){

				date_default_timezone_set("America/Mexico_City"); 

				$tabla = "tb_tipoTransporte";
				$datos = array("transporte" => strtoupper($_POST["editarTipoTransporte"]),
								"created_at" => date("Y-m-d H:i:s"),
								"usuario_id" => $_SESSION["idVehicular"],
								"idTransporte" => $_POST["idTransporte"]);

				$respuesta = ModeloTransportes::mdlEditarTransporte($tabla, $datos);

				if($respuesta == "ok"){

					echo '<script>

						Swal.fire({
							position: "center",
							icon: "success",
							title: "El transporte ha sido editado correctamente",
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
						$data = array("actividad"=>"Se editó del transporte ".$_POST["editarTipoTransporte"],
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
						title: "¡El transporte no puede ir vacio o llevar caracteres especiales!",
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






static public function ctrBorrarTransporte(){

	if(isset($_GET["q"])){

		date_default_timezone_set("America/Mexico_City"); 

		$tabla = "tb_tipoTransporte";
		$datos = $_GET["q"];

		$itemEmpresa = "idTransporte";
		$valorEmpresa = $_GET["q"];

		$transporte = ControladorTiposTransportes::ctrMostrarTransportes($itemEmpresa,$valorEmpresa);
		$nombreTransporte = $transporte["transporte"];

		$respuesta = ModeloTransportes::mdlBorrarTransporte($tabla, $datos);

		if($respuesta == "ok"){

			$nombreEquipo = gethostbyaddr($_SERVER['REMOTE_ADDR']);
			$ipCliente = $_SERVER['REMOTE_ADDR'];

			$table = "log";
			$data = array("actividad"=>"Se eliminó el transporte ".$nombreTransporte,
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
						  title: "El transporte ha sido borrado correctamente!",
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