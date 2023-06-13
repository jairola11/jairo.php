<?php
$dia = readline("Ingrese un numero para el dia de la semana : ");

$mensaje = match ($dia) {
    '1'=> "lunes",
    '2'=> "martes ",
    '3' => "miercoles",
    '4'=> "jueves",
    '5'=> "viernes ",
    '6'=> "sabado",
    '7'=> "domingo",
    
    default => "dia invalido ",
};

echo $mensaje;
?>
