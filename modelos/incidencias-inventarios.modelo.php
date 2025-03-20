<?php 
 
require_once "conexion.php"; 
 
class ModeloIncidenciaInventario{  
 
/*=============================================
	MOSTRAR  
=============================================*/

	static public function mdlMostrarIncidenciasInventario($tabla, $item, $valor){

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





	static public function mdlIngresarIncidenciaInventario($tabla, $datos){

		try{
			$pdo = Conexion::conectar();

			$stmt = $pdo->prepare("INSERT INTO $tabla(vehiculo_id, responsable_id, fecha, titulo,  descripcion, created_at) VALUES (:vehiculo_id, :responsable_id, :fecha, :titulo, :descripcion, :created_at)");

			$stmt->bindParam(":vehiculo_id", $datos["vehiculo_id"], PDO::PARAM_STR);
			$stmt->bindParam(":responsable_id", $datos["responsable_id"], PDO::PARAM_STR);
			$stmt->bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
			$stmt->bindParam(":titulo", $datos["titulo"], PDO::PARAM_STR);
			$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
			$stmt->bindParam(":created_at", $datos["created_at"], PDO::PARAM_STR);
			

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








}

