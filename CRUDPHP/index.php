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
        <h1 id="titulo">FORMULARIO</h1>
    </header>
    
    <section class="container mt-3">

    	<form action="createemple.php" method="POST">

            <div class="mb-3 mt-3">
            	<label>Nombres</label>
            	<input type="text" name="txtnombre" class="form-control" placeholder="Ingrese el nombre">
            </div>


             <div class="mb-3 mt-3">
            	<label>Apellidos</label>
            	<input type="text" name="txtapellido" class="form-control" placeholder="Ingrese el apellido" required>
            </div>

             <div class="mb-3 mt-3">
                <label>Direccion</label>
                <input type="text" name="txtdireccion" class="form-control" placeholder="Ingrese el direccion" required>
            </div>

             <div class="mb-3 mt-3">
                <label>Telefono</label>
                <input type="text" name="txttelefono" class="form-control" placeholder="Ingrese el telefono" required>
            </div>


             <div class="mb-3 mt-3">
            	<label>Fecha Nacimiento</label>
            	<input type="date" name="fecha" class="form-control">
            </div>

		   	<input type="submit" name="Enviar" class="btn btn-primary">

	   </form>

    </section>  
    
</body>
</html>