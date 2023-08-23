<?php
include('conexion.php');

$con = connection();

$placa = $_POST['car_id'];

$sql = "SELECT * FROM autos WHERE placa='$placa'";

$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);



// Inicializa las variables
$pisoDis = null;
$puestoDis = null;

// Recorre los 4 pisos
for ($piso = 1; $piso <= 4; $piso++) {
    // Verificar si ya se encontró un puesto disponible en este piso
    $encontrado = false;

    // Recorre los 10 puestos en cada piso
    for ($puesto = 1; $puesto <= 10; $puesto++) {
        // Verifica si el lugar en este puesto ya está ocupado
        $consulta_check = "SELECT * FROM puestos WHERE piso='$piso' AND puestos='$puesto'";
        $resultado_check = mysqli_query($con, $consulta_check);

        if ($resultado_check) {
            $fila = mysqli_fetch_assoc($resultado_check);
            if ($fila['estado'] == 0) {
                // El lugar en este puesto está disponible
                $encontrado = true; // Marcar que se encontró un lugar disponible

                break; // Salir del bucle interno
            }
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }

    // Si se encontró un lugar disponible, salir del bucle externo
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
    <!-- <style>
        /* Archivo CSS (estilo.css) */

body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0; /* Color de fondo gris claro */
}

div {
    background-color: #fff; /* Color de fondo blanco para el contenedor */
    width: 50%; /* Ancho del contenedor */
    margin: 0 auto; /* Centra el contenedor horizontalmente */
    padding: 20px; /* Espaciado interno para el contenedor */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra ligera alrededor del contenedor */
}

h1 {
    color: green; /* Color de texto verde */
    text-align: center; /* Centra el texto horizontalmente */
    margin-bottom: 20px; /* Espacio inferior para el título */
}

form {
    text-align: center; /* Centra el contenido del formulario horizontalmente */
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc; /* Borde gris claro */
    border-radius: 5px; /* Esquinas redondeadas */
}

input[type="submit"] {
    background-color: green; /* Color de fondo verde para el botón */
    color: white; /* Color de texto blanco para el botón */
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer; /* Cambia el cursor al pasar por encima del botón */
}

input[type="submit"]:hover {
    background-color: #008000; /* Cambia el color de fondo al pasar el cursor */
}

    </style> -->
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











