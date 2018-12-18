<?php
require_once 'Conexion.php';
//
class Articulo{
	private $articulo_id;
	private $articulo_des;
	private $articulo_precio;
	private $articulo_stock;
	const tabla = 'articulos';
	
	public function __construct($articulo_id, $articulo_des='', $articulo_precio='', $articulo_stock=''){
		$this->articulo_id = $articulo_id;
		$this->articulo_des=$articulo_des;
		$this->articulo_precio=$articulo_precio;
		$this->articulo_stock=$articulo_stock;
		
	}
	
	public function getArticulo_id(){
		return $this->articulo_id;
	}
	
	public function getArticulo_des(){
		return $this->articulo_des;
	}
	
	public function getArticulo_precio(){
		return $this->articulo_precio;
	}
	
	public function getArticulo_stock(){
		return $this->articulo_stock;
	}
/* Es auto-inrementable	
	public function setArticulo_id($articulo_id){
		$this->articulo_id = $articulo_id;
	}
*/
	public function setArticulo_des($articulo_des){
		$this->articulo_des = $articulo_des;
	}
	
	public function setArticulo_precio($articulo_precio){
		$this->articulo_precio = $articulo_precio;
	}
	
	public function setArticulo_stock($articulo_stock){
		$this->articulo_stock = $articulo_stock;
	}
	
	public function inserta($articulo_des, $articulo_precio,$articulo_stock){
		$conexion = new Conexion();
		try{
		$sql = 'INSERT INTO (articulo_des, articulo_precio, $articulo_stock)'.self::tabla.' VALUES (?, ?, ?)';
		$sql = $conexion->prepare($sql);
//pasar directamente el array de parametros al metodo execute()		
		$sql->execute(
				array($articulo_des, $articulo_precio, $articulo_stock)
			);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	
		$conexion = null;
   }
   
	public function elimina($articulo_id){
		try{
			$conexion = new Conexion();
			$stm = $conexion->prepare('DELETE FROM '.self::tabla.' WHERE articulo_id = ?');			          
			$stm->execute(array($articulo_id));
			$conexion=null;
		}catch (Exception $e) { 
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
		}		

	$res=null;	
	$conexion=null;
//		return $res;
	}

}//Fin de la clase Articulo
	
?>