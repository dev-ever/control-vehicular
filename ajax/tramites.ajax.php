<?php 
require_once "../controladores/tramites.controlador.php";
require_once "../modelos/tramites.modelo.php";

class AjaxTramites{


	/*--=====================================
	=            EDITAR USUARIOS           = 
	======================================--*/
	
	public $idTramite;

	 public function ajaxEditarTramite(){

		$item = "idTramite";
		$valor = $this->idTramite;
		
		
		$respuesta = ControladorTramites::ctrMostrarTramites($item, $valor);
		
		echo json_encode($respuesta);

	}

}



if(isset($_POST["idTramite"])){
		
		$editar = new AjaxTramites();
		$editar -> idTramite = $_POST["idTramite"];
		$editar -> ajaxEditarTramite();

}




 ?>