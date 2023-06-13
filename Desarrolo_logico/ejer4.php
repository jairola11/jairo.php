<?php
function esPalindromo($frase) {
    $frase = str_replace(' ', '', $frase);
    $frase = strtolower($frase);  
    $fraseInvertida = strrev($frase); 

    $resultado = "La frase \"$frase\"";

    if ($frase == $fraseInvertida) {
        $resultado .= " sí es un palíndromo.";
        $estado = true;
    } else {
        $resultado .= " no es un palíndromo.";
        $estado = false;
    }

    return array($resultado, $estado);
}

$frase = readline("Escriba la frase para verificar si es un palíndromo: ");
$resultado = esPalindromo($frase);
echo $resultado[0] . "\n";
echo "Estado: " . ($resultado[1] ? "Palíndromo" : "No palíndromo");


?>