<?php 
require_once "../../../controladores/ordenes.controlador.php";
require_once "../../../modelos/ordenes.modelo.php";
require_once "../../../controladores/empresas.controlador.php";
require_once "../../../modelos/empresas.modelo.php";

$general = new ControladorOrdenes();  
$general -> ctrDescargarReporteGeneral();



 ?>


 