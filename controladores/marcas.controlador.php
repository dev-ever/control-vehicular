<?php 

	
class ControladorMarcas{ 
 

	/*============================================= 
	MOSTRAR MARCAS
	=============================================*/

	static public function ctrMostrarMarcas($item, $valor){

		$tabla = "tb_marca";

		$respuesta = ModeloMarcas::mdlMostrarMarcas($tabla, $item, $valor);

		return $respuesta;
	}


	static public function ctrCrearNuevaMarca(){

		if(isset($_POST["nuevaMarca"])){

			if(preg_match('/^[^<>\'´´]+$/', $_POST["nuevaMarca"])){

				date_default_timezone_set("America/Mexico_City"); 

				$tabla = "tb_marca";

				$datos = array("marca" => strtoupper($_POST["nuevaMarca"]),
								"created_at" => date("Y-m-d H:i:s"),
								"usuario_id" => $_SESSION["idVehicular"]);

				$respuesta = ModeloMarcas::mdlIngresarMarca($tabla, $datos);

				if($respuesta == "ok"){

					echo '<script>

						Swal.fire({
							position: "center",
							icon: "success",
							title: "La marca ha sido agregado correctamente",
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
						$data = array("actividad"=>"Registro de nueva marca ".$_POST["nuevaMarca"],
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
						title: "¡La marca no puede ir vacio o llevar caracteres especiales!",
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

static public function ctrEditarMarca(){

		if(isset($_POST["editarMarca"])){

			if(preg_match('/^[^<>\'´´]+$/', $_POST["editarMarca"])){

				date_default_timezone_set("America/Mexico_City"); 

				$tabla = "tb_marca";
				$datos = array("marca" => strtoupper($_POST["editarMarca"]),
								"created_at" => date("Y-m-d H:i:s"),
								"usuario_id" => $_SESSION["idVehicular"],
								"idMarca" => $_POST["idMarca"]);

				$respuesta = ModeloMarcas::mdlEditarMarca($tabla, $datos);

				if($respuesta == "ok"){

					echo '<script>

						Swal.fire({
							position: "center",
							icon: "success",
							title: "La marca ha sido editado correctamente",
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
						$data = array("actividad"=>"Se editó la marca ".$_POST["editarMarca"],
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

								window.location = "altas-control-vehicular";
							}

						}); 

					</script>'; 


			}

		}

	}











static public function ctrBorrarMarca(){

	if(isset($_GET["marca"])){

		date_default_timezone_set("America/Mexico_City"); 

		$tabla = "tb_marca";
		$datos = $_GET["marca"];

		$itemResp = "idMarca";
		$valorResp = $_GET["marca"];

		$marcas = ControladorMarcas::ctrMostrarMarcas($itemResp, $valorResp);
		$nombreMarca = $marcas["marca"];

		$respuesta = ModeloMarcas::mdlBorrarMarca($tabla, $datos);

		if($respuesta == "ok"){

			$nombreEquipo = gethostbyaddr($_SERVER['REMOTE_ADDR']);
			$ipCliente = $_SERVER['REMOTE_ADDR'];

			$table = "log";
			$data = array("actividad"=>"Se eliminó el marca ".$nombreMarca,
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

				 				window.location = "altas-control-vehicular";
				 			}

				 		});


				</script>';
		}


	}

}










}



?>