<?php
include_once '../modelos/garajesClass.php';
$listaGarajes = new garajes();
$listaGarajes->borrarGaraje($_GET['idGaraje']);
$listaGarajes->leerGarajes();
include '../vistas/leerGarajesVista.php';