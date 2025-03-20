<?php 

require_once "conexion.php"; 
 
class ModeloSegurosVehiculos{  

	/*=============================================
	MOSTRAR  
	=============================================*/
 
	static public function mdlMostrarSegurosVehiculos($tabla, $item, $valor){

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

	static public function mdlIngresarSeguroVehiculo($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(vehiculo_id, seguro_id, poliza, inciso, vigencia, observaciones, usuario_id, created_at) VALUES (:vehiculo_id, :seguro_id, :poliza, :inciso, :vigencia, :observaciones, :usuario_id, :created_at)");

		
		$stmt->bindParam(":vehiculo_id", $datos["vehiculo_id"], PDO::PARAM_STR);
		$stmt->bindParam(":seguro_id", $datos["seguro_id"], PDO::PARAM_STR);
		$stmt->bindParam(":poliza", $datos["poliza"], PDO::PARAM_STR);
		$stmt->bindParam(":inciso", $datos["inciso"], PDO::PARAM_STR);
		$stmt->bindParam(":vigencia", $datos["vigencia"], PDO::PARAM_STR);
		$stmt->bindParam(":observaciones", $datos["observaciones"], PDO::PARAM_STR);
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






	static public function mdlEditarSeguroVehiculo($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET vehiculo_id = :vehiculo_id, seguro_id = :seguro_id, poliza = :poliza, inciso = :inciso, vigencia = :vigencia, observaciones = :observaciones, usuario_id = :usuario_id, created_at = :created_at  WHERE idSegVeh = :idSegVeh");
		
		$stmt->bindParam(":vehiculo_id", $datos["vehiculo_id"], PDO::PARAM_STR);
		$stmt->bindParam(":seguro_id", $datos["seguro_id"], PDO::PARAM_STR);
		$stmt->bindParam(":poliza", $datos["poliza"], PDO::PARAM_STR);
		$stmt->bindParam(":inciso", $datos["inciso"], PDO::PARAM_STR);
		$stmt->bindParam(":vigencia", $datos["vigencia"], PDO::PARAM_STR);
		$stmt->bindParam(":observaciones", $datos["observaciones"], PDO::PARAM_STR);
		$stmt->bindParam(":usuario_id", $datos["usuario_id"], PDO::PARAM_STR);
		$stmt->bindParam(":created_at", $datos["created_at"], PDO::PARAM_STR);
		$stmt->bindParam(":idSegVeh", $datos["idSegVeh"], PDO::PARAM_STR);

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

	static public function mdlBorrarSeguroVehiculo($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idSegVeh = :id");

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