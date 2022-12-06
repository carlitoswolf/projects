<?php
    
    include_once 'database/database.php';

    class Empleado {
        
        public static function getEmpleado(){
            $db = new Database();
            $query = 'SELECT * FROM empleados';
            $result = $db->query($query);
            $data = [];
            if ($result->num_rows) {
                while ($row = $result->fetch_assoc()) {
                    $data[] = [
                        'id' => $row['id'],
                        'nombres' => $row['nombres'],
                        'apellidos' => $row['apellidos'],
                        'direccion' => $row['direccion'],
                        'telefono' => $row['telefono'],
                        'fechanac' => $row['fechanac']
                    
                    ];
                }
                return $data;
            }

            return $data;
        }

        public static function getEmpleadoWHERE($id){
            $db = new Database();
            $query = 'SELECT * FROM empleados WHERE id='.$id;
            $result = $db->query($query);
            $data = [];
            if ($result->num_rows) {
                while ($row = $result->fetch_assoc()) {
                    $data[] = [
                        'id' => $row['id'],
                        'nombres' => $row['nombres'],
                        'apellidos' => $row['apellidos'],
                        'direccion' => $row['direccion'],
                        'telefono' => $row['telefono'],
                        'fechanac' => $row['fechanac']
                    
                    ];
                }
                return $data;
            }

            return $data;
        }

        public static function getEmpleadoInsert($nombres, $apellidos, $direccion, $telefono, $fechanac){
            $db = new Database();
            $query = 'INSERT INTO empleados (nombres, apellidos, direccion, telefono, fechanac)
            VALUES("'.$nombres.'","'.$apellidos.'","'.$direccion.'","'.$telefono.'","'.$fechanac.'")';
            $db->query($query);
            if ($db->affected_rows) {
                return true;
            }
            return false;
        }

        public static function getEmpleadoUpdate($id, $nombres, $apellidos, $direccion, $telefono, $fechanac){
            $db = new Database();
            $query = 'UPDATE empleados SET 
            nombres = "'.$nombres.'", apellidos = "'.$apellidos.'", direccion = "'.$direccion.'", telefono = "'.$telefono.'", fechanac = "'.$fechanac.'"
            WHERE id ='.$id;
            $db->query($query);
            if ($db->affected_rows) {
                # code...
                return true;
            }
            return false;
        }


        public static function getEmpleadoDelete($id){
            $db = new Database();
            $query = 'DELETE FROM empleados WHERE id='.$id;
            $db->query($query);
            if ($db->affected_rows) {
                # code...
                return true;
            }
            return false;
        }

    }

?>