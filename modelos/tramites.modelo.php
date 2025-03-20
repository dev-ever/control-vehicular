<?php 
 
require_once "conexion.php"; 

class ModeloTramites{  

	/*=============================================
	MOSTRAR TRAMITE
	=============================================*/

	static public function mdlMostrarTramites($tabla, $item, $valor){

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
	INGRESO TRAMITE
	=============================================*/

	static public function mdlIngresarTramite($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(tramite, created_at, usuario_id) VALUES (:tramite, :created_at, :usuario_id)");

		$stmt->bindParam(":tramite", $datos["tramite"], PDO::PARAM_STR);
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



	static public function mdlEditarTramite($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET tramite = :tramite, created_at = :created_at, usuario_id = :usuario_id  WHERE idTramite = :idTramite");
		$stmt -> bindParam(":tramite", $datos["tramite"], PDO::PARAM_STR);
		$stmt -> bindParam(":created_at", $datos["created_at"], PDO::PARAM_STR);
		$stmt -> bindParam(":usuario_id", $datos["usuario_id"], PDO::PARAM_STR);
		$stmt -> bindParam(":idTramite", $datos["idTramite"], PDO::PARAM_STR);

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

	static public function mdlBorrarTramite($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idTramite  = :id");

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
