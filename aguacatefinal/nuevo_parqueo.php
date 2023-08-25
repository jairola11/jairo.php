<?php
include('conexion.php');

$con = connection();

$placa = $_POST['car_id'];

$sql = "SELECT * FROM autos WHERE placa='$placa'";

$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);



$pisoDis = null;
$puestoDis = null;

for ($piso = 1; $piso <= 4; $piso++) {
    $encontrado = false;

    for ($puesto = 1; $puesto <= 10; $puesto++) {
       
        $consulta_check = "SELECT * FROM puestos WHERE piso='$piso' AND puestos='$puesto'";
        $resultado_check = mysqli_query($con, $consulta_check);

        if ($resultado_check) {
            $fila = mysqli_fetch_assoc($resultado_check);
            if ($fila['estado'] == 0) {
               
                $encontrado = true; 

                break; 
            }
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }
    if ($encontrado) {
        break;
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="busqueda.css">
    <title>parquear</title>
</head>
<body>
    <div>
        <form action="aisgnar_puesto.php" method='POST'>
            <h1>Confirmar datos</h1>
            <input type="text" name="placa" value='<?= $row['placa'] ?>'>
            <input type="text" name="color" value='<?= $row['color'] ?>'>
            <input type="text" name="marca" value='<?= $row['marca'] ?>'>
            <input type="text" name="puesto" value="<?php echo $puesto; ?>">
            <input type="text" name="piso" value="<?php echo $piso; ?>">
            <input type="submit" value='enviar'>
        </form>
    </div>
</body>
</html>











