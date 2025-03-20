<?php 

use PHPMailer\PHPMailer\PHPMailer;  
use PHPMailer\PHPMailer\Exception; 


class ControladorNotificaciones{

	static public function ctrMostrarNotificaciones(){

		$tabla = "tb_notificaciones_finanzas";

		$respuesta = ModeloNotificaciones::mdlMostrarNotificaciones($tabla);

		return $respuesta;
	}




	static public function enviarEmail($destinatarios, $asunto, $mensajeHTML, $fromEmail, $fromName, $archivoAdjunto = null){

		$mail = new PHPMailer();

		try{
			
			$mail->isSMTP();
			$mail->CharSet 		= 'utf-8';
			$mail->SMTPAuth 	= true;
			$mail->SMTPSecure 	= 'ssl';
			$mail->Host 		= 'mail.frasangroup.com';
			$mail->Username 	= 'notificaciones@frasangroup.com';
			$mail->Password		= 'Ag17771f6';
			$mail->Port 		= 465;

			$mail->setFrom($fromEmail, $fromName);

			if(is_array($destinatarios)){

				foreach ($destinatarios as $destinos) {
					
					$mail->addAddress($destinos);
				}

			}else{

				$mail->addAddress($destinatarios);
			}

			$mail->addBCC('emauro@frasangroup.com');
			$mail->isHTML(true);
			$mail->Subject = $asunto;
			$mail->WordWrap = 50;
			$mail->Body = $mensajeHTML;

			if ($archivoAdjunto && file_exists($archivoAdjunto['tmp_name'])) {

				$mail->addAttachment($archivoAdjunto['tmp_name'], $archivoAdjunto['name']);

				echo "Archivo adjuntado: " . $archivoAdjunto['name'];

			} else {
				
				echo "El archivo no se adjuntó porque no está disponible.";
			}

			$envio = $mail->send();

			if(!$envio){

				echo '<script>

						Swal.fire({
								icon: "error", 
								title: "¡Ha ocurrido un problema enviando notificación, error: '.$mail->ErrorInfo.' !", 
								showConfirmButton: true,
								confirmButtonText: "Cerrar",
								allowOutsideClick: false,
								closeOnConfirm: false

							}); 
					
					</script>';

			}else{

				echo '<script>

						Swal.fire({

							title: "¡OK!", 
							text: "'.$asunto.'" se ha notificado por email",
							icon:"success",
							confirmButtonText: "Cerrar",
							allowOutsideClick: false,
							closeOnConfirm: false

							});

					 </script>';

			}

		}catch(Exception $e){

			echo '<script>

					Swal.fire({

						icon: "¡ error !", 
						html: "<span class="text-bold text-danger">No se pudo enviar notificación, error: {$mail->ErrorInfo}</span>", 
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false

						});

				 </script>';
		}

	}










}


 ?> 