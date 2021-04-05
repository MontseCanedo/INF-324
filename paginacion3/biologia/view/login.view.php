<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Iniciar Sesión</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>

	<h1>Iniciar Sesión</h1>
	<br>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">
		<div class="form-group">
			<i class="icono izquierda fa fa-user-circle-o" aria-hidden="true"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario">
		</div>

		<div class="form-group">
			<i class="icono izquierda fa fa-key" aria-hidden="true"></i><input type="password" name="password" class="password_btn" placeholder="Contraseña"><i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
		</div>
	</form>

	<p class="texto-registrate">
		¿Aún no tienes cuenta?
		<a href="registrate.php">Regístrate</a>
	</p>

</body>
</html>