<?php
include_once '../modelos/connectClass.php';
class plazas extends connect {
	private $db;
	public $plazas;
	public function __construct() {
		$this->db=connect::conexion();
	}
	public function leerPlazas() {
		$sql="SELECT * FROM `ga_plazas`; ";
		$query = $this->db->query($sql);
		while ($fila=$query->fetch_assoc()) {
			$this->plazas[]=$fila;
		}
	}

}