<?php 

class ControladorPerfiles{
   

	/*=============================================
	MOSTRAR USUARIO
	=============================================*/

	static public function ctrMostrarPerfiles($item, $valor){

		$tabla = "tb_perfil_responsable";

		$respuesta = ModeloPerfiles::mdlMostrarPerfiles($tabla, $item, $valor);

		return $respuesta;
	}

	static public function ctrMostrarPerfilesVehicular($item, $valor){

		$tabla = "tb_perfil_responsable";

		$respuesta = ModeloPerfiles::mdlMostrarPerfilesVehicular($tabla, $item, $valor);

		return $respuesta;
	}


	

static public function ctrIngresoPerfil(){

		if(isset($_POST["nuevoPerfil"])){

			if(preg_match('/^[^<>\'´´]+$/', $_POST["nuevoPerfil"]) && 
			   preg_match('/^[^<>\'´´]+$/', $_POST["nuevoDescripcionPerfil"])){


			   	$datos = array("perfil" => $_POST["nuevoPerfil"],
			   					"observaciones" => $_POST["nuevoDescripcionPerfil"],
							    "created_at" => date("Y-m-d H:i:s"),
							    "usuario_id" => $_SESSION["idVehicular"]);

			   $tabla = "tb_perfil_responsable";
			   $respuesta = ModeloPerfiles::mdlIngresarPerfil($tabla, $datos);

			     if($respuesta == "ok"){

			     	$nombreEquipo = gethostbyaddr($_SERVER['REMOTE_ADDR']);
			     	$ipCliente = $_SERVER['REMOTE_ADDR'];

			     	$respuestaUsuario = ControladorUsuarios::ctrMostrarUsuarios("idResponsable", $_SESSION["idVehicular"]);

			     	$table = "log";
			     	$data = array("actividad"=> "El usuario: ".$respuestaUsuario["responsable"]." agregó el perfil: ".$_POST["nuevoPerfil"],
						     		"tipo"=>"Alta",
						     		"usuario_id"=>$_SESSION["idVehicular"],
						     		"private_id"=> $nombreEquipo,
						     		"public_id"=>$ipCliente,
						     		"eject"=>date("Y-m-d H:i:s"));

			     	$respuestaLog = ModeloLogs::mdlAgregarLog($table,$data);


			   		echo '<script>

			   				Swal.fire({
							  position: "center",
							  icon: "success",
							  title: "El perfil ha sido guardado correctamente!",
							  showConfirmButton: true,
							  confirmButtonText: "Aceptar"
					
							}).then((result)=> {

					 			if(result.value){

					 				window.location = "perfiles";
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
									window.location = "perfiles";
								}

							}); 

						

					</script>';

			}


	}

}







static public function ctrEditarPerfil(){

		if(isset($_POST["editarValorPerfil"])){

			if(preg_match('/^[^<>\'´´]+$/', $_POST["editarPerfil"]) && 
			   preg_match('/^[^<>\'´´]+$/', $_POST["editarDescripcionPerfil"])){


			   	$datos = array("perfil" => $_POST["editarPerfil"],
			   					"observaciones" => $_POST["editarDescripcionPerfil"],
							    "usuario_id" => $_SESSION["idVehicular"],
								"idPerfil" => $_POST["editarValorPerfil"]);

			   $tabla = "tb_perfil_responsable";

			   $respuesta = ModeloPerfiles::mdlEditarPerfil($tabla, $datos);

			     if($respuesta == "ok"){

				     	$nombreEquipo = gethostbyaddr($_SERVER['REMOTE_ADDR']);
				     	$ipCliente = $_SERVER['REMOTE_ADDR'];

				     	$respuestaUsuario = ControladorUsuarios::ctrMostrarUsuarios("idResponsable", $_SESSION["idVehicular"]);

				     	$table = "log";
				     	$data = array("actividad"=> "El usuario: ".$respuestaUsuario["responsable"]." editó de perfil: ".$_POST["editarPerfil"],
							     		"tipo"=>"Edición",
							     		"usuario_id"=>$_SESSION["idVehicular"],
							     		"private_id"=> $nombreEquipo,
							     		"public_id"=>$ipCliente,
							     		"eject"=>date("Y-m-d H:i:s"));

				     	$respuestaLog = ModeloLogs::mdlAgregarLog($table,$data);




			   		echo '<script>

			   				Swal.fire({
							  position: "center",
							  icon: "success",
							  title: "El perfil ha sido editado correctamente!",
							  showConfirmButton: true,
							  confirmButtonText: "Aceptar"
					
							}).then((result)=> {

					 			if(result.value){

					 				window.location = "perfiles";
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
									window.location = "perfiles";
								}

							}); 

						

					</script>';

			}


	}

}





static public function ctrBorrarPerfil(){

	if(isset($_GET["qd"])){

		$tabla = "tb_perfil_responsable";
		$datos = $_GET["qd"];

		$resperfil = ControladorPerfiles::ctrMostrarPerfiles("idPerfil", $datos);
		$perfil = $resperfil["perfil"];

		$respuesta = ModeloPerfiles::mdlBorrarPerfil($tabla, $datos);

		if($respuesta == "ok"){

				$nombreEquipo = gethostbyaddr($_SERVER['REMOTE_ADDR']);
				$ipCliente = $_SERVER['REMOTE_ADDR'];

				$respuestaUsuario = ControladorUsuarios::ctrMostrarUsuarios("idResponsable", $_SESSION["idVehicular"]);
				$nombre = $respuestaUsuario["responsable"];

				$table = "log";
				$data = array("actividad" => "El usuario: ".$nombre." eliminó el perfil: ".$perfil,
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
						  title: "El perfil: '.$perfil.' ha sido borrado correctamente!",
						  showConfirmButton: true,
						  confirmButtonText: "Aceptar"
				
						}).then((result)=> {

				 			if(result.value){

				 				window.location = "perfiles";
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

									window.location = "perfiles";
								}

							});


					 </script>';



		}



	}

}




  













}







 ?>