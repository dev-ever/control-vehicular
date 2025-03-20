<?php 
require_once "../controladores/tenencias.controlador.php";
require_once "../modelos/tenencias.modelo.php";

class AjaxTenencias{


	/*--=====================================
	=            EDITAR USUARIOS           = 
	======================================--*/
	
	public $idTenencia;

	 public function ajaxEditarTenencia(){

		$item = "idTenencia";
		$valor = $this->idTenencia;
		
		$respuesta = ControladorTenencias::ctrMostrarTenencias($item, $valor);
		
		echo json_encode($respuesta);

	}

}



if(isset($_POST["idTenencia"])){
		
		$editar = new AjaxTenencias();
		$editar -> idTenencia = $_POST["idTenencia"];
		$editar -> ajaxEditarTenencia();

}




 ?>