
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
			<h2>Lista de Plantas</h2>
			</div>
			<table>
				<tr>
					<th>Numero</th>
					<th>Color</th>
			
				</tr>
				<?php
                echo "<td>".$datosPlanta['numero']."</td>"; 
                echo "<td>".$datosPlanta['colores']."</td>";

                
				?>
			</table>
   
            
		</div>
        <div class="return_btn">
        <a class="insertar_nuevo" href="../controladores/leerPlantasControlador.php"> « Return!!</a>
    </div>
	</div>
   
</body>

</html>