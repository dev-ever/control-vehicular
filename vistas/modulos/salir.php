<?php

$item = "session_log";
$valor = 0;
$item1 = "idResponsable";
$valor1 = $_SESSION["idVehicular"];

ControladorUsuarios::ctrActualizacionCampo($item, $valor, $item1, $valor1);

session_destroy();

echo '<script>

	window.location = "login";

</script>';

?>