<?php 

require_once "conexion.php"; 
 
class ModeloTramitesVehiculares{   

	/*=============================================
	MOSTRAR 
	=============================================*/

	static public function mdlMostrarTramitesVehiculares($tabla, $item, $valor){

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




	/*=============================================
	INGRESO 
	=============================================*/

	static public function mdlIngresarTramiteVehicular($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(vehiculo_id, tramite_id, estado, fecha, observaciones, created_at, usuario_id) VALUES (:vehiculo_id, :tramite_id, :estado, :fecha, :observaciones,  :created_at, :usuario_id)");

		$stmt->bindParam(":vehiculo_id", $datos["vehiculo_id"], PDO::PARAM_STR);
		$stmt->bindParam(":tramite_id", $datos["tramite_id"], PDO::PARAM_STR);
		$stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
		$stmt->bindParam(":observaciones", $datos["observaciones"], PDO::PARAM_STR);
		$stmt->bindParam(":created_at", $datos["created_at"], PDO::PARAM_STR);
		$stmt->bindParam(":usuario_id", $datos["usuario_id"], PDO::PARAM_STR);
		

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt -> close();

		$stmt = null;

	}


	static public function mdlEditarTramiteVehicular($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET vehiculo_id = :vehiculo_id, tramite_id = :tramite_id, estado = :estado, fecha = :fecha, observaciones = :observaciones, created_at = :created_at, usuario_id = :usuario_id  WHERE idTramiteVehiculo = :idTramiteVehiculo");

		$stmt->bindParam(":vehiculo_id", $datos["vehiculo_id"], PDO::PARAM_STR);
		$stmt->bindParam(":tramite_id", $datos["tramite_id"], PDO::PARAM_STR);
		$stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
		$stmt->bindParam(":observaciones", $datos["observaciones"], PDO::PARAM_STR);
		$stmt->bindParam(":created_at", $datos["created_at"], PDO::PARAM_STR);
		$stmt->bindParam(":usuario_id", $datos["usuario_id"], PDO::PARAM_STR);  
		$stmt->bindParam(":idTramiteVehiculo", $datos["idTramiteVehiculo"], PDO::PARAM_STR); 

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}



	/*=============================================
	  BORRAR
	 =============================================*/

	static public function mdlBorrarTramiteVehiculo($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idTramiteVehiculo = :id");

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