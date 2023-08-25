<?php
include('conexion.php');
$con = connection();
$id = $_GET['id'];
$sql = "SELECT * FROM clientes WHERE cedula='$id'";
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
        <form action="edit_user.php" method="POST">
            <div class="title"><h1 class="header">Editar user</h1></div>
            <div class="buscar_cli">
            <h2>Cambiar nombre</h2>
            <input type="hidden" name="cedula" value='<?= $row['cedula'] ?>'>
            <input type="text" class="datos" name="nombre" value='<?= $row['nombre'] ?>'>
            <input type="submit" value="actualizar">
            </div>
        </form>
    </div>
</body>
</html>