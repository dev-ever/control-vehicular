 <?php  

require_once "conexion.php";  

class ModeloVehiculos{   
 
	/*============================================= 
	MOSTRAR PERFILES
	=============================================*/

	static public function mdlMostrarVehiculos($tabla, $item, $valor){

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


	static public function mdlMostrarVehiculosUsuario($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);


			$stmt -> execute();

			return $stmt -> fetchAll();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		} 
		
		$stmt -> close(); 
		$stmt = null;

	}





	static public function mdlMostrarVehiculosTotales($tabla, $item, $valor){
		
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt = null;



	}



	static public function mdlUltimosVehiculos($tabla, $item, $valor, $campo, $orden){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY $campo $orden LIMIT 10");
			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
			$stmt -> execute();
			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY $campo $orden LIMIT 10");
			$stmt -> execute();
			return $stmt -> fetchAll();
		}

		$stmt -> close();
		$stmt = null;


	}





	/*=============================================
	INGRESO CLSE
	=============================================*/

	static public function mdlIngresarVehiculo($tabla, $datos){

		$pdo = Conexion::conectar();

		$stmt = $pdo ->prepare("INSERT INTO $tabla(imagen, folio, eco, propietario_id, nombreTarjeta, facturaOrigen, gps, duplicadoLlaves, clase_id, marca_id, subMarca_id, transporte_id, serie, modelo, anio, placas, numTarjeta, combustible_id, motor, km, hrs, color, estadoFisico, estadoOperativo, fechaCompra, noFactura, seguro_id, proveedorCompra, ubicacion, estatus, descripcionVehiculo, accesoriosVehiculo, stock, responsable_id, observaciones, created_at, usuario_id, area_id, usuario_asignado_id, unidad_id) VALUES (:imagen, :folio, :eco, :propietario_id, :nombreTarjeta, :facturaOrigen, :gps, :duplicadoLlaves, :clase_id, :marca_id, :subMarca_id, :transporte_id, :serie, :modelo, :anio, :placas, :numTarjeta, :combustible_id, :motor, :km, :hrs, :color, :estadoFisico, :estadoOperativo, :fechaCompra, :noFactura, :seguro_id, :proveedorCompra, :ubicacion, :estatus, :descripcionVehiculo, :accesoriosVehiculo, :stock, :responsable_id, :observaciones, :created_at, :usuario_id, :area_id, :usuario_asignado_id, :unidad_id)");

		$stmt->bindParam(":imagen", $datos["imagen"], PDO::PARAM_STR);
		$stmt->bindParam(":folio", $datos["folio"], PDO::PARAM_STR);
		$stmt->bindParam(":eco", $datos["eco"], PDO::PARAM_STR);	
		$stmt->bindParam(":propietario_id", $datos["propietario_id"], PDO::PARAM_STR);
		$stmt->bindParam(":nombreTarjeta", $datos["nombreTarjeta"], PDO::PARAM_STR);
		$stmt->bindParam(":facturaOrigen", $datos["facturaOrigen"], PDO::PARAM_STR);
		$stmt->bindParam(":gps", $datos["gps"], PDO::PARAM_STR);
		$stmt->bindParam(":duplicadoLlaves", $datos["duplicadoLlaves"], PDO::PARAM_STR);
		$stmt->bindParam(":clase_id", $datos["clase_id"], PDO::PARAM_STR);
		$stmt->bindParam(":marca_id", $datos["marca_id"], PDO::PARAM_STR);
		$stmt->bindParam(":subMarca_id", $datos["subMarca_id"], PDO::PARAM_STR);
		$stmt->bindParam(":transporte_id", $datos["transporte_id"], PDO::PARAM_STR);
		$stmt->bindParam(":serie", $datos["serie"], PDO::PARAM_STR);
		$stmt->bindParam(":modelo", $datos["modelo"], PDO::PARAM_STR);
		$stmt->bindParam(":anio", $datos["anio"], PDO::PARAM_STR);
		$stmt->bindParam(":placas", $datos["placas"], PDO::PARAM_STR);
		$stmt->bindParam(":numTarjeta", $datos["numTarjeta"], PDO::PARAM_STR);
		$stmt->bindParam(":combustible_id", $datos["combustible_id"], PDO::PARAM_STR);
		$stmt->bindParam(":motor", $datos["motor"], PDO::PARAM_STR);
		$stmt->bindParam(":km", $datos["km"], PDO::PARAM_STR);
		$stmt->bindParam(":hrs", $datos["hrs"], PDO::PARAM_STR);
		$stmt->bindParam(":color", $datos["color"], PDO::PARAM_STR);
		$stmt->bindParam(":estadoFisico", $datos["estadoFisico"], PDO::PARAM_STR);
		$stmt->bindParam(":estadoOperativo", $datos["estadoOperativo"], PDO::PARAM_STR);
		$stmt->bindParam(":fechaCompra", $datos["fechaCompra"], PDO::PARAM_STR);
		$stmt->bindParam(":noFactura", $datos["noFactura"], PDO::PARAM_STR);
		$stmt->bindParam(":seguro_id", $datos["seguro_id"], PDO::PARAM_STR);
		$stmt->bindParam(":proveedorCompra", $datos["proveedorCompra"], PDO::PARAM_STR);
		$stmt->bindParam(":ubicacion", $datos["ubicacion"], PDO::PARAM_STR);
		$stmt->bindParam(":estatus", $datos["estatus"], PDO::PARAM_STR);
		$stmt->bindParam(":descripcionVehiculo", $datos["descripcionVehiculo"], PDO::PARAM_STR);
		$stmt->bindParam(":accesoriosVehiculo", $datos["accesoriosVehiculo"], PDO::PARAM_STR);
		$stmt->bindParam(":stock", $datos["stock"], PDO::PARAM_INT);
		$stmt->bindParam(":responsable_id", $datos["responsable_id"], PDO::PARAM_STR);
		$stmt->bindParam(":observaciones", $datos["observaciones"], PDO::PARAM_STR);
		$stmt->bindParam(":created_at", $datos["created_at"], PDO::PARAM_STR);
		$stmt->bindParam(":usuario_id", $datos["usuario_id"], PDO::PARAM_STR);
		$stmt->bindParam(":area_id", $datos["area_id"], PDO::PARAM_STR);
		$stmt->bindParam(":usuario_asignado_id", $datos["usuario_asignado_id"], PDO::PARAM_STR);
		$stmt->bindParam(":unidad_id", $datos["unidad_id"], PDO::PARAM_STR);
		
		if($stmt->execute()){

			 $lastInsertId = $pdo->lastInsertId();
			 return $lastInsertId;

			// return "ok";

		}else{

			$lastInsertId = 0;
			return $lastInsertId;

			// return "error";
		
		}

		$stmt -> close();

		$stmt = null;

	}






	/*=============================================
	EDITAR VEHICULO
	=============================================*/

	static public function mdlEditarVehiculo($tabla, $datos){
	
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET eco = :eco, propietario_id = :propietario_id, nombreTarjeta = :nombreTarjeta, facturaOrigen = :facturaOrigen, gps = :gps, duplicadoLlaves = :duplicadoLlaves, clase_id = :clase_id, marca_id = :marca_id, subMarca_id = :subMarca_id, transporte_id = :transporte_id, serie = :serie, modelo = :modelo, anio = :anio, placas = :placas, numTarjeta = :numTarjeta, combustible_id = :combustible_id, motor = :motor, km = :km, hrs = :hrs, color = :color, estadoFisico = :estadoFisico, estadoOperativo = :estadoOperativo, fechaCompra = :fechaCompra, noFactura = :noFactura, seguro_id = :seguro_id, proveedorCompra = :proveedorCompra, ubicacion = :ubicacion, estatus = :estatus, descripcionVehiculo = :descripcionVehiculo, accesoriosVehiculo = :accesoriosVehiculo, responsable_id = :responsable_id, observaciones = :observaciones, created_at = :created_at, usuario_id = :usuario_id, area_id = :area_id, usuario_asignado_id = :usuario_asignado_id, unidad_id = :unidad_id  WHERE idVehiculo = :idVehiculo");

		$stmt->bindParam(":eco", $datos["eco"], PDO::PARAM_STR);	
		$stmt->bindParam(":propietario_id", $datos["propietario_id"], PDO::PARAM_STR);
		$stmt->bindParam(":nombreTarjeta", $datos["nombreTarjeta"], PDO::PARAM_STR);
		$stmt->bindParam(":facturaOrigen", $datos["facturaOrigen"], PDO::PARAM_STR);
		$stmt->bindParam(":gps", $datos["gps"], PDO::PARAM_STR);
		$stmt->bindParam(":duplicadoLlaves", $datos["duplicadoLlaves"], PDO::PARAM_STR);
		$stmt->bindParam(":clase_id", $datos["clase_id"], PDO::PARAM_STR);
		$stmt->bindParam(":marca_id", $datos["marca_id"], PDO::PARAM_STR);
		$stmt->bindParam(":subMarca_id", $datos["subMarca_id"], PDO::PARAM_STR);
		$stmt->bindParam(":transporte_id", $datos["transporte_id"], PDO::PARAM_STR);
		$stmt->bindParam(":serie", $datos["serie"], PDO::PARAM_STR);
		$stmt->bindParam(":modelo", $datos["modelo"], PDO::PARAM_STR);
		$stmt->bindParam(":anio", $datos["anio"], PDO::PARAM_STR);
		$stmt->bindParam(":placas", $datos["placas"], PDO::PARAM_STR);
		$stmt->bindParam(":numTarjeta", $datos["numTarjeta"], PDO::PARAM_STR);
		$stmt->bindParam(":combustible_id", $datos["combustible_id"], PDO::PARAM_STR);
		$stmt->bindParam(":motor", $datos["motor"], PDO::PARAM_STR);
		$stmt->bindParam(":km", $datos["km"], PDO::PARAM_STR);
		$stmt->bindParam(":hrs", $datos["hrs"], PDO::PARAM_STR);
		$stmt->bindParam(":color", $datos["color"], PDO::PARAM_STR);
		$stmt->bindParam(":estadoFisico", $datos["estadoFisico"], PDO::PARAM_STR);
		$stmt->bindParam(":estadoOperativo", $datos["estadoOperativo"], PDO::PARAM_STR);
		$stmt->bindParam(":fechaCompra", $datos["fechaCompra"], PDO::PARAM_STR);
		$stmt->bindParam(":noFactura", $datos["noFactura"], PDO::PARAM_STR);
		$stmt->bindParam(":seguro_id", $datos["seguro_id"], PDO::PARAM_STR);
		$stmt->bindParam(":proveedorCompra", $datos["proveedorCompra"], PDO::PARAM_STR);
		$stmt->bindParam(":ubicacion", $datos["ubicacion"], PDO::PARAM_STR);
		$stmt->bindParam(":estatus", $datos["estatus"], PDO::PARAM_STR);
		$stmt->bindParam(":descripcionVehiculo", $datos["descripcionVehiculo"], PDO::PARAM_STR);
		$stmt->bindParam(":accesoriosVehiculo", $datos["accesoriosVehiculo"], PDO::PARAM_STR);
		$stmt->bindParam(":responsable_id", $datos["responsable_id"], PDO::PARAM_STR);
		$stmt->bindParam(":observaciones", $datos["observaciones"], PDO::PARAM_STR);
		$stmt->bindParam(":created_at", $datos["created_at"], PDO::PARAM_STR);
		$stmt->bindParam(":usuario_id", $datos["usuario_id"], PDO::PARAM_STR);
		$stmt->bindParam(":area_id", $datos["area_id"], PDO::PARAM_STR);
		$stmt->bindParam(":usuario_asignado_id", $datos["usuario_asignado_id"], PDO::PARAM_STR);
		$stmt->bindParam(":unidad_id", $datos["unidad_id"], PDO::PARAM_STR);
		$stmt->bindParam(":idVehiculo", $datos["idVehiculo"], PDO::PARAM_STR);


		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	
			// $errorInfo = $stmt->errorInfo();

			// 	return "error".$errorInfo[2];

		}

		$stmt -> close();

		$stmt = null;
 
	}




/*============================================================================= 
    EJECUCIÓN DE LLAMADO REPORTE GLOBAL DE SEGUROS, TENENCIAS, VERIFICACIONES
  =============================================================================*/


	static public function mdlConsultaGlobaVehiculo($itemVehiculo, $valorVehiculo){



		$stmt = Conexion::conectar()->prepare("SELECT 
											     vh.idVehiculo, vh.folio, vh.eco, vh.propietario_id, vh.modelo, vh.placas, vh.serie, 
											     s.vehiculo_id, s.seguro_id, s.poliza, s.inciso, s.vigencia, s.observaciones, 
											     t.vehiculo_id, t.tipo, t.anio, t.pago, t.fechaPago, 
											     v.vehiculo_id, v.idVerif, v.tipoVerificacion, v.verificacion, v.estatus, v.anio as anioVerificacion, v.fecha as fechaVerificacion, v.observaciones as obserVerificacion
												FROM tb_vehiculos AS vh 
												LEFT JOIN tb_vehiculos_seguros AS s ON vh.idVehiculo = s.vehiculo_id
												LEFT JOIN tb_vehiculos_tenencias AS t ON vh.idVehiculo = t.vehiculo_id 
												LEFT JOIN tb_vehiculos_verificaciones AS v ON vh.idVehiculo = v.vehiculo_id 
												WHERE $itemVehiculo = $valorVehiculo");

		// $stmt -> bindParam(":".$itemVehiculo, $valorVehiculo, PDO::PARAM_STR);

		$stmt -> execute();
		return $stmt -> fetchAll();
		$stmt -> close();
		$stmt = null;

	}



	static public function mdlConsultaGlobal(){

		/*$stmt = Conexion::conectar()->prepare("SELECT 
											     vh.idVehiculo, vh.folio, vh.eco, vh.propietario_id, vh.modelo, vh.placas, vh.serie, 
											     s.vehiculo_id, s.seguro_id, s.poliza, s.inciso, s.vigencia, s.observaciones, 
											     t.vehiculo_id, t.tipo, t.anio, t.pago, t.fechaPago, 
											     v.vehiculo_id, v.idVerif, v.tipoVerificacion, v.verificacion, v.estatus, v.anio as anioVerificacion, v.fecha as fechaVerificacion, v.observaciones as obserVerificacion
												FROM tb_vehiculos AS vh 
												LEFT JOIN tb_vehiculos_seguros AS s ON vh.idVehiculo = s.vehiculo_id
												LEFT JOIN tb_vehiculos_tenencias AS t ON vh.idVehiculo = t.vehiculo_id 
												LEFT JOIN tb_vehiculos_verificaciones AS v ON vh.idVehiculo = v.vehiculo_id ORDER BY vh.idVehiculo ASC");*/

		$stmt = Conexion::conectar()->prepare("SELECT 
												vh.idVehiculo, vh.folio, vh.eco, vh.propietario_id, vh.modelo, vh.placas, vh.serie, 
												s.vehiculo_id, s.seguro_id, s.poliza, s.inciso, s.vigencia, s.observaciones, 
												t.vehiculo_id, t.tipo, t.anio, t.pago, t.fechaPago, 
												v.vehiculo_id, v.idVerif, v.tipoVerificacion, v.verificacion, v.estatus, v.anio as anioVerificacion, v.fecha as fechaVerificacion, v.observaciones as obserVerificacion,
												vs.vehiculo_id, vs.servicio, vs.taller, vs.observaciones as obsrServicio, vs.fecha as fechaServicio,
												vt.vehiculo_id, vt.tramite_id, vt.estado, vt.fecha as fechaTramite, vt.observaciones as obserTramite

												FROM tb_vehiculos AS vh 
												LEFT JOIN tb_vehiculos_seguros AS s ON vh.idVehiculo = s.vehiculo_id
												LEFT JOIN tb_vehiculos_tenencias AS t ON vh.idVehiculo = t.vehiculo_id 
												LEFT JOIN tb_vehiculos_verificaciones AS v ON vh.idVehiculo = v.vehiculo_id
												LEFT JOIN tb_vehiculos_servicios AS vs ON vh.idVehiculo = vs.vehiculo_id
												LEFT JOIN tb_vehiculos_tramites AS vt ON vh.idVehiculo = vt.vehiculo_id
												ORDER BY vh.idVehiculo ASC");

		$stmt -> execute();
		return $stmt -> fetchAll();
		$stmt -> close();
		$stmt = null;
	}





/*==================================================================================
  ==================================================================================
  ==================================================================================

	      CONTEXTO DE EJECUCION DE TICKETS A SOLICITUDES DE VEHICULOS

  ==================================================================================
  ==================================================================================
===================================================================================*/



	static public function mdlAltaSolicitudVehiculo($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(solicitante_id, titulo, descripcion, estado, created_at, observaciones, urlFile) VALUES (:solicitante_id, :titulo, :descripcion, :estado, :created_at, :observaciones, :urlFile)");

		$stmt->bindParam(":solicitante_id", $datos["solicitante_id"], PDO::PARAM_STR);
		$stmt->bindParam(":titulo", $datos["titulo"], PDO::PARAM_STR);
		$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
		$stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
		$stmt->bindParam(":created_at", $datos["created_at"], PDO::PARAM_STR);
		$stmt->bindParam(":observaciones", $datos["observaciones"], PDO::PARAM_STR);
		$stmt->bindParam(":urlFile", $datos["urlFile"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;



	}





	static public function mdlMostrarSolicitudesVehiculos($tabla, $item, $valor){

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



	static public function mdlActualizarSolicitudVehiculo($tabla, $item1, $valor1, $item2, $valor2){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE $item2 = :$item2");

		$stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
		$stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}


	static public function mdlMostrarSolicitudesVehiculosEstado($tabla, $item, $valor){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt = null;

	}




	static public function mdlMostrarSolicitudesVehiculosPersonalizado($tabla, $item, $valor){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt = null;

	}


	static public function mdlBorrarVehiculo($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idVehiculo = :id");

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