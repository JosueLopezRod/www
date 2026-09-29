<?php
if (isset($_GET["nombre"]) && 
    isset($_GET["cognoms"]) && 
    isset($_GET["email"]) && 
    isset($_GET["missatge"])) {
   
    $nom = $_GET["nombre"];
    $cognoms = $_GET["cognoms"];
    $mail = $_GET["email"];
    $missatge = $_GET["missatge"];

    echo "Missatge rebut, " . $nom . " " . $cognoms . ". Gracies per contactar. Et respondrem al correu electrònic: " . $mail;
    echo "<form action='index.html' method='get'><button>Tornar</button></form>";

} else {
    echo "No s'ha rebut cap missatge. Error en la recepció del missatge.";
    echo "<form action='index.html' method='get'><button>Tornar</button></form>";
}
?>