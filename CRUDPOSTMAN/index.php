<?php 
    header("Content-Type: application/json; charset=UTF-8");    
    require_once 'models/Empleado.php';
    $datos = json_decode(file_get_contents('php://input'));
    
    switch ($_SERVER['REQUEST_METHOD']) {
        case 'GET':
            if (isset($_GET['id'])) {
                # code...
                echo json_encode(Empleado::getEmpleadoWHERE($_GET['id']));
            }else{
                echo json_encode(Empleado::getEmpleado());
            }
            
            break;

        case 'POST':
            if ($datos != NULL) {
                if (Empleado::getEmpleadoInsert($datos->nombres, $datos->apellidos, $datos->direccion, $datos->telefono, $datos->fechanac)) {
                    http_response_code(200);
                }else {
                    http_response_code(400);
                }
            }else {
                http_response_code(404);
            }
            break;
        
        case 'PUT':
            if ($datos != NULL) {
                if (Empleado::getEmpleadoUpdate($datos->id, $datos->nombres, $datos->apellidos, $datos->direccion, $datos->telefono, $datos->fechanac)) {
                    http_response_code(200);
                }else {
                    http_response_code(400);
                }
            }else {
                http_response_code(404);
            }
            break;

        case 'DELETE':
            if (isset($_GET['id'])) {
                if (Empleado::getEmpleadoDelete($_GET['id'])) {
                    http_response_code(200);
                }else {
                    http_response_code(400);
                }
            }else {
                http_response_code(404);
            }
            break;    
        default:
            http_response_code(405);
            break;
    }

?>