<?php 

// Importar la conexión
require_once "../modelos/conexion.php";
require_once "../controladores/vehiculos.controlador.php";
require_once "../modelos/vehiculos.modelo.php";
require_once "../controladores/usuarios.controlador.php";
require_once "../modelos/usuarios.modelo.php";
require_once "../controladores/areas-negocios.controlador.php";
require_once "../modelos/areas-negocios.modelo.php";

require_once "../controladores/propietarios.controlador.php";
require_once "../modelos/propietarios.modelo.php";

require_once "../controladores/clases.controlador.php";
require_once "../modelos/clases.modelo.php";

require_once "../controladores/marcas.controlador.php";
require_once "../modelos/marcas.modelo.php";

require_once "../controladores/subMarcas.controlador.php";
require_once "../modelos/subMarcas.modelo.php";

require_once "../controladores/tipos-transportes.controlador.php";
require_once "../modelos/tipos-transportes.modelo.php";

require_once "../controladores/combustibles.controlador.php";
require_once "../modelos/combustibles.modelo.php";

try {
    $conexion = Conexion::conectar();


    $start = isset($_POST['start']) ? intval($_POST['start']) : 0;
    $length = isset($_POST['length']) ? intval($_POST['length']) : 10;
    $search = isset($_POST['search']['value']) ? $_POST['search']['value'] : '';
    $orderColumn = isset($_POST['order'][0]['column']) ? intval($_POST['order'][0]['column']) : 0;
    $orderDir = isset($_POST['order'][0]['dir']) && in_array($_POST['order'][0]['dir'], ['asc', 'desc']) ? $_POST['order'][0]['dir'] : 'asc';

    $columns =  ["folio", "eco", "propietario_id", "ubicacion", "modelo", "serie", "placas", "nombreTarjeta", "motor", "clase_id", "marca_id", "subMarca_id", "transporte_id", "combustible_id", "responsable_id", "unidad_id", "usuario_asignado_id"];


    $orderColumn = $columns[$orderColumn] ?? 'idVehiculo';

    // Consulta total
    $stmt = $conexion->prepare("SELECT COUNT(*) as total FROM tb_vehiculos");
    $stmt->execute();
    $totalRecords = $stmt->fetch(PDO::FETCH_ASSOC)['total'];

    // Consulta con filtro
    $stmt = $conexion->prepare("SELECT * FROM tb_vehiculos WHERE eco LIKE :search ORDER BY $orderColumn $orderDir LIMIT :start, :length");
    $stmt->bindValue(':search', "%$search%", PDO::PARAM_STR);
    $stmt->bindValue(':start', $start, PDO::PARAM_INT);
    $stmt->bindValue(':length', $length, PDO::PARAM_INT);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);


    foreach ($data as &$row) {


         //----------------------------------------------------
       $itemPropietario = "idPropietario";
       $valorPropietario = $row['propietario_id'];
       $respuestaPropietario = ControladorPropietarios::ctrMostrarPropietarios($itemPropietario, $valorPropietario);

       if (!empty($respuestaPropietario)) {

            $row['propietario_id'] = $respuestaPropietario['propietario']; // Cambia "nombre" según tu base de datos

        } else {

            $row['propietario_id'] = 'Desconocido';
        }




           //----------------------------------------------------
       $itemClases = "idClase";
       $valorClases = $row['clase_id'];
       $respuestaClases = ControladorClases::ctrMostrarClases($itemClases, $valorClases);

       if (!empty($respuestaClases)) {

            $row['clase_id'] = $respuestaClases['clase']; // Cambia "nombre" según tu base de datos

        } else {

            $row['clase_id'] = 'Desconocido';
        }


             //----------------------------------------------------
       $itemMarca = "idMarca";
       $valorMarca = $row['marca_id'];
       $respuestaMarcas = ControladorMarcas::ctrMostrarMarcas($itemMarca, $valorMarca);

       if (!empty($respuestaMarcas)) {

            $row['marca_id'] = $respuestaMarcas['marca']; // Cambia "nombre" según tu base de datos

        } else {

            $row['marca_id'] = 'Desconocido';
        }



        //----------------------------------------------------
       $itemSubMarca = "idSubMarca";
       $valorSubMarca = $row['subMarca_id'];
       $respuestaSubMarcas = ControladorSubMarcas::ctrMostrarSubMarcas($itemSubMarca, $valorSubMarca);

       if (!empty($respuestaSubMarcas)) {

            $row['subMarca_id'] = $respuestaSubMarcas['submarca']; // Cambia "nombre" según tu base de datos

        } else {

            $row['subMarca_id'] = 'Desconocido';
        }



        //----------------------------------------------------
       $itemTransporte = "idTransporte";
       $valorTransporte = $row['transporte_id'];
       $respuestaTransporte = ControladorTiposTransportes::ctrMostrarTransportes($itemTransporte, $valorTransporte);

       if (!empty($respuestaTransporte)) {

            $row['transporte_id'] = $respuestaTransporte['transporte']; // Cambia "nombre" según tu base de datos

        } else {

            $row['transporte_id'] = 'Desconocido';
        }



                //----------------------------------------------------
       $itemCombustible = "idCombustible";
       $valorCombustible = $row['combustible_id'];
       $respuestaCombustible = ControladorCombustibles::ctrMostrarCombustibles($itemCombustible, $valorCombustible);

       if (!empty($respuestaCombustible)) {

            $row['combustible_id'] = $respuestaCombustible['combustible']; // Cambia "nombre" según tu base de datos

        } else {

            $row['combustible_id'] = 'Desconocido';
        }

      //----------------------------------------------------
       $itemUsuario = "idResponsable";
       $valorUsuario = $row['responsable_id'];
       $respuestaUsuario = ControladorUsuarios::ctrMostrarUsuarios($itemUsuario, $valorUsuario);

       if (!empty($respuestaUsuario)) {

            $row['responsable_id'] = $respuestaUsuario['responsable']; // Cambia "nombre" según tu base de datos

        } else {

            $row['responsable_id'] = 'Desconocido';
        }




      //----------------------------------------------------
        
       $itemArea = "idAreaVehiculo";
       $valorArea = $row['unidad_id'];
       $respuestaAreas = ControladorAreasNegocios::ctrMostrarAreasNegocios($itemArea, $valorArea);

       if (!empty($respuestaAreas)) {

            $row['unidad_id'] = $respuestaAreas['area']; // Cambia "nombre" según tu base de datos

        } else {

            $row['unidad_id'] = 'Desconocido';
        }
 



        //----------------------------------------------------

       $itemUsuario2 = "idResponsable";
       $valorUsuario2 = $row['usuario_asignado_id'];
       $respuestaUsuarioAsignado = ControladorUsuarios::ctrMostrarUsuarios($itemUsuario2, $valorUsuario2);

       if (!empty($respuestaUsuarioAsignado)) {

            $row['usuario_asignado_id'] = $respuestaUsuarioAsignado['responsable']; // Cambia "nombre" según tu base de datos

        } else {

            $row['usuario_asignado_id'] = 'Desconocido';
        }



    }


    foreach ($data as $key => &$row) {
        
        $row["autoincrement"] = $start + $key + 1;
      
    }

    // Construir la respuesta JSON
    $response = [
        "draw" => intval($_POST['draw'] ?? 0),
        "recordsTotal" => $totalRecords,
        "recordsFiltered" => $totalRecords, // Puedes ajustar esto si necesitas datos filtrados
        "data" => $data
    ];

    echo json_encode($response);

} catch (Exception $e) {

    echo json_encode(["error" => $e->getMessage()]);

}

 ?>