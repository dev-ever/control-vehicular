<?php 
require_once "../controladores/areas-negocios.controlador.php";
require_once "../modelos/areas-negocios.modelo.php";

class AjaxAreas{


	/*--=====================================
	=            EDITAR USUARIOS           = 
	======================================--*/
	
	public $idAreaVehiculo;

	 public function ajaxEditarArea(){

		$item = "idAreaVehiculo";
		$valor = $this->idAreaVehiculo;
		
		
		$respuesta = ControladorAreasNegocios::ctrMostrarAreasNegocios($item, $valor);
		
		echo json_encode($respuesta);

	}

}



if(isset($_POST["idAreaVehiculo"])){
		
		$editar = new AjaxAreas();
		$editar -> idAreaVehiculo = $_POST["idAreaVehiculo"];
		$editar -> ajaxEditarArea();

}




 ?>