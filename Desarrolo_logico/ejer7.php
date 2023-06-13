<?php

$lista = array("pc", "ram", "monitor", "cpu", "tarjeta grafica "); // Lista de el usuario 

$elemento = readline("Ingrese el elemento a buscar: ");


$encontrado = false;
foreach($lista as $item) {
    if($item == $elemento) {
        $encontrado = true;
        break;
    }
}

if($encontrado) {
    echo "El elemento '$elemento' se encontró en la lista." ;
} else {
    echo "El elemento '$elemento' no se encontró en la lista." ;
}
?>


