<?php 
require_once "../controladores/seguros-vehiculos.controlador.php";
require_once "../modelos/seguros-vehiculos.modelo.php";

class AjaxSeguroVehiculo{


	/*--=====================================
	          EDITAR            
	======================================--*/
	
	public $idSegVeh;

	 public function ajaxEditarSegVeh(){

		$item = "idSegVeh";
		$valor = $this->idSegVeh;
		
		
		$respuesta = ControladorSegurosVehiculos::ctrMostrarSegurosVehiculos($item, $valor);
		
		echo json_encode($respuesta);

	}

}



if(isset($_POST["idSegVeh"])){
		
		$editar = new AjaxSeguroVehiculo();
		$editar -> idSegVeh = $_POST["idSegVeh"];
		$editar -> ajaxEditarSegVeh();

}




 ?>