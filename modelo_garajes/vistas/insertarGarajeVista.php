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
			<h2 data-text="InsertaGaraje">InsertaGaraje</h2>
		</div>
		<form action="../controladores/insertar2GarajeControlador.php" method="POST">
			<div class="inputBox">
				<input trype="text" name="nombre" required="required">
				<span>Nombre del garaje</span>
			</div>
			<div class="inputBox">
				<input trype="text" name="direccion" required="required">
				<span>Direccion</span>
			</div>
			<div class="inputBox">
			<input trype="text" name="provincia" required="required">

		<span>Provincia</span>
			</div>
            <div class="inputBox">
            <input trype="text" name="ciudad" required="required">
		<span>Ciudad</span>
			</div>

			<div class="frame">
				<button class="custom-btn btn-12" type="submit" name="anadir"><span>Garaje</span><span>Añadir</span></button>
			</div>
		</form>
		<div class="btn_container">
			<div class="return_btn">
				<a class="insertar_nuevo" href="../controladores/frontControlador.php"> « Return!!</a>
			</div>
			<div class="return_btn">
				<a class="insertar_nuevo" href="../controladores/leerGarajesControlador.php"> Lista Garajes</a>
			</div>
		</div>
		

	</div>
</body>


</html>