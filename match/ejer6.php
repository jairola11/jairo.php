<?php
$dia = readline("Ingrese un numero para identificar el mes : ");

$mensaje = match ($dia) {
    '1'=> "enero",
    '2'=> "febrero ",
    '3' => "marzo",
    '4'=> "abril",
    '5'=> "Mayo ",
    '6'=> "junio",
    '7'=> "	julio",
     '8'=>"agosto",
     '9'=>"septiembre",
     '10'=>"octubre",
     '11'=>"noviembre",
     '12'=>"diciembre",
    default => "mes invalido  ",
};

echo $mensaje;
?>
