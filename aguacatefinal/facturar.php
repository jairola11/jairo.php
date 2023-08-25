<?php
include('conexion.php');

$con = connection();

$placa = $_GET['id'];
$sql = "SELECT placa, horaIngreso FROM parquear WHERE placa='$placa'";
$query = mysqli_query($con, $sql);
if ($query) {
    $row = mysqli_fetch_array($query);
    $horaSalida = date('Y-m-d H:i:s');
    $horaSalidaPrint = date('Y-m-d H:i:s');
    $updateSql = "UPDATE parquear SET horaSalida='$horaSalida' WHERE placa='$placa'";
    $updateQuery = mysqli_query($con, $updateSql);

    if (!$updateQuery) {

        echo "Error en la actualización: " . mysqli_error($con);
    }
} else {
    echo "Error en la consulta: " . mysqli_error($con);
};
$horaIngreso = strtotime($row['horaIngreso']);
$horaSalida = strtotime($horaSalida);
$diferenciaTiempoSegundos = $horaSalida - $horaIngreso;
$costoPorHora = 2;
$costoTotal = ceil($diferenciaTiempoSegundos / 3600) * $costoPorHora;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SALIDA</title>
    <style>
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0; 
    margin: 0;
    padding: 0; 
}

.factura {
    width: 50%; 
    margin: 0 auto;
    padding: 20px; 
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
}

.atualizar {
    text-align: center;
}

h2 {
    color: blue; 
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 10px;
    text-align: center;
    border: 1px solid #ccc; 
}

th.espace1 {
    width: 30%; 
}
.datos {
    font-weight: bold;
}
.datos.valor {
    color: red; 
}

    </style>
</head>
<body>
    <div class="factura">
        <form action="salir_auto.php">
            <table>
                
                <thead>
                    <tr>
                        <th colspan="2" class="atualizar"><h2>factura de parqueo</h2></th>
                        </tr>
                        <tr>
                            <th class="datos espace1">placa</th>
                            <th class="datos"><?php echo $row['placa']; ?></th>
                        </tr> 
                        <tr>
                            <th class="datos espace1">hora de ingreso</th>
                            <th class="datos"><?php echo $row['horaIngreso']; ?></th>
                        </tr>
                        <tr>
                            <th class="datos espace1">hora de salida</th>
                            <th class="datos"><?php echo $horaSalidaPrint; ?></th>
                        </tr>
                        <tr>
                        <th class="datos espace1">valor a pagar</th>
                        <th class="datos"><?php echo "$" . $costoTotal; ?></th>
                        </tr>
                        <tr>
                        <td colspan="2"><a href="salir_auto.php?placa=<?= $row['placa']  ?>">aceptar</a></td>
                        </tr>
                </thead>
            </table>
        </form>
    </div>
</body>
</html>
