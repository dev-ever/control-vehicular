<?php 

require_once "../controladores/areas-negocios.controlador.php";
require_once "../modelos/areas-negocios.modelo.php";

class AjaxUnidadesNegocios{ 
	/*--=====================================
	             EDITAR            
	======================================--*/
	public $idArea;

	 public function ajaxEditarUnidad(){

		$item = "idAreaVehiculo";
		$valor = $this->idArea;
		
		$respuesta = ControladorAreasNegocios::ctrMostrarAreasNegocios($item, $valor);
		
		echo json_encode($respuesta); 

	}



}


if(isset($_POST["idArea"])){
	
	$editarArea = new AjaxUnidadesNegocios();
	$editarArea -> idArea = $_POST["idArea"];
	$editarArea -> ajaxEditarUnidad();

}
 


?>