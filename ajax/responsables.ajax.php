<?php 
require_once "../controladores/usuarios.controlador.php";
require_once "../modelos/usuarios.modelo.php";

class AjaxResponsables{


	/*--=====================================
	=            EDITAR USUARIOS           = 
	======================================--*/
	
	public $idResponsable;

	 public function ajaxEditarResponsable(){

		$item = "idResponsable";
		$valor = $this->idResponsable;
		
		
		$respuesta = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);
		
		echo json_encode($respuesta);

	}

}



if(isset($_POST["idResponsable"])){
		
		$editar = new AjaxResponsables();
		$editar -> idResponsable = $_POST["idResponsable"];
		$editar -> ajaxEditarResponsable();

}




 ?>