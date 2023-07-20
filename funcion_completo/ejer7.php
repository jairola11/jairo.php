<?php
$medidas  = floatval(readline("es criba las medidas de su casa "));

function convertidor($medidas){
    $medidastotales = (($medidas * 2)/1);
    echo $medidastotales;
};
convertidor($medidas);


?>