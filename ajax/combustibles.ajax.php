<?php 

require_once "../controladores/combustibles.controlador.php";
require_once "../modelos/combustibles.modelo.php";

class AjaxCombustibles{


	/*--=====================================
	=            EDITAR            
	======================================--*/
	
	public $idCombustible;

	 public function ajaxEditarCombustible(){

		$item = "idCombustible";
		$valor = $this->idCombustible;
		
		
		$respuesta = ControladorCombustibles::ctrMostrarCombustibles($item, $valor);
		
		echo json_encode($respuesta);

	}

}



if(isset($_POST["idCombustible"])){
		
		$editar = new AjaxCombustibles();
		$editar -> idCombustible = $_POST["idCombustible"];
		$editar -> ajaxEditarCombustible();

}




 ?>