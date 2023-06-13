<?php
$n= readline("Escriba  los numeros para invertilos : ");
$nstring=(string)$n;
$result=""; 

for($i=strlen($n);$i>=0;$i--)
{
    $result.=$nstring[$i];
}

echo "El valor invertido es: ".(int)$result." <br>";
?>