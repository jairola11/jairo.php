<?php

function bubbleSort($lista) {
    $n = count($lista);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($lista[$j] > $lista[$j + 1]) {
                $temp = $lista[$j];
                $lista[$j] = $lista[$j + 1];
                $lista[$j + 1] = $temp;
            }
        }
    }
    return $lista;
}
echo "Ingrese una lista de números pero separalos  por comas: ";
$entrada = readline();
$lista = explode(',', $entrada);
$lista = array_map('intval', $lista);
$listaOrdenada = bubbleSort($lista);
echo "Lista ordenada es la siguente : ";
foreach ($listaOrdenada as $numero) {
    echo $numero . " ";
}
?>