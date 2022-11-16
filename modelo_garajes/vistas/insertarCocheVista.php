<?php

include('../libreria/colores_array.php');


?>


</html>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gestor Garajes</title>
	<link rel="stylesheet" href="insertarnuevo2.css">

</head>

<body>
	<div class="body">
		<div>
			<h2 data-text="InsertaVehiculos">InsertaVehiculos</h2>
		</div>
		<form action="../controladores/insertar2CocheControlador.php" method="POST">
			<div class="inputBox">
				<input trype="text" name="marca" required="required">
				<span>Marca</span>
			</div>
			<div class="inputBox">
				<input trype="text" name="modelo" required="required">
				<span>Modelo</span>
			</div>
			<div class="inputBox">
				<select name="color">
					<?php
					foreach ($colores as $colorArray => $color) {
						if ($colorArray == $colorr) {
							echo "<option selected>$colorArray</option>";
						} else {
							echo "<option>$colorArray</option>";
						}
					}
					?>
				</select>
				<span>Color</span>
			</div>
			<div class="inputBox">
				<input trype="text" name="matricula" required="required">
				<span>Matricula</span>
			</div>
			<div class="frame">
				<button class="custom-btn btn-12" type="submit" name="anadir"><span>Vehiculo</span><span>Añadir</span></button>
			</div>
		</form>
		<div class="btn_container">
			<div class="return_btn">
				<a class="insertar_nuevo" href="../controladores/frontControlador.php"> « Return!!</a>
			</div>
			<div class="return_btn">
				<a class="insertar_nuevo" href="../controladores/leerCochesControlador.php"> Lista coches</a>
			</div>
		</div>



	</div>
</body>

</html>