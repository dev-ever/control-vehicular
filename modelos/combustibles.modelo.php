
<?php 

require_once "conexion.php"; 

class ModeloCombustibles{  
 
	/*=============================================
	MOSTRAR PERFILES
	=============================================*/

	static public function mdlMostrarCombustibles($tabla, $item, $valor){

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

	static public function mdlIngresarCombustible($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(combustible, created_at, usuario_id) VALUES (:combustible, :created_at, :usuario_id)");

		$stmt->bindParam(":combustible", $datos["combustible"], PDO::PARAM_STR);
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



	static public function mdlEditarCombustible($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET combustible = :combustible, created_at = :created_at, usuario_id = :usuario_id  WHERE idCombustible = :idCombustible");
		$stmt -> bindParam(":combustible", $datos["combustible"], PDO::PARAM_STR);
		$stmt -> bindParam(":created_at", $datos["created_at"], PDO::PARAM_STR);
		$stmt -> bindParam(":usuario_id", $datos["usuario_id"], PDO::PARAM_STR);
		$stmt -> bindParam(":idCombustible", $datos["idCombustible"], PDO::PARAM_STR);

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

	static public function mdlBorrarCombustible($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idCombustible  = :id");

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
