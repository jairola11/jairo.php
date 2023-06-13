<?php


$number = readline("Ingrese un número entero: ");

$mensaje = match ($number) {
    '1' => "El número es 1",
    '2' => "El número es 2",
    '3' => "El número es 3",
    default => "El número no es 1, 2 ni 3",
};

echo $mensaje;
?>
