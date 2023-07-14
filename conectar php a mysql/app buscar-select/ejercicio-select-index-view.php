<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Buscar registros</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="wrap">
		<h1>Busqueda de CLIENTES</h1>
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
			Selecciona el cliente a buscar:
			 <select name="codigo" id="codigo">
				<option value=""></option>
				<option value="CT09">CT09</option>
				<option value="CT37">CT37</option>
				<option value="CT30">CT30</option>
				<option value="CT22">CT22</option>
				<option value="CT17">CT17</option>
			</select>
			<br>

			<?php if (!empty($errores)): ?>
				<div class="alert error">
					<?php echo $errores; ?>
				</div>
			<?php elseif($enviado): ?>
				<div class="alert success">
					<p>Buscando cliente correctamente <?php echo $codigo; ?></p>
				</div>
			<?php endif ?>

			<input type="submit" name="submit" class="btn btn-primary" value="Buscar cliente">

		</form>
	</div>
</body>
</html>