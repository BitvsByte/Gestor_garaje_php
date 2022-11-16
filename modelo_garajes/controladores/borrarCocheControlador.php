<?php
include_once '../modelos/cochesClass.php';
$listaCoches = new coches();
$listaCoches->borrarCoche($_GET['idCoche']);
$listaCoches->leerCoches();
include '../vistas/leerCochesVista.php';

