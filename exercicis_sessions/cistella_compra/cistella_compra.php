
<?php

session_start();

// Crear la cesta si todavía no existe
if (!isset($_SESSION["cesta"])) {
    $_SESSION["cesta"] = array(
        "teclado" => 0,
        "raton" => 0
    );
}

// Comprobar los datos del formulario
if (isset($_POST["producto"]) && isset($_POST["cantidad"])) {

    $producto = $_POST["producto"];
    $cantidad = $_POST["cantidad"];

    if (is_numeric($cantidad) && $cantidad >= 1 && $cantidad <= 99) {

        if ($producto == "teclado") {
            $_SESSION["cesta"]["teclado"] += (int)$cantidad;
        } elseif ($producto == "raton") {
            $_SESSION["cesta"]["raton"] += (int)$cantidad;
        }

    }

}

// Calcular el total
$teclados = $_SESSION["cesta"]["teclado"];
$ratones = $_SESSION["cesta"]["raton"];

$total = ($teclados * 20) + ($ratones * 10);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Mi cesta</title>
</head>

<body>

    <h1>Mi cesta de la compra</h1>

    <p>Teclados: <?php echo $teclados; ?></p>
    <p>Ratones: <?php echo $ratones; ?></p>

    <p>Total: <?php echo $total; ?> €</p>

    <h2>Añadir más productos</h2>

    <form action="cistella_compra.php" method="POST">
        <input type="hidden" name="producto" value="teclado">

        <label>Cantidad de teclados:</label>
        <input type="number" name="cantidad" min="1" max="99" required>

        <input type="submit" value="Añadir teclado">
    </form>

    <br>

    <form action="cistella_compra.php" method="POST">
        <input type="hidden" name="producto" value="raton">

        <label>Cantidad de ratones:</label>
        <input type="number" name="cantidad" min="1" max="99" required>

        <input type="submit" value="Añadir ratón">
    </form>

    <br>

    <a href="resum.php">Finalizar compra</a>

    <br><br>

    <a href="index.html">Volver al inicio</a>

</body>

</html>
