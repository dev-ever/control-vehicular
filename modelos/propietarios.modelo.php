<?php 

require_once "conexion.php"; 

class ModeloPropietarios{  

	/*=============================================
	MOSTRAR TRANSPORTE
	=============================================*/
	static public function mdlMostrarPropietarios($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY propietario ASC");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}
		

		$stmt -> close();

		$stmt = null;

	}


	/*=============================================
	INGRESO TRANSPORTE
	=============================================*/

	static public function mdlIngresarPropietario($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(propietario, created_at, usuario_id) VALUES (:propietario, :created_at, :usuario_id)");

		$stmt->bindParam(":propietario", $datos["propietario"], PDO::PARAM_STR);
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


	
	static public function mdlEditarPropietario($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET propietario = :propietario, created_at = :created_at, usuario_id = :usuario_id  WHERE idPropietario = :idPropietario");
		$stmt -> bindParam(":propietario", $datos["propietario"], PDO::PARAM_STR);
		$stmt -> bindParam(":created_at", $datos["created_at"], PDO::PARAM_STR);
		$stmt -> bindParam(":usuario_id", $datos["usuario_id"], PDO::PARAM_STR);
		$stmt -> bindParam(":idPropietario", $datos["idPropietario"], PDO::PARAM_STR);

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

	static public function mdlBorrarPropietario($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idPropietario = :id");

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
