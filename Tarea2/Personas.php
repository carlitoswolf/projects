<?php


class Personas
{

    //Coneexion 

    private $conn;
    private $tablename = "personal";

    public $identidad;
    public $nombres;
    public $apellidos;
    public $fechanac;
    public $telefono;
    public $direccion;
    public $sexo;
    public $carrera;
    public $pais;
    public $estadoCivil;

    // Construuctor de Clase
    
    public function __construct($db)
    {
        $this->conn = $db;
    }
    
    // Crear un empleados
        public function createPerson(){
            $sqlQuery = "INSERT INTO
                        ". $this->tablename ."
                    SET
                    identidad = :identidad, 
                    nombres = :nombres, 
                    apellidos = :apellidos, 
                    fecha_nacimiento = :fechanac, 
                    telefono = :telefono,
                    direccion = :direccion,
                    sexo = :sexo,
                    carrera_universitaria = :carrera,
                    pais = :pais,
                    estadoCivil = :estadoCivil"; 
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->identidad=htmlspecialchars(strip_tags($this->identidad));
            $this->nombres=htmlspecialchars(strip_tags($this->nombres));
            $this->apellidos=htmlspecialchars(strip_tags($this->apellidos));
            $this->fechanac=htmlspecialchars(strip_tags($this->fechanac));
            $this->telefono=htmlspecialchars(strip_tags($this->telefono));
            $this->direccion=htmlspecialchars(strip_tags($this->direccion));
            $this->sexo=htmlspecialchars(strip_tags($this->sexo));
            $this->carrera=htmlspecialchars(strip_tags($this->carrera));
            $this->pais=htmlspecialchars(strip_tags($this->pais));
            $this->estadoCivil=htmlspecialchars(strip_tags($this->estadoCivil));
          
        
            // bind data
            $stmt->bindParam(":identidad", $this->identidad);
            $stmt->bindParam(":nombres", $this->nombres);
            $stmt->bindParam(":apellidos", $this->apellidos);
            $stmt->bindParam(":fechanac", $this->fechanac);
            $stmt->bindParam(":telefono", $this->telefono);
            $stmt->bindParam(":direccion", $this->direccion);
            $stmt->bindParam(":sexo", $this->sexo);
            $stmt->bindParam(":carrera", $this->carrera);
            $stmt->bindParam(":pais", $this->pais);
            $stmt->bindParam(":estadoCivil", $this->estadoCivil);
           
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }
}

?> 