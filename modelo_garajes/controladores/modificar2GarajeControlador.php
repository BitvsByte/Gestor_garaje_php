<?php
include_once '../modelos/garajesClass.php';

// echo '<pre>';
// print_r($_POST);
if(isset($_POST['modificar'])){
$listaGarajes = new garajes();
$listaGarajes->modificarGaraje($_POST['idGaraje'],$_POST['nombre'],$_POST['direccion'],$_POST['provincia'],$_POST['ciudad']);
// echo '<pre>';
// print_r($_POST['nombre']);

$listaGarajes->leerGarajes();

include_once '../vistas/leerGarajesVista.php';




}
?>