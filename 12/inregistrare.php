<!DOCTYPE html>
<html>
<head>
  <title>Inregistrare</title>
  <link rel="stylesheet" type="text/css" href="exercitiu-trimitere.css">
</head>
<body>
  <h1>Inregistrare</h1>

  <form action="procesare-inregistrare.php" method="POST">
    <label for="nume">Nume:</label>
    <input type="text" id="nume" name="nume" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="parola">Parola:</label>
    <input type="password" id="parola" name="parola" required>
    <br>
    <br>
    <input type="submit" value="Inregistrare">
    <br>
  </form>

  <br>
  <a href="exercitiu-trimitere.php">Inapoi la formular</a>
</body>
</html>
