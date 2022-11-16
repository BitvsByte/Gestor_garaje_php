<?php
include_once '../modelos/plantasClass.php';
$listaPlantas = new plantas();
$listaPlantas->borrarPlanta($_GET['idPlanta']);
$listaPlantas->leerPlantas();
include '../vistas/leerPlantasVista.php';