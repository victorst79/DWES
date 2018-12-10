<?php
require_once ('./Model/ejercicio1.php');
require_once ('./View/Ejercicio1.html');

if (isset($_POST['inserta'])){
	$opt='1';
}elseif (isset($_POST['modifica'])){
	$opt='2';
}elseif (isset($_POST['elimina'])){
	$opt='3';
}elseif (isset($_POST['listarAll'])){
	$opt='4';
}elseif (isset($_POST['listarMin'])){
	$opt='5';
}else{
	$opt='0';
}

$emp = new Empleado();
switch ($opt){
	case '5':
		$listmin = $emp->listarMin();
		break;
	case '4':
		$listall = $emp->listarAll();
		break;
	case '3':
		$emp->elimina($_POST['nif']);
		break;
	case '2':
		$emp->modifica($_POST['nif']);
		break;
	case '1':
		$emp->inserta($_POST['nif'],$_POST['nombre'],$_POST['tlfn'],$_POST['email'],
						$_POST['dpto'], $_POST['catg'], $_POST['salar']);
		break;
	case'0':
		echo 'Opción en construcción. Perdone las molestias.';
}

$emp = null;
?>
