<?php

$limite = readline("Ingrese un número límite para la secuencia de Fibonacci: ");

$numero1 = 0;
$numero2 = 1;
$secuencia = "$numero1, $numero2";

while ($numero2 < $limite) {
    $numero3 = $numero1 + $numero2;
    $secuencia .= ", $numero3";
    $numero1 = $numero2;
    $numero2 = $numero3;
}

echo "Secuencia de Fibonacci hasta el número $limite: $secuencia";

?>
