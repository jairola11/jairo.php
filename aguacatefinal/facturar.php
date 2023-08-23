<?php
include('conexion.php');

$con = connection();

$placa = $_GET['id'];

// Realiza una consulta para obtener los datos del vehículo antes de la actualización
$sql = "SELECT placa, horaIngreso FROM parquear WHERE placa='$placa'";
$query = mysqli_query($con, $sql);

// Verifica si la consulta fue exitosa
if ($query) {
    // Obtiene los datos del vehículo
    $row = mysqli_fetch_array($query);

    // Obtiene la hora de salida
    $horaSalida = date('Y-m-d H:i:s');
    $horaSalidaPrint = date('Y-m-d H:i:s');

    // Actualiza la hora de salida en la base de datos
    $updateSql = "UPDATE parquear SET horaSalida='$horaSalida' WHERE placa='$placa'";
    $updateQuery = mysqli_query($con, $updateSql);

    if (!$updateQuery) {
        // Error en la actualización
        echo "Error en la actualización: " . mysqli_error($con);
    }
} else {
    // Error en la consulta
    echo "Error en la consulta: " . mysqli_error($con);
};

// Calcula la diferencia de tiempo en segundos
$horaIngreso = strtotime($row['horaIngreso']);
$horaSalida = strtotime($horaSalida);
$diferenciaTiempoSegundos = $horaSalida - $horaIngreso;

// Calcula el costo por hora (por ejemplo, $5 por hora)
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
        /* Archivo CSS (estilo.css) */

body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0; /* Color de fondo gris claro */
    margin: 0; /* Elimina el margen predeterminado del cuerpo */
    padding: 0; /* Elimina el espacio de relleno predeterminado del cuerpo */
}

.factura {
    width: 50%; /* Ancho del contenedor de la factura */
    margin: 0 auto; /* Centra el contenedor horizontalmente */
    padding: 20px; /* Espaciado interno para el contenedor */
    background-color: #fff; /* Color de fondo blanco para el contenedor */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra ligera alrededor del contenedor */
}

.atualizar {
    text-align: center; /* Centra el texto del encabezado horizontalmente */
}

h2 {
    color: blue; /* Color de texto verde para el título */
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px; /* Espacio superior entre la tabla y el encabezado */
}

th, td {
    padding: 10px;
    text-align: center;
    border: 1px solid #ccc; /* Borde delgado alrededor de las celdas */
}

th.espace1 {
    width: 30%; /* Ancho para las columnas de etiquetas */
}

/* Estilo para los datos en negrita */
.datos {
    font-weight: bold;
}

/* Estilo para el valor a pagar */
.datos.valor {
    color: red; /* Color rojo para resaltar el valor a pagar */
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
