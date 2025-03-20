<?php 

require_once "../../../controladores/ordenes.controlador.php";
require_once "../../../modelos/ordenes.modelo.php";
require_once "../../../controladores/empresas.controlador.php";
require_once "../../../modelos/empresas.modelo.php";
require_once "../../../controladores/proveedores.controlador.php";
require_once "../../../modelos/proveedores.modelo.php";

$generalProveedor = new ControladorOrdenes();  
$generalProveedor -> ctrDescargarReporteGeneralProveedor();



 ?>


 