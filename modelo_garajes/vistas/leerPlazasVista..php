<?php
//echo '<a href="../controladores/anadirAsignatura1Controlador.php">Añadir asignatura</a>';
echo '<table>';
echo '<tr>';
echo '<th>Numero de Plaza</th>';
echo '<th>Tamaño</th>';

echo '</tr>';
foreach ($listaCoches->plazas as $fila) {
	echo '<tr>';
	echo '<td>'.$fila['numero'].'</td>';
	echo '<td>'.$fila['tamaño'].'</td>';
	echo '</tr>';
}
echo '</table>';
