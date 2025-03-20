<?php 

class ControladorEnvios{
 

	/*=============================================
	MOSTRAR 
	=============================================*/

	static public function ctrMostrarEnvios($item, $valor){

		$tabla = "notificacionesEnvios";

		$respuesta = ModeloNotificacionEnvios::mdlMostrarEnvios($tabla, $item, $valor);

		return $respuesta;
	}







}


 ?>