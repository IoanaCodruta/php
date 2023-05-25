<!DOCTYPE html>
<html>
<head>
  <title>Formular de Contact</title>
  <link rel="stylesheet" type="text/css" href="exercitiu-trimitere.css">
</head>
<body>
  <h1>Contacteaza-ne</h1>
  <form action="trimitere.php" method="GET">
    <label for="nume">Nume:</label>
    <input type="text" id="nume" name="nume" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="telefon">Telefon:</label>
    <input type="text" id="telefon" name="telefon" pattern="[0-9]+" required>

    <label for="mesaje">Mesaje:</label>
    <textarea id="mesaje" name="mesaje" rows="4" required></textarea>

    <input type="checkbox" id="termeni" name="termeni" required>
    <label for="termeni">Am citit si accept termenii si conditiile.</label>

    <input type="submit" value="Trimite">
  </form>
</body>
</html>
