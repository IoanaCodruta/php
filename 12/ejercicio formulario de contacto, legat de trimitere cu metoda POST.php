<!DOCTYPE html>
<html>
<head>
  <title>Formular de Contact</title>
  <style>
    /* Stilizare formular */
    form {
      width: 400px;
      margin: 0 auto;
    }

    label {
      display: block;
      margin-bottom: 10px;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    textarea {
      width: 100%;
      padding: 5px;
      margin-bottom: 10px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 15px;
      border: none;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: blueviolet;
    }

    .error {
      color: red;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <h1>Contacteaza-ne</h1>
  <form action="trimitere.php" method="GET">
    <label for="nume">Nume:</label>
    <input type="text" id="nume" name="nume" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="telefon">Telefon:</label>
    <input type="tel" id="telefon" name="telefon" required>

    <label for="mesaje">Mesaje:</label>
    <textarea id="mesaje" name="mesaje" rows="4" required></textarea>

    <input type="checkbox" id="termeni" name="termeni" required>
    <label for="termeni">Am citit si accept termenii si conditiile.</label>

    <input type="submit" value="Trimite">
  </form>
</body>
</html>
