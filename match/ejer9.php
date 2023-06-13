<?php
$hora = readline("Ingrese una hora en formato HH:MM: ");


$partirenHora = explode(":", $hora);
$hora = intval($partirenHora[0]);

$mensaje = match ($hora) {
    0, 1, 2, 3, 4, 5 => "Es de madrugada",
    6, 7, 8, 9, 10, 11 => "Es por la mañana",
    12, 13, 14, 15, 16, 17 => "Es por la tarde",
    18, 19, 20, 21, 22, 23 => "Es por la noche",
    default => "Hora inválida",
};

echo $mensaje;
?>
