
<?php

session_start();

$usuario = $_POST["usuario"];
$pwd = $_POST["pwd"];

if ($usuario == $pwd) {

    $_SESSION["usuario"] = $usuario;

    header("Location: pagina1.php");
    exit;

} else {

    header("Location: index.html");
    exit;

}

?>
