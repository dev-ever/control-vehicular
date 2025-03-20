<?php 
ob_start();


require_once '../../phpexcel/vendor/autoload.php';
require_once '../../../controladores/vehiculos.controlador.php';
require_once '../../../modelos/vehiculos.modelo.php';
require_once '../../../controladores/propietarios.controlador.php';
require_once '../../../modelos/propietarios.modelo.php';
require_once '../../../controladores/seguros.controlador.php';
require_once '../../../modelos/seguros.modelo.php';



use PhpOffice\PhpSpreadsheet\{Spreadsheet, IOFactory};
use PhpOffice\PhpSpreadsheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Style;


class TraerVehiculo{

	public $idVehiculo;  

	public function traerDatos(){


	date_default_timezone_set('America/Mexico_City');

	// $name = "unidad-".date("YmdHis");
	// $tabla = "tb_vehiculos";

	$itemVehiculo = "vh.idVehiculo";
	$valorVehiculo = $this->idVehiculo;

	// SELECT v.folio,v.eco,v.serie,v.placas,t.tipo,t.anio,t.pago,t.fechaPago FROM tb_vehiculos as v INNER JOIN tb_vehiculos_tenencias as t ON v.idVehiculo = t.vehiculo_id WHERE t.vehiculo_id = 1;

	$respuestaVehiculo = ControladorVehiculos::ctrConsultaGlobalVehiculos($itemVehiculo, $valorVehiculo);


	/*$folio = $respuestaVehiculo["folio"];
	$eco = $respuestaVehiculo["eco"];
	$propietario = $respuestaVehiculo["propietario_id"];
	$modelo = $respuestaVehiculo["modelo"];
	$placas = $respuestaVehiculo["placas"];
	$serie = $respuestaVehiculo["serie"];

	$vehiculo = $respuestaVehiculo["vehiculo_id"];
	$seguro_id = $respuestaVehiculo["seguro_id"];
	$poliza = $respuestaVehiculo["poliza"];
	$inciso = $respuestaVehiculo["inciso"];
	$vigencia = $respuestaVehiculo["vigencia"];
	$observaciones = $respuestaVehiculo["observaciones"];


	$tipo = $respuestaVehiculo["tipo"];
	$anio = $respuestaVehiculo["anio"];
	$pago = $respuestaVehiculo["pago"];
	$fechaPago = $respuestaVehiculo["fechaPago"];

	$ifVerificacion = $respuestaVehiculo["idVerif"];
	$tipoVerificacion = $respuestaVehiculo["tipoVerificacion"];
	$verificacion = $respuestaVehiculo["verificacion"];
	$estatus = $respuestaVehiculo["estatus"];
	$anioVerificacion = $respuestaVehiculo["anioVerificacion"];
	$fechaVerificacion = $respuestaVehiculo["fechaVerificacion"];
	$observacionesVerificacion = $respuestaVehiculo["obserVerificacion"];*/

	$name = "idVehiculo-".$valorVehiculo."-".date("Ymd-His");

	// var_dump($respuestaVehiculo);

	$excel = new Spreadsheet();
	$hojaActiva = $excel->getActiveSheet();
	$excel->getProperties()
	      ->setCreator('Mauro Ramírez, Everardo')
	      ->setLastModifiedBy("Everardo Mauro Ramírez")
	      ->setTitle("Control Vehicular")
	      ->setSubject("Sistema de Control Vehicular")
	      ->setDescription("Base de datos de servicios de administración de vehiculos")
	      ->setKeywords("control, vehiculo, frasangroup")
	      ->setCategory("Gestión Control Vehicular");

	$hojaActiva->setTitle("Servicios Vehiculo-".$valorVehiculo);
	
	$hojaActiva->setCellValue('A2','FOLIO');
	$hojaActiva->setCellValue('B2','#ECO');
	$hojaActiva->setCellValue('C2','PROPIETARIO');
	$hojaActiva->setCellValue('D2','MODELO');
	$hojaActiva->setCellValue('E2','PLACAS');
	$hojaActiva->setCellValue('F2','SERIE'); 

	$hojaActiva->setCellValue('G2','SEGURO');
	$hojaActiva->setCellValue('H2','POLIZA');
	$hojaActiva->setCellValue('I2','INCISO');
	$hojaActiva->setCellValue('J2','VIGENCIA');
	$hojaActiva->setCellValue('K2','OBSERVACIONES SEGURO');

	$hojaActiva->setCellValue('L2','TIPO TENENCIA');
	$hojaActiva->setCellValue('M2','AÑO TENENCIA');
	$hojaActiva->setCellValue('N2','PAGO TENENCIA');
	$hojaActiva->setCellValue('O2','FECHA PAGO TENENCIA');

	$hojaActiva->setCellValue('P2','ID VERIFICACION');
	$hojaActiva->setCellValue('Q2','TIPO VERIFICACION');
	$hojaActiva->setCellValue('R2','VERIFICACION');
	$hojaActiva->setCellValue('S2','ESTATUS DE VERIFICACION');
	$hojaActiva->setCellValue('T2','AÑO VERIFICACION');
	$hojaActiva->setCellValue('U2','FECHA VERIFICACION');
	$hojaActiva->setCellValue('V2','OBSERVACIONES VERIFICACION');

	$hojaActiva->mergeCells('A1:F1')->setCellValue('A1','DATOS DEL VEHICULO');
	$hojaActiva->mergeCells('G1:K1')->setCellValue('G1','DATOS DEL SEGURO');
	$hojaActiva->mergeCells('L1:O1')->setCellValue('L1','DATOS DE LA TENENCIA');
	$hojaActiva->mergeCells('P1:V1')->setCellValue('P1','DATOS DE LA VERIFICACION');

	$excel->getActiveSheet()->getStyle('A1:F1')->getAlignment()->setHorizontal('center');
	$excel->getActiveSheet()->getStyle('G1:K1')->getAlignment()->setHorizontal('center');
	$excel->getActiveSheet()->getStyle('L1:O1')->getAlignment()->setHorizontal('center');
	$excel->getActiveSheet()->getStyle('P1:V1')->getAlignment()->setHorizontal('center');

	$excel->getActiveSheet()->getStyle('A1:V2')->getFont()->setBold(true)->setSize(12);
	$excel->getActiveSheet()->getStyle('A1:F2')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('9FD5D1');
	$excel->getActiveSheet()->getStyle('G1:K2')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('9CD4FB');
	$excel->getActiveSheet()->getStyle('L1:O2')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFEC9E');
	$excel->getActiveSheet()->getStyle('P1:V2')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('9DFFC0');

	$fila = 3;

	 foreach ($respuestaVehiculo as $key => $value) {

	 	$itemPropietario = "idPropietario";
	 	$valorPropietario = $value["propietario_id"];
	 	$respuestaPropietario = ControladorPropietarios::ctrMostrarPropietarios($itemPropietario, $valorPropietario);

	 	if($value["tipoVerificacion"] == "1"){

	 		$tipoVerificacion = "Primer Semestre";

	 	}else if($value["tipoVerificacion"] == "1"){

	 		$tipoVerificacion = "Segundo Semestre";

	 	}

	 	if($value["estatus"] == "0"){

	 		$estatusVerificacion = "Pendiente";

	 	}else if($value["estatus"] == "1"){

	 		$estatusVerificacion = "Verificado";

	 	}


	 	if(isset($value["seguro_id"])){

	 		$itemSeguro = "idSeguro";
	 		$valorSeguro = $value["seguro_id"];

	 		$respuestaSeguro = ControladorSeguros::ctrMostrarSeguros($itemSeguro, $valorSeguro);


	 		$idSeguro = $respuestaSeguro["seguro"];
	 		$poliza = $value["poliza"];
	 		$inciso = $value["inciso"];
	 		$vigencia = $value["vigencia"];
	 		$observaciones = $value["observaciones"];

	 	}else{

	 		$idSeguro = "No asigando";
	 		$poliza = "No asigando";
	 		$inciso = "No asigando";
	 		$vigencia = "No asigando";
	 		$observaciones = "No asigando";
	 	}




		$hojaActiva->setCellValue('A'.$fila, $value["folio"]);
		$hojaActiva->setCellValue('B'.$fila, $value["eco"]);
		$hojaActiva->setCellValue('C'.$fila, $respuestaPropietario["propietario"]);
		$hojaActiva->setCellValue('D'.$fila, $value["modelo"]);
		$hojaActiva->setCellValue('E'.$fila, $value["placas"]);
		$hojaActiva->setCellValue('F'.$fila, $value["serie"]);
		$hojaActiva->setCellValue('G'.$fila, $idSeguro);
		$hojaActiva->setCellValue('H'.$fila, $poliza);
		$hojaActiva->setCellValue('I'.$fila, $inciso);
		$hojaActiva->setCellValue('J'.$fila, $vigencia);
		$hojaActiva->setCellValue('K'.$fila, $observaciones);

		$hojaActiva->setCellValue('L'.$fila, $value["tipo"]);
		$hojaActiva->setCellValue('M'.$fila, $value["anio"]);
		$hojaActiva->setCellValue('N'.$fila, number_format($value["pago"],2,".",","));
		$hojaActiva->setCellValue('O'.$fila, $value["fechaPago"]);

		$hojaActiva->setCellValue('P'.$fila, $value["idVerif"]);
		$hojaActiva->setCellValue('Q'.$fila, $tipoVerificacion);
		$hojaActiva->setCellValue('R'.$fila, $value["verificacion"]);
		$hojaActiva->setCellValue('S'.$fila, $estatusVerificacion);
		$hojaActiva->setCellValue('T'.$fila, $value["anioVerificacion"]);
		$hojaActiva->setCellValue('U'.$fila, $value["fechaVerificacion"]);
		$hojaActiva->setCellValue('V'.$fila, $value["obserVerificacion"]);

		$fila++;

		
	 }



	header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	header('Content-Disposition: attachment;filename="'.$name.'.xlsx"');
	header('Cache-Control: max-age=0');


 	$write = IOFactory::createWriter($excel,'Xlsx');

 	ob_end_clean();

 	$write->save('php://output');

 	exit;

	}


}
	

$imprimirReporteXls = new TraerVehiculo();
$imprimirReporteXls -> idVehiculo = $_GET["idVehiculo"];
$imprimirReporteXls -> traerDatos();


 ?>