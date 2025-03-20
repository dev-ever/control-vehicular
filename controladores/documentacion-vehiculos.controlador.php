<?php 
use PHPMailer\PHPMailer\PHPMailer;   
use PHPMailer\PHPMailer\Exception;

class ControladorDocumentacionVehiculos{ 
  
 
	/*=============================================
	MOSTRAR PERFIlES 
	=============================================*/

	static public function ctrMostrarDocumentosVehiculos($item, $valor){

		$tabla = "tb_documentacion_vehiculos";

		$respuesta = ModeloDocumentosVehiculos::mdlMostrarDocumentosVehiculos($tabla, $item, $valor);

		return $respuesta;
	}




	static public function ctrActualizarDocumentoVehiculo($itemCampo1, $valorCampo1, $itemCampo2, $valorCampo2, $itemVehiculo, $valorVehiculo){

		$tabla = "tb_documentacion_vehiculos"; 

		$respuesta = ModeloDocumentosVehiculos::mdlActualizarDocumentoVehiculo($tabla, $itemCampo1, $valorCampo1, $itemCampo2, $valorCampo2, $itemVehiculo, $valorVehiculo);

		return $respuesta;
	}   





	static public function ctrActualizarFacturaVehiculo(){

		if(isset($_GET["facturaVe"])){
			
			$tabla = "tb_documentacion_vehiculos"; 

			$itemCampo1 = "factura";
			$valorCampo1 = "NULL";
			$itemCampo2 = "checkFactura";
			$valorCampo2 = 0;
			$itemVehiculo = "vehiculo_id";
			$valorVehiculo = $_GET["idVehiculo"];

			if($_GET["archivo"] != ""){

				unlink($_GET["archivo"]);
			}

		
			$respuesta = ModeloDocumentosVehiculos::mdlActualizarDocumentoVehiculo($tabla, $itemCampo1, $valorCampo1, $itemCampo2, $valorCampo2, $itemVehiculo, $valorVehiculo);

			if($respuesta == "ok"){

				echo '<script>

				Swal.fire({
					icon: "success",
					title: "Se ha removido el archivo correctamente", 
					showConfirmButton: true,
					allowOutsideClick: false,
					confirmButtonText: "Cerrar",
					closeOnConfirm: false

					}).then((result)=> {

						if(result.value){
							window.location = "alta-documentos";
						}

						})

						</script>';
					}
				}


			}


	static public function ctrActualizarPolizaVehiculo(){

		if(isset($_GET["polizaVe"])){
			
			$tabla = "tb_documentacion_vehiculos";

			$itemCampo1 = "poliza";
			$valorCampo1 = "NULL";
			$itemCampo2 = "checkPoliza";
			$valorCampo2 = 0;
			$itemVehiculo = "vehiculo_id";
			$valorVehiculo = $_GET["idVehiculo"];

			if($_GET["archivo"] != ""){

				unlink($_GET["archivo"]);
			}

		
			$respuesta = ModeloDocumentosVehiculos::mdlActualizarDocumentoVehiculo($tabla, $itemCampo1, $valorCampo1, $itemCampo2, $valorCampo2, $itemVehiculo, $valorVehiculo);

			if($respuesta == "ok"){

				echo '<script>

				Swal.fire({
					icon: "success",
					title: "Se ha removido el archivo correctamente", 
					showConfirmButton: true,
					allowOutsideClick: false,
					confirmButtonText: "Cerrar",
					closeOnConfirm: false

					}).then((result)=> {

						if(result.value){
							window.location = "alta-documentos";
						}

						})

						</script>';
					}
				}


			}

	static public function ctrActualizarTenenciaVehiculo(){

		if(isset($_GET["tenenciaVe"])){
			
			$tabla = "tb_documentacion_vehiculos";

			$itemCampo1 = "tenencia";
			$valorCampo1 = "NULL";
			$itemCampo2 = "checkTenencia";
			$valorCampo2 = 0;
			$itemVehiculo = "vehiculo_id";
			$valorVehiculo = $_GET["idVehiculo"];

			if($_GET["archivo"] != ""){

				unlink($_GET["archivo"]);
			}

			$respuesta = ModeloDocumentosVehiculos::mdlActualizarDocumentoVehiculo($tabla, $itemCampo1, $valorCampo1, $itemCampo2, $valorCampo2, $itemVehiculo, $valorVehiculo);

			if($respuesta == "ok"){
				echo '<script>
						Swal.fire({
							icon: "success",
							title: "Se ha removido el archivo correctamente", 
							showConfirmButton: true,
							allowOutsideClick: false,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false

							}).then((result)=> {

								if(result.value){
									window.location = "alta-documentos";
								}

								})

						</script>';
					}
				}
			}



	static public function ctrActualizarVerificacionVehiculo(){

		if(isset($_GET["verificacionVe"])){ 
			
			$tabla = "tb_documentacion_vehiculos";

			$itemCampo1 = "verificacion";
			$valorCampo1 = "NULL";
			$itemCampo2 = "checkVerificacion";
			$valorCampo2 = 0;
			$itemVehiculo = "vehiculo_id";
			$valorVehiculo = $_GET["idVehiculo"];

			if($_GET["archivo"] != ""){

				unlink($_GET["archivo"]);
			}

			$respuesta = ModeloDocumentosVehiculos::mdlActualizarDocumentoVehiculo($tabla, $itemCampo1, $valorCampo1, $itemCampo2, $valorCampo2, $itemVehiculo, $valorVehiculo);

			if($respuesta == "ok"){
				echo '<script>
						Swal.fire({
							icon: "success",
							title: "Se ha removido el archivo correctamente", 
							showConfirmButton: true,
							allowOutsideClick: false,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false

							}).then((result)=> {

								if(result.value){
									window.location = "alta-documentos";
								}

								})

						</script>';
					}
				}
		}




	static public function ctrActualizarPedimentoVehiculo(){

		if(isset($_GET["pedVe"])){ 
			
			$tabla = "tb_documentacion_vehiculos";

			$itemCampo1 = "pedimento";
			$valorCampo1 = "NULL";
			$itemCampo2 = "checkPedimento";
			$valorCampo2 = 0;
			$itemVehiculo = "vehiculo_id";
			$valorVehiculo = $_GET["idVehiculo"];

			if($_GET["archivo"] != ""){

				unlink($_GET["archivo"]);
			}

			$respuesta = ModeloDocumentosVehiculos::mdlActualizarDocumentoVehiculo($tabla, $itemCampo1, $valorCampo1, $itemCampo2, $valorCampo2, $itemVehiculo, $valorVehiculo);

			if($respuesta == "ok"){
				echo '<script>
						Swal.fire({
							icon: "success",
							title: "Se ha removido el archivo correctamente", 
							showConfirmButton: true,
							allowOutsideClick: false,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false

							}).then((result)=> {

								if(result.value){
									window.location = "alta-documentos";
								}

								})

						</script>';
			}
		}
	}




	static public function ctrActualizarTarjetaVehiculo(){

		if(isset($_GET["tcVe"])){ 
			
			$tabla = "tb_documentacion_vehiculos";

			$itemCampo1 = "tarjeta";
			$valorCampo1 = "NULL";
			$itemCampo2 = "checkTarjeta";
			$valorCampo2 = 0;
			$itemVehiculo = "vehiculo_id";
			$valorVehiculo = $_GET["idVehiculo"];

			if($_GET["archivo"] != ""){

				unlink($_GET["archivo"]);
			}

			$respuesta = ModeloDocumentosVehiculos::mdlActualizarDocumentoVehiculo($tabla, $itemCampo1, $valorCampo1, $itemCampo2, $valorCampo2, $itemVehiculo, $valorVehiculo);

			if($respuesta == "ok"){
				echo '<script>
						Swal.fire({
							icon: "success",
							title: "Se ha removido el archivo correctamente", 
							showConfirmButton: true,
							allowOutsideClick: false,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false

							}).then((result)=> {

								if(result.value){
									window.location = "alta-documentos";
								}

								})

						</script>';
			}
		}
	}





static public function ctrActualizarGarantiaVehiculo(){

		if(isset($_GET["pgVe"])){ 
			
			$tabla = "tb_documentacion_vehiculos";

			$itemCampo1 = "garantia";
			$valorCampo1 = "NULL";
			$itemCampo2 = "checkGarantia";
			$valorCampo2 = 0;
			$itemVehiculo = "vehiculo_id";
			$valorVehiculo = $_GET["idVehiculo"];

			if($_GET["archivo"] != ""){

				unlink($_GET["archivo"]);
			}

			$respuesta = ModeloDocumentosVehiculos::mdlActualizarDocumentoVehiculo($tabla, $itemCampo1, $valorCampo1, $itemCampo2, $valorCampo2, $itemVehiculo, $valorVehiculo);

			if($respuesta == "ok"){
				echo '<script>
						Swal.fire({
							icon: "success",
							title: "Se ha removido el archivo correctamente", 
							showConfirmButton: true,
							allowOutsideClick: false,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false

							}).then((result)=> {

								if(result.value){
									window.location = "alta-documentos";
								}

								})

						</script>';
			}
		}
	}





static public function ctrActualizarPermisoVehiculo(){

		if(isset($_GET["pVe"])){ 
			
			$tabla = "tb_documentacion_vehiculos";

			$itemCampo1 = "permiso";
			$valorCampo1 = "NULL";
			$itemCampo2 = "checkPermiso";
			$valorCampo2 = 0;
			$itemVehiculo = "vehiculo_id";
			$valorVehiculo = $_GET["idVehiculo"];

			if($_GET["archivo"] != ""){

				unlink($_GET["archivo"]);
			}

			$respuesta = ModeloDocumentosVehiculos::mdlActualizarDocumentoVehiculo($tabla, $itemCampo1, $valorCampo1, $itemCampo2, $valorCampo2, $itemVehiculo, $valorVehiculo);

			if($respuesta == "ok"){
				echo '<script>
						Swal.fire({
							icon: "success",
							title: "Se ha removido el archivo correctamente", 
							showConfirmButton: true,
							allowOutsideClick: false,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false

							}).then((result)=> {

								if(result.value){
									window.location = "alta-documentos";
								}

								})

						</script>';
			}
		}
	}




static public function ctrActualizarCompraVentaVehiculo(){

		if(isset($_GET["cvVe"])){ 
			
			$tabla = "tb_documentacion_vehiculos";

			$itemCampo1 = "compraVenta";
			$valorCampo1 = "NULL";
			$itemCampo2 = "checkCompraVenta";
			$valorCampo2 = 0;
			$itemVehiculo = "vehiculo_id";
			$valorVehiculo = $_GET["idVehiculo"];

			if($_GET["archivo"] != ""){

				unlink($_GET["archivo"]);
			}

			$respuesta = ModeloDocumentosVehiculos::mdlActualizarDocumentoVehiculo($tabla, $itemCampo1, $valorCampo1, $itemCampo2, $valorCampo2, $itemVehiculo, $valorVehiculo);

			if($respuesta == "ok"){
				echo '<script>
						Swal.fire({
							icon: "success",
							title: "Se ha removido el archivo correctamente", 
							showConfirmButton: true,
							allowOutsideClick: false,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false

							}).then((result)=> {

								if(result.value){
									window.location = "alta-documentos";
								}

								})

						</script>';
			}
		}
	}





static public function ctrActualizarUltimoTramiteVehiculo(){

		if(isset($_GET["utVe"])){ 
			
			$tabla = "tb_documentacion_vehiculos";

			$itemCampo1 = "ultimoTramite";
			$valorCampo1 = "NULL";
			$itemCampo2 = "checkUltimoTramite";
			$valorCampo2 = 0;
			$itemVehiculo = "vehiculo_id";
			$valorVehiculo = $_GET["idVehiculo"];

			if($_GET["archivo"] != ""){

				unlink($_GET["archivo"]);
			}

			$respuesta = ModeloDocumentosVehiculos::mdlActualizarDocumentoVehiculo($tabla, $itemCampo1, $valorCampo1, $itemCampo2, $valorCampo2, $itemVehiculo, $valorVehiculo);

			if($respuesta == "ok"){
				echo '<script>
						Swal.fire({
							icon: "success",
							title: "Se ha removido el archivo correctamente", 
							showConfirmButton: true,
							allowOutsideClick: false,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false

							}).then((result)=> {

								if(result.value){
									window.location = "alta-documentos";
								}

								})

						</script>';
			}
		}
	}





static public function ctrActualizarFacturaOrigenVehiculo(){

		if(isset($_GET["foVe"])){ 
			
			$tabla = "tb_documentacion_vehiculos";

			$itemCampo1 = "facturaOrigen";
			$valorCampo1 = "NULL";
			$itemCampo2 = "checkFacturaOrigen";
			$valorCampo2 = 0;
			$itemVehiculo = "vehiculo_id";
			$valorVehiculo = $_GET["idVehiculo"];

			if($_GET["archivo"] != ""){

				unlink($_GET["archivo"]);
			}

			$respuesta = ModeloDocumentosVehiculos::mdlActualizarDocumentoVehiculo($tabla, $itemCampo1, $valorCampo1, $itemCampo2, $valorCampo2, $itemVehiculo, $valorVehiculo);

			if($respuesta == "ok"){

				echo '<script>

						Swal.fire({
							icon: "success",
							title: "Se ha removido el archivo correctamente", 
							showConfirmButton: true,
							allowOutsideClick: false,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false

							}).then((result)=> {

								if(result.value){
									window.location = "alta-documentos";
								}

								})

						</script>';
			}
		}
	}






	static public function ctrEnviarEmailDocumentos(){

		if(isset($_POST["elementosEnviadosItem"])){

 			if(preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i', $_POST["nuevoCorreoEnvio"]) && 
 			   preg_match('/^[^<>\'´´]+$/', $_POST["elementosEnviadosItem"]) && 
 			   preg_match('/^[^<>\'´´]+$/', $_POST["datosVehiculo"])){

 				// $url = Rutas::ctrRuta();

 				$email = $_POST["nuevoCorreoEnvio"];
 				$datosVehiculo = $_POST["datosVehiculo"];

 				//PASAR A ARRAY
 				$rutaArray = json_decode($_POST["elementosEnviadosItem"], true);

 				foreach ($rutaArray as $filePath) {
					
					if(isset($filePath['rutaItem'])){

						$rutaItem2 = $filePath['rutaItem'];
						
						$file = explode("/", $rutaItem2);

						$stringFile .= $file[4]."<br>";

					}

				}

 				$mail = new PHPMailer;
				$mail->isSMTP();
				$mail->CharSet = "utf-8";
				$mail->SMTPAuth = true;
				$mail->SMTPSecure = "ssl";
				$mail->Host = "mail.frasangroup.com";
				$mail->Username = "notificaciones@frasangroup.com";
				$mail->Password = "Ag17771f6";
				$mail->Port = 465;
				$mail->From = "notificaciones@frasangroup.com";
				$mail->FromName = "Envio de solicitudes Control Vehicular";
				$mail->AddAddress($email);

				foreach ($rutaArray as $filePath) {

					if (isset($filePath['rutaItem'])) {

						$rutaItem = $filePath['rutaItem'];

						$mail->addAttachment($rutaItem);
					}

				}
				$mail->IsHTML(true);
				$mail->Subject = "Nueva solicitud de Control Vehicular ".$datosVehiculo;
				$mail->WordWrap = 50;
				$mail->msgHTML('<div style="width: 100%; background: #eee; position: relative; font-family: sans-serif;padding: 40px">

									<center>

										<img src="https://www.hubfrasangroup.com/cxpagar/vistas/img/plantilla/frasan-logo-correos.png" alt="" style="padding: 20px; width: 15%;">

									</center>

									<div style="position: relative;margin: auto;width: 600px; background: white; padding: 20px">

										<center>

											<img src="https://www.hubfrasangroup.com/cxpagar/vistas/img/plantilla/email.png" style="padding: 20px; width: 15%" >

												<h3 style="font-weight: 100; color: #444; font-family: Century-Gothic,Arial";>SOLICITUD ATENDIDA | FRASAN CONTROL VEHICULAR </h3>

												<h3 style="font-weight: 100; color: #444; font-family: Century-Gothic,Arial;text-align: center";>Descripción del Vehiculo, '.$datosVehiculo.'<br></h3>

												<h5>'.$stringFile.'</h5>	

											<hr style="border: 1px solid #ccc; width: 90%">

												<h4 style="font-weight: 100; color: #444; font-family: Century-Gothic,Arial";><strong>El área de control vehicular ha enviado su requerimiento.</strong></h4>

											<hr style="border: 1px solid #ccc; width: 90%">

												<h4 style="font-size:10px;font-weight: bold; color:#444;padding: 0 20px;font-family: Century-Gothic,Arial;text-transform:uppercase;"> Sistema de Notificaciones </h4>

										</center>

									</div>


								</div>');


								$envio = $mail->Send();

								if(!$envio){

										echo '<script>

												Swal.fire({

													position: "center",
													icon: "error",
													title: "Se no pudo enviar",
													text:"¡Ha ocurrido un problema enviando notificación a: '.$email.$mail->ErrorInfo.' !",
													showConfirmButton: true
											
													}).then((result)=> {

														if(result.value){

															window.location = "solicitudes-vehiculo";
														}

													}); 
												
										   </script>';

								}else{

									echo '<script>

												Swal.fire({

													position: "center",
													icon: "success",
													title: "Se ha enviado email",
													text:"Verificar en buzón o en correos no deseados de: '.$email.'.",
													showConfirmButton: true
											
													}).then((result)=> {

														if(result.value){

															window.location = "solicitudes-vehiculo";
														}

													}); 
												
										   </script>';

								}

 			}else{


 			echo '<script>

	 				Swal.fire({
	 					icon: "error",
	 					text: "¡ Se requiere seleccionar documentos y el correo debe de existir del solicitante !", 
	 					showConfirmButton: true,
	 					confirmButtonText: "Cerrar",
	 					closeOnConfirm: false

	 					}).then((result)=> {

	 						if(result.value){

	 							window.location = "solicitudes-vehiculo";
	 						}

	 						})

 					</script>';

			}


		}

	}







}




?>
