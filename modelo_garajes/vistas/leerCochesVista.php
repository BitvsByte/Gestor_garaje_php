<?php




?>


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
					<th>Marca</th>
					<th>Modelo</th>
					<th>Color</th>
					<th>Matricula</th>
					<th>Delete</th>
					<th>Detalles</th>
					<th>Update</th>

				</tr>
				<?php
				foreach ($listaCoches->coches as $fila) {
					echo '<tr>';
					echo '<td>' . $fila['marca'] . '</td>';
					echo '<td>' . $fila['modelo'] . '</td>';
					echo '<td>' . $fila['color'] . '</td>';
					echo '<td>' . $fila['matricula'] . '</td>';
					echo '<td><a id="bajapersonas" class="delete" href="../controladores/borrarCocheControlador.php?idCoche=' . $fila['id_coche'] . '">Borrar</a></td>';
					// echo '<td><form method="post" action="../controladores/borrarCocheControlador.php?idCoche=' . $fila['id_coche'].'" id="borrar"><input type="hidden"><input class="button" type="button" value="Borrar" onclick="confirmar()"></form></td>';
					echo '<td><a class="show" href="../controladores/leerCocheControlador.php?idCoche=' . $fila['id_coche'] . '">Ver detalle</a></td>';
					echo '<td><a href="../controladores/modificar1CocheControlador.php?idCoche=' . $fila['id_coche'] . '">Modificar</a></td>';

					echo '</tr>';
				}

				?>
			</table>


		</div>

	</div>

</body>

</html>