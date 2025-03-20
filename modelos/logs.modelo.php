<?php 

require_once "conexion.php";   
 
class ModeloLogs{  

/*=============================================
	MOSTRAR USUARIOS
	=============================================*/

	static public function mdlMostrarLogs($tabla, $item, $valor, $orden){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY idLog $orden");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}
		

		$stmt -> close();

		$stmt = null;

	}


	static public function mdlAgregarLog($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(actividad, tipo, usuario_id, private_id, public_id, eject) VALUES (:actividad, :tipo, :usuario_id, :private_id, :public_id, :eject)");

		$stmt->bindParam(":actividad", $datos["actividad"], PDO::PARAM_STR);
		$stmt->bindParam(":tipo", $datos["tipo"], PDO::PARAM_STR);
		$stmt->bindParam(":usuario_id", $datos["usuario_id"], PDO::PARAM_STR);
		$stmt->bindParam(":private_id", $datos["private_id"], PDO::PARAM_STR);
		$stmt->bindParam(":public_id", $datos["public_id"], PDO::PARAM_STR);
		$stmt->bindParam(":eject", $datos["eject"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;


	}






}




?>