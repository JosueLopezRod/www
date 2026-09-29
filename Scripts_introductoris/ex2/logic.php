
<?php

if (
    isset($_GET["quant"])&&
    is_numeric($_GET["quant"])&&
    $_GET["quant"] >= 0
){
    $conversion = 1.05;
    $quant = $_GET["quant"];
    $quant = $quant * $conversion;
    echo "Quantitat rebuda: " . $quant . "$. Gracias";
    echo "<form action='index.html' method='get'>";
    echo "<button>Tornar</button>";
    echo "</form>";
} else {
    header("index.html");
}
