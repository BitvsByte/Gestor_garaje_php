<?php
include_once '../modelos/plantasClass.php';
include_once '../modelos/garajesClass.php';

$listaPlantas = new plantas();

$datosPlantas = $listaPlantas->leerPlantas($_GET['idPlanta']);
// print_r($datosCoches);

include_once '../vistas/modificarPlantaVista.php';


?>