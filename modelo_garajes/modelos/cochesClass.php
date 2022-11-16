<?php
include_once '../modelos/connectClass.php';
class coches extends connect {
	private $db;
	public $coches;
	public function __construct() {
		$this->db=connect::conexion();
	}
	public function leerCoches() {
		$sql="SELECT * FROM `ga_coches`; ";
		$query = $this->db->query($sql);
		while ($fila=$query->fetch_assoc()) {
			$this->coches[]=$fila;
		}
	}
	/*public function leerAsignatura($id_asignatura) {
		$sql=""
		$query = $this->db->query($sql);
		$fila=$query->fetch_assoc();
		return $fila;	
	}*/
	public function borrarCoche($idCoche) {
		$sql="DELETE FROM ga_pla_coche WHERE id_coche=$idCoche";
		$query = $this->db->query($sql);	
		$sql="DELETE FROM ga_coches WHERE `ga_coches`.`id_coche` =$idCoche";
		$query = $this->db->query($sql);			
	}
	public function insertarCoche($marca,$modelo,$color,$matricula) {
		$sql="INSERT INTO `ga_coches` (`marca`, `modelo`, `color`, `matricula`) 
		      VALUES ('$marca', '$modelo', '$color', '$matricula');";
		$query = $this->db->query($sql);	
		//$fila=$query->fetch_assoc();
		//return $fila;	
	}
	public function leerCoche($idCoche) {
		$sql="SELECT
		ga_coches.id_coche,
		ga_coches.marca,
		ga_coches.modelo,
		ga_coches.color,
		ga_coches.matricula
	FROM
		`ga_coches`
	WHERE
		ga_coches.id_coche = $idCoche";	
		// echo $sql;
		$query = $this->db->query($sql);
		$fila=$query->fetch_assoc();
		return $fila;	
	}
	public function modificarCoche($idCoche,$marca,$modelo,$color,$matricula) {
		$sql="UPDATE `ga_coches` 
			SET `marca` = '$marca', 
			    `modelo` = '$modelo', 
			    `color` = '$color', 
			    `matricula` = '$matricula'
			    
			 WHERE `ga_coches`.`id_coche` = $idCoche";
		$query = $this->db->query($sql);	
	}


















}