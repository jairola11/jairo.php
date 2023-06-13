<?php
$nota = readline("Ingrese una nota (0-100): ");
$nota = intval($nota);

$mensaje=match(true){
    $nota>=90 && $nota<=100 => "su  nota es muy Excelente",
    $nota>=80 && $nota<=90 => "su  nota es muy buena  ",
    $nota>=70 && $nota<=80 => "su  nota es buena  ",
    $nota>=60 && $nota<=70 => "su  nota es sufiente   ",
    $nota>=0 && $nota<=60 => "su nota no es suficiente ",
    default => "nota invalidad",
};
echo $mensaje;
?>
