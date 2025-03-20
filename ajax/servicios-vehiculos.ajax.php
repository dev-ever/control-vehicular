<?php 
require_once "../controladores/servicios-vehiculares.controlador.php";
require_once "../modelos/servicios-vehiculares.modelo.php";

class AjaxServiciosVehiculos{


	/*--=====================================
	=            EDITAR USUARIOS           = 
	======================================--*/
	
	public $idServicioVehiculo;

	 public function ajaxEditarServicioVehiculo(){

		$item = "idVehiculoServicio";
		$valor = $this->idServicioVehiculo;
		
		
		$respuesta = ControladorServiciosVehiculares::ctrMostrarServiciosVehiculares($item, $valor);
		
		echo json_encode($respuesta);

	}

}



if(isset($_POST["idServicioVehiculo"])){
		
		$editar = new AjaxServiciosVehiculos();
		$editar -> idServicioVehiculo = $_POST["idServicioVehiculo"];
		$editar -> ajaxEditarServicioVehiculo();

}




 ?>