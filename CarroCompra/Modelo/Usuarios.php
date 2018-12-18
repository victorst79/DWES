<?php
class Usuario{
	private $usuario_nombre;
	private $usuario_pass;
	private $usuario_mail;
	const tabla = 'usuarios';
//métodos	
	public function __construct($usuario_nombre, $usuario_pass, $usuario_mail){
		$this->usuario_nombre=$usuario_nombre;
		$this->usuario_pass=$usuario_pass;
		$this->usuario_mail=$usuario_mail;
	}
	public function getUsuario_nombre(){
		return $this->usuario_nombre;
	}
	
	public function getUsuario_pass(){
		return $this->usuario_pass;
	}
	
	public function getUsuario_mail(){
		return $this->usuario_mail;
	}
	public function setUsuario_nombre($usuario_nombre){
		$this->usuario_nombre = $usuario_nombre;
	}
	
	public function setUsuario_pass($usuario_pass){
		$this->usuario_pass = $usuario_pass;
	}
	
	public function setUsuario_mail($usuario_mail){
		$this->usuario_mail = $usuario_mail;
	}

}//fin de clase Usuario
