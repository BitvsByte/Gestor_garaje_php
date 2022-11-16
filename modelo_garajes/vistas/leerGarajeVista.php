<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Gestor Garajes</title>
    <link rel="stylesheet" href="styledetalles.css" type="text/css">

</head>
<body>
	<div class="main_container">
		<div class="container">
			<div class="titles">
			<h2>Lista de Garajes</h2>
			</div>
			<table>
				<tr>
					<th>Nombre del Garaje</th>
					<th>Direccion</th>
					<th>Provincia</th>
					<th>Ciudad</th>
                    <				
				</tr>
				<?php
                echo "<td>".$datosGaraje['nombre']."</td>"; 
                echo "<td>".$datosGaraje['direccion']."</td>";
                echo "<td>".$datosGaraje['provincia']."</td>";
                echo "<td>".$datosGaraje['ciudad']."</td>";
				?>
			</table>
		</div>
        <div class="return_btn">
        <a class="insertar_nuevo" href="../controladores/leerGarajesControlador.php"> Lista Garajes</a>
    </div>
	</div>
	
</body>

</html>
