<?php
include_once '../modelos/plantasClass.php';
$listaPlantas = new plantas();
$listaPlantas->leerPlantas();
include '../vistas/leerPlantasVista.php';
