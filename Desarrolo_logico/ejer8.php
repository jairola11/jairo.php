<?php

$limite = readline("Ingrese el límite superior para encontrar números perfectos: ");

for ($numero = 2; $numero <= $limite; $numero++) {
    $sumaDivisores = 0;

    for ($i = 1; $i <= $numero / 2; $i++) {
        if ($numero % $i === 0) {
            $sumaDivisores += $i;
        }
    }

    if ($sumaDivisores === $numero) {
        echo "$numero es un número perfecto.";
    }
}

?>
