<?php

function fibonacci($n) {
    $secuencia = [0, 1]; 

    while (end($secuencia) < $n) {
        $longitud = count($secuencia);
        $siguienteNumero = $secuencia[$longitud - 1] + $secuencia[$longitud - 2];
        $secuencia[] = $siguienteNumero;
    }

    return $secuencia;
}

echo "Ingrese el número límite para la secuencia de Fibonacci  ";
$limite = intval(readline());

$resultado = fibonacci($limite);
echo "Secuencia de Fibonacci hasta {$limite}:\n";
foreach ($resultado as $numero) {
    echo $numero . " ";
}
?>