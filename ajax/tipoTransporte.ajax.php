<?php 
require_once "../controladores/tipos-transportes.controlador.php";
require_once "../modelos/tipos-transportes.modelo.php";

class AjaxTiposTransportes{


	/*--=====================================
	=            EDITAR USUARIOS           = 
	======================================--*/
	
	public $idTransporte;

	 public function ajaxEditarTransporte(){

		$item = "idTransporte";
		$valor = $this->idTransporte;
		
		
		$respuesta = ControladorTiposTransportes::ctrMostrarTransportes($item, $valor);
		
		echo json_encode($respuesta);

	}

}



if(isset($_POST["idTransporte"])){
		
		$editar = new AjaxTiposTransportes();
		$editar -> idTransporte = $_POST["idTransporte"];
		$editar -> ajaxEditarTransporte();

}




 ?>