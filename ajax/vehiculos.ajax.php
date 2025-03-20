<?php 
require_once "../controladores/vehiculos.controlador.php";
require_once "../modelos/vehiculos.modelo.php";

class AjaxVehiculos{ 


	/*--===================================== 
	=            EDITAR            
	======================================--*/
	
	public $idVehiculo;

	 public function ajaxEditarVehiculo(){

		$item = "idVehiculo";
		$valor = $this->idVehiculo;
		
		
		$respuesta = ControladorVehiculos::ctrMostrarVehiculos($item, $valor);
		
		echo json_encode($respuesta);

	}


	public $validarVehiculo;

	 public function ajaxValidarVehiculo(){

		$item = "serie";
		$valor = $this->validarVehiculo;
		$respuesta = ControladorVehiculos::ctrMostrarVehiculos($item, $valor);
		echo json_encode($respuesta);

	}

}



if(isset($_POST["idVehiculo"])){

	$editar = new AjaxVehiculos();
	$editar -> idVehiculo = $_POST["idVehiculo"];
	$editar -> ajaxEditarVehiculo();

}

if(isset($_POST["validarVehiculo"])){
	$valUsuario = new AjaxVehiculos();
	$valUsuario -> validarVehiculo =  trim($_POST["validarVehiculo"]);
	$valUsuario -> ajaxValidarVehiculo();
}






 ?>