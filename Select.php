<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$basededatos = "base1";
$conn =  mysqli_connect($servidor, $usuario, $password, $basededatos)
    or die("Problemas con la conexión");

$registros = mysqli_query($conn, "select nombre, email, codigocurso from alumnos")
    or die("Problemas en el select" . mysqli_error($conn));
while ($reg = mysqli_fetch_array($registros)) {
    echo "Nombre: " . $reg['nombre'] . "<br>";
    echo "Email: " . $reg['email'] . "<br>";
    echo "Codigo del curso: " . $reg['codigocurso'] . "<br>";
    echo "<hr>";    
}  

mysqli_close($conn);
?>

<a href="Coon.php"><button>Regresar</button></a>