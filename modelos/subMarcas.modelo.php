<?php 

require_once "conexion.php"; 
 
class ModeloSubMarcas{  

	/*=============================================
	MOSTRAR PERFILES 
	=============================================*/
 
	static public function mdlMostrarSubMarcas($tabla, $item, $valor){

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
	INGRESO SUBMARCAS
	=============================================*/

	static public function mdlIngresarSubMarca($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(submarca, created_at, usuario_id, marca_id) VALUES (:submarca, :created_at, :usuario_id, :marca_id)");

		$stmt->bindParam(":submarca", $datos["submarca"], PDO::PARAM_STR);
		$stmt->bindParam(":created_at", $datos["created_at"], PDO::PARAM_STR);
		$stmt->bindParam(":usuario_id", $datos["usuario_id"], PDO::PARAM_STR);
		$stmt->bindParam(":marca_id", $datos["marca_id"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt -> close();

		$stmt = null;

	}



	static public function mdlEditarSubMarca($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET submarca = :submarca, created_at = :created_at, usuario_id = :usuario_id  WHERE idSubmarca = :idSubmarca");
		$stmt -> bindParam(":submarca", $datos["submarca"], PDO::PARAM_STR);
		$stmt -> bindParam(":created_at", $datos["created_at"], PDO::PARAM_STR);
		$stmt -> bindParam(":usuario_id", $datos["usuario_id"], PDO::PARAM_STR);
		$stmt -> bindParam(":idSubmarca", $datos["idSubmarca"], PDO::PARAM_STR);


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

	static public function mdlBorrarSubMarca($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idSubMarca = :id");

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