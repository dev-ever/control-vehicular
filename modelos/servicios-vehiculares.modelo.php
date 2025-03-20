<?php 

require_once "conexion.php"; 

class ModeloServiciosVehiculares{  

	/*=============================================
	MOSTRAR 
	=============================================*/

	static public function mdlMostrarServiciosVehiculares($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY fecha DESC");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}
		

		$stmt -> close();

		$stmt = null;

	}




	/*=============================================
	INGRESO 
	=============================================*/

	static public function mdlIngresarServicioVehicular($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(vehiculo_id, servicio, taller, observaciones, fecha, created_at, usuario_id) VALUES (:vehiculo_id, :servicio, :taller, :observaciones, :fecha, :created_at, :usuario_id)");

		$stmt->bindParam(":vehiculo_id", $datos["vehiculo_id"], PDO::PARAM_STR);
		$stmt->bindParam(":servicio", $datos["servicio"], PDO::PARAM_STR);
		$stmt->bindParam(":taller", $datos["taller"], PDO::PARAM_STR);
		$stmt->bindParam(":observaciones", $datos["observaciones"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
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


	static public function mdlEditarServicioVehicular($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET vehiculo_id = :vehiculo_id, servicio = :servicio, taller = :taller, observaciones = :observaciones, fecha = :fecha, created_at = :created_at, usuario_id = :usuario_id  WHERE idVehiculoServicio = :idVehiculoServicio");

		$stmt->bindParam(":vehiculo_id", $datos["vehiculo_id"], PDO::PARAM_STR);
		$stmt->bindParam(":servicio", $datos["servicio"], PDO::PARAM_STR);
		$stmt->bindParam(":taller", $datos["taller"], PDO::PARAM_STR);
		$stmt->bindParam(":observaciones", $datos["observaciones"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
		$stmt->bindParam(":created_at", $datos["created_at"], PDO::PARAM_STR);
		$stmt->bindParam(":usuario_id", $datos["usuario_id"], PDO::PARAM_STR);
		$stmt->bindParam(":idVehiculoServicio", $datos["idVehiculoServicio"], PDO::PARAM_STR);

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

	static public function mdlBorrarServicioVehiculo($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idVehiculoServicio = :id");

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