<?php session_start();

if (isset($_SESSION['usuario'])) {
	header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$ci = filter_var($_POST['ci']);
	$usuario = filter_var(strtolower($_POST['usuario']));
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$tipo = $_POST['tipo'];
	//$color = $_POST['color'];

	// echo "$usuario . $password . $password2";

	$errores = '';

	if (empty($ci) or empty($usuario) or empty($password) or empty($password2)) {
		$errores .= '<li>Por favor rellena los datos correctamente</li>';
	} else {
		try {
			$conexion = new PDO('mysql:host=Localhost; dbname=examen', 'root', 'mysql');
		} catch (PDOException $e) {
			echo "Error: " . $e->GetMessage();
		}

		$statement1 = $conexion->prepare('SELECT * FROM usuario WHERE ci = :ci LIMIT 1');
		$statement1->execute(array(':ci' => $ci));
		$resultado = $statement1->fetch();
		$statement2 = $conexion->prepare('SELECT * FROM usuario WHERE usuario = :usuario LIMIT 1');
		$statement2->execute(array(':usuario' => $usuario));
		$resultado2 = $statement2->fetch();

		if($resultado != false && $resultado2 != false) {
			$errores .= '<li>El nombre de usuario o el CI ya existe</li>';
		}

		$password = hash('sha512', $password);
		$password2 = hash('sha512', $password2);

		if($password != $password2) {
			$errores .= '<li>Las contraseñas no son iguales</li>';
		}
	}

	if($errores == '') {
		$st = $conexion->prepare('INSERT INTO usuario (ci, usuario, password, tipo) VALUES (:ci, :usuario, :password, :tipo)');
		$st->execute(array(':ci' => $ci, ':usuario' => $usuario, ':password' => $password, ':tipo' => $tipo));
		header('Location: login.php');
	}
}

require 'view/registrate.view.php';

?>