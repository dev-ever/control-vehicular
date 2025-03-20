<?php 
require_once "../controladores/seguros.controlador.php";
require_once "../modelos/seguros.modelo.php";

class AjaxSeguros{


	/*--=====================================
	=            EDITAR            
	======================================--*/
	
	public $idSeguro;

	 public function ajaxEditarSeguro(){

		$item = "idSeguro";
		$valor = $this->idSeguro;
		
		
		$respuesta = ControladorSeguros::ctrMostrarSeguros($item, $valor);
		
		echo json_encode($respuesta);

	}

}



if(isset($_POST["idSeguro"])){
		
		$editar = new AjaxSeguros();
		$editar -> idSeguro = $_POST["idSeguro"];
		$editar -> ajaxEditarSeguro();

}




 ?>