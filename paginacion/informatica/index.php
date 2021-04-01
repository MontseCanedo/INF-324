<?php

try {
	$conexion = new PDO('mysql:host=localhost; dname=examen','root','mysql');
} catch (PDOException $e) {
	echo "Error: " . $e->getMessage();
	die();
}

$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

require 'index.view.php';

?>