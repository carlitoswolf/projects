<!DOCTYPE html>
<html lang="en">
<head>
	<title>My Web Site</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  	 <link rel="stylesheet" href="style.css">
</head>
<body>

 	<header>
        <h1 id="titulo">OPERACIONES ARITMETICAS</h1>
    </header>

<section class="container mt-3">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"> 
		<article class="mb-3 mt-3"> 
			<label>Ingrese un numero a Multiplicar</label>
			<input type="int" name="numero" class="form-control" placeholder="Ingrese un numero" required>
		</article>
		<input type="submit" name="Enviar" value="Calcular" class="btn btn-primary">
	</form>
</section>
<section class="container mt-3">
	<form method='post' >
		<table class="table">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Multiplicacion</th>
				      <th scope="col">Resultado</th>
				    </tr>
				  </thead>
				  <tbody>
			<?php 
			

			if(isset($_POST['numero'])){

			$numero = $_POST['numero'];
			
			for( $i=1; $i<=20; $i++){
			echo "<tr>";
			echo '<th scope=row>'.$i.'</th>';
			echo '<td>'.$numero.' * '.$i.'</td>';
			echo '<td>'.$numero*$i.'</td>';
			echo "</tr>";
		}
			}
		?>
		</tbody>
		</table>
			</form>
	</section>

</body>
</html>