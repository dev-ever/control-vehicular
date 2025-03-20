<?php 
require_once "../controladores/marcas.controlador.php";
require_once "../modelos/marcas.modelo.php";

class AjaxTiposMarcas{


	/*--=====================================
	=            EDITAR USUARIOS           = 
	======================================--*/
	
	public $idMarca; 

	 public function ajaxEditarMarca(){

		$item = "idMarca";
		$valor = $this->idMarca;
		
		
		$respuesta = ControladorMarcas::ctrMostrarMarcas($item, $valor);
		
		echo json_encode($respuesta);

	}

}



if(isset($_POST["idMarca"])){
		
		$editar = new AjaxTiposMarcas();
		$editar -> idMarca = $_POST["idMarca"];
		$editar -> ajaxEditarMarca();

}




 ?>