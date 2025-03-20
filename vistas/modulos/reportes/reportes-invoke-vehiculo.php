<?php 
ob_start();

require '../../../extensiones/phpexcel/vendor/autoload.php';
require_once '../../../controladores/vehiculos.controlador.php';
require_once '../../../modelos/vehiculos.modelo.php';



use PhpOffice\PhpSpreadsheet\{Spreadsheet, IOFactory};


class TraerVehiculo{

	public $vehiculo_id;  

	public function traerDatos(){


	date_default_timezone_set('America/Mexico_City');

	$name = "unidad-".date("YmdHis");
	$tabla = "tb_vehiculos";

	$item = "idVehiculo";
	$valor = $this->vehiculo_id;

	$respuestaVehiculo = ControladorVehiculos::ctrMostrarVehiculos($item, $valor);


	$folio = $respuestaVehiculo["folio"];
	$eco = $respuestaVehiculo["eco"];
	$tc = $respuestaVehiculo["nombreTarjeta"];
	$serie = $respuestaVehiculo["serie"];
	$modelo = $respuestaVehiculo["modelo"];
	$anio = $respuestaVehiculo["anio"];
	$placas = $respuestaVehiculo["placas"];
	$numTarjeta = $respuestaVehiculo["numTarjeta"];
	$motor = $respuestaVehiculo["motor"];
	$km = $respuestaVehiculo["km"];
	$hrs = $respuestaVehiculo["hrs"];
	$color = $respuestaVehiculo["color"];
	$estadoFisico = $respuestaVehiculo["estadoFisico"];
	$estadoOperativo = $respuestaVehiculo["estadoOperativo"];
	$fCompra = $respuestaVehiculo["fechaCompra"];
	$fOrigen = $respuestaVehiculo["facturaOrigen"];
	$gpsStr = $respuestaVehiculo["gps"];
	$ubicacion = $respuestaVehiculo["ubicacion"];
	$descripcion = $respuestaVehiculo["descripcionVehiculo"];
	$accesorios = $respuestaVehiculo["accesoriosVehiculo"];
	$observaciones = $respuestaVehiculo["observaciones"];

	if($gpsStr == "1"){

		$gps = "Si";
	
	}else if($gpsStr == "0"){

		$gps = "No";
	
	}else{

		$gps = "Sin dato";
	}

	var_dump($respuestaVehiculo);

	/*$excel = new Spreadsheet();
	$hojaActiva = $excel->getActiveSheet();
	$hojaActiva->setTitle("Soportes");

	$hojaActiva->setCellValue('A1','ID');
	$hojaActiva->setCellValue('B1','FECHA');
	$hojaActiva->setCellValue('C1','HORA');
	$hojaActiva->setCellValue('D1','UNIDAD');
	$hojaActiva->setCellValue('E1','MOTIVO');
	$hojaActiva->setCellValue('F1','USUARIO'); 
	$hojaActiva->setCellValue('G1','DESCRIPCION');
	$hojaActiva->setCellValue('H1','TECNICO');
	$hojaActiva->setCellValue('I1','ESTATUS');

	$fila = 2;*/

	/*foreach ($respuestaServicios as $key => $value) {

		$itemTecnico = "id";
		$valorTecnico = $value["tecnico_id"];
		$respuestaTecnico = ControladorUsuarios::ctrMostrarUsuariosAjax($itemTecnico,$valorTecnico);

		$itemUnidad = "idunidad";
		$valorUnidad = $value["unidad_id"];
		$respuestaUnidad = ControladorUnidades::ctrMostrarUnidades($itemUnidad,$valorUnidad);

		 if($value["status"] != "1"){ 

		 	$estado = "Pendiente";

		 }else{

		 	$estado = "Terminado";
		 }
		
		$hojaActiva->setCellValue('A'.$fila, ($key+1));
		$hojaActiva->setCellValue('B'.$fila, $value["fecha"]);
		$hojaActiva->setCellValue('C'.$fila, $value["hora"]);
		$hojaActiva->setCellValue('D'.$fila, $respuestaUnidad["nombreunidad"]);
		$hojaActiva->setCellValue('E'.$fila, $value["motivo"]);
		$hojaActiva->setCellValue('F'.$fila, $value["usuario"]);
		$hojaActiva->setCellValue('G'.$fila, $value["descripcion"]);
		$hojaActiva->setCellValue('H'.$fila, $respuestaTecnico["nombre"]);
		$hojaActiva->setCellValue('I'.$fila,$estado);
		$fila++;

		
	}



header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="'.$name.'.xlsx"');
header('Cache-Control: max-age=0');


 $write = IOFactory::createWriter($excel,'Xlsx');
 ob_end_clean();
 $write->save('php://output');

exit;*/

	}


}
	



 ?>