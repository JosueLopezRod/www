<?php

$precio = $_GET["precio"];
$iva = $_GET["iva"];

$cantidadIva = $precio * $iva / 100;
$total = $precio + $cantidadIva;

?>

<!DOCTYPE html>
<html>

<head>
    <title>Resultado IVA</title>
</head>

<body>

    <h1>Resultado</h1>

    <p>Precio: <?php echo $precio; ?> €</p>

    <p>IVA: <?php echo $iva; ?> %</p>

    <p>Cantidad de IVA: <?php echo $cantidadIva; ?> €</p>

    <p>Precio final: <?php echo $total; ?> €</p>

</body>

</html>