
<?php

session_start();

// Si se confirma la compra, vaciar la cesta
if (isset($_POST["confirmar"])) {

    unset($_SESSION["cesta"]);

    echo "Compra confirmada. ¡Gracias por comprar!";

    echo "<br><br>";
    echo '<a href="index.html">Volver a la tienda</a>';

    exit;
}

// Comprobar que hay una cesta
if (!isset($_SESSION["cesta"])) {
    echo "La cesta está vacía.";
    echo "<br><br>";
    echo '<a href="index.html">Volver a la tienda</a>';
    exit;
}

// Recuperar las cantidades
$teclados = $_SESSION["cesta"]["teclado"];
$ratones = $_SESSION["cesta"]["raton"];

// Calcular el total
$total = ($teclados * 20) + ($ratones * 10);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resumen de compra</title>
</head>

<body>

    <h1>Resumen de la compra</h1>

    <p>Teclados: <?php echo $teclados; ?> x 20 €</p>

    <p>Ratones: <?php echo $ratones; ?> x 10 €</p>

    <h2>Total: <?php echo $total; ?> €</h2>

    <form action="resum.php" method="POST">
        <input type="submit" name="confirmar"
               value="Confirmar compra">
    </form>

    <br>

    <a href="cistella_compra.php">Volver a la cesta</a>

</body>

</html>
