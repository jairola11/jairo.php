<?php

$letra = readline("Ingrese una letra: ");

$categoria = match (strtolower($letra)) {
    'a', 'e', 'i', 'o', 'u' => "Es una vocal",
    'b', 'c', 'd', 'f', 'g' => "Es una consonante",
    default => "Es un carácter especial o no reconocido",
};

echo $categoria;
?>