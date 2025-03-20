<?php 

require_once "conexion.php"; 

class ModeloSeguros{  

	/*=============================================
	MOSTRAR PERFILES
	=============================================*/

	static public function mdlMostrarSeguros($tabla, $item, $valor){

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
	INGRESO SEGURO
	=============================================*/

	static public function mdlIngresarSeguro($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(seguro, created_at, usuario_id) VALUES (:seguro, :created_at, :usuario_id)");

		$stmt->bindParam(":seguro", $datos["seguro"], PDO::PARAM_STR);
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



	static public function mdlEditarSeguro($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET seguro = :seguro, created_at = :created_at, usuario_id = :usuario_id  WHERE idSeguro = :idSeguro");
		$stmt -> bindParam(":seguro", $datos["seguro"], PDO::PARAM_STR);
		$stmt -> bindParam(":created_at", $datos["created_at"], PDO::PARAM_STR);
		$stmt -> bindParam(":usuario_id", $datos["usuario_id"], PDO::PARAM_STR);
		$stmt -> bindParam(":idSeguro", $datos["idSeguro"], PDO::PARAM_STR);

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

	static public function mdlBorrarSeguro($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idSeguro  = :id");

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
