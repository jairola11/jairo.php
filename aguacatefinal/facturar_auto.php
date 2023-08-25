<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0; 
    margin: 0; 
    padding: 0; 
}

table {
    width: 80%;
    margin: 20px auto; 
    border-collapse: collapse; 
}

th, td {
    padding: 10px;
    text-align: center; 
    border: 1px solid #ccc; 
}

th {
    background-color: blue;
    color: white;
    font-weight: bold;
}

td {
    background-color: #f2f2f2; 
}

tr:nth-child(odd) {
    background-color: blue;
}
h1{
    text-align:center;
}

</style>
<?php
include('conexion.php');
$con = connection();
if (!$con) {
    die("Error de conexión: " . mysqli_connect_error());
}
$sql = "SELECT * FROM parquear";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    echo "<html><body><h1>Facturar salida</h1><table>";
    echo "<tr><th>ID</th><th>Hora de Ingreso</th><th>Hora de Salida</th><th>Puesto</th><th>Placa</th><th>Factura</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["idParqueo"] . "</td>";
        echo "<td>" . $row["horaIngreso"] . "</td>";
        echo "<td>" . $row["horaSalida"] . "</td>";
        echo "<td>" . $row["puesto"] . "</td>";
        echo "<td>" . $row["placa"] . "</td>";
        echo "<td><a href='facturar.php?id=" . $row['placa'] . "'>Facturar</a></td>";
        echo "</tr>";
    }

    echo "</table></body></html>";
} else {
    echo "No se encontraron datos en la tabla 'parquear'.";
}
mysqli_close($con);
?>
