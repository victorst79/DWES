<?php
require_once ('../Model/ejercicio1.php');
require_once ('../View/Ejercicio1.html');

 function listar_resultados ($res){
	foreach ($res as $fila){
		echo "<br/>nif: ".$fila[0];
		echo "<br/>nombre: ".$fila[1];
		echo "<br/>telefono: ".$fila[2];
		echo "<br/>email: ".$fila[3];
		echo "<br/>departamento: ".$fila[4];
		echo "<br/>categoria: ".$fila[5];
		echo "<br/>salario: ".$fila[6]."<br/>";
	}
//		echo "<br/>Total de empleados: $filas.";
}

?>