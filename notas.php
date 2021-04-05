<?php

try {
		$conexion = new PDO('mysql:host=Localhost; dbname=examen', 'root', 'mysql');
	} catch (PDOException $e) {
		echo "Error: " . $e->GetMessage();
	}

	$promedio;

	$statement1 = $conexion->prepare('SELECT docente.ciudad, nota,sigla, AVG(nota_final) FROM nota GROUP BY docente.ciudad, nota.sigla');
	$statement1->execute(array(':promedio' => $promedio));
	$resultado = $statement1->fetch();

require 'view/notas.view.php';

?>