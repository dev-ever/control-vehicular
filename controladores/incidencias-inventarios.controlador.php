<?php 

class ControladorIncidenciasInventarios{  
   
 
	/*=============================================
	MOSTRAR 
	=============================================*/

	static public function ctrMostrarIncidenciaInventarios($item, $valor){

		$tabla = "tb_incidencia_inventarios";

		$respuesta = ModeloIncidenciaInventario::mdlMostrarIncidenciasInventario($tabla, $item, $valor);

		return $respuesta;
	}



		static public function ctrCrearIncidenciaInventarios(){

		if(isset($_POST["nvaSolicitudInventario"])){

			if(preg_match('/^[^<>\'´´]+$/', $_POST["nvaSolicitudVehiculo"]) && 
			   preg_match('/^[^<>\'´´]+$/', $_POST["nvaDescripcionInventario"])){

				$datos = array("vehiculo_id" => strtoupper($_POST["nvaSolicitudInventario"]),
							   "responsable_id" => $_POST["nvaSolicitudUsuario"],
							   "fecha" => $_POST["nvaFechaInventario"],
							   "titulo" => $_POST["nvaSolicitudVehiculo"],
							   "descripcion" => $_POST["nvaDescripcionInventario"],
							   "created_at" => date("Y-m-d H:i:s"));

			    $tabla = "tb_incidencia_inventarios";

			   $respuesta = ModeloIncidenciaInventario::mdlIngresarIncidenciaInventario($tabla, $datos);

			    if($respuesta == "ok"){

			    	$nombreEquipo = gethostbyaddr($_SERVER['REMOTE_ADDR']);
			     	$ipCliente = $_SERVER['REMOTE_ADDR'];

			     	$respuestaUsuario = ControladorUsuarios::ctrMostrarUsuarios("idResponsable", $_SESSION["idVehicular"]);

			     	$table = "log";
			     	$data = array("actividad" => "El usuario: ".$respuestaUsuario["responsable"]." agregó solicitud de inventario: ".$_POST["nvaSolicitudVehiculo"],
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
							  title: "La incidencia de inventario ha sido guardado correctamente!",
							  showConfirmButton: true,
							  allowOutsideClick: false,
							  confirmButtonText: "Aceptar"
					
							}).then((result)=> {

					 			if(result.value){

					 				window.location = "historial-inventarios";
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
									window.location = "historial-inventarios";
								}

							}); 

						

					</script>';
			}
		}
	}





}


?>