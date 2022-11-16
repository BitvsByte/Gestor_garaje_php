<?php
include_once '../modelos/connectClass.php';
class garajes extends connect {
	private $db;
	public $garajes;
	public function __construct() {
		$this->db=connect::conexion();
	}
	public function leerGarajes() {
		$sql="SELECT * FROM `ga_garajes`; ";
		$query = $this->db->query($sql);
		while ($fila=$query->fetch_assoc()) {
			$this->garajes[]=$fila;
		}
	}

	public function borrarGaraje($idGaraje) {
		$sql="DELETE FROM ga_garajes WHERE id_garaje=$idGaraje";
		$query = $this->db->query($sql);	
		// $sql="DELETE FROM ga_garajes WHERE `ga_garajes`.`id_garaje` =$idGaraje";
		// $query = $this->db->query($sql);			
	}
	public function insertarGaraje($nombre,$direccion,$provincia,$ciudad) {
		$sql="INSERT INTO `ga_garajes` (`nombre`, `direccion`, `provincia`, `ciudad`) 
		      VALUES ('$nombre', '$direccion', '$provincia', '$ciudad');";
		$query = $this->db->query($sql);	
	
	}
	public function leerGaraje($idGaraje) {
		$sql="SELECT
		ga_garajes.id_garaje,
		ga_garajes.nombre,
		ga_garajes.direccion,
		ga_garajes.provincia,
		ga_garajes.ciudad
		
	FROM
		`ga_garajes`
	
	WHERE
		ga_garajes.id_garaje = $idGaraje";	
		// echo $sql;

		$query = $this->db->query($sql);
		$fila=$query->fetch_assoc();
		return $fila;	
	}
	
	public function modificarGaraje($idGaraje,$nombre,$direccion,$provincia,$ciudad) {
		$sql="UPDATE `ga_garajes` 
			SET `nombre` = '$nombre', 
			    `direccion` = '$direccion', 
			    `provincia` = '$provincia', 
			    `ciudad` = '$ciudad'
			    
			 WHERE `ga_garajes`.`id_garaje` = $idGaraje";
		$query = $this->db->query($sql);	
	}
	

}