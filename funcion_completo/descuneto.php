<?php
function calcular( float $num1, float $num2):float{
    $produ = $num1 /100;  
    $resultado = $num2 * $produ;
    return $resultado;
}
$num1 = readline("escriva el precio ");
$num2 = readline("escriba el descunto  ");
echo calcular($num1,$num2);

?>