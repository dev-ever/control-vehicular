<?php 
if(!isset($_SESSION)){ 
  
  session_start(); 

} 



ob_start();
require_once "../../../controladores/vehiculos.controlador.php";
require_once "../../../modelos/vehiculos.modelo.php";

require_once "../../../controladores/propietarios.controlador.php";
require_once "../../../modelos/propietarios.modelo.php";

require_once "../../../controladores/clases.controlador.php";
require_once "../../../modelos/clases.modelo.php";

require_once "../../../controladores/marcas.controlador.php";
require_once "../../../modelos/marcas.modelo.php";

require_once "../../../controladores/subMarcas.controlador.php";
require_once "../../../modelos/subMarcas.modelo.php";

require_once "../../../controladores/tipos-transportes.controlador.php";
require_once "../../../modelos/tipos-transportes.modelo.php";

require_once "../../../controladores/combustibles.controlador.php";
require_once "../../../modelos/combustibles.modelo.php";

require_once "../../../controladores/seguros.controlador.php";
require_once "../../../modelos/seguros.modelo.php";

require_once "../../../controladores/usuarios.controlador.php";
require_once "../../../modelos/usuarios.modelo.php";

require_once "../../../controladores/areas-negocios.controlador.php";
require_once "../../../modelos/areas-negocios.modelo.php";

$reporteVehiculos = new ControladorVehiculos(); 
$reporteVehiculos -> ctrDescargarReportesVehiculos();


ob_end_flush(); 

 ?>   