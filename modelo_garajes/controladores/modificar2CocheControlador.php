<?php
include_once '../modelos/cochesClass.php';
//echo '<pre>';
//print_r($_POST);
if(isset($_POST['modificar'])){
$listaCoches = new coches();
$listaCoches->modificarCoche($_POST['idCoche'],$_POST['marca'],$_POST['modelo'],$_POST['color'],$_POST['matricula']);
$listaCoches->leerCoches();
// print_r($listaCoches->$coches);
include_once '../vistas/leerCochesVista.php';
// include '../controladores/leerCochesControlador.php';
}
?>