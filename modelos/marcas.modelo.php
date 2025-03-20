<?php 

require_once "conexion.php"; 
 
class ModeloMarcas{  
 
	/*=============================================
	MOSTRAR PERFILES 
	=============================================*/
 
	static public function mdlMostrarMarcas($tabla, $item, $valor){

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
	INGRESO TRANSPORTE
	=============================================*/

	static public function mdlIngresarMarca($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(marca, created_at, usuario_id) VALUES (:marca, :created_at, :usuario_id)");

		$stmt->bindParam(":marca", $datos["marca"], PDO::PARAM_STR);
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



	static public function mdlEditarMarca($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET marca = :marca, created_at = :created_at, usuario_id = :usuario_id  WHERE idMarca = :idMarca");
		$stmt -> bindParam(":marca", $datos["marca"], PDO::PARAM_STR);
		$stmt -> bindParam(":created_at", $datos["created_at"], PDO::PARAM_STR);
		$stmt -> bindParam(":usuario_id", $datos["usuario_id"], PDO::PARAM_STR);
		$stmt -> bindParam(":idMarca", $datos["idMarca"], PDO::PARAM_STR);

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

	static public function mdlBorrarMarca($tabla, $datos){


		// try {

			$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idMarca = :id");

			$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

			if($stmt -> execute()){

				return "ok";

			}else{

				return "error";	

			}

			
		// } catch (Exception $e) {


			// echo "<script>

  	// 			Swal.fire({
  	// 				position: 'center',
  	// 				icon: 'error',
  	// 				title: 'No se puede eliminar el registro, ya que depende de otro ',
  	// 				allowOutsideClick: false,
  	// 				showConfirmButton: false,
  	// 				timer: 1000
  	// 				}).then(()=>{

  	// 					setTimeout(() => {

  	// 						window.location = 'altas-control-vehicular';

  	// 						}, 100);

  	// 					});

  	// 				</script>";
			

			// return "error";


		// }finally{

			$stmt -> close();

			$stmt = null;

		// }


	}







}


?>
