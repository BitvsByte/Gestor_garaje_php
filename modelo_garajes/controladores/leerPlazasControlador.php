<?php
include_once '../modelos/plazasClass.php';
$listaPlazas = new plazas();
$listaPlazas->leerPlazas();
include '../vistas/leerPlazasVista.php';