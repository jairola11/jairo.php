<?php
include('conexion.php');

$con = connection();

if (isset($_POST['placa'])) {
    $cedula = $_POST['autos'];
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
    <title>Buscar Auto</title>
</head>
<body>
    <div>
        <form action="busqueda_auto.php" method='POST'>
            <div class="title"><h1 class="header">Buscar autos</h1></div>
            <div class="buscar_cli">
            <input type="text" name="placa" class="placa datos" placeholder='Ingrese el número de placa'>
            <input type="submit" value="Buscar" >
            </div>
        </form>
    </div>
    <div>
        <table>
            <thead>
                <tr>
                    <th class="espace1">placa</th>
                    <th class="espace1">Marcar</th>
                    <th class="espace1">Color</th>
                    <th class="espace1">Cliente</th>
                    <th class="but"></th>
                    <th class="but"></th>
                    
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)):  ?>
                    <tr>
                        <td><?= $row['placa'] ?></td>
                        <td><?= $row['marca'] ?></td>
                        <td><?= $row['color'] ?></td>
                        <td><?= $row['cliente'] ?></td>
                        <td class="atualizar"><a href="update_auto.php?id=<?= $row['placa'] ?>">Actualizar</a></td>
                        <td class="borrar"><a href="delete_auto.php?id=<?= $row['placa'] ?>">Eliminar</a></td>
                        
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>
</body>
</html>