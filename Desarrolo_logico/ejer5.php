<?php


$numero =  readline("Escriba  un numero para ver si es primo o no: ");

if(esPrimo($numero)){
    echo 'Es primo';
}else{
    echo 'No es primo';
}

function esPrimo($numero)
{
    if(!is_numeric($numero))
         //Comprobamos si es un número valido, ya que sino nos dara un error 500 el cual  en consola nos bota ningun resultado. 
        return false;
    
    for ($i = 2; $i < $numero; $i++) {
        
        if (($numero % $i) == 0) {
            
            return false;
        }
    }
    return true;
}


?>