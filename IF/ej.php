<?php
   $computadores = readline("Introduce el numero de computadores ");
   $valor_pc = 700;
   if ($computadores <5) {
  $descuento = $computadores*($valor_pc -($valor_pc*0.1));
  echo "el valor a pagar con 10% de descuento es :  $descuento";  
  }elseif($computadores >=5 && $computadores <10){
    $descuento = $computadores*($valor_pc -($valor_pc*0.20));
    echo "el valor a pagar con 20% de descuento es :  $descuento"; 
  } 
  else{
    $descuento = $computadores*($valor_pc -($valor_pc*0.40));
    echo "el valor a pagar con 40% de descuento es :  $descuento"; 
  } 
?>