<?php 

require_once "conexion.php"; 

class ModeloNotificacionEnvios{  

	/*=============================================
	MOSTRAR 
	=============================================*/

	static public function mdlMostrarEnvios($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY created_at DESC");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}
		

		$stmt -> close();

		$stmt = null;

	}




static public function mdlIngresarNotificacion($tabla2, $usuarios){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla2(idEnvia, idRecibe, asunto, observaciones, created_at, usuario_id) VALUES (:idEnvia, :idRecibe, :asunto, :observaciones, :created_at, :usuario_id)");

		foreach ($usuarios as $usuario) {
			
			$stmt->bindParam(":idEnvia", $usuario["idEnvia"]);
			$stmt->bindParam(":idRecibe", $usuario["idRecibe"]);
			$stmt->bindParam(":asunto", $usuario["asunto"]);
			$stmt->bindParam(":observaciones", $usuario["observaciones"]);
			$stmt->bindParam(":created_at", $usuario["created_at"]);
			$stmt->bindParam(":usuario_id", $usuario["usuario_id"]);

			$stmt->execute();

		}

		return "ok";



	}











}




?>
