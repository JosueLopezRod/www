<?php

if (!isset($_COOKIE["majoredat"]) ||
    !isset($_COOKIE["idioma"]) ||
    !isset($_COOKIE["moneda"])) {

    echo "Primero debes completar el formulario.";
    exit;
}

$edad = $_COOKIE["majoredat"];
$idioma = $_COOKIE["idioma"];
$moneda = $_COOKIE["moneda"];

if ($edad == "no") {

    if ($idioma == "es") {
        echo "No podemos venderte alcohol si eres menor de edad.";
    } elseif ($idioma == "ca") {
        echo "No et podem vendre alcohol si ets menor d'edat.";
    } else {
        echo "We cannot sell alcohol to minors.";
    }

} else {

    if ($idioma == "es") {
        echo "<h1>Nuestros productos</h1>";
    } elseif ($idioma == "ca") {
        echo "<h1>Els nostres productes</h1>";
    } else {
        echo "<h1>Our products</h1>";
    }

    if ($moneda == "EUR") {
        $precio1 = "39 €";
        $precio2 = "15 €";
    } elseif ($moneda == "GBP") {
        $precio1 = "33 £";
        $precio2 = "13 £";
    } else {
        $precio1 = "43 $";
        $precio2 = "16 $";
    }

    if ($idioma == "es") {
        echo "Vino Les Terrasses: " . $precio1 . "<br>";
        echo "Vino tinto: " . $precio2;
    } elseif ($idioma == "ca") {
        echo "Vi Les Terrasses: " . $precio1 . "<br>";
        echo "Vi negre: " . $precio2;
    } else {
        echo "Les Terrasses wine: " . $precio1 . "<br>";
        echo "Red wine: " . $precio2;
    }
}

?>

<br><br>

<a href="bodega.php">Volver</a>
