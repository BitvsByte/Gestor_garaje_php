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
			<h2 data-text="ModificaPlantas">ModificaPlantas</h2>
		</div>
		<form action="../controladores/modificar2PlantaControlador.php" method="POST">
			<div class="inputBox">

				<select name="idGara">
					<?php
					foreach ($listaGarajes->garajes as $gara) {
						if ($gara['id_garaje'] == $datosPlanta['id_garaje']) {
							echo '<option value="' . $gara['id_garaje'] . '" selected>' . $gara['nombre'] . ' ' . $gara['direccion'] . ' ' . $gara['provincia'] . ' ' . $gara['ciudad'] . '</option>';
						} else {
							echo '<option value="' . $gara['id_garaje'] . '">' . $gara['nombre'] . ' ' . $gara['direccion'] . ' ' . $gara['provincia'] . ' ' . $gara['ciudad'] . '</option>';
						}
					}

					?>

				</select>
				<span>Selecciona Garaje</span>
				<div class="inputBox">
					<input trype="text" name="numero" required="required" value="<?php echo $datosPlantas['numero'] ?>">
					<span>Numero</span>
				</div>
				<div class="inputBox">
					<input trype="text" name="colores" required="required" value="<?php echo $datosPlantas['colores'] ?>">
					<span>Color</span>
				</div>
				<div class="frame">
					<button class="custom-btn btn-12" type="submit" name="modificar"><span>Planta</span><span>Modificar</span></button>

				</div>
				<input type="hidden" name="idPlanta" value="<?php echo $datosPlantas['id_planta'] ?>">

		</form>


	</div>

</body>