<?php

session_start();

$_SESSION = array();

session_destroy();

echo "<h1>Se ha destruido la sesión</h1>";

if (isset($_SESSION['name'])) {

    echo "La sesión está todavía activa";

} else {

    echo "Ok, la sesión ya no está activa!<br>";
    echo "<a href='page1.php'>Volver atrás</a>";

}

?>