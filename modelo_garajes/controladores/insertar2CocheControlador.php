<?php
include_once '../modelos/cochesClass.php';
if (isset($_POST['anadir'])) {
    $listaCoches = new coches();
    $listaCoches->insertarCoche(ucfirst(strtolower($_POST['marca'])), ucfirst(strtolower($_POST['modelo'])), $_POST['color'], $_POST['matricula']);
    $listaCoches->leerCoches();
    // include '../controladores/leerCochesControlador.php';
    include '../vistas/leerCochesVista.php';


// header('Location: ../vistas/leerCochesVista.php');

}
