<?php 

class ControladorAreasNegocios{  
   
 
	/*=============================================
	MOSTRAR AREAS
	=============================================*/

	static public function ctrMostrarAreasNegocios($item, $valor){

		$tabla = "tb_areas_vehiculos";

		$respuesta = ModeloAreasNegocios::mdlMostrarAreasNegocios($tabla, $item, $valor);

		return $respuesta;
	}
 


	static public function ctrCrearAreaNegocio(){

		if(isset($_POST["nuevoNombreNegocio"])){

			if(preg_match('/^[^<>\'´´]+$/', $_POST["nuevoNombreNegocio"])){

				$datos = array("area" => strtoupper($_POST["nuevoNombreNegocio"]),
							   "created_at" => date("Y-m-d H:i:s"),
							   "usuario_id" => $_SESSION["idVehicular"]);

			    $tabla = "tb_areas_vehiculos";

			   $respuesta = ModeloAreasNegocios::mdlIngresarAreaNegocio($tabla, $datos);

			    if($respuesta == "ok"){

			    	$nombreEquipo = gethostbyaddr($_SERVER['REMOTE_ADDR']);
			     	$ipCliente = $_SERVER['REMOTE_ADDR'];

			     	$respuestaUsuario = ControladorUsuarios::ctrMostrarUsuarios("idResponsable", $_SESSION["idVehicular"]);

			     	$table = "log";
			     	$data = array("actividad" => "El usuario: ".$respuestaUsuario["responsable"]." agregó el negocio: ".$_POST["nuevoNombreNegocio"],
						     		"tipo" => "Alta",
						     		"usuario_id" => $_SESSION["idVehicular"],
						     		"private_id" => $nombreEquipo,
						     		"public_id" => $ipCliente,
						     		"eject" => date("Y-m-d H:i:s"));

			     	$respuestaLog = ModeloLogs::mdlAgregarLog($table,$data);

			    	echo '<script>

			   				Swal.fire({
							  position: "center",
							  icon: "success",
							  title: "El área ha sido guardado correctamente!",
							  showConfirmButton: true,
							  confirmButtonText: "Aceptar"
					
							}).then((result)=> {

					 			if(result.value){

					 				window.location = "unidad-negocios";
					 			}

					 		});

			   			</script>';


			    }


			}else{

				echo '<script>

						Swal.fire({
							  position: "center",
							  icon: "error",
							  title: "¡Los datos no puede ir vacio o llevar caracteres especiales!",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							

							}).then((result)=> {

								if(result.value){
									window.location = "unidad-negocios";
								}

							}); 

						

					</script>';
			}
		}
	}






	static public function ctrEditarAreaNegocio(){

		if(isset($_POST["valorNegocio"])){

			if(preg_match('/^[^<>\'´´]+$/', $_POST["editarNombreNegocio"])){

				$datos = array("area" => strtoupper($_POST["editarNombreNegocio"]),
							   "created_at" => date("Y-m-d H:i:s"),
							   "usuario_id" => $_SESSION["idVehicular"],
							   "idAreaVehiculo" => $_POST["valorNegocio"]);

			    $tabla = "tb_areas_vehiculos";

			   $respuesta = ModeloAreasNegocios::mdlEditarAreaNegocio($tabla, $datos);

			    if($respuesta == "ok"){

			    	$nombreEquipo = gethostbyaddr($_SERVER['REMOTE_ADDR']);
			     	$ipCliente = $_SERVER['REMOTE_ADDR'];

			     	$respuestaUsuario = ControladorUsuarios::ctrMostrarUsuarios("idResponsable", $_SESSION["idVehicular"]);

			     	$table = "log";
			     	$data = array("actividad" => "El usuario: ".$respuestaUsuario["responsable"]." edito el negocio: ".$_POST["editarNombreNegocio"],
						     		"tipo" => "Edición",
						     		"usuario_id" => $_SESSION["idVehicular"],
						     		"private_id" => $nombreEquipo,
						     		"public_id" => $ipCliente,
						     		"eject" => date("Y-m-d H:i:s"));

			     	$respuestaLog = ModeloLogs::mdlAgregarLog($table,$data);

			    	echo '<script>

			   				Swal.fire({
							  position: "center",
							  icon: "success",
							  title: "El área ha sido editado correctamente!",
							  showConfirmButton: true,
							  confirmButtonText: "Aceptar"
					
							}).then((result)=> {

					 			if(result.value){

					 				window.location = "unidad-negocios";
					 			}

					 		});

			   			</script>';


			    }


			}else{

				echo '<script>

						Swal.fire({
							  position: "center",
							  icon: "error",
							  title: "¡Los datos no puede ir vacio o llevar caracteres especiales!",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							

							}).then((result)=> {

								if(result.value){
									window.location = "unidad-negocios";
								}

							}); 

						

					</script>';
			}
		}
	}




	static public function ctrBorrarAreaNegocio(){

		if(isset($_GET["q"])){

			$tabla = "tb_areas_vehiculos";
			$datos = $_GET["q"];

			$resArea = ControladorAreasNegocios::ctrMostrarAreasNegocios("idAreaVehiculo", $datos);
			$area = $resArea["area"];

			$respuesta = ModeloAreasNegocios::mdlBorrarAreaNegocio($tabla, $datos);

			if($respuesta == "ok"){

					$nombreEquipo = gethostbyaddr($_SERVER['REMOTE_ADDR']);
					$ipCliente = $_SERVER['REMOTE_ADDR'];

					$respuestaUsuario = ControladorUsuarios::ctrMostrarUsuarios("idResponsable", $_SESSION["idVehicular"]);
					$nombre = $respuestaUsuario["responsable"];

					$table = "log";
					$data = array("actividad" => "El usuario: ".$nombre." eliminó el el negocio: ".$area,
									"tipo" => "Eliminación",
									"usuario_id" => $_SESSION["idVehicular"],
									"private_id" => $nombreEquipo,
									"public_id" => $ipCliente,
									"eject"=>date("Y-m-d H:i:s"));

					$respuestaLog = ModeloLogs::mdlAgregarLog($table,$data);

					echo '<script>
								Swal.fire({
								  position: "center",
								  icon: "success",
								  title: "El área: '.$area.' ha sido borrado correctamente!",
								  showConfirmButton: true,
								  confirmButtonText: "Aceptar"
						
								}).then((result)=> {

						 			if(result.value){

						 				window.location = "unidad-negocios";
						 			}

						 		});


						</script>';


			}else if($respuesta == "error"){

				echo '<script>

							Swal.fire({
								position:"center",
								icon:"error",
								title:"No se pudó eliminar, ya que tiene registro en el sistema",
								showConfirmButton:true,
								allowOutsideClick: false,
								confirmButtonText: "Aceptar"

								}).then((result) => {

									if(result.value){

										window.location = "unidad-negocios";
									}

								});


						 </script>';

			}

		}

	}







}



?>