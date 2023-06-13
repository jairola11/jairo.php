<?php
$cadena =readline("escriba caulquier cosa para la cadena ")
$resultado=match(true){
    strlen($cadena)>=10 =>"esta cadena es larga "
    default  =>"es una cadena corta"
};
echo $resultado
?>