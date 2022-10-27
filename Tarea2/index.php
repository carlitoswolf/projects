<!DOCTYPE html>
<html lang="en">

<head>
	<title>Programacion WEB</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1 id="titulo">REGISTRO PERSONAL</h1>
    </header>
    
    <section class="container mt-3">

    	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

            <div class="mb-3 mt-3">
            	<label>Numero Identidad</label>
            	<input type="text" name="txtID" class="form-control" placeholder="Ingrese aqui su N.Identidad" required>
            </div>

            <div class="mb-3 mt-3">
            	<label>Nombres</label>
            	<input type="text" name="txtNombre" class="form-control" placeholder="Ingrese aqui sus nombres" required>
            </div>

             <div class="mb-3 mt-3">
                <label>Apellido 1</label>
                <input type="text" name="txtApellido1" class="form-control" placeholder="Ingrese aqui su Primer Apellido" required>
            </div>

            <div class="mb-3 mt-3">
                <label>Apellido 2</label>
                <input type="text" name="txtApellido2" class="form-control" placeholder="Ingrese aqui su Segundo Apellido" required>
            </div>

            <div class="mb-3 mt-3">
                <label>Fecha de Nacimiento</label>
                <input type="date" name="txtFecha" class="form-control" required>
            </div>

            <div class="mb-3 mt-3">
                <label>Numero de Telefono</label>
                <input type="text" name="txtTelefono" class="form-control" placeholder="Ingrese aqui su Numero de Telefono" required>
            </div>

            <div class="mb-3 mt-3">
                <label>Direccion</label>
                <input type="text" name="txtDireccion" class="form-control" placeholder="Ingrese aqui su Direccion" required>
            </div>

            <div class="mb-3 mt-3">
                 <label for="sex">Sexo:</label>

                <select name="txtSex" id="sex">
                    <option value="">Selecciona</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select> 

                <label for="status">Estado Civil:</label>

                <select name="txtEstado" id="sex">
                    <option value="">Selecciona</option>
                    <option value="Casado(a)">Casado(a)</option>
                    <option value="Soltero(a)">Soltero(a)</option>
                    <option value="Viudo(a)">Viudo(a)</option>
                </select> 
            </div>

             <div class="mb-3 mt-3">
                <label>Carrera Universitaria</label>
                <input type="text" name="txtU" class="form-control" placeholder="Ingrese aqui su carrera universitaria" required>
            </div>

            <div class="mb-3 mt-3">
                 <label for="pais">Pais:</label>

                <select name="txtPais" id="pais">
                    <option value="">Selecciona</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Honduras">Honduras</option>
                </select> 
            </div>

            <?php

include_once 'Database.php';
include_once 'Personas.php';


$database = new Database();
$db = $database->getConnection();

$item = new Personas($db);
         

if (isset($_POST['txtID']) && isset($_POST['txtNombre']) && isset($_POST['txtTelefono']) && isset($_POST['txtDireccion']) && isset($_POST['txtFecha']) && isset($_POST['txtSex']) && isset($_POST['txtPais']) && isset($_POST['txtEstado']))
{
        $union1 = $_POST['txtApellido1'];
        $union2 = $_POST['txtApellido2'];
        $union = $union1." ".$union2;   

        $identidad = $_POST['txtID'];
        $nombres = $_POST['txtNombre'];
        $apellidos = $union;
        $fechanac = $_POST['txtFecha'];
        $telefono = $_POST['txtTelefono'];
        $direccion = $_POST['txtDireccion'];
        $sexo = $_POST['txtSex'];
        $carrera = $_POST['txtU'];  
        $pais = $_POST['txtPais'];
        $estadoCivil = $_POST['txtEstado'];

        $item->identidad =$identidad;
        $item->nombres = $nombres;
        $item->apellidos = $apellidos;
        $item->fechanac = $fechanac;
        $item->telefono = $telefono;
        $item->direccion = $direccion;
        $item->sexo = $sexo;
        $item->carrera = $carrera;
        $item->pais = $pais;
        $item->estadoCivil = $estadoCivil;

    if($item->createPerson())
    {
        echo "";
    }
    else
    {
        echo "No se puede crear la persona, error.";
    }
}
?>

<button type="submit" class="btn btn-success" name="Enviar">Enviar</button>

	   </form>

    </section>  
    
</body>
</html>