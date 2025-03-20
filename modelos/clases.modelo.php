<?php 

require_once "conexion.php"; 

class ModeloClases{  

	/*=============================================
	MOSTRAR PERFILES
	=============================================*/

	static public function mdlMostrarClases($tabla, $item, $valor){

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
	INGRESO CLSE
	=============================================*/

	static public function mdlIngresarClase($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(clase, created_at, usuario_id) VALUES (:clase, :created_at, :usuario_id)");

		$stmt->bindParam(":clase", $datos["clase"], PDO::PARAM_STR);
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



	static public function mdlEditarClase($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET clase = :clase, created_at = :created_at, usuario_id = :usuario_id  WHERE idClase = :idClase");
		$stmt -> bindParam(":clase", $datos["clase"], PDO::PARAM_STR);
		$stmt -> bindParam(":created_at", $datos["created_at"], PDO::PARAM_STR);
		$stmt -> bindParam(":usuario_id", $datos["usuario_id"], PDO::PARAM_STR);
		$stmt -> bindParam(":idClase", $datos["idClase"], PDO::PARAM_STR);

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

	static public function mdlBorrarClase($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idClase = :id");

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
