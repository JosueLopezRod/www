<?php

if (isset($_COOKIE["visites"])) {
    $visites = $_COOKIE["visites"] + 1;
} else {
    $visites = 1;
}

setcookie("visites", $visites, time() + 86400 * 30, "/");

$missatge = "";
$total = 100;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $codi = $_POST["codi"];

    if ($codi == "BOTIGA20" && $visites >= 5 && $visites < 10) {
        $total = 100 - (100 * 20 / 100);
        setcookie("compra", "si", time() + 86400 * 30, "/");
        $missatge = "Compra feta amb un 20% de descompte!";
    } elseif ($codi == "BOTIGA50" && $visites >= 10 && !isset($_COOKIE["compra"])) {
        $total = 100 - (100 * 50 / 100);
        setcookie("compra", "si", time() + 86400 * 30, "/");
        $missatge = "Compra feta amb un 50% de descompte!";
    } elseif ($codi == "") {
        $missatge = "Has fet una compra sense descompte.";
    } else {
        $missatge = "El codi no és vàlid o no està disponible.";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Comptador de visites</title>
</head>

<body>

    <h1>Botiga online</h1>

    <p>Nombre de visites: <?php echo $visites; ?></p>

    <?php
    if ($visites >= 10 && !isset($_COOKIE["compra"])) {
        echo "Oferta exclusiva sols per a tu! Utilitza el codi BOTIGA50 per obtenir un 50% de descompte en les teves primeres compres a la botiga";
    } elseif ($visites >= 5 && !isset($_COOKIE["compra"])) {
        echo "Oferta exclusiva! Utilitza el codi BOTIGA20 per obtenir un 20% de descompte en les teves primeres compres a la botiga";
    }
    ?>

    <p>Producte: 100 €</p>

    <form action="comptador_visites.php" method="POST">

        <label>Codi de descompte:</label>
        <input type="text" name="codi" pattern="BOTIGA20|BOTIGA50"
               title="Escriu BOTIGA20 o BOTIGA50">

        <br><br>

        <input type="submit" value="Comprar">

    </form>

    <p><?php echo $missatge; ?></p>

    <?php
    if ($missatge != "") {
        echo "Preu de la compra: " . $total . " €";
    }
    ?>

</body>

</html>
