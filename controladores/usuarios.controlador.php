<?php 
  
	 
class ControladorUsuarios{
   

	/*=============================================
	MOSTRAR USUARIO
	=============================================*/

	static public function ctrMostrarUsuarios($item, $valor){

		$tabla = "tb_responsables";  

		$respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);

		return $respuesta;
	}


	static public function ctrMostrarUsuariosGral($item, $valor){

		$tabla = "tb_responsables";

		$respuesta = ModeloUsuarios::mdlMostrarUsuariosGral($tabla, $item, $valor);

		return $respuesta;
	}





static public function ctrIngresoUsuario(){

		if(isset($_POST["ingUsuario"])){

			if(preg_match('/^[^<>\'´´]+$/', $_POST["ingUsuario"]) && 
			   preg_match('/^[^<>\'´´]+$/', $_POST["ingPassword"])){

				 $encriptar = crypt($_POST["ingPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
				
				$tabla = "tb_responsables";
				$item = "usuario";

				$valor = $_POST["ingUsuario"];

				$respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);

				// var_dump($respuesta);
				if(is_array($respuesta)){

					if($respuesta["usuario"] == $_POST["ingUsuario"] && $respuesta["password"] == $encriptar){

						if($respuesta["estado"] == 1){
							$_SESSION["iniciarSesionVehicular"] = "ok";
							$_SESSION["idVehicular"] = $respuesta["idResponsable"];
							$_SESSION["nombreVehicular"] = $respuesta["responsable"];
							$_SESSION["usuarioVehicular"] = $respuesta["usuario"];
							$_SESSION["fotoVehicular"] = $respuesta["foto"];
							$_SESSION["perfilVehicular"] = $respuesta["perfil_id"];
							$_SESSION["fechaVehicular"] = $respuesta["fecha"];
							$_SESSION["emailVehicular"] = $respuesta["email"];
							$_SESSION["unidadVehicular"] = $respuesta["unidad_id"];

							/*=============================================
							REGISTRAR FECHA PARA SABER EL ÚLTIMO LOGIN
							=============================================*/

							date_default_timezone_set('America/Mexico_City');

							$fecha = date('Y-m-d');
							$hora = date('H:i:s');

							$fechaActual = $fecha.' '.$hora;

							$item1 = "ultimoLogin";
							$valor1 = $fechaActual;

							$item2 = "idResponsable";
							$valor2 = $respuesta["idResponsable"];


							$ultimoLogin = ModeloUsuarios::mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2);

							if($ultimoLogin == "ok"){

								if($respuesta["session_log"] == 0){

										$itemx = "session_log";
										$valorx = 1;
										$item2x = "idResponsable";
										$valor2x = $respuesta["idResponsable"];

										ModeloUsuarios::mdlActualizarUsuario($tabla, $itemx, $valorx, $item2x, $valor2x);

									}


									$nombreEquipo = gethostbyaddr($_SERVER['REMOTE_ADDR']);
									$ipCliente = $_SERVER['REMOTE_ADDR'];

									$table = "log";
									$data = array("actividad"=>"Ingreso al sistema ".$_SESSION["nombreVehicular"],
													"tipo"=>"Ingreso",
													"usuario_id"=>$_SESSION["idVehicular"],
													"private_id"=> $nombreEquipo,
													"public_id"=>$ipCliente,
													"eject"=>date("Y-m-d H:i:s"));

									$respuestaLog = ModeloLogs::mdlAgregarLog($table,$data);



								echo 	'<script>

											window.location = "inicio";


										</script>';

								echo '<div class="alert alert-success text-center">Entrando..</div>';

							}				

						}else{

							echo '<br><div class="alert alert-warning text-center">El usuario aún no está activado</div>';
						}
						
					}else{

						echo '<br><div class="alert alert-danger text-center">¡ Usuario ó Contraseña Incorrecta !</div>';
					}

				}else{

					echo '<br><div class="alert alert-danger text-center">¡ Error al ingresar, vuelve a intentarlo !</div>';

				}

			}

		}

	}



/* =====================================
REGISTRO DE USUARIO           
========================================*/
	static public function ctrCrearUsuario()
	{
		if(isset($_POST["nuevoPerfil"])) {
			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombre"]) && 
			   // preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoUsuario"]) && 
			   preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i', $_POST["nuevoEmail"]) &&
			   preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoPassword"])){

				date_default_timezone_set("America/Mexico_City");

				//GENERAR EL USUARIO DE 6 caracteres
				$nuevoUsuario = ControladorUsuarios::idUsuarioRand();

			   	/*=====================================
			   	VALIDAR IMAGE
			   	======================================*/
			   	$ruta =  "";
			   	$ruta2 =  "";

			   	if(isset($_FILES["nuevaFoto"]["tmp_name"])){

			   		list($ancho, $alto) = getimagesize($_FILES["nuevaFoto"]["tmp_name"]);

			   		$nuevoAncho = 500;

			   		$nuevoAlto = 500;

			   		/*=============================================
					CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
					=============================================*/
					$urlSvr = ControladorRutas::ctrUrlFrontEnd();
					$urlBase = explode('/', $urlSvr); 

					$ruta = "/".$urlBase[3] . "/vistas/img/usuarios/".$nuevoUsuario."/";



					$directorio = $_SERVER['DOCUMENT_ROOT'].$ruta;

					
					
					if(!file_exists($directorio)){

						mkdir($directorio, 0777, true);

					}

				
					/*=============================================
					DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
					=============================================*/

					if($_FILES["nuevaFoto"]["type"] == "image/jpeg"){

					/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
					=============================================*/
						$aleatorio = mt_rand(100,999);

						$ruta2 = "vistas/img/usuarios/".$nuevoUsuario."/".$aleatorio.".jpg";

						$origen = imagecreatefromjpeg($_FILES["nuevaFoto"]["tmp_name"]);

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto,$ancho, $alto);

						imagejpeg($destino, $ruta2);

					}

					if($_FILES["nuevaFoto"]["type"] == "image/png"){

					/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
					=============================================*/
						$aleatorio = mt_rand(100,999);

						$ruta2 = "vistas/img/usuarios/".$nuevoUsuario."/".$aleatorio.".png";

						$origen = imagecreatefrompng($_FILES["nuevaFoto"]["tmp_name"]);

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagealphablending($destino, FALSE);

						imagesavealpha($destino, TRUE);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagepng($destino, $ruta2);

					}
			   	}


			   	$tabla = "tb_responsables";

			    $encriptar = crypt($_POST["nuevoPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

			    $datos = array("responsable" => $_POST["nuevoNombre"],
							   "usuario" => $nuevoUsuario,
							   "email" => $_POST["nuevoEmail"],
							   "password" => $encriptar,
							   "foto" => $ruta2,
							   "perfil_id" => $_POST["nuevoPerfil"], 
							   "estado" => 0,
							   "fecha" => date("Y-m-d"),
							   "ultimoLogin" => date("Y-m-d H:i:s"), //"0000:00:00 00:00:00",
							   "unidad_id" => $_POST["unidadNegocio"],
							   "session_log" => 0,
							   "autorizador" => 0,
							   "created_at" => date("Y-m-d H:i:s"),
							   "usuario_id" => $_SESSION["idVehicular"]);

			    // var_dump($datos);

			   $respuesta = ModeloUsuarios::mdlIngresarUsuario($tabla, $datos);


			   if($respuesta == "ok"){

			   		echo '<script>

			   				Swal.fire({
							  position: "center",
							  icon: "success",
							  title: "El usuario ha sido guardado correctamente!",
							  showConfirmButton: true,
							  confirmButtonText: "Aceptar"
					
							}).then((result)=> {

					 			if(result.value){

					 				window.location = "usuarios";
					 			}

					 		});

			   			</script>';


			   }


			}else{

				echo '<script>

						Swal.fire({
							  position: "center",
							  icon: "error",
							  title: "¡El usuario no puede ir vacio o llevar caracteres especiales!",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							

							}).then((result)=> {

								if(result.value){
									window.location = "usuarios";
								}

							}); 

						

					</script>';
			}

		} 

	}





/*=============================================
	EDITAR USUARIO
=============================================*/

public function ctrEditarUsuario(){

	if(isset($_POST["responsable_id"])){

		if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarNombre"]) &&
		   preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i', $_POST["editarEmail"])) {
				   
			/*=============================================
				VALIDAR IMAGEN
			=============================================*/
				/*=============================================
				  CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
				=============================================*/
				$urlSvr = ControladorRutas::ctrUrlFrontEnd();
				$urlBase = explode('/', $urlSvr); 


				$ruta = $_POST["fotoActual"];   // vistas/img/usuarios/tclyzP/903.png
				$ruta2 = $_POST["fotoActual"];

				$nuevoUsuario = ControladorUsuarios::idUsuarioRand();
				
				

				$usuarioEditado = $nuevoUsuario;

				if(empty($_POST["editarUsuario2"])){

					$directorio = $_SERVER['DOCUMENT_ROOT']."/".$urlBase[3]."/vistas/img/usuarios/".$nuevoUsuario."/";
					$usuarioEditado = $nuevoUsuario;

				}else{

					$directorio = $_SERVER['DOCUMENT_ROOT']."/".$urlBase[3]."/vistas/img/usuarios/".$_POST["editarUsuario2"]."/";
					$usuarioEditado = $_POST["editarUsuario2"];

				}



				if(isset($_FILES["editarFoto"]["tmp_name"]) &&  !empty($_FILES["editarFoto"]["tmp_name"])){

					list($ancho, $alto) = getimagesize($_FILES["editarFoto"]["tmp_name"]);

					$nuevoAncho = 500;
					$nuevoAlto = 500;

						/*=============================================
						PREGUNTAMOS SI EXISTE OTRA IMAGEN EN LA BASE DE DATOS
						=============================================*/
						if(!empty($_POST["fotoActual"])){

							unlink($_POST["fotoActual"]);

						}

						if(!file_exists($directorio)){

							mkdir($directorio, 0777, true);
						}
					


						/*=============================================
						DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
						=============================================*/

						if($_FILES["editarFoto"]["type"] == "image/jpeg"){

						/*=============================================
							GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/
							 $aleatorio = mt_rand(100,999);

							// $ruta2 = "vistas/img/usuarios/".$_POST["editarUsuario2"]."/".$aleatorio.".jpg";
							$ruta2 = "vistas/img/usuarios/".$usuarioEditado."/".$aleatorio.".jpg";


							$origen = imagecreatefromjpeg($_FILES["editarFoto"]["tmp_name"]);

							$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

							imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
							
							imagejpeg($destino, $ruta2);

						}

						 if($_FILES["editarFoto"]["type"] == "image/png"){

						/*=============================================
							GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/
							$aleatorio = mt_rand(100,999);

							$ruta2 = "vistas/img/usuarios/".$usuarioEditado."/".$aleatorio.".png";

							$origen = imagecreatefrompng($_FILES["editarFoto"]["tmp_name"]);

							$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

							imagealphablending($destino, FALSE);

							imagesavealpha($destino, TRUE);

							imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

							imagepng($destino, $ruta2);

						}
				   	}

				   	

				   	$tabla = "tb_responsables";

				   	if($_POST["editarPassword"] != ""){

				   		if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["editarPassword"])){

				   			  $encriptar = crypt($_POST["editarPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

				   		}else{

				   			echo '<script>

							
							Swal.fire({

								  position: "center",
								  icon: "error",
								  title: "¡La contraseña no puede ir vacio o llevar caracteres especiales!",
								  showConfirmButton: true,
								  confirmButtonText: "Cerrar"
								

								}).then((result)=> {

									if(result.value){
										window.location = "usuarios";
									}

								}); 
							

						</script>';

				   		}


				   	}else{

				   		$encriptar = $_POST["passwordActual"];
				   	}

				   	$datos = array("responsable" => $_POST["editarNombre"],
				   					"usuario" => $usuarioEditado,
				   				    "email"  => $_POST["editarEmail"],
				   				    "password" => $encriptar,
				   				    "foto" => $ruta2,
				   				    "perfil_id" => $_POST["editarPerfil"],
				   				    "unidad_id" => $_POST["editarArea"],
				   				    "idResponsable" => $_POST["responsable_id"]); 

				   	$respuesta = ModeloUsuarios::mdlEditarUsuario($tabla, $datos);

				   	if($respuesta == "ok"){

				   		echo '<script>

							Swal.fire({
								  position: "center",
								  icon: "success",
								  title: "El usuario ha sido editado correctamente!",
								  showConfirmButton: true,
								  confirmButtonText: "Aceptar"
						
								}).then((result)=> {

						 			if(result.value){

						 				window.location = "usuarios";
						 			}

						 		});

							

						</script>';
				   	}
				   


		}else{

				echo '<script>

							Swal.fire({
								  position: "center",
								  icon: "error",
								  title: "¡El usuario no puede ir vacio o llevar caracteres especiales!",
								  showConfirmButton: true,
								  confirmButtonText: "Cerrar"
								

								}).then((result)=> {

									if(result.value){
										window.location = "usuarios";
									}

								}); 
							
						</script>'; 

		}

	}



}




static public function ctrBorrarUsuario(){

	if(isset($_GET["idUsuario"])){

		$tabla = "tb_responsables";
		$datos = $_GET["idUsuario"];

		$respuestaEliminar = ControladorUsuarios::ctrMostrarUsuarios("idResponsable", $_SESSION["idVehicular"]);
		$nombreEliminar = $respuestaEliminar["responsable"];

		$respuesta = ModeloUsuarios::mdlBorrarUsuario($tabla, $datos);


		if($respuesta == "ok"){


			if($_GET["fotoUsuario"]!= ""){

				unlink($_GET["fotoUsuario"]);

				rmdir('vistas/img/usuarios/'.$_GET["usuario"]);
			}

				$nombreEquipo = gethostbyaddr($_SERVER['REMOTE_ADDR']);
				$ipCliente = $_SERVER['REMOTE_ADDR'];

				$respuestaUsuario = ControladorUsuarios::ctrMostrarUsuarios("idResponsable", $_SESSION["idVehicular"]);
				$nombre = $respuestaUsuario["responsable"];

				$table = "log";
				$data = array("actividad" => "El usuario: ".$nombre." eliminó al usuario: ".$nombreEliminar,
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
						  title: "El usuario ha sido borrado correctamente!",
						  showConfirmButton: true,
						  confirmButtonText: "Aceptar"
				
						}).then((result)=> {

				 			if(result.value){
				 				window.location = "usuarios";
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

									window.location = "usuarios";
								}

							});


					 </script>';



		}



	}

}


	/*=============================================
	MOSTRAR USUARIO ACTIVOS EN SISTEMA
	=============================================*/

	static public function ctrMostrarUsuariosActivos($itemPerfil, $valorPerfil, $itemEstado, $valorEstado){

		$tabla = "tb_responsables";  

		$respuesta = ModeloUsuarios::mdlMostrarUsuariosActivos($tabla, $itemPerfil, $valorPerfil, $itemEstado, $valorEstado);

		return $respuesta;

	}


/*=============================================
	ACTUALIZAR USUARIO CAMPO PERSONZALIDADO EN SISTEMA
	=============================================*/

	static public function ctrActualizacionCampo($item,$valor,$item1,$valor1){

		$tabla = "tb_responsables";

		$respuesta = ModeloUsuarios::mdlActualizarUsuario($tabla,$item,$valor,$item1,$valor1);


		return $respuesta;

	}



	public function ctrEditarPerfil(){

		if(isset($_POST["idPerfilUsuario"])){


			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarNombre"]) &&
				 preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i', $_POST["editarEmail"])) {




			/*=============================================
				VALIDAR IMAGEN
			=============================================*/

				$ruta = $_POST["fotoActual"];

				if(isset($_FILES["editarFotoPerfil"]["tmp_name"]) &&  !empty($_FILES["editarFotoPerfil"]["tmp_name"])){

				   		list($ancho, $alto) = getimagesize($_FILES["editarFotoPerfil"]["tmp_name"]);
				   		$nuevoAncho = 500;
				   		$nuevoAlto = 500;

				   		/*=============================================
						CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
						=============================================*/

						$directorio = "vistas/img/usuarios/".$_POST["editarUsuario"];
						
						/*=============================================
						PREGUNTAMOS SI EXISTE OTRA IMAGEN EN LA BASE DE DATOS
						=============================================*/

						if(!empty($_POST["fotoActual"])){

							unlink($_POST["fotoActual"]);

						}else{

							mkdir($directorio, 0755);
						}
						

						/*=============================================
						DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
						=============================================*/

						if($_FILES["editarFotoPerfil"]["type"] == "image/jpeg"){

						/*=============================================
							GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/
							$aleatorio = mt_rand(100,999);

							$ruta = "vistas/img/usuarios/".$_POST["editarUsuario"]."/".$aleatorio.".jpg";

							$origen = imagecreatefromjpeg($_FILES["editarFotoPerfil"]["tmp_name"]);

							$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

							imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
							
							imagejpeg($destino, $ruta);

						}

						if($_FILES["editarFotoPerfil"]["type"] == "image/png"){

						/*=============================================
							GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/
							$aleatorio = mt_rand(100,999);

							$ruta = "vistas/img/usuarios/".$_POST["editarUsuario"]."/".$aleatorio.".png";

							$origen = imagecreatefrompng($_FILES["editarFotoPerfil"]["tmp_name"]);

							$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

							imagealphablending($destino, FALSE);

							imagesavealpha($destino, TRUE);

							imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

							imagepng($destino, $ruta);

						}
				   	}


				   	if($_POST["editarPassword"] != ""){

				   		if(preg_match('/^[^<>\'´´]+$/', $_POST["editarPassword"])){

				   			  $encriptar = crypt($_POST["editarPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

				   		}else{

				   			echo '<script>

							
							Swal.fire({

								  position: "center",
								  icon: "error",
								  title: "¡La contraseña no puede ir vacio o llevar caracteres especiales!",
								  showConfirmButton: true,
								  confirmButtonText: "Cerrar"
								

								}).then((result)=> {

									if(result.value){

										window.location = "index.php?ruta=perfil&idUsuario='.$_SESSION["idMonitoreo"].'";
									}

								}); 
							

						</script>';

				   		}


				   	}else{

				   		$encriptar = $_POST["passwordActual"];

				   	}

				   	$tabla = "tb_responsables";

				   	if($_SESSION["perfilVehicular"] == "1" || $_SESSION["perfilVehicular"] == "2"){

				   		
				   		$datos = array("nombre"=> $_POST["editarNombre"],
							   			"email"=>$_POST["editarEmail"],
							   			"password"=>$encriptar,
							   			"foto"=>$ruta,
							   			"perfil"=>$_POST["nuevoPerfil"],
							   			"id"=>$_POST["idPerfilUsuario"]);
	
				   	}else{

				   		$datos = array("nombre"=> $_POST["editarNombre"],
							   			"email"=>$_POST["editarEmail"],
							   			"password"=>$encriptar,
							   			"foto"=>$ruta,
							   			"perfil"=>$_SESSION["perfilVehicular"],
							   			"id"=>$_POST["idPerfilUsuario"]);

				   	}


				   	$respuesta = ModeloUsuarios::mdlEditarPerfil($tabla, $datos);

				   	if($respuesta == "ok"){

				   		echo '<script>

						   		Swal.fire({
						   			position: "center",
						   			icon: "success",
						   			title: "Tus datos ha sido actualizados correctamente!",
						   			showConfirmButton: true,
						   			confirmButtonText: "Aceptar"

						   			}).then((result)=> {

						   				if(result.value){

						   					window.location = "index.php?ruta=perfil&idUsuario='.$_SESSION["idMobiliario"].'";
						   				}

						   				});

						   		</script>';
				   			}
				  


			}else{


			echo '<script>

					Swal.fire({
						  position: "center",
						  icon: "error",
						  title: "¡El usuario no puede ir vacio o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						

						}).then((result)=> {

							if(result.value){
								window.location = "usuarios";
							}

						}); 
					
				</script>'; 





			}

		}

	}





	static public function idUsuarioRand($long = 6){

		$letras = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; // Solo letras
		$caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$usuario = '';

		$usuario .= $letras[random_int(0, strlen($letras) - 1)];

		for ($i = 1; $i < $long; $i++) {

			$usuario .= $caracteres[random_int(0, strlen($caracteres) - 1)];
		}

		return $usuario;

	}




	static public function ctrActualizarUsuarioAutorizador(){

		if(isset($_POST["nuevoAutorizador"])){


			   	$tabla = "tb_responsables"; 
			   	$item1 = "autorizador";
			   	$valor1 = $_POST["nuevoAutorizador"];
			   	$item2 = "idResponsable";
			   	$valor2 = $_POST["idAutorizaUsr"];


			   	$respuesta = ModeloUsuarios::mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2);

				if($respuesta == "ok"){

					echo '<script>

							Swal.fire({
								  position: "center",
								  icon: "success",
								  title: "¡ El autorizador actualizado correctamente !",
								  showConfirmButton: true,
								  confirmButtonText: "Aceptar"
						
								}).then((result)=> {

						 			if(result.value){
						 				window.location = "usuarios";
						 			}

						 		});

						</script>';
				   	



				}else{

					echo '<script>

							Swal.fire({
								  position: "center",
								  icon: "error",
								  title: "¡ No se pudo procesar !",
								  showConfirmButton: true,
								  confirmButtonText: "Aceptar"
						
								}).then((result)=> {

						 			if(result.value){

						 				window.location = "usuarios";
						 			}

						 		});

							

						</script>'; 
				 }



		}

	}






	static public function ctrActualizarUsuario($item1, $valor1, $item2, $valor2){

		$tabla = "tb_responsables";
		
		$respuesta = ModeloUsuarios::mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2);

		return $respuesta; 
	}



	static public function ctrActualizarPerfilUsuario(){

		if(isset($_POST["editarUsuarioPerfil"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarNombre"]) && 
			   preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i', $_POST["editarEmail"])){


				$urlSvr = ControladorRutas::ctrUrlFrontEnd();
				$urlBase = explode('/', $urlSvr); 


				$ruta = $_POST["fotoUsuarioActual"];   
				$ruta2 = $_POST["fotoUsuarioActual"];
			   	
				$nuevoUsuario = ControladorUsuarios::idUsuarioRand();
				$usuarioEditado = $nuevoUsuario;


				if(empty($_POST["editarUsuarioPerfil"])){

					$directorio = $_SERVER['DOCUMENT_ROOT']."/".$urlBase[3]."/vistas/img/usuarios/".$nuevoUsuario."/";
					$usuarioEditado = $nuevoUsuario;

				}else{

					$directorio = $_SERVER['DOCUMENT_ROOT']."/".$urlBase[3]."/vistas/img/usuarios/".$_POST["editarUsuarioPerfil"]."/";
					$usuarioEditado = $_POST["editarUsuarioPerfil"];

				}



				if(isset($_FILES["editarFotoPerfil"]["tmp_name"]) &&  !empty($_FILES["editarFotoPerfil"]["tmp_name"])){

					list($ancho, $alto) = getimagesize($_FILES["editarFotoPerfil"]["tmp_name"]);

					$nuevoAncho = 500;
					$nuevoAlto = 500;

	
						if(!empty($_POST["fotoUsuarioActual"])){

							unlink($_POST["fotoUsuarioActual"]);

						}

						if(!file_exists($directorio)){

							mkdir($directorio, 0777, true);
						}
					

						if($_FILES["editarFotoPerfil"]["type"] == "image/jpeg"){

							$aleatorio = mt_rand(100,999);

							$ruta2 = "vistas/img/usuarios/".$usuarioEditado."/".$aleatorio.".jpg";

							$origen = imagecreatefromjpeg($_FILES["editarFotoPerfil"]["tmp_name"]);

							$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

							imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
							
							imagejpeg($destino, $ruta2);

						}


						 if($_FILES["editarFotoPerfil"]["type"] == "image/png"){

							$aleatorio = mt_rand(100,999);

							$ruta2 = "vistas/img/usuarios/".$usuarioEditado."/".$aleatorio.".png";

							$origen = imagecreatefrompng($_FILES["editarFotoPerfil"]["tmp_name"]);

							$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

							imagealphablending($destino, FALSE);

							imagesavealpha($destino, TRUE);

							imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

							imagepng($destino, $ruta2);

						}

					}


					if($_POST["editarPassword"] != ""){

				   		if(preg_match('/^[^<>\'´´]+$/', $_POST["editarPassword"])){

				   			  $encriptar = crypt($_POST["editarPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

				   		}else{

				   			echo '<script>

							
							Swal.fire({

								  position: "center",
								  icon: "error",
								  title: "¡La contraseña no puede ir vacio o llevar caracteres especiales!",
								  showConfirmButton: true,
								  confirmButtonText: "Cerrar"
								

								}).then((result)=> {

									if(result.value){

										window.location = "mi-perfil";
									}

								}); 
							

						</script>';

				   		}


				   	}else{

				   		$encriptar = $_POST["passwordActual"];
				   	}


				$tabla = "tb_responsables";
				$datos = array("responsable" => $_POST["editarNombre"],
								"email" =>$_POST["editarEmail"],
								"password" => $encriptar,
								"foto" => $ruta2,
								"idResponsable" => $_POST["idUsuarioEditar"]);

				$respuesta = ModeloUsuarios::mdlEditarUsuarioPerfil($tabla, $datos);

				if($respuesta == "ok"){


					echo "<script> 

							$.toast({

									heading: 'Exito',
									text: '¡ Datos Actualizados !',
									icon: 'success', 
									position: 'top-right',
									showHideTransition: 'slide', 
									allowToastClose: true, 
									loader: true, 
									loaderBg: '#fff', 
									hideAfter: 2000, 
									afterHidden: function(){

										const success = true; 

										if (success) {

								            window.location.href = 'mi-perfil';

								        } else {

								        	$.toast({
								        		heading: 'Error',
								        		text: 'Algo salió mal. Por favor, inténtalo de nuevo.',
								        		icon: 'error',
								        		position: 'top-right'
								        	});
								        }

									}
									

								});

					      </script>";

				}


			}else{


				echo '<script>

							Swal.fire({
								  position: "center",
								  icon: "error",
								  title: "¡ No se pudo procesar !",
								  showConfirmButton: true,
								  confirmButtonText: "Aceptar"
						
								}).then((result)=> {

						 			if(result.value){

						 				window.location = "mi-perfil";
						 			}

						 		});

							

						</script>';



			}

		}

	}











	


}




 ?>