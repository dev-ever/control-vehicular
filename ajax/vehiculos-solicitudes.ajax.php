<?php 
require_once "../controladores/vehiculos.controlador.php";
require_once "../modelos/vehiculos.modelo.php";


class AjaxVehiculosSolicitudes{

	public $idSolicitudVehiculo;

	public function ajaxSolicitudesVehiculos(){

		$item = "idSolicitud";
		$valor = $this->idSolicitudVehiculo;

		$respuesta = ControladorVehiculos::ctrMostrarSolicitudesVehiculos($item,$valor);

		echo json_encode($respuesta);

	}

 
	public $solicitudInicial;
	public function ajaxSolicitudesIniciales(){

		$item1 = "estado"; 
		$valor1 = 1;
		$item2 = "idSolicitud";
		$valor2 = $this->solicitudInicial;

		$respuesta = ControladorVehiculos::ctrActualizarSolicitud($item1, $valor1, $item2, $valor2);

		echo json_encode($respuesta);

	}


	public $solicitudProceso;
	public function ajaxSolicitudesProceso(){

		$item1 = "estado"; 
		$valor1 = 2;
		$item2 = "idSolicitud";
		$valor2 = $this->solicitudProceso;

		$respuesta = ControladorVehiculos::ctrActualizarSolicitud($item1, $valor1, $item2, $valor2);

		echo json_encode($respuesta);

	}


	public $solicitudFinalizar;
	public function ajaxSolicitudesFinalizar(){

		$item1 = "estado"; 
		$valor1 = 3;
		$item2 = "idSolicitud";
		$valor2 = $this->solicitudFinalizar;

		$respuesta = ControladorVehiculos::ctrActualizarSolicitud($item1, $valor1, $item2, $valor2);

		echo json_encode($respuesta);

	}




}


if(isset($_POST["idSolicitudVehiculo"])){
	
	$solicitudVehiculo = new AjaxVehiculosSolicitudes();
	$solicitudVehiculo -> idSolicitudVehiculo = $_POST["idSolicitudVehiculo"];
	$solicitudVehiculo -> ajaxSolicitudesVehiculos();

}

if(isset($_POST["solicitudInicial"])){
	
	$solV = new AjaxVehiculosSolicitudes();
	$solV -> solicitudInicial = $_POST["solicitudInicial"];
	$solV -> ajaxSolicitudesIniciales();

}

if(isset($_POST["solicitudProceso"])){
	
	$solProceso = new AjaxVehiculosSolicitudes();
	$solProceso -> solicitudProceso = $_POST["solicitudProceso"];
	$solProceso -> ajaxSolicitudesProceso();

}


if(isset($_POST["solicitudFinalizar"])){
	
	$solProceso = new AjaxVehiculosSolicitudes();
	$solProceso -> solicitudFinalizar = $_POST["solicitudFinalizar"];
	$solProceso -> ajaxSolicitudesFinalizar();

}
	


 ?>