<?php

function esNumeroPerfecto($numero) {
    $sumDivisores = 0;
    for ($i = 1; $i <= $numero / 2; $i++) {
        if ($numero % $i == 0) {
            $sumDivisores += $i;
        }
    }
    return $sumDivisores == $numero;
}
$rangoMin = intval(readline("Ingrese el rango mínimo de el numero : "));
$rangoMax = intval(readline("Ingrese el rango máximo del numero : "));
$numerosPerfectos = [];
for ($i = $rangoMin; $i <= $rangoMax; $i++) {
    if (esNumeroPerfecto($i)) {
        $numerosPerfectos[] = $i;
    }
}
echo "Números perfectos en el rango {$rangoMin} a {$rangoMax}:\n";
foreach ($numerosPerfectos as $numero) {
    echo $numero . " ";
}

?>