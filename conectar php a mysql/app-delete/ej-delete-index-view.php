<?php 
	require 'ej-delete-tabla.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tabla de clientes</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="estil-delete.css">
	<script src="script.js"></script>
</head>
<body>
	<h1>CLIENTES</h1>
	
	<?php if ($enviado): ?>
				<div class="alert success">
					<p>Eliminado correctamente el registro: <?php echo $_POST['codigo'] ?></p>
					Actualiza para ver los cambios:
				<button id="reload-btn" onclick="reloadPage()">
    				<i class="fas fa-sync-alt"></i>
  				</button>
				</div>
				
	<?php endif ?>
	
	<table>
        <tr>
			<th></th>
            <th>CÓDIGOCLIENTE</th>
            <th>EMPRESA</th>
            <th>DIRECCIÓN</th>
        </tr>
        <?php foreach ($resultSet as $cliente): ?>
					<tr>
						<td><form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
						<?php $_POST['codigo']=$cliente['CÓDIGOCLIENTE']; ?>
						<input class="oculta" name="codigo" value="<?php  echo $cliente['CÓDIGOCLIENTE']; ?>"></input>
						<input class="delete-boton" type="submit" name="submit" value="X" onclick="confirmarEliminar()">
						</form></td>
                        <td><?php echo $cliente['CÓDIGOCLIENTE']; ?></td>
                        <td><?php echo $cliente['EMPRESA']; ?></td>
                        <td><?php echo $cliente['DIRECCIÓN']; ?></td>
                    </tr>
		<?php endforeach; ?>
    </table>
</body>
</html>