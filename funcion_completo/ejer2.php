<?php

$limite = readline("escriba un numero limite ");


function generaFibonacci($limite){
    $num3 = 0;
    $num2 = 1;
    for($num1 = 0;$num1 <= $limite; $num1+0){
        echo $num3 . " ";
        $num3 = $num2+$num1;
        $num2 = $num1;
        $num1 = $num3;
    }
}
generaFibonacci($limite);

?>