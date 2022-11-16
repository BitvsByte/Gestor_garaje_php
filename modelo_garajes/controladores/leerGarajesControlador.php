<?php
include_once '../modelos/garajesClass.php';
$listaGarajes = new garajes();
$listaGarajes->leerGarajes();
include '../vistas/leerGarajesVista.php';
