<?php
include('conexion.php');

$con = connection();

$idParqueo = null;
$horaIngreso = date('Y-m-d H:i:s'); 
$horaSalida = null;
$puesto = $_POST['puesto'];
$piso = $_POST['piso'];
$placa = $_POST['placa'];

$asigId = "SELECT id FROM puestos WHERE puestos='$puesto' AND piso='$piso'";
$resultadoId = mysqli_query($con, $asigId);

if (!$resultadoId) {
    echo "Error al obtener el ID del puesto: " . mysqli_error($con);
} else {
    $filaId = mysqli_fetch_assoc($resultadoId);
    
    if ($filaId) {
        $puestoP = $filaId['id'];
        $sql = "INSERT INTO parquear (idParqueo, horaIngreso, horaSalida, puesto, placa) VALUES ('$idParqueo', '$horaIngreso', '$horaSalida', '$puestoP', '$placa')";
        $sql1 = "UPDATE puestos SET estado=1 WHERE piso='$piso' AND puestos='$puesto'";
        $query = mysqli_query($con, $sql,);
        $query = mysqli_query($con, $sql1,);

        if ($query) {
            header('Location: index.php');
        } else {
            echo "Error al insertar datos en la tabla parquear: " . mysqli_error($con);
        }
    } else {
        echo "No se encontró el puesto con los valores proporcionados.";
    }
}
mysqli_close($con);
?>
