<?php
$fecha = readline("Ingrese una fecha (día-mes-año): ");

// Extraemos el mes de la fecha ingresada para haci solo dar el mes 
$partesFecha = explode("-", $fecha);
$mes = ($partesFecha[1]);

$mensaje = match ($mes) {
    '1'=> "El mes es enero",
    '2' => "El mes es febrero",
    '3' => "El mes es marzo",
    '4' => "El mes es abril",
    '5' => "El mes es mayo",
    '6' => "El mes es junio",
    '7' => "El mes es julio",
    '8' => "El mes es agosto",
    '9' => "El mes es septiembre",
    '10' => "El mes es octubre",
    '11' => "El mes es noviembre",
    '12' => "El mes es diciembre",
    default => "Mes inválido",
};

echo $mensaje;
?>
