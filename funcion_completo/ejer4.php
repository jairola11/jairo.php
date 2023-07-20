<?php
function sumaDigitos() {
    echo "Ingrese un número entero: ";
    $numero = (int)readline();
    
    $suma = 0;
    $digitos = []; 
    
    $numero = abs($numero); 
    
    while ($numero != 0) {
        $digito = $numero % 10;
        $suma += $digito; 
        $digitos[] = $digito; 
        $numero = (int)($numero / 10);
    }
   
    $resultado = implode(' + ', $digitos) . ' = ' . $suma;
    
    return $resultado;
}

$resultado = sumaDigitos();
echo "La suma de los dígitos es: " . $resultado;

?>