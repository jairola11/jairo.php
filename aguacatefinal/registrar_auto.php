<?php
include('conexion.php');

$con = connection();

if (isset($_POST['placa'])) {
    $placa = $_POST['placa'];
    $sql = "SELECT * FROM autos WHERE placa='$placa'";
} else {
    $sql = "SELECT * FROM autos";
}

$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar auto</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div>
        <form action="insert_auto.php" method='POST'>
            <div class="title">
                <h1 class="header">Nuevo registro</h1>
            </div>
            <div class="section">
                <h2>Placa</h2>
            <input type="text" name="placa" class="cliente placa datos" placeholder='Ingrese el número de placa'>
            <h2>Marca del vehiculo</h2>
            <input type="text" name="marca" class="cliente marca datos" placeholder='Ingrese la marca'>
            <h2>Color del vehiculo</h2>
            <input type="text" name="color" class=" cliente color datos" placeholder='Ingrese el color'>
            <h2>Documento del cliente</h2>
            <input type="text" name="cliente" class="cliente datos" placeholder='Ingrese el documento'>

            <input class="realizar top" type="submit" value="Registrar">
            </div>
        </form>
    </div>
</body>
</html>