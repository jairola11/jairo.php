
<?php

echo "Introduzca el primer número: ";
$numero1 = fgets(STDIN);

echo "Introduzca el segundo número: ";
$numero2 = fgets(STDIN);

if ($numero1 > 10 && $numero2 > 10) {
    echo "Los dos números tienen un valor numérico superior a 10.";
} elseif ($numero1 > 10 || $numero2 > 10) {
    echo "Al menos uno de los valores tiene un valor numérico superior a 10.";
} else {
    echo "Todos los números tienen un valor numérico  inferior a 10.";
}

?>