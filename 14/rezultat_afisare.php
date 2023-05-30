<!DOCTYPE html>
<html>
<head>
    <title>Rezultat personalizare stil text</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: <?php echo $_COOKIE['textColor'] ?? '#000000'; ?>;
            background-color: <?php echo $_COOKIE['backgroundColor'] ?? '#ffffff'; ?>;
        }

        p {
            font-size: <?php echo $_COOKIE['fontSize'] ?? '14'; ?>px;
        }

        h1 {
            font-size: <?php echo (2 * ($_COOKIE['fontSize'] ?? '14')); ?>px;
        }
    </style>
</head>
<body>
    <h1>Exemplu de text </h1>
    <p>Totalitate a termenilor, a frazelor care constituiescriere (opera literara sau artistica, discurs, lege etc.). 2 Scriere tiparita sau in manuscris. 3 Scriere considerata in redactarea ei originala ?i autentica. 4 Parte a unei lucrari scrise sau tiparite care cuprinde comunicarea propriu-zisa fara titluri, observatii etc.</p>
    <p> 5 Parte a unei forme de tipar, compusa numai din litere ?i semne tipografice, fara ilustratii ?i fara titluri. 6 Fragment al unei opere (caracteristic pentru gandirea sau arta autorului). 7 Cuvintele unei bucati de muzica vocala. 8 (Pgr) </p>
    <p>  Se reprezinta Trei suroria de A. Cehov. Textul e ascultat in desavarsita tacere. </p>
    <a href="exercitiu-tema-cookie.php">Inapoi</a>
</body>
</html>
