<?php 

require_once "conexion.php";  

class ModeloTransportes{  

	/*=============================================
	MOSTRAR TRANSPORTE
	=============================================*/
	static public function mdlMostrarTransportes($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY transporte ASC");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}


	/*=============================================
	INGRESO TRANSPORTE
	=============================================*/

	static public function mdlIngresarTransporte($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(transporte, created_at, usuario_id) VALUES (:transporte, :created_at, :usuario_id)");

		$stmt->bindParam(":transporte", $datos["transporte"], PDO::PARAM_STR);
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


	
	static public function mdlEditarTransporte($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET transporte = :transporte, created_at = :created_at, usuario_id = :usuario_id  WHERE idTransporte = :idTransporte");
		$stmt -> bindParam(":transporte", $datos["transporte"], PDO::PARAM_STR);
		$stmt -> bindParam(":created_at", $datos["created_at"], PDO::PARAM_STR);
		$stmt -> bindParam(":usuario_id", $datos["usuario_id"], PDO::PARAM_STR);
		$stmt -> bindParam(":idTransporte", $datos["idTransporte"], PDO::PARAM_STR);

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

	static public function mdlBorrarTransporte($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idTransporte = :id");

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
