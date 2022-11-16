
<?php
include('../libreria/variables_detalles_coche.php');
include('../libreria/subir_foto.php');


?>
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
			<h2>Lista de Vehiculos</h2>
			</div>
			<table>
				<tr>
					<th>Marca</th>
					<th>Modelo</th>
					<th>Color</th>
					<th>Matricula</th>
                    <th>Foto</th>				
				</tr>
				<?php
                echo "<td>".$datosCoche['marca']."</td>"; 
                echo "<td>".$datosCoche['modelo']."</td>";
                echo "<td>".$datosCoche['color']."</td>";
                echo "<td>".$datosCoche['matricula']."</td>";
                
                echo "<td><img src='$resultado'></td>";
                
				?>
			</table>
            <!-- <div>
                <p> Sube tu foto</p>
                <!-- <?php
                echo '<td><input type="file" name="foto"></td>';
                ?> -->
            <!-- </div> --> -->
            
		</div>
        <div class="return_btn">
        <a class="insertar_nuevo" href="../controladores/leerCochesControlador.php"> « Return!!</a>
    </div>
	</div>
   
</body>

</html>
