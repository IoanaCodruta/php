<?php
// Ob?ine data curent?
$currentDate = date('d-m-Y');
$currentDateTime = new DateTime($currentDate);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Verific? dac? a fost trimis un câmp de dat?
  if (isset($_POST['date'])) {
    $inputDate = $_POST['date'];

    // Verific? dac? input-ul este o dat? valid?
    if (validateDate($inputDate, 'd-m-Y')) {
      $inputDateTime = new DateTime($inputDate);

      // Verific? dac? data introdus? este în trecut, viitor sau ast?zi
      if ($inputDateTime < $currentDateTime) {
        $interval = $currentDateTime->diff($inputDateTime);
        $days = $interval->days;
        echo "Data introdusa este în trecut. Au trecut $days zile.";
      } elseif ($inputDateTime > $currentDateTime) {
        $interval = $inputDateTime->diff($currentDateTime);
        $days = $interval->days;
        echo "Data introdusa este in viitor. Vor veni $days zile.";
      } else {
        echo "Data introdusa este azi.";
      }
    } else {
      echo "Data introdusa nu este valida. Te rog introdu o data in formatul d-m-Y.";
    }
  } else {
    echo "Nu a fost trimis un camp de data.";
  }
}

// Func?ie pentru validarea unei date într-un anumit format
function validateDate($date, $format)
{
  $d = DateTime::createFromFormat($format, $date);
  return $d && $d->format($format) === $date;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Verificare dat?</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 30px;
    }

    form {
      width: 300px;
      padding: 20px;
      background-color: #f2f2f2;
      border: 1px solid #ccc;
    }

    label {
      display: block;
      margin-bottom: 10px;
    }

    input[type="text"] {
      width: 100%;
      padding: 5px;
      font-size: 14px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      border: none;
      padding: 10px;
      font-size: 14px;
      cursor: pointer;
    }

    .result {
      margin-top: 20px;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <form method="post" action="">
    <label for="date">Introdu o data (format: d-m-Y):</label>
    <input type="text" name="date" id="date" required>
    <br>
    <br>
    <input type="submit" value="Verifica">
  </form>


</body>
</html>
