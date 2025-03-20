<?php 

	if($_SESSION["perfilVehicular"] == "1" || $_SESSION["perfilVehicular"] == "2"){

	  	include_once "inicio/inicio-administrador.php";

	}else if($_SESSION["perfilVehicular"] == "3"){

		include_once "inicio/inicio-unidades.php"; 

	}else  if($_SESSION["perfilVehicular"] == "4"){
	  
	  	include_once "inicio/inicio-usuario.php"; 

	}else if($_SESSION["perfilVehicular"] == "5"){ 

	 	include_once "inicio/inicio-control-vehicular.php";

	}
  
?>

   