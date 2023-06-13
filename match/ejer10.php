<?php
$opcion = readline("Ingrese una opción del 1 al 5: ");

$resultado = match ($opcion) {
    '1' => "escucha musica de corridos ",
    '2' => "ve a dormir ",
    '3' => "ponte a jugar ",
    '4' => "ponte a estudiar",
    '5' => "saca a pasear a los perros ",
    default => "Opción inválida",
};

echo $resultado;
?>
