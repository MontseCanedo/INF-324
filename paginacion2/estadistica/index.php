<?php

// try {
// 	$conexion = new PDO('mysql:host=localhost; dname=examen','root','mysql');
// } catch (PDOException $e) {
// 	echo "Error: " . $e->getMessage();
// 	die();
// }

session_start();

if(isset($_SESSION['usuario'])) {
	header('Location: view/index.view.php');
} else {
	header('Location: registrate.php');
}


// $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

// require 'index.view.php';

?>