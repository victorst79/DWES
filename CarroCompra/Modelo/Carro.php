<?php
require_once ("Conexion.php");
require_once ("Articulos.php");
require_once ("Usuarios.php");

class Carro {
	private $carro;
	
	public function __construct(){
		$this->carro = array();
	}
	
	public function addAlCarro ($articulo_id, $cantidad=1){
		array_push ($this->carro, array($articulo_id => $cantidad)); 
	}
	
	public function listarCarro(){
		print_r ($this->carro);
	}
	
	public function delCarro($indice){
		unset ($this->carro[$indice]);
		print_r($this->carro);
	}
	
	public function keyCarro ($articulo_id){
		foreach ($this->carro as $key=>$valor){
			if($valor[0]==$articulo_id){
				return $key;
			}
		}
		return -1; //Se deuelve -1 para evitar posible confusión si el índice es 0. 
	}
	
	public function sumaProducto($articulo_id,$cantidad){
		foreach ($this->carro as $key => $value) {
			if($key == $articulo_id){
				$value = $cantidad + $value;
			}else{
				echo "Articulo no encontrado";
			}
		}
	}

	public function restaProducto($articulo_id,$cantidad){
		foreach ($this->carro as $key => $value) {
			if($key == $articulo_id){
				$value = $cantidad - $value;
			}else{
				echo "Articulo no encontrado";
			}
		}
	}

	public function precioTotal($id,$precio){
		foreach ($this->carro as $key => $value) {
			if($key == $id){
				return $total = $value * $precio;
			}	
		}
	}

}//fin de la clase

	$carr=new Carro();
	$carr->addAlCarro('4', 10);
	$carr->addAlCarro('5',2);
	$carr->addAlCarro('6',1);
	$carr->listarCarro();

// eliminamos  el producto con articulo_id='5' del carro.
	$key=$carr->keyCarro('5');
	if ($key >= 0){
		echo "<br/>";
		$carr->delCarro($key);
		echo 'producto eliminado del carro'."<br/>";
	}else{
		echo "Artículo no exixtente";
	}
?>