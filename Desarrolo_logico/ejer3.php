<?php
$numero = readline("ingreso un numero para sacar el factorrial");
    $factorial = 1;
    for ($i = 1; $i <= $numero; $i++) {
        $factorial *= $i;
        echo $factorial  ."  ";
    }

?>