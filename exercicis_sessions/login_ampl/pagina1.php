
<?php

session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location: index.html");
    exit;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Página 1</title>
</head>

<body>

    <h1>
        Bienvenido <?php echo $_SESSION["usuario"]; ?>
        - <a href="logout.php">Cerrar sesión</a>
    </h1>

    <p>Esta es la primera página de información.</p>

    <a href="pagina2.php">Ir a la página 2</a>

</body>

</html>
