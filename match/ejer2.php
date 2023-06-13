<?php
$color = readline("Escriba un color: ");

$resultado = match (strtolower($color)) {
    'rojo' => "Este color es cálido",
    'amarillo' => "Este color es brillante",
    'azul' => " Este color es agua",
    default => "Muestre un mensaje diferente"
};

echo $resultado;
?>
