<?php 

require_once "conexion.php"; 
 
class ModeloVerificaciones{   

	/*=============================================
	MOSTRAR  
	=============================================*/
 
	static public function mdlMostrarVerificaciones($tabla, $item, $valor){

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





	static public function mdlMostrarVerificacion($tabla, $item, $valor, $item2, $valor2){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item AND $item2 = :$item2");

		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
		$stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

		$stmt = null;

		}




	static public function mdlMostrarVerificacionGral($tabla, $item, $valor){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);


		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt = null;

		}







	/*=============================================
	INGRESO 
	=============================================*/

	static public function mdlIngresarVerificacion($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(vehiculo_id, idVerif, tipoVerificacion, verificacion, estatus, anio, fecha, observaciones, created_at, usuario_id) VALUES (:vehiculo_id, :idVerif, :tipoVerificacion, :verificacion, :estatus, :anio, :fecha, :observaciones, :created_at, :usuario_id)");

		
		$stmt->bindParam(":vehiculo_id", $datos["vehiculo_id"], PDO::PARAM_STR);
		$stmt->bindParam(":idVerif", $datos["idVerif"], PDO::PARAM_STR);
		$stmt->bindParam(":tipoVerificacion", $datos["tipoVerificacion"], PDO::PARAM_STR);
		$stmt->bindParam(":verificacion", $datos["verificacion"], PDO::PARAM_STR);
		$stmt->bindParam(":estatus", $datos["estatus"], PDO::PARAM_STR);
		$stmt->bindParam(":anio", $datos["anio"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
		$stmt->bindParam(":observaciones", $datos["observaciones"], PDO::PARAM_STR);
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


	static public function mdlIngresarVerificacion2($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET vehiculo_id = :vehiculo_id, idVerif =:idVerif, verificacion_dos = :verificacion_dos, fecha_dos = :fecha_dos, observaciones_dos = :observaciones_dos, created_at = :created_at, usuario_id = :usuario_id  WHERE idVerificacion = :idVerificacion");

		$stmt->bindParam(":vehiculo_id", $datos["vehiculo_id"], PDO::PARAM_STR);
		$stmt->bindParam(":idVerif", $datos["idVerif"], PDO::PARAM_STR);
		$stmt->bindParam(":verificacion_dos", $datos["verificacion_dos"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha_dos", $datos["fecha_dos"], PDO::PARAM_STR); 
		$stmt->bindParam(":observaciones_dos", $datos["observaciones_dos"], PDO::PARAM_STR);
		$stmt->bindParam(":created_at", $datos["created_at"], PDO::PARAM_STR);
		$stmt->bindParam(":usuario_id", $datos["usuario_id"], PDO::PARAM_STR);
		$stmt->bindParam(":idVerificacion", $datos["idVerificacion"], PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;


	}





	static public function mdlEditarVerificacion($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET vehiculo_id = :vehiculo_id, idVerif = :idVerif,  anio = :anio, estatus = :estatus, fecha = :fecha, observaciones = :observaciones, created_at = :created_at, usuario_id = :usuario_id  WHERE idVerificacion = :idVerificacion");
		
		$stmt->bindParam(":vehiculo_id", $datos["vehiculo_id"], PDO::PARAM_STR);
		$stmt->bindParam(":idVerif", $datos["idVerif"], PDO::PARAM_STR);
		$stmt->bindParam(":anio", $datos["anio"], PDO::PARAM_STR);
		$stmt->bindParam(":estatus", $datos["estatus"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
		$stmt->bindParam(":observaciones", $datos["observaciones"], PDO::PARAM_STR);
		$stmt->bindParam(":created_at", $datos["created_at"], PDO::PARAM_STR);
		$stmt->bindParam(":usuario_id", $datos["usuario_id"], PDO::PARAM_STR);
		$stmt->bindParam(":idVerificacion", $datos["idVerificacion"], PDO::PARAM_STR);

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

	static public function mdlBorrarVerificacion($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idVerificacion = :id");

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
