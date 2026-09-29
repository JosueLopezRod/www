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

echo $salutacio . "<br>";
echo "Hora del servidor: " . $hora;

?>