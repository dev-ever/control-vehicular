<?php 
require_once "../controladores/tramites-vehiculos.controlador.php";
require_once "../modelos/tramites-vehiculos.modelo.php";

class AjaxTramitesVehiculos{

	/*--=====================================
	=            EDITAR            = 
	======================================--*/
	public $idTramiteVehiculo;

	 public function ajaxEditarTramitesVehiculo(){

		$item = "idTramiteVehiculo";
		$valor = $this->idTramiteVehiculo;
		
		$respuesta = ControladorTramitesVehiculares::ctrMostrarTramitesVehiculares($item, $valor);
		
		echo json_encode($respuesta);
	}

}



if(isset($_POST["idTramiteVehiculo"])){
		
		$editar = new AjaxTramitesVehiculos();
		$editar -> idTramiteVehiculo = $_POST["idTramiteVehiculo"];
		$editar -> ajaxEditarTramitesVehiculo();

}




 ?>