<?php
<?php

$lista = readline("Ingrese una lista de números separados por comas: ");
$nums = explode(",", $lista);

foreach ($nums as &$num) {
    $num = intval(trim($num));
}

$longitud = count($nums);
for ($i = 0; $i < $longitud - 1; $i++) {
    for ($j = 0; $j < $longitud - $i - 1; $j++) {
        if ($nums[$j] < $nums[$j + 1]) {
            $temp = $nums[$j];
            $nums[$j] = $nums[$j + 1];
            $nums[$j + 1] = $temp;
        }
    }
}
echo "Lista ordenada: " . implode(", ", $nums);

?>
