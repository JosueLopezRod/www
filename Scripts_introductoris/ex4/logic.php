<?php


$musica = $_GET["musica"];

if ($musica == "Rock") {
    $missatge = "Rock roquero";
} elseif ($musica == "Pop") {
    $missatge = "Pop diva";
} elseif ($musica == "Rap") {
    $missatge = "Rap de la calle";
} elseif ($musica == "Electrònica") {
    $missatge = "Electronica de fiesta";
} else {
    $missatge = "No has escollit cap estil musical.";
}

?>

<!DOCTYPE html>

<head>
    <title>Resultat</title>
</head>

<body>

    <h1>Resultat de l'enquesta</h1>

    <p><?php echo $missatge; ?></p>

    <a href="index.html">Tornar a l'enquesta</a>

</body>

</html>


