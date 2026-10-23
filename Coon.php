<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$basededatos = "base1";
$conn = new mysqli($servidor, $usuario, $password, $basededatos)
    or die("Problemas con la conexión");
if (isset($_REQUEST['nombre'], $_REQUEST['email'], $_REQUEST['codigocurso'])) {
    mysqli_query($conn, "INSERT INTO alumnos(nombre, email, codigocurso)
        VALUES ('$_REQUEST[nombre]', '$_REQUEST[email]', '$_REQUEST[codigocurso]')")
        or die("Problemas en el insert" . mysqli_error($conn));
    echo "Se insertaron los datos";
}
mysqli_close($conn);
?>
<html>
<body>
    <form action="" method="post">
        <input type="text" name="nombre" value="">
        <input type="text" name="email" value="">
        <input type="text" name="codigocurso" value="">
        <input type="submit" value="Enviar">
    </form>
</body>
<a href="select.php"><button>Consultar</button></a>
</html>