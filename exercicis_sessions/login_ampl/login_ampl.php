
<?php

session_start();

if (isset($_POST["usuario"]) && isset($_POST["pwd"])) {

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

} else {

    header("Location: index.html");
    exit;

}

?>
