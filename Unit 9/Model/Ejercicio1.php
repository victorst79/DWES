<?php
require_once 'Conexion.php';
//
class Empleado{
	private $nif;
	public $nombre;
	public $telefono;
	public $email;
	public $departamento;
	public $categoria;
	public $salario;
	const tabla = 'empleados';
	
	public function __construct($nif='', $nombre='', $telefono='', $email='', $departamento='', $categoria='', $salario=''){
		$this->nif=$nif;
		$this->nombre=$nombre;
		$this->telefono=$telefono;
		$this->email=$email;
		$this->departamento=$departamento;
		$this->categoria=$categoria;
		$this->salario=$salario;
	}
	public function getNif(){
		return $this->nif;
	}
	
	public function getNombre(){
		return $this->nombre;
	}
	
	public function getTelefono(){
		return $this->telefono;
	}
	
	public function getEmail(){
		return $this->email;
	}
	
	public function getDepartamento(){
		return $this->departamento;
	}
	
	public function getCategoria(){
		return $this->categoria;
	}
	
	public function getSalario(){
		return $this->salario;
	}
	
	public function setSalario(){
		$this->salario = $salario;
	}
	
	public function setCategoria(){
		$this->categoria = $categoria;
	}
	
	public function setDepartamento(){
		$this->departamento = $departamento;
	}
	
	public function setEmail(){
		$this->email = $email;
	}
	
	public function setTelefono(){
		$this->telefono = $telefono;
	}
	
	public function setNombre(){
		$this->nombre = $nombre;
	}
	
	public function setNif($nif){
		$this->nif = $nif;
	}
	
	public function inserta($nif, $nombre, $telefono, $email, $departamento, $categoria, $salario){
		$conexion = new Conexion();
		try 
		{
		$sql = 'INSERT INTO '.self::tabla.' VALUES (?, ?, ?, ?, ?, ?, ?)';
		$sql = $conexion->prepare($sql);	
		$sql->execute(
				array($nif, $nombre, $telefono, $email, $departamento, $categoria,	$salario)
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	
	$conexion = null;
   }
   
	public function elimina($nif){
		try 
		{
			$conexion = new Conexion();
			$stm = $conexion->prepare('DELETE FROM '.self::tabla.' WHERE nif = ?');			          
			$stm->execute(array($nif));
			$conexion=null;
		}catch (Exception $e) 
		{ 
			die($e->getMessage());
		}
	
	}
//	
	public function listarAll(){
		$conexion= new Conexion();
		$sql = 'SELECT * FROM '.self::tabla;
		$res = $conexion->query($sql);
		$filas = $res->rowCount();
		foreach ($res as $fila){
			
			echo "<br/> nif: ".$fila[0];
			echo "<br/> nombre: ".$fila[1];
			echo " telefono: ".$fila[2];
			echo " email: ".$fila[3];
			echo " departamento: ".$fila[4];
			echo " categoria: ".$fila[5];
			echo "<br/> salario: ".$fila[6];
		}
		
		echo "<br/> Total de empleados: $filas.";
	$res=null;	
	$conexion=null;
	}
	
	public function listarMin(){
		$conexion= new Conexion();
		$sql= 'SELECT * FROM '.self::tabla.' WHERE salario = (SELECT MIN(salario) FROM '.self::tabla.')';
		$res = $conexion->query($sql);
		$filas = $res->rowCount();
		foreach ($res as $fila){
			echo "<br/> nif: ".$fila[0];
			echo "<br/> nombre: ".$fila[1];
			echo " telefono: ".$fila[2];
			echo " email: ".$fila[3];
			echo " departamento: ".$fila[4];
			echo " categoria: ".$fila[5];
			echo "<br/> salario: ".$fila[6];
		}
		echo "<br/> Total de empleados: $filas.<br/>";
		$res=null;	
		$conexion=null;
	}
}

class Departamento{
	private $codigo;
	private $nombre;
	const tabla = 'departamentos';

	public function __construct($codigo='', $nombre=''){
		$this->codigo=$codigo;
		$this->nombre=$nombre;
	}
	public function getCodigo(){
		return $this->codigo;
	}
	
	public function getNombre(){
		return $this->nombre;
	}
	public function setNombre($nombre){
		$this->nombre = $nombre;
	}
	
	public function setCodigo($codigo){
		$this->nif = $codigo;
	}

}
?>