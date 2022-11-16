<?php
include_once '../modelos/plantasClass.php';

// echo '<pre>';
// print_r($_POST);

if(isset($_POST['modificar'])){
$listaPlantas = new plantas();
$listaPlantas->modificarPlanta($_POST['idPlanta'],$_POST['numero'],$_POST['colores']);
// echo '<pre>';
// print_r($_POST['nombre']);
$listaPlantas->leerPlantas();
include_once '../vistas/leerPlantasVista.php';

}
