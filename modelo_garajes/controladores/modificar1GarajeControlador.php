<?php
include_once '../modelos/garajesClass.php';

$listaGarajes = new garajes();

$datosGarajes = $listaGarajes->leerGaraje($_GET['idGaraje']);
// print_r($datosGarajes);

include_once '../vistas/modificarGarajeVista.php';


?>