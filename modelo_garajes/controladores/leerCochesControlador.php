<?php
include_once '../modelos/cochesClass.php';
$listaCoches = new coches();
$listaCoches->leerCoches();
include '../vistas/leerCochesVista.php';