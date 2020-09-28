<!DOCTYPE html>
<html lang="de-DE">

<head>
    <meta name="description" content="Wuerfelspiel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <nav>
        <ul>
            <li><a href="u1.php">Preisrechner</a></li>
            <li><a href="u2.php">Quadratrechner</a></li>
            <li><a href="u3.php">Tankrechner</a></li>
            <li><a href="u7.php">Zeilen ausgeben</a></li>
            <li><a href="u8.php" class="aktuell">Würfelspiel</a></li>
        </ul>
    </nav>
    <h1>Würfelspiel</h1>
    <section class="bon">
        <?php
        $sumP1 = 0;
        $sumP2 = 0;
        $currP = 1;
        while ($sumP1 < 25 || $sumP2 < 25) {
            if ($currP == 1) {
                $sumP1 += rand(1, 6);
                $currP++;
            } else {
                $sumP2 += rand(1, 6);
                $currP = 1;
            }
        }
        echo "Player " . (($sumP1 > 25) ? "1" : "2") . " has won <br/>";
        echo "with " . (($sumP1 > 25) ? $sumP1 : $sumP2) . " Points!";
        ?>
    </section>
</body>

</html>