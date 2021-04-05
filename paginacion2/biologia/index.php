<?php

session_start();

if(isset($_SESSION['usuario'])) {
	header('Location: view/index.view.php');
} else {
	header('Location: registrate.php');
}

// try {
// 	$conexion = new PDO('mysql:host=localhost; dname=examen','root','mysql');
// } catch (PDOException $e) {
// 	echo "Error: " . $e->getMessage();
// 	die();
// }

// $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

// require 'view/index.view.php';

?>