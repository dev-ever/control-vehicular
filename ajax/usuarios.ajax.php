<?php 

require_once "../controladores/usuarios.controlador.php";
require_once "../modelos/usuarios.modelo.php";


class AjaxUsuarios{ 
	
	/*--=====================================
	=            EDITAR USUARIOS           =
	======================================--*/
	  
	public $idUsuario;

	 public function ajaxEditarUsuario(){
		$item = "idResponsable";
		$valor = $this->idUsuario;
		
		
		$respuesta = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);
		
		echo json_encode($respuesta);

	}

	/*--=====================================
	=            ACTIVAR USUARIOS           =
	======================================--*/

	public $activarUsuario;
	public $activarId;

	 public function ajaxActivarUsuario(){

		$tabla = "tb_responsables";
		$item1 = "estado";
		$valor1 = $this->activarUsuario;

		$item2 ="idResponsable";
		$valor2 = $this->activarId;

		$respuesta = ModeloUsuarios::mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2);

	}

	/*!--=====================================
	=            VALIDAR NO REPETIR USUARIO           =
	======================================--*/

	public $validarUsuario;

	 public function ajaxValidarUsuario(){

		$item = "usuario";
		$valor = $this->validarUsuario;
		$respuesta = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);
		echo json_encode($respuesta);

	}


	/*!--=====================================
	=            VALIDAR NO REPETIR email           =
	======================================--*/

	public $validarEmail;

	public function ajaxValidarEmail(){

		$item = "email";
		$valor = $this->validarEmail;

		$respuesta = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

		echo json_encode($respuesta);

	}

} 


	/*--=====================================
	=            editar USUARIOS           =
	======================================--*/

	if(isset($_POST["idUsuario"])){
		
		$editar = new AjaxUsuarios();
		$editar -> idUsuario = $_POST["idUsuario"];
		$editar -> ajaxEditarUsuario();

	}
 


	/*--=====================================
	=            ACTIVAR USUARIO           =
	======================================--*/

	if(isset($_POST["activarUsuario"])){

		$activarUsuario = new AjaxUsuarios();
		$activarUsuario -> activarUsuario = $_POST["activarUsuario"];
		$activarUsuario -> activarId = $_POST["activarId"];
		$activarUsuario -> ajaxActivarUsuario();

	}



	/*--=====================================
	=          validar no  repetir USUARIO           =
	======================================--*/

	if(isset($_POST["validarUsuario"])){
		
		$valUsuario = new AjaxUsuarios();
		$valUsuario -> validarUsuario =  $_POST["validarUsuario"];
		$valUsuario -> ajaxValidarUsuario();
	}


	/*--=====================================
	=          validar no  repetir EMAIL           =
	======================================--*/

	if(isset($_POST["validarEmail"])){
		$valEmail = new AjaxUsuarios();
		$valEmail -> validarEmail =  $_POST["validarEmail"];
		$valEmail -> ajaxValidarEmail();
	}







 ?>