<?php 
require_once "../controladores/documentacion-vehiculos.controlador.php";
require_once "../modelos/documentacion-vehiculos.modelo.php";
require_once "../controladores/rutas.controlador.php";


class AjaxDocumentacionVehiculos{

	  

	public $vehiculo_id;

	public function ajaxConsultarDocumentoVehiculo(){

		$item = "vehiculo_id"; 
		$valor = $this->vehiculo_id; 

		$respuesta = ControladorDocumentacionVehiculos::ctrMostrarDocumentosVehiculos($item, $valor);

		echo json_encode( $respuesta );
	} 


/*======================================================
   ALTA DE FACTURA
========================================================*/
	public $idVehiculo;
	public $folioVehiculo;
	public $facturaDocumento;   

	public function ajaxAgregarFacturaVehiculo(){
 
		date_default_timezone_set('America/Mexico_City');
	
		$idVeh = $this->idVehiculo;
		$claveFolio = $this->folioVehiculo;
		$factura = $this->facturaDocumento;

		$renombre = "FACTURA-COMPRA-".$claveFolio."-".date("ymdHis").".pdf";
		
		$ruta = "/vistas/img/vehiculos/".$claveFolio."/";

		$ruta2 = "vistas/img/vehiculos/".$claveFolio."/";

		$fichero = $_SERVER['DOCUMENT_ROOT'].$ruta;

		// rename ($factura["name"], $renombre);

		if(!is_dir($fichero)){

			mkdir($fichero, 0777, true);

		}
		
		if(is_array($factura) && count($factura) > 0){

			$archivoTemporal = $_FILES["facturaDocumento"]["tmp_name"];
			$destino = $fichero.$renombre;
		
			// if(move_uploaded_file($_FILES["facturaDocumento"]["tmp_name"], $fichero.$renombre)){
				if(move_uploaded_file($archivoTemporal, $destino))

				$itemCampo1 = "checkFactura";
				$valorCampo1 = 1;

				$itemCampo2 = "factura";
				$valorCampo2 = $ruta2.$renombre;

				$itemVehiculo = "vehiculo_id"; 
				$valorVehiculo = $idVeh; 

				$respuetaActualizacion = ControladorDocumentacionVehiculos::ctrActualizarDocumentoVehiculo($itemCampo1, $valorCampo1, $itemCampo2, $valorCampo2, $itemVehiculo, $valorVehiculo);

				

				if($respuetaActualizacion == "ok"){

					echo json_encode("ok");

				}else{

					echo json_encode("error");

				}			
					
				
	
			}else{

				echo json_encode("error");
			
			}

		 }

	





public $polizaDocumento;

public function ajaxAgregarPolizaVehiculo(){
 
		date_default_timezone_set('America/Mexico_City');

		$idVeh = $this->idVehiculo;
		$claveFolio = $this->folioVehiculo;
		$poliza = $this->polizaDocumento;

		$renombre = "POLIZA-SEGURO-".$claveFolio."-".date("ymdHis").".pdf";

		$ruta = "/vistas/img/vehiculos/".$claveFolio."/";

		$ruta2 = "vistas/img/vehiculos/".$claveFolio."/";

		$fichero = $_SERVER['DOCUMENT_ROOT'].$ruta;

		// rename ($poliza["name"], $renombre);

		if(!is_dir($fichero)){

			mkdir($fichero, 0777, true);
		}

		if(is_array($poliza) && count($poliza) > 0){

			$archivoTemporal = $_FILES["polizaDocumento"]["tmp_name"];
			$destino = $fichero.$renombre;

			if(move_uploaded_file($archivoTemporal, $destino)){

				$itemCampo1 = "checkPoliza";
				$valorCampo1 = 1;

				$itemCampo2 = "poliza";
				$valorCampo2 = $ruta2.$renombre;

				$itemVehiculo = "vehiculo_id";
				$valorVehiculo = $idVeh;

				$respuetaActualizacion = ControladorDocumentacionVehiculos::ctrActualizarDocumentoVehiculo($itemCampo1, $valorCampo1, $itemCampo2, $valorCampo2, $itemVehiculo, $valorVehiculo);	

				

				if($respuetaActualizacion == "ok"){

					echo json_encode("ok"); 

				}else{

					echo json_encode("error"); 
				}
			
	
			}else{

				echo json_encode("error"); 
			
			}

		 }

	}



	// 
public $tenenciaDocumento;

public function ajaxAgregarTenenciaVehiculo(){
 
		date_default_timezone_set('America/Mexico_City');

		$idVeh = $this->idVehiculo;
		$claveFolio = $this->folioVehiculo;
		$tenencia = $this->tenenciaDocumento;

		$renombre = "TENENCIA-".$claveFolio."-".date("ymdHis").".pdf";

		$ruta = "/vistas/img/vehiculos/".$claveFolio."/";

		$ruta2 = "vistas/img/vehiculos/".$claveFolio."/";

		$fichero = $_SERVER['DOCUMENT_ROOT'].$ruta;

		// rename ($tenencia["name"], $renombre);

		if(!is_dir($fichero)){

			mkdir($fichero, 0777, true);
		}

		if(is_array($tenencia) && count($tenencia) > 0){

			$archivoTemporal = $_FILES["tenenciaDocumento"]["tmp_name"];
			$destino = $fichero.$renombre;

			if(move_uploaded_file($archivoTemporal, $destino)){

				$itemCampo1 = "checkTenencia";
				$valorCampo1 = 1;

				$itemCampo2 = "tenencia";
				$valorCampo2 = $ruta2.$renombre;

				$itemVehiculo = "vehiculo_id";
				$valorVehiculo = $idVeh;

				$respuetaActualizacion = ControladorDocumentacionVehiculos::ctrActualizarDocumentoVehiculo($itemCampo1, $valorCampo1, $itemCampo2, $valorCampo2, $itemVehiculo, $valorVehiculo);				

				if($respuetaActualizacion == "ok"){

					echo json_encode("ok"); 

				}else{

					echo json_encode("error"); 
				}
			
	
			}else{

				echo json_encode("error");
			
			}

		 }

	}


public $verificacionDocumento;

public function ajaxAgregarVerificacionVehiculo(){
 
	date_default_timezone_set('America/Mexico_City');

	$idVeh = $this->idVehiculo;
	$claveFolio = $this->folioVehiculo;
	$verificacion = $this->verificacionDocumento;

	$renombre = "VERIFICACION-".$claveFolio."-".date("ymdHis").".pdf";

	$ruta = "/vistas/img/vehiculos/".$claveFolio."/";
	$ruta2 = "vistas/img/vehiculos/".$claveFolio."/";

	$fichero = $_SERVER['DOCUMENT_ROOT'].$ruta;

	// rename ($verificacion["name"], $renombre);

	if(!is_dir($fichero)){

		mkdir($fichero, 0777, true);
	}

	if(is_array($verificacion) && count($verificacion) > 0){

		$archivoTemporal = $_FILES["verificacionDocumento"]["tmp_name"];
		$destino = $fichero.$renombre;

		if(move_uploaded_file($archivoTemporal, $destino)){

			$itemCampo1 = "checkVerificacion";
			$valorCampo1 = 1;

			$itemCampo2 = "verificacion";
			$valorCampo2 = $ruta.$renombre;

			$itemVehiculo = "vehiculo_id";
			$valorVehiculo = $idVeh;

			$respuetaActualizacion = ControladorDocumentacionVehiculos::ctrActualizarDocumentoVehiculo($itemCampo1, $valorCampo1, $itemCampo2, $valorCampo2, $itemVehiculo, $valorVehiculo);				

			if($respuetaActualizacion == "ok"){

				echo json_encode("ok"); 

			}else{

				echo json_encode("error"); 
			}
		

		}else{

			echo json_encode("error");
		
		}

	 }

	}



public $pedimentoDocumento;

public function ajaxAgregarPedimentoVehiculo(){
 
	date_default_timezone_set('America/Mexico_City');

	$idVeh = $this->idVehiculo;
	$claveFolio = $this->folioVehiculo;
	$pedimento = $this->pedimentoDocumento;

	$renombre = "PEDIMENTO-".$claveFolio."-".date("ymdHis").".pdf";

	$ruta = "/vistas/img/vehiculos/".$claveFolio."/";
	$ruta2 = "vistas/img/vehiculos/".$claveFolio."/";

	$fichero = $_SERVER['DOCUMENT_ROOT'].$ruta;

	// rename ($pedimento["name"], $renombre);

	if(!is_dir($fichero)){

			mkdir($fichero, 0777, true);
	}

	if(is_array($pedimento) && count($pedimento) > 0){

		$archivoTemporal = $_FILES["pedimentoDocumento"]["tmp_name"];
		$destino = $fichero.$renombre;

		if(move_uploaded_file($archivoTemporal, $destino)){

			$itemCampo1 = "checkPedimento";
			$valorCampo1 = 1;

			$itemCampo2 = "pedimento";
			$valorCampo2 = $ruta2.$renombre;

			$itemVehiculo = "vehiculo_id";
			$valorVehiculo = $idVeh;

			$respuetaActualizacion = ControladorDocumentacionVehiculos::ctrActualizarDocumentoVehiculo($itemCampo1, $valorCampo1, $itemCampo2, $valorCampo2, $itemVehiculo, $valorVehiculo);				

			if($respuetaActualizacion == "ok"){

				echo json_encode("ok"); 

			}else{

				echo json_encode("error"); 
			}


		}else{

			echo json_encode("error");
		
		}

	 }

}




public $tarjetaDocumento;

public function ajaxAgregarTarjetaVehiculo(){
 
	date_default_timezone_set('America/Mexico_City');

	$idVeh = $this->idVehiculo;
	$claveFolio = $this->folioVehiculo;
	$tarjeta = $this->tarjetaDocumento;

	$renombre = "TARJETA-DE-CIRCULACION-".$claveFolio."-".date("ymdHis").".pdf";

	$ruta = "/vistas/img/vehiculos/".$claveFolio."/";

	$ruta2 = "vistas/img/vehiculos/".$claveFolio."/";

	$fichero = $_SERVER['DOCUMENT_ROOT'].$ruta;

	// rename ($tarjeta["name"], $renombre);

	if(!is_dir($fichero)){

		mkdir($fichero, 0777, true);
	}

	if(is_array($tarjeta) && count($tarjeta) > 0){

		$archivoTemporal = $_FILES["tarjetaDocumento"]["tmp_name"];
		$destino = $fichero.$renombre;

		if(move_uploaded_file($archivoTemporal, $destino)){

			$itemCampo1 = "checkTarjeta";
			$valorCampo1 = 1;

			$itemCampo2 = "tarjeta";
			$valorCampo2 = $ruta2.$renombre;

			$itemVehiculo = "vehiculo_id";
			$valorVehiculo = $idVeh;

			$respuetaActualizacion = ControladorDocumentacionVehiculos::ctrActualizarDocumentoVehiculo($itemCampo1, $valorCampo1, $itemCampo2, $valorCampo2, $itemVehiculo, $valorVehiculo);				

			if($respuetaActualizacion == "ok"){

				echo json_encode("ok"); 

			}else{

				echo json_encode("error"); 
			}
		
		}else{

			echo json_encode("error");
		
		}

	 }

	}




public $garantiaDocumento;

public function ajaxAgregarPolizaGarantiaVehiculo(){
 
	date_default_timezone_set('America/Mexico_City');

	$idVeh = $this->idVehiculo;
	$claveFolio = $this->folioVehiculo;
	$garantia = $this->garantiaDocumento;

	$renombre = "POLIZA-GARANTIA-".$claveFolio."-".date("ymdHis").".pdf";

	$ruta = "/vistas/img/vehiculos/".$claveFolio."/";

	$ruta2 = "vistas/img/vehiculos/".$claveFolio."/";

	$fichero = $_SERVER['DOCUMENT_ROOT'].$ruta;

	// rename ($garantia["name"], $renombre);

	if(!is_dir($fichero)){

			mkdir($fichero, 0777, true);
	}

	if(is_array($garantia) && count($garantia) > 0){

			$archivoTemporal = $_FILES["garantiaDocumento"]["tmp_name"];
			$destino = $fichero.$renombre;

		if(move_uploaded_file($archivoTemporal, $destino)){

			$itemCampo1 = "checkGarantia";
			$valorCampo1 = 1;

			$itemCampo2 = "garantia";
			$valorCampo2 = $ruta2.$renombre;

			$itemVehiculo = "vehiculo_id";
			$valorVehiculo = $idVeh;

			$respuetaActualizacion = ControladorDocumentacionVehiculos::ctrActualizarDocumentoVehiculo($itemCampo1, $valorCampo1, $itemCampo2, $valorCampo2, $itemVehiculo, $valorVehiculo);				

			if($respuetaActualizacion == "ok"){

				echo json_encode("ok"); 

			}else{

				echo json_encode("error"); 
			}


		}else{

			echo json_encode("error");
		
		}

	 }

	}





public $permisoDocumento;

public function ajaxAgregarPermisoVehiculo(){
 
	date_default_timezone_set('America/Mexico_City');

	$idVeh = $this->idVehiculo;
	$claveFolio = $this->folioVehiculo;
	$permiso = $this->permisoDocumento;

	$renombre = "PERMISO-".$claveFolio."-".date("ymdHis").".pdf";

	$ruta = "/vistas/img/vehiculos/".$claveFolio."/";

	$ruta2 = "vistas/img/vehiculos/".$claveFolio."/";

	$fichero = $_SERVER['DOCUMENT_ROOT'].$ruta;

	// rename ($permiso["name"], $renombre);

	if(!is_dir($fichero)){

		mkdir($fichero, 0777, true);
	}

	if(is_array($permiso) && count($permiso) > 0){

		$archivoTemporal = $_FILES["permisoDocumento"]["tmp_name"];
		$destino = $fichero.$renombre;

		if(move_uploaded_file($archivoTemporal, $destino)){

			$itemCampo1 = "checkPermiso";
			$valorCampo1 = 1;

			$itemCampo2 = "permiso";
			$valorCampo2 = $ruta2.$renombre;

			$itemVehiculo = "vehiculo_id";
			$valorVehiculo = $idVeh;

			$respuetaActualizacion = ControladorDocumentacionVehiculos::ctrActualizarDocumentoVehiculo($itemCampo1, $valorCampo1, $itemCampo2, $valorCampo2, $itemVehiculo, $valorVehiculo);				
			
			if($respuetaActualizacion == "ok"){

				echo json_encode("ok"); 

			}else{

				echo json_encode("error"); 
			}
		

		}else{

			echo json_encode("error");
		
		}

	 }

	}





public $compraVentaDocumento;

public function ajaxAgregarCompraVentaVehiculo(){
 
	date_default_timezone_set('America/Mexico_City');

	$idVeh = $this->idVehiculo;
	$claveFolio = $this->folioVehiculo;
	$compra = $this->compraVentaDocumento;

	$renombre = "COMPRA-VENTA-".$claveFolio."-".date("ymdHis").".pdf";

	$ruta = "/vistas/img/vehiculos/".$claveFolio."/";

	$ruta2 = "vistas/img/vehiculos/".$claveFolio."/";

	$fichero = $_SERVER['DOCUMENT_ROOT'].$ruta;

	// rename ($compra["name"], $renombre);

	if(!is_dir($fichero)){

		mkdir($fichero, 0777, true);
	}


	if(is_array($compra) && count($compra) > 0){

		$archivoTemporal = $_FILES["compraVentaDocumento"]["tmp_name"];
		$destino = $fichero.$renombre;

		if(move_uploaded_file($archivoTemporal, $destino)){

			$itemCampo1 = "checkCompraVenta";
			$valorCampo1 = 1;

			$itemCampo2 = "compraVenta";
			$valorCampo2 = $ruta2.$renombre;

			$itemVehiculo = "vehiculo_id";
			$valorVehiculo = $idVeh;

			$respuetaActualizacion = ControladorDocumentacionVehiculos::ctrActualizarDocumentoVehiculo($itemCampo1, $valorCampo1, $itemCampo2, $valorCampo2, $itemVehiculo, $valorVehiculo);				

			if($respuetaActualizacion == "ok"){

				echo json_encode("ok"); 

			}else{

				echo json_encode("error"); 
			}
		

		}else{

			echo json_encode("error");
		
		}

	 }

	}





public $ultimoTramiteDocumento;

public function ajaxAgregarUltimoTramiteVehiculo(){
 
	date_default_timezone_set('America/Mexico_City');

	$idVeh = $this->idVehiculo;
	$claveFolio = $this->folioVehiculo;
	$ultimoTramite = $this->ultimoTramiteDocumento;

	$renombre = "ULTIMO-TRAMITE-".$claveFolio."-".date("ymdHis").".pdf";

	$ruta = "/vistas/img/vehiculos/".$claveFolio."/";
	$ruta2 = "vistas/img/vehiculos/".$claveFolio."/";

	$fichero = $_SERVER['DOCUMENT_ROOT'].$ruta;

	// rename ($ultimoTramite["name"], $renombre);

	if(!is_dir($fichero)){

		mkdir($fichero, 0777, true);
	}

	if(is_array($ultimoTramite) && count($ultimoTramite) > 0){

		$archivoTemporal = $_FILES["ultimoTramiteDocumento"]["tmp_name"];
		$destino = $fichero.$renombre;

		if(move_uploaded_file($archivoTemporal, $destino)){

			$itemCampo1 = "checkUltimoTramite";
			$valorCampo1 = 1;

			$itemCampo2 = "ultimoTramite";
			$valorCampo2 = $ruta2.$renombre;

			$itemVehiculo = "vehiculo_id";
			$valorVehiculo = $idVeh;

			$respuetaActualizacion = ControladorDocumentacionVehiculos::ctrActualizarDocumentoVehiculo($itemCampo1, $valorCampo1, $itemCampo2, $valorCampo2, $itemVehiculo, $valorVehiculo);				

			if($respuetaActualizacion == "ok"){

				echo json_encode("ok"); 

			}else{

				echo json_encode("error"); 
			}
		

		}else{

			echo json_encode("error");
		
		}

	 }

	}



public $facturaOrigenDocumento;

public function ajaxAgregarFacturaOrigenVehiculo(){
 
	date_default_timezone_set('America/Mexico_City');

	$idVeh = $this->idVehiculo;
	$claveFolio = $this->folioVehiculo;
	$facturaOrigen = $this->facturaOrigenDocumento;

	$renombre = "FACTURA-ORIGEN-".$claveFolio."-".date("ymdHis").".pdf";

	$ruta = "/vistas/img/vehiculos/".$claveFolio."/";

	$ruta2 = "vistas/img/vehiculos/".$claveFolio."/";

	$fichero = $_SERVER['DOCUMENT_ROOT'].$ruta;

	// rename ($facturaOrigen["name"], $renombre);

	if(!is_dir($fichero)){

		mkdir($fichero, 0777, true);
	}

	if(is_array($facturaOrigen) && count($facturaOrigen) > 0){

		$archivoTemporal = $_FILES["facturaOrigenDocumento"]["tmp_name"];
		$destino = $fichero.$renombre;

		if(move_uploaded_file($archivoTemporal, $destino)){

			$itemCampo1 = "checkFacturaOrigen";
			$valorCampo1 = 1;

			$itemCampo2 = "facturaOrigen";
			$valorCampo2 = $ruta2.$renombre;

			$itemVehiculo = "vehiculo_id";
			$valorVehiculo = $idVeh;

			$respuetaActualizacion = ControladorDocumentacionVehiculos::ctrActualizarDocumentoVehiculo($itemCampo1, $valorCampo1, $itemCampo2, $valorCampo2, $itemVehiculo, $valorVehiculo);				

			if($respuetaActualizacion == "ok"){

				echo json_encode("ok"); 

			}else{

				echo json_encode("error"); 
			}
	

		}else{

			echo json_encode("error");
		
		}

	 }

	}





}


if(isset($_POST["vehiculo_id"])){

	$buscarDocumentosVehiculo = new AjaxDocumentacionVehiculos();
	$buscarDocumentosVehiculo -> vehiculo_id = $_POST["vehiculo_id"];
	$buscarDocumentosVehiculo -> ajaxConsultarDocumentoVehiculo();
}


if(isset($_FILES["facturaDocumento"])){

	$altaFactura = new AjaxDocumentacionVehiculos();
	$altaFactura -> facturaDocumento = $_FILES["facturaDocumento"];
	$altaFactura -> folioVehiculo = $_POST["folioVehiculo"]; 
	$altaFactura -> idVehiculo = $_POST["idVehiculo"];
	$altaFactura -> ajaxAgregarFacturaVehiculo();
}


if(isset($_FILES["polizaDocumento"])){

	$altaPoliza = new AjaxDocumentacionVehiculos();
	$altaPoliza -> polizaDocumento = $_FILES["polizaDocumento"];
	$altaPoliza -> folioVehiculo = $_POST["folioVehiculo"]; 
	$altaPoliza -> idVehiculo = $_POST["idVehiculo"];
	$altaPoliza -> ajaxAgregarPolizaVehiculo();
}


if(isset($_FILES["tenenciaDocumento"])){

	$altaPoliza = new AjaxDocumentacionVehiculos();
	$altaPoliza -> tenenciaDocumento = $_FILES["tenenciaDocumento"];
	$altaPoliza -> folioVehiculo = $_POST["folioVehiculo"]; 
	$altaPoliza -> idVehiculo = $_POST["idVehiculo"];
	$altaPoliza -> ajaxAgregarTenenciaVehiculo();
}

if(isset($_FILES["verificacionDocumento"])){

	$altaVerificacion = new AjaxDocumentacionVehiculos();
	$altaVerificacion -> verificacionDocumento = $_FILES["verificacionDocumento"];
	$altaVerificacion -> folioVehiculo = $_POST["folioVehiculo"]; 
	$altaVerificacion -> idVehiculo = $_POST["idVehiculo"];
	$altaVerificacion -> ajaxAgregarVerificacionVehiculo();
}

if(isset($_FILES["pedimentoDocumento"])){

	$altaPedimento = new AjaxDocumentacionVehiculos();
	$altaPedimento -> pedimentoDocumento = $_FILES["pedimentoDocumento"];
	$altaPedimento -> folioVehiculo = $_POST["folioVehiculo"]; 
	$altaPedimento -> idVehiculo = $_POST["idVehiculo"];
	$altaPedimento -> ajaxAgregarPedimentoVehiculo();

}

if(isset($_FILES["tarjetaDocumento"])){
	$altaTarjeta = new AjaxDocumentacionVehiculos();
	$altaTarjeta -> tarjetaDocumento = $_FILES["tarjetaDocumento"];
	$altaTarjeta -> folioVehiculo = $_POST["folioVehiculo"]; 
	$altaTarjeta -> idVehiculo = $_POST["idVehiculo"];
	$altaTarjeta -> ajaxAgregarTarjetaVehiculo();
}


if(isset($_FILES["garantiaDocumento"])){
	$altaGarantia = new AjaxDocumentacionVehiculos();
	$altaGarantia -> garantiaDocumento = $_FILES["garantiaDocumento"];
	$altaGarantia -> folioVehiculo = $_POST["folioVehiculo"]; 
	$altaGarantia -> idVehiculo = $_POST["idVehiculo"];
	$altaGarantia -> ajaxAgregarPolizaGarantiaVehiculo();
}


if(isset($_FILES["permisoDocumento"])){
	$altaPermiso = new AjaxDocumentacionVehiculos();
	$altaPermiso -> permisoDocumento = $_FILES["permisoDocumento"];
	$altaPermiso -> folioVehiculo = $_POST["folioVehiculo"]; 
	$altaPermiso -> idVehiculo = $_POST["idVehiculo"];
	$altaPermiso -> ajaxAgregarPermisoVehiculo();
}

if(isset($_FILES["compraVentaDocumento"])){
	$altaCompra = new AjaxDocumentacionVehiculos();
	$altaCompra -> compraVentaDocumento = $_FILES["compraVentaDocumento"];
	$altaCompra -> folioVehiculo = $_POST["folioVehiculo"]; 
	$altaCompra -> idVehiculo = $_POST["idVehiculo"];
	$altaCompra -> ajaxAgregarCompraVentaVehiculo();
}



if(isset($_FILES["ultimoTramiteDocumento"])){
	$altaTramite = new AjaxDocumentacionVehiculos();
	$altaTramite -> ultimoTramiteDocumento = $_FILES["ultimoTramiteDocumento"];
	$altaTramite -> folioVehiculo = $_POST["folioVehiculo"]; 
	$altaTramite -> idVehiculo = $_POST["idVehiculo"];
	$altaTramite -> ajaxAgregarUltimoTramiteVehiculo();
}


if(isset($_FILES["facturaOrigenDocumento"])){
	$altaFacturaOrigen = new AjaxDocumentacionVehiculos();
	$altaFacturaOrigen -> facturaOrigenDocumento = $_FILES["facturaOrigenDocumento"];
	$altaFacturaOrigen -> folioVehiculo = $_POST["folioVehiculo"]; 
	$altaFacturaOrigen -> idVehiculo = $_POST["idVehiculo"];
	$altaFacturaOrigen -> ajaxAgregarFacturaOrigenVehiculo();
}



 ?>