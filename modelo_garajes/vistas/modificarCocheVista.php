</html>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="insertarnuevo2.css">
</head>

<body>

	<div class="body">
		<div>
			<h2 data-text="ModificaVehiculos">ModificaVehiculos</h2>
		</div>
		<form action="../controladores/modificar2CocheControlador.php" method="POST">
			<div class="inputBox">
				<input trype="text" name="marca" required="required" value="<?php echo $datosCoches['marca'] ?>">
				<span>Marca</span>
			</div>
			<div class="inputBox">
				<input trype="text" name="modelo" required="required" value="<?php echo $datosCoches['modelo'] ?>">
				<span>Modelo</span>
			</div>

			<div class="inputBox">
				<input trype="text" name="color" required="required" value="<?php echo $datosCoches['color'] ?>">
				<span>Color</span>
			</div>
			<div class="inputBox">
				<input trype="text" name="matricula" required="required" value="<?php echo $datosCoches['matricula'] ?>">
				<span>Matricula</span>
			</div>
			<div class="frame">
				<button class="custom-btn btn-12" type="submit" name="modificar"><span>Vehiculo</span><span>Modificar</span></button>

			</div>
			<input type="hidden" name="idCoche" value="<?php echo $datosCoches['id_coche'] ?>">

		</form>


	</div>

</body>