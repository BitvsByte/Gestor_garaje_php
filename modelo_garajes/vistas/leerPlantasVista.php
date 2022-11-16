


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Gestor Garajes</title>
	<link rel="stylesheet" href="listaCochesNuevo.css" type="text/css">
	<script>
		function confirmar() {
			if (window.confirm('estas seguro?')) {
				document.getElementById('borrar').submit()

			}
		}
	</script>


</head>

<body>
	<div class="main_container">
	<div class="return_btn">
			<a class="insertar_nuevo" href="../controladores/frontControlador.php">RETURN</a>

		</div>
		<div class="container">
			<div class="titles">
				<h2>Lista de Vehiculos</h2>
			</div>
			<table>
				<tr>
					<th>Numero</th>
					<th>Colores</th>
					<th>Delete</th>
					<th>Detalles</th>
					<th>Update</th>

				</tr>
				<?php
				foreach ($listaPlantas->plantas as $fila) {
					echo '<tr>';
					echo '<td>' . $fila['numero'] . '</td>';
					echo '<td>' . $fila['colores'] . '</td>';
					echo '<td><a id="bajapersonas" class="delete" href="../controladores/borrarPlantaControlador.php?idPlanta=' . $fila['id_planta'] . '">Borrar</a></td>';
					// echo '<td><form method="post" action="../controladores/borrarCocheControlador.php?idCoche=' . $fila['id_coche'].'" id="borrar"><input type="hidden"><input class="button" type="button" value="Borrar" onclick="confirmar()"></form></td>';
					echo '<td><a class="show" href="../controladores/leerPlantaControlador.php?idPlanta=' . $fila['id_planta'] . '">Ver detalle</a></td>';
					echo '<td><a href="../controladores/modificar1PlantaControlador.php?idPlanta=' . $fila['id_planta'] . '">Modificar</a></td>';

					echo '</tr>';
				}

				?>
			</table>


		</div>

	</div>

</body>

</html>