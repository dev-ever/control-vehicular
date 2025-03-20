<?php 

class ControladorPlantilla{

	static public function ctrPlantilla(){

		include "vistas/plantilla.php";
		
	}



	static public function fechaLarga($fecha){

		$timeZone = new \DateTimeZone("America/Mexico_City");

		$fechaCaptura = new \DateTime($fecha, $timeZone);

		$fechaAltaFormato = new \IntlDateFormatter('es_MX', \IntlDateFormatter::FULL, \IntlDateFormatter::NONE, $timeZone);

		$fechaCapturada = $fechaAltaFormato->format($fechaCaptura);

		return $fechaCapturada;


	}



}

 ?>
