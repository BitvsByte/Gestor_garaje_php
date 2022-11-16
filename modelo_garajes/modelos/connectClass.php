<?php
class connect {
	public function conexion() {
		$cnx = new mysqli('nascor09.md360.es', 'Nascor09', 'Nascor2022-2', 'nascor09_bbdd');
		$cnx->set_charset("utf8mb4");
		return $cnx;
	}
}
