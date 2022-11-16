<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Gestor Garajes</title>
	<link rel="stylesheet" href="listacoches.css" type="text/css">
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
		<div class="container">
			<div class="titles">
			<h2>Lista de Vehiculos</h2>
			</div>
			<table>
				<tr>
					<th>Nombre del Garaje</th>
					<th>Dirección</th>
					<th>Provincia</th>
					<th>Ciudad</th>
					<th>Delete</th>
					<th>Detalles</th>
					<th>Update</th>
				</tr>
				<?php
				foreach ($listaGarajes->garajes as $fila) {
					echo '<tr>';
					echo '<td>' . $fila['nombre'] . '</td>';
					echo '<td>' . $fila['direccion'] . '</td>';
					echo '<td>' . $fila['provincia'] . '</td>';
					echo '<td>' . $fila['ciudad'] . '</td>';
					echo '<td><a class="delete" href="../controladores/borrarGarajeControlador.php?idGaraje=' . $fila['id_garaje'] . '">Borrar</a></td>';
					echo '<td><a class="show" href="../controladores/leerGarajeControlador.php?idGaraje=' . $fila['id_garaje'] . '">Ver detalle</a></td>';
					echo '<td><a href="../controladores/modificar1GarajeControlador.php?idGaraje='.$fila['id_garaje'].'">Modificar</a></td>';
					echo '</tr>';
				}
				1
				
				?>
			</table>
		</div>
	</div>
	<!-- <div class="return_btn">
        <a class="insertar_nuevo" href="../controladores/frontControlador.php">RETURN</a>

    </div> -->
</body>

</html>