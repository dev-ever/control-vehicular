<?php  

 ini_set("display_errors", 1);
 ini_set("display_startup_errors", 1);
 ini_set('error_reporting', E_ALL);
 error_reporting(E_ALL);


 if(!isset($_SESSION)) 
 { 
 	session_start(); 
 } 


require_once "controladores/rutas.controlador.php";
require_once "controladores/plantilla.controlador.php";

require_once "controladores/usuarios.controlador.php";
require_once "controladores/perfiles.controlador.php";
require_once "controladores/areas-negocios.controlador.php";
require_once "controladores/logs.controlador.php";
require_once "controladores/propietarios.controlador.php";
require_once "controladores/tipos-transportes.controlador.php";
require_once "controladores/marcas.controlador.php";
require_once "controladores/subMarcas.controlador.php";
require_once "controladores/clases.controlador.php";
require_once "controladores/combustibles.controlador.php";
require_once "controladores/seguros.controlador.php";
require_once "controladores/tramites.controlador.php";
require_once "controladores/vehiculos.controlador.php";
require_once "controladores/documentacion-vehiculos.controlador.php";
require_once "controladores/servicios-vehiculares.controlador.php";
require_once "controladores/tramites-vehiculos.controlador.php";
require_once "controladores/seguros-vehiculos.controlador.php";
require_once "controladores/verificaciones.controlador.php";
require_once "controladores/tenencias.controlador.php";
require_once "controladores/notificaciones.controlador.php";
require_once "controladores/incidencias-inventarios.controlador.php";

require_once "controladores/notificaciones-envios.controlador.php";






require_once "modelos/usuarios.modelo.php";
require_once "modelos/perfiles.modelo.php";
require_once "modelos/notificaciones-envios.modelo.php";
require_once "modelos/areas-negocios.modelo.php";
require_once "modelos/logs.modelo.php";
require_once "modelos/propietarios.modelo.php";
require_once "modelos/tipos-transportes.modelo.php";
require_once "modelos/marcas.modelo.php";
require_once "modelos/subMarcas.modelo.php";
require_once "modelos/clases.modelo.php";
require_once "modelos/combustibles.modelo.php";
require_once "modelos/seguros.modelo.php";
require_once "modelos/tramites.modelo.php";
require_once "modelos/vehiculos.modelo.php";
require_once "modelos/documentacion-vehiculos.modelo.php";
require_once "modelos/servicios-vehiculares.modelo.php";
require_once "modelos/tramites-vehiculos.modelo.php";
require_once "modelos/seguros-vehiculos.modelo.php";
require_once "modelos/verificaciones.modelo.php";
require_once "modelos/tenencias.modelo.php";
require_once "modelos/incidencias-inventarios.modelo.php";

require_once "extensiones/enviador-notificaciones/vendor/autoload.php";


$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();



 ?>