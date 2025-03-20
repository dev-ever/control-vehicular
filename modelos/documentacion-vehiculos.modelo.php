<?php 

require_once "conexion.php"; 
 
class ModeloDocumentosVehiculos{  
 
	/*=============================================
	MOSTRAR PERFILES 
	=============================================*/
 
	static public function mdlMostrarDocumentosVehiculos($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}
		

		$stmt -> close();
 
		$stmt = null;

	}




                                                         
	static public function mdlActualizarDocumentoVehiculo($tabla, $itemCampo1, $valorCampo1, $itemCampo2, $valorCampo2, $itemVehiculo, $valorVehiculo){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $itemCampo1 = :$itemCampo1, $itemCampo2 = :$itemCampo2 WHERE $itemVehiculo = :$itemVehiculo");
		$stmt -> bindParam(":".$itemCampo1, $valorCampo1, PDO::PARAM_STR);
		$stmt -> bindParam(":".$itemCampo2, $valorCampo2, PDO::PARAM_STR);
		$stmt -> bindParam(":".$itemVehiculo, $valorVehiculo, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";

		}else{
			
			return "error";
		}
		
		$stmt -> close();
		$stmt -> null;

	}



	static public function mdlRegistrarDocumentosVehiculos($tablaDocusVehiculo, $datosDocusVehiculo){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tablaDocusVehiculo(factura, checkFactura, poliza, checkPoliza, tenencia, checkTenencia, verificacion, checkVerificacion, pedimento, checkPedimento, tarjeta, checkTarjeta, garantia, checkGarantia, permiso, checkPermiso, compraVenta, checkCompraVenta, ultimoTramite, checkUltimoTramite, facturaOrigen, checkFacturaOrigen, vehiculo_id) VALUES (:factura, :checkFactura, :poliza, :checkPoliza, :tenencia, :checkTenencia, :verificacion, :checkVerificacion, :pedimento, :checkPedimento, :tarjeta, :checkTarjeta, :garantia, :checkGarantia, :permiso, :checkPermiso, :compraVenta, :checkCompraVenta, :ultimoTramite, :checkUltimoTramite, :facturaOrigen, :checkFacturaOrigen, :vehiculo_id)");
		
		$stmt->bindParam(":factura", $datosDocusVehiculo["factura"],PDO::PARAM_STR);
		$stmt->bindParam(":checkFactura", $datosDocusVehiculo["checkFactura"],PDO::PARAM_STR);
		$stmt->bindParam(":poliza", $datosDocusVehiculo["poliza"],PDO::PARAM_STR);
		$stmt->bindParam(":checkPoliza", $datosDocusVehiculo["checkPoliza"],PDO::PARAM_STR);
		$stmt->bindParam(":tenencia", $datosDocusVehiculo["tenencia"],PDO::PARAM_STR);
		$stmt->bindParam(":checkTenencia", $datosDocusVehiculo["checkTenencia"],PDO::PARAM_STR);
		$stmt->bindParam(":verificacion", $datosDocusVehiculo["verificacion"],PDO::PARAM_STR);
		$stmt->bindParam(":checkVerificacion", $datosDocusVehiculo["checkVerificacion"],PDO::PARAM_STR);
		$stmt->bindParam(":pedimento", $datosDocusVehiculo["pedimento"],PDO::PARAM_STR);
		$stmt->bindParam(":checkPedimento", $datosDocusVehiculo["checkPedimento"],PDO::PARAM_STR);
		$stmt->bindParam(":tarjeta", $datosDocusVehiculo["tarjeta"],PDO::PARAM_STR);
		$stmt->bindParam(":checkTarjeta", $datosDocusVehiculo["checkTarjeta"],PDO::PARAM_STR);
		$stmt->bindParam(":garantia", $datosDocusVehiculo["garantia"],PDO::PARAM_STR);
		$stmt->bindParam(":checkGarantia", $datosDocusVehiculo["checkGarantia"],PDO::PARAM_STR);
		$stmt->bindParam(":permiso", $datosDocusVehiculo["permiso"],PDO::PARAM_STR);
		$stmt->bindParam(":checkPermiso", $datosDocusVehiculo["checkPermiso"],PDO::PARAM_STR);
		$stmt->bindParam(":compraVenta", $datosDocusVehiculo["compraVenta"],PDO::PARAM_STR);
		$stmt->bindParam(":checkCompraVenta", $datosDocusVehiculo["checkCompraVenta"],PDO::PARAM_STR);
		$stmt->bindParam(":ultimoTramite", $datosDocusVehiculo["ultimoTramite"],PDO::PARAM_STR);
		$stmt->bindParam(":checkUltimoTramite", $datosDocusVehiculo["checkUltimoTramite"],PDO::PARAM_STR);
		$stmt->bindParam(":facturaOrigen", $datosDocusVehiculo["facturaOrigen"],PDO::PARAM_STR);
		$stmt->bindParam(":checkFacturaOrigen", $datosDocusVehiculo["checkFacturaOrigen"],PDO::PARAM_STR);
		$stmt->bindParam(":vehiculo_id", $datosDocusVehiculo["vehiculo_id"],PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";

		}

		$stmt->close();
		
		$stmt = null;

	 
	}




	static public function mdlBorrarDocumentoVehiculo($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE vehiculo_id = :id");

		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;


	}






}





?>

