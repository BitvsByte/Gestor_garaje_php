<?php
include_once '../modelos/connectClass.php';
class plantas extends connect {
	private $db;
	public $plantas;
	public function __construct() {
		$this->db=connect::conexion();
	}
	public function leerPlantas() {
		$sql="SELECT * FROM `ga_plantas`; ";
		$query = $this->db->query($sql);
		while ($fila=$query->fetch_assoc()) {
			$this->plantas[]=$fila;
		}
	}
	public function borrarPlanta($idPlanta) {
		$sql="DELETE FROM ga_plantas WHERE id_planta=$idPlanta";
		$query = $this->db->query($sql);	
		
	}

	// te ngo que insertar el id del garaje
	public function insertarPlanta($id_garaje,$numero,$colores) {
		$sql="INSERT INTO `ga_plantas` (`id_garaje`,`numero`, `colores`) 
		      VALUES ($id_garaje,'$numero', '$colores');";
		$query = $this->db->query($sql);	
	
	}
	// public function insertarCurso($nombre,$inicio,$fin,$id_profesor, $id_aula) {
	// 	$sql="INSERT INTO `ga_cursos` (`id_curso`, `fecha_inicio`, `fecha_fin`, `nombre`, `id_aula`, `id_profesor`) 
	// 	      VALUES (NULL, '$inicio', '$fin', '$nombre', '$id_aula', '$id_profesor');";
	// 	$query = $this->db->query($sql);	
	// 	//$fila=$query->fetch_assoc();
	// 	//return $fila;	
	// }
	
	public function leerPlanta($idPlanta) {
		$sql="SELECT
		ga_plantas.id_planta,
		ga_plantas.numero,
		ga_plantas.colores	
	FROM
		`ga_plantas`
	
	WHERE
		ga_plantas.id_planta = $idPlanta";	
		// echo $sql;

		$query = $this->db->query($sql);
		$fila=$query->fetch_assoc();
		return $fila;	
	}
	
	public function modificarPlanta($idPlanta,$numero,$colores) {
		$sql="UPDATE `ga_plantas` 
			SET `numero` = '$numero', 
			    `colores` = '$colores'

			    
			 WHERE `ga_plantas`.`id_planta` = $idPlanta";
		$query = $this->db->query($sql);	
	}




































}