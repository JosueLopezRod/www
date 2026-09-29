<?php 

$hora = date("H:i:s"); 
$horaActual = date("H"); 

if ($horaActual >= 5 && $horaActual < 14) { 
    $salutacio = "Bon dia"; 
} elseif ($horaActual >= 14 && $horaActual < 19) { 
    $salutacio = "Bona tarda"; 
} else { 
    $salutacio = "Bona nit"; 
} 

?>

<!DOCTYPE html>

<head>
    <title>Hora del servidor</title>
</head>

<body>

    <h1><?php echo $salutacio; ?></h1>

    <p>Hora del servidor: <?php echo $hora; ?></p>

</body>

</html>