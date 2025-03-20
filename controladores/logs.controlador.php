<?php 

class ControladorLogs{
    
	/*=============================================
	MOSTRAR 
	=============================================*/

	static public function ctrMostrarLogs($item, $valor, $orden){

		$tabla = "log";

		$respuesta = ModeloLogs::mdlMostrarLogs($tabla, $item, $valor, $orden);

		return $respuesta;

	}


	 public function ctrCrearLogCancelarOrden($itemSession,$orden){

		date_default_timezone_set("America/Mexico_City");

		$nombreEquipo = gethostbyaddr($_SERVER['REMOTE_ADDR']);
		$ipCliente = $_SERVER['REMOTE_ADDR'];


		$tabla = "log";
		$datos = array("actividad"=>"Se cancelo la orden ".$orden,
						"tipo"=>"Cancelado",
						"usuario_id"=>$itemSession,
						"private_id"=>$nombreEquipo,
						"public_id"=>$ipCliente,
						"eject"=>date("Y-m-d H:i:s"));  

		$respuestaLog = ModeloLogs::mdlAgregarLog($tabla,$datos);

		return $datos;

	}




}


?>