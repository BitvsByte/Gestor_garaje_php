<?php
include_once '../modelos/cochesClass.php';

$listaCoches = new coches();

$datosCoches = $listaCoches->leerCoche($_GET['idCoche']);
// print_r($datosCoches);

include_once '../vistas/modificarCocheVista.php';


?>