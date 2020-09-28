<!DOCTYPE html>
<html lang="de-DE">

<head>
    <meta name="description" content="Tankrechner">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <nav>
        <ul>
            <li><a href="u1.php">Preisrechner</a></li>
            <li><a href="u2.php">Quadratrechner</a></li>
            <li><a href="u3.php" class="aktuell">Tankrechner</a></li>
            <li><a href="u7.php">Zeilen ausgeben</a></li>
            <li><a href="u8.php">Würfelspiel</a></li>
        </ul>
    </nav>
    <h1>Tankrechner</h1>
    <section class="bon">
        <section class="preise">
            <h2>Preise:</h2>
            <form action="u3.php" method="post">
                <p>
                    <?php
                    $normal = 1.35;
                    $super = 1.40;
                    $diesel = 1.10;

                    echo "<input type='radio' name='type' value='normal' checked>Normal:" . number_format($normal, 2, ",", "") . "&euro;<br/>";
                    echo "<input type='radio' name='type' value='super'>Super: " . number_format($super, 2, ",", " ") . "&euro;<br/>";
                    echo "<input type='radio' name='type' value='diesel'>Diesel: " . number_format($diesel, 2, ",", " ") . "&euro;";
                    ?>
                </p>
        </section>
        <section>
            <h2>Menge:</h2>
            <p>
                <span>! 2% Rabatt ab 100 Liter !</span><br />
                <label for="liter">Tankfüllung: </label>
                <input id="liter" name="liter" type="text" value="0.0">
                <button type="submit">Berechnen</button>
                </form>
            </p>
        </section>
        <section>
            <h2>Kosten:</h2>
            <p>
                <?php
                if ($_POST) {
                    if ($_POST["type"] == "normal") {
                        $type = $normal;
                    } else if ($_POST["type"] == "super") {
                        $type = $super;
                    } else if ($_POST["type"] == "diesel") {
                        $type = $diesel;
                    }
                    if (intval($_POST["liter"]) < 100) {
                        $gesamt = $_POST["liter"] * $type;
                    } else {
                        $gesamt = $_POST["liter"] * $type;
                        $gesamt -= ($gesamt / 100 * 2);
                    }
                    echo "Der Preis beträgt " . number_format($gesamt, 2, ",", " ") . "&euro;";
                } else {
                    echo "Berechne deine Tank-Kosten.";
                }
                ?>
            </p>
        </section>
    </section>

</body>

</html>