<?php
include_once '../modelos/garajesClass.php';
if (isset($_POST['anadir'])) {
    $listaGarajes = new garajes();
    $listaGarajes->insertarGaraje(ucfirst(strtolower($_POST['nombre'])), ucfirst(strtolower($_POST['direccion'])), $_POST['provincia'], $_POST['ciudad']);
    $listaGarajes->leerGarajes();
    // include '../controladores/leerCochesControlador.php';
    include '../vistas/leerGarajesVista.php';


// header('Location: ../vistas/leerCochesVista.php');

}