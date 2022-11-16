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
            <h2 data-text="InsertaPlantas">InsertaPlantas</h2>
        </div>
        <form action="../controladores/insertar2PlantaControlador.php" method="POST">
            <div class="inputBox">

                <select name="idGara">
                    <?php
                    foreach ($listaGarajes->garajes as $gara) {
                        echo '<option value="' . $gara['id_garaje'] . '">' . $gara['nombre'] . ' ' . $gara['direccion'] . ' ' . $gara['provincia'] . ' ' . $gara['ciudad'] . '</option>';
                    }
                    print_r($gara['id_garaje']);
                    ?>
                </select>
                <span>Selecciona Garaje</span>
                <div class="inputBox">
                    <input trype="text" name="numero" required="required">
                    <span>Numero</span>
                </div>
                <div class="inputBox">
                    <input trype="text" name="colores" required="required">
                    <span>Color</span>
                </div>
                <div class="frame">
                    <button class="custom-btn btn-12" type="submit" name="anadir"><span>Planta</span><span>Añadir</span></button>
                </div>
        </form>
        <div class="btn_container">
            <div class="return_btn">
                <a class="insertar_nuevo" href="../controladores/frontControlador.php"> « Return!!</a>
            </div>
            <div class="return_btn">
                <a class="insertar_nuevo" href="../controladores/leerPlantasControlador.php"> Lista Plantas</a>
            </div>
        </div>



    </div>
</body>

</html>