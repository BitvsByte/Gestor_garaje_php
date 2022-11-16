<?php
include_once '../modelos/PlantasClass.php';
if (isset($_POST['anadir'])) {
    $listaPlantas = new plantas();
    $listaPlantas->insertarPlanta($_POST['idGara'],$_POST['numero'], $_POST['colores']);
    $listaPlantas->leerPlantas();
    // include '../controladores/leerCochesControlador.php';
    include '../vistas/leerPlantasVista.php';

}
// header('Location: ../vistas/leerCochesVista.php');