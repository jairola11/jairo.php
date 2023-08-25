<?php
include('conexion.php');

$con = connection();

if (isset($_POST['piso'])) {
    $piso = $_POST['piso'];
    $sql = "SELECT * FROM puestos WHERE piso='$piso'";
} else {
    $sql = "SELECT DISTINCT piso FROM puestos"; 
}

$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="busqueda.css">
    <title>puestos</title>
    
</head>
<body>
    <div class="title">
        <h1 class="header">Consultar puestos</h1>
    </div>
    <div>
        <?php
        while ($row = mysqli_fetch_array($query)) {
            $currentPiso = $row['piso'];
            echo "<h2>Piso: $currentPiso</h2>";
            echo "<table>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>puestos</th>";
            echo "<th>estado</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";

            $pisoQuery = mysqli_query($con, "SELECT * FROM puestos WHERE piso='$currentPiso'");
            while ($pisoRow = mysqli_fetch_array($pisoQuery)) {
                echo "<tr>";
                echo "<td>" . $pisoRow['puestos'] . "</td>";
                echo "<td>";
                if ($pisoRow['estado'] == 1) {
                    echo "Ocupado ";
                } else {
                    echo "libre";
                }
                echo "</td>";
                echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";
        }
        ?>
    </div>
</body>
</html>

