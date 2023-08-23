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
    <link rel="stylesheet" href="busqueda.css">
    <title>Buscar auto</title>
</head>
<body>
    <div class="section">
        <h1 class="header">Informacion relacionada</h1>
        <table>
            <thead>
                <tr>
                    <th class="espace1">placa</th>
                    <th class="espace1">Marcar</th>
                    <th class="espace1">Color</th>
                    <th class="espace1">Cliente</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)):  ?>
                    <tr>
                        <td><?= $row['placa'] ?></td>
                        <td><?= $row['marca'] ?></td>
                        <td><?= $row['color'] ?></td>
                        <td><?= $row['cliente'] ?></td>
                        <td class=""><a href="facturar.php?id=<?= $row['placa'] ?>">Facturar</a></td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>
</body>
</html>
