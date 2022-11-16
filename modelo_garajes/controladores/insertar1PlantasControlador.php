<?php
include_once '../modelos/garajesClass.php';
// include_once '../modelos/plazasClass.php';
$listaGarajes = new garajes();
// $listaPlazas= new plazas();
$listaGarajes->leerGarajes();
// $listaPlazas->leerPlazas();

include_once '../vistas/insertarPlantaVista.php';

// echo '<a class="insertar_nuevo" href="../vista/leerCocheVista.php">Return</a>';
// echo '<a class="insertar_nuevo" href="../front.php">RETURN</a>';
