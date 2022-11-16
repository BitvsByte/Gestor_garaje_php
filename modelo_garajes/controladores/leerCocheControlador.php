<?php
include_once '../modelos/cochesClass.php';
$listaCoches = new coches();
// print_r($_GET);
$datosCoche = $listaCoches->leerCoche($_GET['idCoche']);
// echo '<pre>';
// print_r($datosCoche);
include_once '../vistas/leerCocheVista.php';