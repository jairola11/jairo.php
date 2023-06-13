<?php

// $n1 = readline("escriba un numero para calcular su promedio")
// $n2 =readline("escriba  el segundo numero para calcular su promedio")
// $n3 = readline("escriba el tercer numero para calcular su promedio")

$listnum = readline("ingreso cuantos numeros va trabajar \n");
$notas =[];
$sum =0;
for ($i=1; $i <=$listnum; $i++) { 
  $notas[$i-1] = floatval(readline( "ingrese la nota $i \n"));
$sum +=$notas[$i-1];
}
$promedio =$sum/$listnum;
echo"el promedio es de ".$promedio;
?>