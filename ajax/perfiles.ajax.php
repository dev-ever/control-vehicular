<?php 

require_once "../controladores/perfiles.controlador.php";
require_once "../modelos/perfiles.modelo.php";


class AjaxPerfiles{ 
	
	/*--=====================================
	=            EDITAR USUARIOS           =
	======================================--*/
	  
	public $idPerfil;

	 public function ajaxEditarPerfiles(){
		$item = "idPerfil";
		$valor = $this->idPerfil;
		
		
		$respuesta = ControladorPerfiles::ctrMostrarPerfiles($item, $valor);
		
		echo json_encode($respuesta);

	}



}


	if(isset($_POST["idPerfil"])){
		
		$editarperfil = new AjaxPerfiles();
		$editarperfil -> idPerfil = $_POST["idPerfil"];
		$editarperfil -> ajaxEditarPerfiles();

	}
 


?>