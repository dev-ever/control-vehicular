<?php

if (!isset($_SESSION)){

  session_start();

}

setlocale(LC_TIME, "spanish");

$url = ControladorRutas::ctrUrlFrontEnd();

?>
 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Control Vehicular | Inform[a]ticos </title>

  <!--=====================================
              Plugins CSS           
  ======================================-->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <link rel="icon" href="<?php echo $url; ?>vistas/img/plantilla/favicon.png">
  <link rel="stylesheet" href="<?php echo $url; ?>vistas/plugins/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $url; ?>vistas/plugins/css/all.min.css">
  <link rel="stylesheet" href="<?php echo $url; ?>vistas/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $url; ?>vistas/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $url; ?>vistas/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">

  <link rel="stylesheet" href="<?php echo $url; ?>vistas/plugins/bootstrap-select/bootstrap-select.min.css">
  <link rel="stylesheet" href="<?php echo $url; ?>vistas/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $url;?>vistas/bower_components/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.css">
  <link rel="stylesheet" href="<?php echo $url; ?>vistas/plugins/dropzone/dropzone.css">
  <link rel="stylesheet" href="<?php echo $url;?>vistas/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="<?php echo $url; ?>vistas/plugins/toast/jquery.toast.css">

  <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/style.css">
  
  <!--=====================================
              Plugins JAVASCRIPT           
  ======================================-->
  <!-- <script src="<?php //echo $url; ?>vistas/plugins/js/code.jquery.com_jquery-3.7.0.min.js"></script> -->
  <script type="text/javascript"  src="<?php echo $url; ?>vistas/plugins/js/jquery.min.js"></script>
  <script type="text/javascript"  src="<?php echo $url; ?>vistas/plugins/js/jquery-ui.min.js"></script>
  <script type="text/javascript"  src="<?php echo $url; ?>vistas/plugins/js/popper.min.js"></script>
  <script type="text/javascript"  src="<?php echo $url; ?>vistas/plugins/js/bootstrap.min.js"></script>
  <script type="text/javascript"  src="<?php echo $url; ?>vistas/plugins/js/fontawesome.min.js"></script>



  




  <script src="<?php echo $url; ?>vistas/plugins/moment/moment.min.js"></script>
  <script src="<?php echo $url; ?>vistas/bower_components/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.js"></script>

 


  <script src="<?php echo $url; ?>vistas/bower_components/sweetalert2/sweetalert2.all.min.js"></script>
  
  <script src="<?php echo $url; ?>vistas/plugins/dropzone/dropzone.js"></script>
  <script src="<?php echo $url; ?>vistas/plugins/toast/jquery.toast.min.js"></script>
  <script src="<?php echo $url; ?>vistas/plugins/zoom/jquery.zoom.min.js"></script>




</head>


<body class="hold-transition sidebar-mini layout-fixed">

<!--   <div id="loader-overlay">

    <div id="loader">Cargando...</div>

  </div>
 -->

<?php

  if(isset($_SESSION["iniciarSesionVehicular"]) && $_SESSION["iniciarSesionVehicular"] == "ok"){

   echo '<div class="wrapper">';

    /*=============================================
    CABEZOTE
    =============================================*/

    include "modulos/cabezote.php";


    /*=============================================
    MENU
    =============================================*/

    include "modulos/menus.php";

    /*=============================================
    CONTENIDO
    =============================================*/

    if(isset($_GET["ruta"])){

      if($_GET["ruta"] == "inicio" ||
        $_GET["ruta"] == "usuarios" ||
        $_GET["ruta"] == "perfil" ||
        $_GET["ruta"] == "alta-vehiculo" ||
        $_GET["ruta"] == "control-reportes" ||
        $_GET["ruta"] == "incidencias" ||
        $_GET["ruta"] == "tipo-incidencias" ||
        $_GET["ruta"] == "test" ||
        $_GET["ruta"] == "unidad-negocios" ||
        $_GET["ruta"] == "notificaciones" ||
        $_GET["ruta"] == "historial-notificaciones" ||
        $_GET["ruta"] == "info" ||
        $_GET["ruta"] == "perfiles" ||

        $_GET["ruta"] == "mi-perfil" ||
        $_GET["ruta"] == "nuevo-vehiculo" ||
        $_GET["ruta"] == "unidad-negocios" ||
        $_GET["ruta"] == "altas-control-vehicular" ||
        $_GET["ruta"] == "control-seguros" ||
        $_GET["ruta"] == "control-verificaciones" ||
        $_GET["ruta"] == "control-tenencias" ||
        $_GET["ruta"] == "control-servicios" ||
        $_GET["ruta"] == "control-tramites" ||
        $_GET["ruta"] == "alta-documentos" ||
        $_GET["ruta"] == "alta-ticket-vehicular" ||
        $_GET["ruta"] == "solicitudes-vehiculo" ||
        $_GET["ruta"] == "historial-inventarios" ||
        $_GET["ruta"] == "consulta-control-vehicular" ||
        $_GET["ruta"] == "asignados-unidad" ||

        $_GET["ruta"] == "logs" ||
        

        $_GET["ruta"] == "salir"){

        include "modulos/".$_GET["ruta"].".php";

      }else{

        include "modulos/404.php";

      }

    }else{

      include "modulos/inicio.php";

    }

    /*=============================================
    FOOTER
    =============================================*/

    include "modulos/footer.php";

    echo '</div>';

  }else{

    include "modulos/login.php";

  }




?>


<div id="loading-max">

  <div class="loading-spinner"></div>
  
</div>

<input type="hidden" value="<?php echo $url; ?>" id="rutaOculta">


<script src="<?php echo $url; ?>vistas/plugins/datatables/jquery.dataTables.min.js"></script>

<script src="<?php echo $url; ?>vistas/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo $url; ?>vistas/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo $url; ?>vistas/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>



<script src="<?php echo $url; ?>vistas/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>


<script src="<?php echo $url; ?>vistas/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo $url; ?>vistas/plugins/datatables-buttons/js/buttons.html5.js"></script>
<script src="<?php echo $url; ?>vistas/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo $url; ?>vistas/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>

<script src="<?php echo $url; ?>vistas/plugins/bootstrap-select/bootstrap-select.min.js"></script>
<script src="<?php echo $url; ?>vistas/plugins/daterangepicker/daterangepicker.js"></script>

<script src="<?php echo $url; ?>vistas/dist/js/adminlte.min.js"></script>
<script src="<?php echo $url; ?>vistas/js/plantilla.js"></script>
<script src="<?php echo $url; ?>vistas/js/usuarios.js"></script>
<script src="<?php echo $url; ?>vistas/js/perfil.js"></script>
<script src="<?php echo $url; ?>vistas/js/unidades.js"></script>
<script src="<?php echo $url; ?>vistas/js/controlVehicular.min.js"></script>
<script src="<?php echo $url; ?>vistas/js/gestionDocumental.js"></script>




</body>


</html>