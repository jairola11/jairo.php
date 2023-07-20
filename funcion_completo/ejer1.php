<?php
$frase = readline(" escriba una palabra para ver si es palimbrome ");
$resultado = Palindromo($frase);
function  Palindromo( $frase){
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
}
echo $resultado[0] . "\n";
echo "Estado: " . ($resultado[1] ? "Palíndromo" : "No palíndromo");

?>