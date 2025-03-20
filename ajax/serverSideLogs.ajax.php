<?php 

// Importar la conexión
require_once "../modelos/conexion.php";
require_once "../controladores/usuarios.controlador.php";
require_once "../modelos/usuarios.modelo.php";

try {
    $conexion = Conexion::conectar();

    // $start = intval($_POST['start'] ?? 0);
    // $length = intval($_POST['length'] ?? 10);
    // $search = $_POST['search']['value'] ?? '';
    // $orderColumn = intval($_POST['order'][0]['column'] ?? 0);
    // $orderDir = $_POST['order'][0]['dir'] === 'desc' ? 'desc' : 'asc';

    $start = isset($_POST['start']) ? intval($_POST['start']) : 0;
    $length = isset($_POST['length']) ? intval($_POST['length']) : 10;
    $search = isset($_POST['search']['value']) ? $_POST['search']['value'] : '';
    $orderColumn = isset($_POST['order'][0]['column']) ? intval($_POST['order'][0]['column']) : 0;
    $orderDir = isset($_POST['order'][0]['dir']) && in_array($_POST['order'][0]['dir'], ['asc', 'desc']) ? $_POST['order'][0]['dir'] : 'asc';

    $columns = ['actividad', 'tipo', 'usuario_id', 'private_id', 'public_id', 'eject'];
    $orderColumn = $columns[$orderColumn] ?? 'idLog';

    // Consulta total
    $stmt = $conexion->prepare("SELECT COUNT(*) as total FROM log");
    $stmt->execute();
    $totalRecords = $stmt->fetch(PDO::FETCH_ASSOC)['total'];

    // Consulta con filtro
    $stmt = $conexion->prepare("SELECT * FROM log WHERE actividad LIKE :search ORDER BY $orderColumn $orderDir LIMIT :start, :length");
    $stmt->bindValue(':search', "%$search%", PDO::PARAM_STR);
    $stmt->bindValue(':start', $start, PDO::PARAM_INT);
    $stmt->bindValue(':length', $length, PDO::PARAM_INT);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Personalización
    foreach ($data as &$row) {
        // Personalizar "tipo"
        if ($row['tipo'] === 'Alta') {

            $row['tipo'] = '<span class="badge badge-success">Alta de registro</span>';

        } else if ($row['tipo'] === 'Edición') {

            $row['tipo'] = '<span class="badge badge-warning">Edición de registro</span>';

        }else if ($row['tipo'] === 'Eliminación') {

            $row['tipo'] = '<span class="badge badge-danger">Eliminación de registro</span>';

        }else if ($row['tipo'] === 'Pago') {

            $row['tipo'] = '<span class="badge badge-primary">Pago de orden</span>';

        }else if ($row['tipo'] === 'Ingreso') {

            $row['tipo'] = '<span class="badge badge-info">Ingreso al sistema</span>';

        }else if ($row['tipo'] === 'Cancelado') {

            $row['tipo'] = '<span class="badge badge-secondary">Cancelación</span>';

        }else{

            $row['tipo'] = '<span class="badge badge-dark">SIN IDENTIFICAR</span>';

        }

        // Reemplazar "usuario_id" con el nombre del usuario
        $itemUsuario = "idResponsable";
        $valorUsuario = $row['usuario_id'];
        $respuestaUsuario = ControladorUsuarios::ctrMostrarUsuarios($itemUsuario, $valorUsuario);

        if (!empty($respuestaUsuario)) {

            $row['usuario_id'] = $respuestaUsuario['responsable']; // Cambia "nombre" según tu base de datos

        } else {

            $row['usuario_id'] = 'Desconocido';
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