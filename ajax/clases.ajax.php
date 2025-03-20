<?php 

require_once "../controladores/clases.controlador.php";
require_once "../modelos/clases.modelo.php";

class AjaxClases{


	/*--=====================================
	=            EDITAR USUARIOS           = 
	======================================--*/
	
	public $idClase;

	 public function ajaxEditarClase(){

		$item = "idClase";
		$valor = $this->idClase;
		
		
		$respuesta = ControladorClases::ctrMostrarClases($item, $valor);
		
		echo json_encode($respuesta);

	}

}



if(isset($_POST["idClase"])){
		
		$editar = new AjaxClases();
		$editar -> idClase = $_POST["idClase"];
		$editar -> ajaxEditarClase();

}




 ?>