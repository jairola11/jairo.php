<?php
include('conexion.php');

$con = connection();

$placa = $_GET['placa']; // Obtener la placa de la URL

// Consulta SQL para obtener el ID del puesto
$asigId = "SELECT * FROM parquear WHERE placa='$placa'";
$puestoIdQuery = "SELECT puesto FROM parquear WHERE placa='$placa'";

$resultadoId = mysqli_query($con, $asigId);
$puestoIdResult = mysqli_query($con, $puestoIdQuery);

if (!$resultadoId || !$puestoIdResult) {
    echo "Error al obtener los datos necesarios: " . mysqli_error($con);
} else {
    $filaId = mysqli_fetch_assoc($resultadoId);
    $filaPuestoId = mysqli_fetch_assoc($puestoIdResult);

    if ($filaId && $filaPuestoId) {
        $puestoId = $filaPuestoId['puesto']; // Aquí obtenemos el puesto correctamente

        // Consulta SQL para eliminar la entrada de la tabla "parquear"
        $sql = "DELETE FROM parquear WHERE placa='$placa'";

        
        // Consulta SQL para actualizar el estado del puesto a 0
        $sql1 = "UPDATE puestos SET estado=0 WHERE id='$puestoId'";


        // Ejecutar la consulta para eliminar
        $query1 = mysqli_query($con, $sql);

        if ($query1) {
            // Ejecutar la consulta para actualizar el estado del puesto
            $query2 = mysqli_query($con, $sql1);

            if ($query2) {
                header('Location: index.php');
            } else {
                echo "Error al actualizar el estado del puesto: " . mysqli_error($con);
            }
        } else {
            echo "Error al eliminar datos en la tabla parquear: " . mysqli_error($con);
        }
    } else {
        echo "No se encontraron los datos necesarios.";
    }
}

// Cerrar la conexión a la base de datos
mysqli_close($con);
?>
