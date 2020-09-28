<!DOCTYPE html>
<html lang="de-DE">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <meta name="description" content="Zeilen ausgeben">
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
            <li><a href="u7.php" class="aktuell">Zeilen ausgeben</a></li>
            <li><a href="u8.php">Würfelspiel</a></li>
        </ul>
    </nav>
    <h1>Zeilen ausgeben</h1>
    <section class="bon">
        <h2>Zeile 1:</h2>
        <p>
            <?php
            $number = 13;
            for ($i = 0; $number + $i <= 29; $i += 4) {
                echo $number + $i . " ";
            }
            ?>
        </p>
        <h2>Zeile 2:</h2>
        <p>
            <?php
            $number = 2.0;
            for ($i = 0.0; $number - $i >= -1; $i += 0.5) {
                echo $number - $i . " ";
            }
            ?>
        </p>
        <h2>Zeile 3:</h2>
        <p>
            <?php
            $number = 2000;
            for ($i = 0; $number + $i <= 6000; $i += 1000) {
                echo $number + $i . " ";
            }
            ?>
        </p>
        <h2>Zeile 4:</h2>
        <p>
            <?php
            $number = 5;
            for ($i = 0; $number + $i <= 13; $i += 2) {
                echo "Z" . ($number + $i) . " ";
            }
            ?>
        </p>
        <h2>Zeile 5:</h2>
        <p>
            <?php
            $number = 1;
            for ($i = 0; $number + $i <= 3; $i += 1) {
                echo "a b" . ($number + $i) . " ";
            }
            ?>
        </p>
        <h2>Zeile 6:</h2>
        <p>
            <?php
            $number = 2;
            for ($j = 0; $j <= 20; $j += 10) {
                for ($i = 0; $number + $i <= 3; $i += 1) {
                    echo "c" . ($number + $i + $j) . " ";
                }
            }
            ?>
        </p>
        <h2>Zeile 7:</h2>
        <p>
            <?php
            $number = 13;
            $reset = false;
            for ($i = 0; $i <= 12; $i += 4) {
                if ($i == 12 && $reset != true) {
                    $i = 0;
                    $number = 33;
                    $reset = true;
                }
                echo $number + $i . " ";
            }
            ?>
        </p>
    </section>
</body>

</html>