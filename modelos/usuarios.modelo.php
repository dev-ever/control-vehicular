<?php 
 
require_once "conexion.php"; 
 
class ModeloUsuarios{   

/*=============================================
	MOSTRAR USUARIOS
	=============================================*/

	static public function mdlMostrarUsuarios($tabla, $item, $valor){

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


	static public function mdlMostrarUsuariosGral($tabla, $item, $valor){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt = null;

	}



	/*=============================================
	REGISTRO DE USUARIO
	=============================================*/

	static public function mdlIngresarUsuario($tabla, $datos){

		try{
			$pdo = Conexion::conectar();

			$pdo->exec("SET SESSION sql_mode =''");

			$stmt = $pdo->prepare("INSERT INTO $tabla(responsable, usuario, email, password, foto, perfil_id, estado, fecha, ultimoLogin, unidad_id, session_log, autorizador, created_at, usuario_id) VALUES (:responsable, :usuario, :email, :password, :foto, :perfil_id, :estado, :fecha, :ultimoLogin, :unidad_id, :session_log, :autorizador, :created_at, :usuario_id)");

			$stmt->bindParam(":responsable", $datos["responsable"], PDO::PARAM_STR);
			$stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
			$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
			$stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
			$stmt->bindParam(":foto", $datos["foto"], PDO::PARAM_STR);
			$stmt->bindParam(":perfil_id", $datos["perfil_id"], PDO::PARAM_STR);
			$stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
			$stmt->bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
			$stmt->bindParam(":ultimoLogin", $datos["ultimoLogin"], PDO::PARAM_STR);
			$stmt->bindParam(":unidad_id", $datos["unidad_id"], PDO::PARAM_STR);
			$stmt->bindParam(":session_log", $datos["session_log"], PDO::PARAM_STR);
			$stmt->bindParam(":autorizador", $datos["autorizador"], PDO::PARAM_STR);
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




/*=============================================
	ACTUALIZAR USUARIO
	=============================================*/

	static public function mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE $item2 = :$item2");

		$stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
		$stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}



	/*=============================================
	EDITAR USUARIO
	=============================================*/

	static public function mdlEditarUsuario($tabla, $datos){
	
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET responsable = :responsable, usuario = :usuario, email = :email, password = :password, foto = :foto, perfil_id = :perfil_id, unidad_id = :unidad_id  WHERE idResponsable = :idResponsable");

		$stmt -> bindParam(":responsable", $datos["responsable"], PDO::PARAM_STR);
		$stmt -> bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
		$stmt -> bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt -> bindParam(":password", $datos["password"], PDO::PARAM_STR);
		$stmt -> bindParam(":foto", $datos["foto"], PDO::PARAM_STR);
		$stmt -> bindParam(":perfil_id", $datos["perfil_id"], PDO::PARAM_STR);
		$stmt -> bindParam(":unidad_id", $datos["unidad_id"], PDO::PARAM_STR);
		$stmt -> bindParam(":idResponsable", $datos["idResponsable"], PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;
 
	}


	/*=============================================
	BORRAR USUARIO
	// =============================================*/

	static public function mdlBorrarUsuario($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idResponsable = :id");

		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;


	}



/*=============================================
	MOSTRAR USUARIOS en sistema
	=============================================*/

	static public function mdlMostrarUsuariosActivos($tabla, $itemPerfil, $valorPerfil, $itemEstado, $valorEstado){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $itemPerfil = :$itemPerfil AND $itemEstado = :$itemEstado");
			$stmt -> bindParam(":".$itemPerfil, $valorPerfil, PDO::PARAM_STR);
			$stmt -> bindParam(":".$itemEstado, $valorEstado, PDO::PARAM_STR);


			$stmt -> execute();

			return $stmt -> fetchAll();

			$stmt -> close();

			$stmt = null;

		

	}


/*=============================================
	ACTUALIZAR CAMPO PERSONZALIZADO
	=============================================*/

	static public function mdlActualizarIngreso($tabla, $item1, $valor1, $item2, $valor2){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE $item2 = :$item2");

		$stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
		$stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);

		
		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;


	}



	/*=============================================
	EDITAR USUARIO
	=============================================*/

	static public function mdlEditarPerfil($tabla, $datos){
	
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, email=:email, password = :password, foto = :foto, perfil = :perfil  WHERE id = :id");

		$stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt -> bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt -> bindParam(":password", $datos["password"], PDO::PARAM_STR);
		$stmt -> bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
		$stmt -> bindParam(":foto", $datos["foto"], PDO::PARAM_STR);
		$stmt -> bindParam(":id", $datos["id"], PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;
 
	}




	static public function mdlEditarUsuarioPerfil($tabla, $datos){
	
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET responsable = :responsable, email = :email, password = :password, foto = :foto  WHERE idResponsable = :idResponsable");

		$stmt -> bindParam(":responsable", $datos["responsable"], PDO::PARAM_STR);
		$stmt -> bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt -> bindParam(":password", $datos["password"], PDO::PARAM_STR);
		$stmt -> bindParam(":foto", $datos["foto"], PDO::PARAM_STR);
		$stmt -> bindParam(":idResponsable", $datos["idResponsable"], PDO::PARAM_STR);

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