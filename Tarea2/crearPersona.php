<?php

include_once 'Database.php';
include_once 'Personas.php';


$database = new Database();
$db = $database->getConnection();

$item = new Personas($db);
	 
$union1 = $_POST['txtApellido1'];
$union2 = $_POST['txtApellido2'];
$union = $union1." ".$union2;		

if (isset($_POST['txtID']) && isset($_POST['txtNombre']) && isset($_POST['txtTelefono']) && isset($_POST['txtDireccion']) && isset($_POST['txtFecha']) && isset($_POST['txtSex']) && isset($_POST['txtPais']) && isset($_POST['txtEstado']))
{
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
		echo "<br>";
		echo "Creacion existosa.";
		echo "<br>";
		echo "<a href='index.php'>REGRESAR ATRAS</a>";
		echo "<br>";
		echo "<a href='exampleWithPHP_SELF.php'>Ir al Combo con todos las Carreras Universitarias</a>";
	}
	else
 	{
 		echo "No se pudo crear, error.";
 	}
}else{
	echo "<br>";
	echo "ERROR, the ejecution is stop";
}
?>