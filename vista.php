<!DOCTYPE html>
<html lang="ca">
<head>
	<title>Formulari de Contacte</title>
    <style>
		form {
			width: 300px;
			margin: 0 auto;
		}
		input[type="text"],
		input[type="email"],
		input[type="submit"] {
			width: 100%;
			padding: 10px;
			margin-bottom: 10px;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: #45a049;
		}
	</style>
</head>
<body>
	<form action="index.php" method="post">
        <input type="text" name="nom" placeholder="Nom">
        <input type="email" name="correu" placeholder="Correu">
        <input type="submit" name="submit" placeholder="Enviar Correu">
    </form>
</body>
</html>