<?php

if (isset($_POST["edad"]) && isset($_POST["idioma"]) && isset($_POST["moneda"])) {

    $edad = $_POST["edad"];
    $idioma = $_POST["idioma"];
    $moneda = $_POST["moneda"];

    if (($edad == "si" || $edad == "no") &&
        ($idioma == "es" || $idioma == "ca" || $idioma == "en") &&
        ($moneda == "EUR" || $moneda == "GBP" || $moneda == "USD")) {

        setcookie("majoredat", $edad, time() + 86400 * 30, "/");
        setcookie("idioma", $idioma, time() + 86400 * 30, "/");
        setcookie("moneda", $moneda, time() + 86400 * 30, "/");

        header("Location: informacio.php");
        exit;

    } else {
        $error = "Selecciona opciones válidas.";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Bodega</title>
</head>

<body>

    <h1>Tienda de vinos</h1>

    <form action="bodega.php" method="POST">

        <p>¿Eres mayor de edad?</p>

        <input type="radio" name="edad" value="si" required>
        Sí
        <br>

        <input type="radio" name="edad" value="no">
        No

        <p>Idioma:</p>

        <select name="idioma" required>
            <option value="">Selecciona un idioma</option>
            <option value="es">Español</option>
            <option value="ca">Catalán</option>
            <option value="en">Inglés</option>
        </select>

        <p>Moneda:</p>

        <select name="moneda" required>
            <option value="">Selecciona una moneda</option>
            <option value="EUR">Euros</option>
            <option value="GBP">Libras</option>
            <option value="USD">Dólares</option>
        </select>

        <br><br>

        <input type="submit" value="Continuar">

    </form>

    <?php
    if (isset($error)) {
        echo $error;
    }
    ?>

</body>

</html>
