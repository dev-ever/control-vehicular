<?php 

	
class ControladorClases{
 
 
	/*=============================================
	MOSTRAR PERFIlES
	=============================================*/

	static public function ctrMostrarClases($item, $valor){

		$tabla = "tb_clases";

		$respuesta = ModeloClases::mdlMostrarClases($tabla, $item, $valor);

		return $respuesta;
	}




	static public function ctrCrearNuevaClase(){

		if(isset($_POST["nuevaClase"])){

			if(preg_match('/^[^<>\'´´]+$/', $_POST["nuevaClase"])){

				date_default_timezone_set("America/Mexico_City"); 

				$tabla = "tb_clases";

				$datos = array("clase" => strtoupper($_POST["nuevaClase"]),
								"created_at" => date("Y-m-d H:i:s"),
								"usuario_id" => $_SESSION["idVehicular"]);

				$respuesta = ModeloClases::mdlIngresarClase($tabla, $datos);

				if($respuesta == "ok"){

					echo '<script>

						Swal.fire({
							position: "center",
							icon: "success",
							title: "La clase ha sido agregado correctamente",
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
						$data = array("actividad"=>"Registro de nueva marca ".$_POST["nuevaClase"],
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
						title: "¡La clase no puede ir vacio o llevar caracteres especiales!",
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

static public function ctrEditarClase(){

		if(isset($_POST["idClase"])){

			if(preg_match('/^[^<>\'´´]+$/', $_POST["editarClase"])){

				date_default_timezone_set("America/Mexico_City"); 

				$tabla = "tb_clases";
				$datos = array("clase" => strtoupper($_POST["editarClase"]),
								"created_at" => date("Y-m-d H:i:s"),
								"usuario_id" => $_SESSION["idVehicular"],
								"idClase" => $_POST["idClase"]);

				// var_dump($datos);

				$respuesta = ModeloClases::mdlEditarClase($tabla, $datos);

				if($respuesta == "ok"){

					echo '<script>

						Swal.fire({
							position: "center",
							icon: "success",
							title: "La clase ha sido editado correctamente",
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
						$data = array("actividad"=>"Se editó la clase ".$_POST["editarClase"],
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
						title: "¡La clase no puede ir vacio o llevar caracteres especiales!",
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











static public function ctrBorrarClase(){

	if(isset($_GET["cls"])){

		date_default_timezone_set("America/Mexico_City"); 

		$tabla = "tb_clases";
		$datos = $_GET["cls"];

		$itemResp = "idClase";
		$valorResp = $_GET["cls"];

		$mclases = ControladorClases::ctrMostrarClases($itemResp, $valorResp);
		$nombreclases = $mclases["clase"];

		$respuesta = ModeloClases::mdlBorrarClase($tabla, $datos);

		if($respuesta == "ok"){

			$nombreEquipo = gethostbyaddr($_SERVER['REMOTE_ADDR']);
			$ipCliente = $_SERVER['REMOTE_ADDR'];

			$table = "log";
			$data = array("actividad"=>"Se eliminó el clase ".$nombreclases,
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
						  title: "La clase ha sido borrado correctamente!",
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