<?php
include('conexion.php');
$con = connection();
$placa = $_GET['placa']; 
$asigId = "SELECT * FROM parquear WHERE placa='$placa'";
$puestoIdQuery = "SELECT puesto FROM parquear WHERE placa='$placa'";
$resultadoId = mysqli_query($con, $asigId);
$puestoIdResult = mysqli_query($con, $puestoIdQuery)
if (!$resultadoId || !$puestoIdResult) {
    echo "Error al obtener los datos necesarios: " . mysqli_error($con);
} else {
    $filaId = mysqli_fetch_assoc($resultadoId);
    $filaPuestoId = mysqli_fetch_assoc($puestoIdResult);

    if ($filaId && $filaPuestoId) {
        $puestoId = $filaPuestoId['puesto']; 
        $sql = "DELETE FROM parquear WHERE placa='$placa'";
        $sql1 = "UPDATE puestos SET estado=0 WHERE id='$puestoId'";
        $query1 = mysqli_query($con, $sql);
        if ($query1) {            $query2 = mysqli_query($con, $sql1);

            if ($query2) {
                header('Location: index.php');
            } else {
                echo "Error a intentar actualizar el estado del puesto: " . mysqli_error($con);
            }
        } else {
            echo "Error a intertar  eliminar datos de  parquear: " . mysqli_error($con);
        }
    } else {
        echo "No se puederon encontar los datos deciados .";
    }
}mysqli_close($con);
?>
