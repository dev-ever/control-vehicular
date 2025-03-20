<?php 
require_once "../controladores/subMarcas.controlador.php";
require_once "../modelos/subMarcas.modelo.php";

class AjaxSubMarcas{


	/*--=====================================
	=            EDITAR SUBMARCAS           = 
	======================================--*/
	
	public $idSubMarca;

	 public function ajaxEditarSubMarca(){

		$item = "idSubmarca";
		$valor = $this->idSubMarca;
		
		
		$respuesta = ControladorSubMarcas::ctrMostrarSubMarcas($item, $valor);
		
		echo json_encode($respuesta);

	}

}



if(isset($_POST["idSubMarca"])){
		
		$editar = new AjaxSubMarcas();
		$editar -> idSubMarca = $_POST["idSubMarca"];
		$editar -> ajaxEditarSubMarca();

}




 ?>