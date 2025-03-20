<?php 
 
require_once "conexion.php"; 
 
class ModeloPerfiles{   

/*=============================================
	MOSTRAR 
	=============================================*/

	static public function mdlMostrarPerfiles($tabla, $item, $valor){

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


	static public function mdlMostrarPerfilesVehicular($tabla, $item, $valor){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt = null;

	}
	



	static public function mdlIngresarPerfil($tabla, $datos){

		try{
			$pdo = Conexion::conectar();

			$stmt = $pdo->prepare("INSERT INTO $tabla(perfil, observaciones, created_at, usuario_id) VALUES (:perfil, :observaciones, :created_at, :usuario_id)");

			$stmt->bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
			$stmt->bindParam(":observaciones", $datos["observaciones"], PDO::PARAM_STR);
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




	static public function mdlEditarPerfil($tabla, $datos){
	
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET perfil = :perfil, observaciones = :observaciones, usuario_id = :usuario_id  WHERE idPerfil = :idPerfil");

		$stmt -> bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
		$stmt -> bindParam(":observaciones", $datos["observaciones"], PDO::PARAM_STR);
		$stmt -> bindParam(":usuario_id", $datos["usuario_id"], PDO::PARAM_STR);
		$stmt -> bindParam(":idPerfil", $datos["idPerfil"], PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;
 
	}



	static public function mdlBorrarPerfil($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idPerfil = :id");

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