<!DOCTYPE html>
<html lang="de-DE">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Preisrechner">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/style.css">

</head>

<body>
    <nav>
        <ul>
            <li><a href="u1.php" class="aktuell">Preisrechner</a></li>
            <li><a href="u2.php">Quadratrechner</a></li>
            <li><a href="u3.php">Tankrechner</a></li>
            <li><a href="u7.php">Zeilen ausgeben</a></li>
            <li><a href="u8.php">Würfelspiel</a></li>
        </ul>
    </nav>
    <h1>Preisrechner</h1>
    <article class="bon">
        <h3>Preise:</h3>
        <p>
            <?php
            $preise = [22.50, 12.30, 5.20];
            foreach ($preise as $preis) {
                echo number_format($preis, 2, ",", " ") . "&euro; <br/>";
            }
            ?>
        </p>
        <h3>Gesamtpreis:</h3>
        <p>
            <?php

            $netto = 0;
            //Zusammenrechnen
            foreach ($preise as $preis) {
                $netto += $preis;
            }
            echo number_format($netto, 2, ",", " ") . "&euro;";
            ?>
        </p>
        <h3>Steuern (20%):</h3>
        <p>
            <?php
            $ust = ($netto / 100 * 20);
            echo number_format($ust, 2, ",", " ") . "&euro;";
            ?>
        </p>

        <h3>Bruttopreis:</h3>
        <p>
            <?php
            $brutto = $netto - $ust;
            //$brutto = ;
            echo number_format($brutto, 2, ",", " ") . "&euro;";
            ?>
        </p>
    </article>
</body>

</html>