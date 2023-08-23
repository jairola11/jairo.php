<?php
// Llamar el archivo de conexión
include('conexion.php');

$con = connection();

$id = $_GET['id'];

$sql = "SELECT * FROM autos WHERE placa='$id'";

$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>actualizar</title>
    <link rel="stylesheet" href="busqueda.css">
</head>
<body>
    <div>
        <form action="edit_auto.php" method="POST">
            <div class="title"><h1 class="header">Editar auto</h1></div>
            <div class="section">
                <h2 class="top">Ingrese la marca</h2>
                <input type="hidden" name="placa" value='<?= $row['placa'] ?>'>
                <input class="datos" type="text" name="marca" value='<?= $row['marca'] ?>'>
                <h2>Ingrese el color</h2>
                <input class="datos" type="text" name="color" value='<?= $row['color'] ?>'>
                <input type="submit" value="actualizar">
            </div>
        </form>
    </div>
</body>
</html>
