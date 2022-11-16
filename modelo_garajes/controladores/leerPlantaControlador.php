<?php
include_once '../modelos/plantasClass.php';
$listaPlantas = new plantas();

$datosPlanta = $listaPlantas->leerPlanta($_GET['idPlanta']);

include_once '../vistas/leerPlantaVista.php';
