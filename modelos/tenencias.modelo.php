<?php 

require_once "conexion.php"; 
 
class ModeloTenencias{  

	/*=============================================
	MOSTRAR  
	=============================================*/
 
	static public function mdlMostrarTenencias($tabla, $item, $valor){

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
	MOSTRAR  GRAL
=============================================*/
 
	static public function mdlMostrarTenenciasGral($tabla, $item, $valor){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt = null;

	}





	

	/*=============================================
	INGRESO 
	=============================================*/

	static public function mdlIngresarTenencia($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(tipo, anio, pago, fechaPago, vehiculo_id, usuario_id, created_at ) VALUES (:tipo, :anio, :pago, :fechaPago, :vehiculo_id, :usuario_id, :created_at)");

		$stmt->bindParam(":tipo", $datos["tipo"], PDO::PARAM_STR);
		$stmt->bindParam(":anio", $datos["anio"], PDO::PARAM_STR);
		$stmt->bindParam(":pago", $datos["pago"], PDO::PARAM_STR);
		$stmt->bindParam(":fechaPago", $datos["fechaPago"], PDO::PARAM_STR);
		$stmt->bindParam(":vehiculo_id", $datos["vehiculo_id"], PDO::PARAM_STR);
		$stmt->bindParam(":usuario_id", $datos["usuario_id"], PDO::PARAM_STR);
		$stmt->bindParam(":created_at", $datos["created_at"], PDO::PARAM_STR);
		

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt -> close();

		$stmt = null;

	}



	static public function mdlEditarTenencia($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET anio = :anio, pago = :pago, fechaPago = :fechaPago, vehiculo_id = :vehiculo_id, usuario_id = :usuario_id, created_at = :created_at  WHERE idTenencia = :idTenencia");
		
		
		$stmt->bindParam(":anio", $datos["anio"], PDO::PARAM_STR);
		$stmt->bindParam(":pago", $datos["pago"], PDO::PARAM_STR);
		$stmt->bindParam(":fechaPago", $datos["fechaPago"], PDO::PARAM_STR);
		$stmt->bindParam(":vehiculo_id", $datos["vehiculo_id"], PDO::PARAM_STR);
		$stmt->bindParam(":usuario_id", $datos["usuario_id"], PDO::PARAM_STR);
		$stmt->bindParam(":created_at", $datos["created_at"], PDO::PARAM_STR);
		$stmt->bindParam(":idTenencia", $datos["idTenencia"], PDO::PARAM_STR);

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

	static public function mdlBorrarTenencia($tabla, $datos){


		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idTenencia = :id");

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
