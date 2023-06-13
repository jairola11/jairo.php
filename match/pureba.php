<?php
$nota = readline("Ingrese una nota (0-100): ");
$nota = intval($nota);

$mensaje = match (true) {
    ($nota >= 90 && $nota <= 100) => "Excelente",
    ($nota >= 80 && $nota < 90) => "Muy bien",
    ($nota >= 70 && $nota < 80) => "Bien",
    ($nota >= 60 && $nota < 70) => "Suficiente",
    ($nota >= 0 && $nota < 60) => "Insuficiente",
    default => "Nota inválida",
};

echo $mensaje;
?>