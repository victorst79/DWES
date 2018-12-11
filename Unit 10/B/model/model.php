<?php
    class Conexion extends PDO{
        private $type = "mysql";
        private $host = "localhost";
        private $nombre_de_base = "comentarios";
        private $usuario = "root";
        private $contrasena = "";

        public function __contructor(){
            try{
                $con = new PDO($this->tipo_de_base.':host='.$this->host.';dbname='.$this->nombre_de_base, $this->usuario, $this->contrasena);
            }catch(PDOException $e){
                echo "Fallo conexion BD";
                exit();
            }
        }
    }

    
?>