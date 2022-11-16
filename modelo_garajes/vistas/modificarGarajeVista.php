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
            <h2 data-text="ModificarGaraje">ModificarGaraje</h2>
        </div>
        <form action="../controladores/modificar2GarajeControlador.php" method="POST">
            <div class="inputBox">
                <input trype="text" name="nombre" required="required" value="<?php echo $datosGarajes['nombre'] ?>">
                <span>Nombre del garaje</span>
            </div>
            <div class="inputBox">
                <input trype="text" name="direccion" required="required" value="<?php echo $datosGarajes['direccion'] ?>">
                <span>Direccion</span>
            </div>
            <div class="inputBox">
            <input trype="text" name="provincia" required="required" value="<?php echo $datosGarajes['provincia'] ?>">

		<span>Provincia</span>
			</div>
            <!-- <div class="inputBox">
                <input trype="text" name="provincia" required="required"value="<?php echo $datosGarajes['provincia'] ?>">
                <span>Provincia</span>
            </div> -->
            <div class="inputBox">
                <input trype="text" name="ciudad" required="required"value="<?php echo $datosGarajes['ciudad'] ?>">
                <span>Ciudad</span>
            </div>

            <div class="frame">
                <button class="custom-btn btn-12" type="submit" name="modificar"><span>Garaje</span><span>Modificar</span></button>
            </div>
            <input type="hidden" name="idGaraje" value="<?php echo $datosGarajes['id_garaje'] ?>">
        </form>



    </div>
</body>



</html>