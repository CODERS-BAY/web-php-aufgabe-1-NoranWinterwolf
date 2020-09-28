<!DOCTYPE html>
<html lang="de-DE">

<head>
    <meta name="description" content="Quadratrechner">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <nav>
        <ul>
            <li><a href="u1.php">Preisrechner</a></li>
            <li><a href="u2.php" class="aktuell">Quadratrechner</a></li>
            <li><a href="u3.php">Tankrechner</a></li>
            <li><a href="u7.php">Zeilen ausgeben</a></li>
            <li><a href="u8.php">Würfelspiel</a></li>
        </ul>
    </nav>
    <h1>Quadratrechner</h1>
    <article class="bon">
        <form action="u2.php" method="post">
            <input type="text" name="number">
            <button type="submit">rechnen</button>
        </form>
        <?php
        if ($_POST) {
            echo "Quadratzahl von " . $_POST["number"] . " ist " . ($_POST["number"] * $_POST["number"]);
        }
        ?>
    </article>
</body>

</html>