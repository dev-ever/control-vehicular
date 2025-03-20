<?php 
 
require_once "conexion.php"; 
 
class ModeloAreasNegocios{  
 
/*=============================================
	MOSTRAR AREAS 
=============================================*/

	static public function mdlMostrarAreasNegocios($tabla, $item, $valor){

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






	static public function mdlIngresarAreaNegocio($tabla, $datos){

		try{
			$pdo = Conexion::conectar();

			$stmt = $pdo->prepare("INSERT INTO $tabla(area, created_at, usuario_id) VALUES (:area, :created_at, :usuario_id)");

			$stmt->bindParam(":area", $datos["area"], PDO::PARAM_STR);
			$stmt->bindParam(":created_at", $datos["created_at"], PDO::PARAM_STR);
			$stmt->bindParam(":usuario_id", $datos["usuario_id"], PDO::PARAM_STR);

			if($stmt->execute()){

				return "ok";	

			}else{

				$errorInfo = $stmt->errorInfo();

				return "error".$errorInfo[2];

			}

		}catch(Exception $e){

			return "Exception: ".$e->getMessage();

		}finally{

			$stmt->closeCursor();
			
			$stmt = null;

		}
	}




	static public function mdlEditarAreaNegocio($tabla, $datos){
	
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET area = :area, created_at = :created_at, usuario_id = :usuario_id  WHERE idAreaVehiculo = :idAreaVehiculo");

		$stmt -> bindParam(":area", $datos["area"], PDO::PARAM_STR);
		$stmt -> bindParam(":created_at", $datos["created_at"], PDO::PARAM_STR);
		$stmt -> bindParam(":usuario_id", $datos["usuario_id"], PDO::PARAM_STR);
		$stmt -> bindParam(":idAreaVehiculo", $datos["idAreaVehiculo"], PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;
 
	}



	static public function mdlBorrarAreaNegocio($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idAreaVehiculo = :id");

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