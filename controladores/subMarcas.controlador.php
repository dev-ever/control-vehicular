<?php 

	
class ControladorSubMarcas{
 

	/*============================================= 
	MOSTRAR MARCAS
	=============================================*/

	static public function ctrMostrarSubMarcas($item, $valor){

		$tabla = "tb_subMarca";

		$respuesta = ModeloSubMarcas::mdlMostrarSubMarcas($tabla, $item, $valor);

		return $respuesta;
	}




	static public function ctrCrearNuevaSubMarca(){

		if(isset($_POST["nuevaSubMarca"])){

			if(preg_match('/^[^<>\'´´]+$/', $_POST["nuevaSubMarca"])){

				date_default_timezone_set("America/Mexico_City"); 

				$tabla = "tb_subMarca";

				$datos = array("submarca" => strtoupper($_POST["nuevaSubMarca"]),
								"created_at" => date("Y-m-d H:i:s"),
								"usuario_id" => $_SESSION["idVehicular"],
								"marca_id" => $_POST["nuevaMarcaSub"]);

				$respuesta = ModeloSubMarcas::mdlIngresarSubMarca($tabla, $datos);

				if($respuesta == "ok"){

					echo '<script>

						Swal.fire({
							position: "center",
							icon: "success",
							title: "La submarca ha sido agregado correctamente",
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
						$data = array("actividad"=>"Registro de nueva submarca ".$_POST["nuevaSubMarca"],
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
						title: "¡La submarca no puede ir vacio o llevar caracteres especiales!",
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

static public function ctrEditarSubMarca(){

		if(isset($_POST["editarSubMarca"])){

			if(preg_match('/^[^<>\'´´]+$/', $_POST["editarSubMarca"])){

				date_default_timezone_set("America/Mexico_City"); 

				$tabla = "tb_subMarca";
				$datos = array("submarca" => strtoupper($_POST["editarSubMarca"]),
								"created_at" => date("Y-m-d H:i:s"),
								"usuario_id" => $_SESSION["idVehicular"],
								"idSubmarca" => $_POST["idSubMarca"]);

				$respuesta = ModeloSubMarcas::mdlEditarSubMarca($tabla, $datos);

				if($respuesta == "ok"){

					echo '<script>

						Swal.fire({
							position: "center",
							icon: "success",
							title: "La submarca ha sido editado correctamente",
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
						$data = array("actividad"=>"Se editó la submarca ".$_POST["editarSubMarca"],
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
						title: "¡La submarca no puede ir vacio o llevar caracteres especiales!",
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





static public function ctrBorrarSubMarca(){

	if(isset($_GET["submarca"])){

		date_default_timezone_set("America/Mexico_City"); 

		$tabla = "tb_subMarca";
		$datos = $_GET["submarca"];

		$itemSubmarca = "idSubmarca";
		$valorSubmarca = $_GET["submarca"];

		$subMarcas = ControladorSubMarcas::ctrMostrarSubMarcas($itemSubmarca, $valorSubmarca);
		$nombreSubMarca = $subMarcas["submarca"];

		$respuesta = ModeloSubMarcas::mdlBorrarSubMarca($tabla, $datos);

		if($respuesta == "ok"){

			$nombreEquipo = gethostbyaddr($_SERVER['REMOTE_ADDR']);
			$ipCliente = $_SERVER['REMOTE_ADDR'];

			$table = "log";
			$data = array("actividad"=>"Se eliminó la submarca ".$nombreSubMarca,
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
						  title: "La submarca ha sido borrado correctamente!",
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


