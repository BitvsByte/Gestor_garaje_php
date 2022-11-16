<?php
include_once '../modelos/garajesClass.php';
$listaGarajes = new garajes();
// print_r($_GET);
$datosGaraje = $listaGarajes->leerGaraje($_GET['idGaraje']);
// echo '<pre>';
// print_r($datosCoche);
include_once '../vistas/leerGarajeVista.php';