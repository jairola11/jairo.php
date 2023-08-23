<style>
    /* Archivo CSS (estilo.css) */

body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0; /* Color de fondo gris claro */
    margin: 0; /* Elimina el margen predeterminado del cuerpo */
    padding: 0; /* Elimina el espacio de relleno predeterminado del cuerpo */
}

table {
    width: 80%; /* Ancho de la tabla al 80% del contenedor */
    margin: 20px auto; /* Centra la tabla horizontalmente */
    border-collapse: collapse; /* Colapsa los bordes de la tabla */
}

th, td {
    padding: 10px; /* Espaciado interno para celdas de encabezado y datos */
    text-align: center; /* Alineación centrada del texto en celdas */
    border: 1px solid #ccc; /* Borde delgado alrededor de las celdas */
}

th {
    background-color: blue; /* Color de fondo para celdas de encabezado */
    color: white; /* Color de texto en celdas de encabezado */
    font-weight: bold; /* Texto en negrita para encabezado */
}

td {
    background-color: #f2f2f2; /* Color de fondo para celdas de datos */
}

/* Estilo para filas impares */
tr:nth-child(odd) {
    background-color: blue; /* Color de fondo gris claro para filas impares */
}
h1{
    text-align:center;
}

</style>
<?php
// Incluye el archivo de conexión
include('conexion.php');

// Conecta a la base de datos
$con = connection();

// Verifica si la conexión es exitosa
if (!$con) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Consulta SQL para seleccionar todos los datos de la tabla "parquear"
$sql = "SELECT * FROM parquear";

// Ejecuta la consulta
$result = mysqli_query($con, $sql);

// Comprueba si hay resultados
if (mysqli_num_rows($result) > 0) {
    echo "<html><body><h1>Facturar salida</h1><table>";
    echo "<tr><th>ID</th><th>Hora de Ingreso</th><th>Hora de Salida</th><th>Puesto</th><th>Placa</th><th>Factura</th></tr>";

    // Itera a través de los resultados y muestra los datos en una tabla HTML
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

// Cierra la conexión a la base de datos
mysqli_close($con);
?>
