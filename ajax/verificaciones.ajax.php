<?php 

require_once "../controladores/verificaciones.controlador.php";
require_once "../modelos/verificaciones.modelo.php";

class AjaxVerificaciones{


	/*--=====================================
	=            EDITAR USUARIOS           = 
	======================================--*/
	
	public $idVerificacion;

	 public function ajaxEditarVerificacion(){

		$item = "idVerificacion";
		$valor = $this->idVerificacion;
		
		
		$respuesta = ControladorVerificaciones::ctrMostrarVerificaciones($item, $valor);
		
		echo json_encode($respuesta);

	}

}



if(isset($_POST["idVerificacion"])){
		
		$editar = new AjaxVerificaciones();
		$editar -> idVerificacion = $_POST["idVerificacion"];
		$editar -> ajaxEditarVerificacion();

}




 ?>