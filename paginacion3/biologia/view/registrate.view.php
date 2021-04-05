<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registro</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>

	<h1>Registrate</h1>
	<br>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">
		<div class="form-group">
			<i class="icono izquierda fa fa-user-circle-o" aria-hidden="true"></i><input type="text" name="ci" class="ci" placeholder="CI">
		</div>

		<div class="form-group">
			<i class="icono izquierda fa fa-user-circle-o" aria-hidden="true"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario">
		</div>

		<div class="form-group">
			<i class="icono izquierda fa fa-key" aria-hidden="true"></i><input type="password" name="password" class="password" placeholder="Contraseña">
		</div>

		<div class="form-group">
			<i class="icono izquierda fa fa-key" aria-hidden="true"></i><input type="password" name="password2" class="password_btn" placeholder="Repita Contraseña"><i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
		</div>

		<!-- <div class="form-group">
			<label class="docente-estudiante">Docente</label>
			<input type="radio" name="docente" value="docente">
			<label class="docente-estudiante">Estudiante</label>
			<input type="radio" name="docente" value="estudiante">
		</div> -->

		<label class="docente-estudiante">Tipo</label>
		<input list="tipo" name="tipo">
		<datalist id="tipo">
			<option value="Docente"></option>
			<option value="Estudiante"></option>
		</datalist>

		<div class="form-group">
			<!-- <i class="icono izquierda fa fa-key" aria-hidden="true"></i> -->
			<label class="color">Elija dos colores de su preferencia</label><br>
			<input type="radio" name="color" value="color1"><span class="color1"></span><br>
			<input type="radio" name="color" value="color2"><span class="color2"></span><br>
			<input type="radio" name="color" value="color3"><span class="color3"></span>
			<!-- <input type="color" name="color1" class="color1" value="">
			<input type="color" name="color2" class="color2" value=""> -->
		</div>

		<?php if(!empty($errores)) : ?>
			<div class="error">
				<ul>
					<?php echo $errores ?>
				</ul>
			</div>
		<?php endif; ?>
	</form>

	<p class="texto-registrate">
		¿Ya eres usuario?
		<a href="login.php">Iniciar sesión</a>
	</p>

</body>
</html>