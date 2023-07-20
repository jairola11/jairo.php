<?php

function repartirCartas()
{
    $mazo = [
        "As de Corazones", "2 de Corazones", "3 de Corazones", "4 de Corazones", "5 de Corazones",
        "6 de Corazones", "7 de Corazones", "8 de Corazones", "9 de Corazones", "10 de Corazones",
        "Jota de Corazones", "Reina de Corazones", "Rey de Corazones",
        "As de Diamantes", "2 de Diamantes", "3 de Diamantes", "4 de Diamantes", "5 de Diamantes",
        "6 de Diamantes", "7 de Diamantes", "8 de Diamantes", "9 de Diamantes", "10 de Diamantes",
        "Jota de Diamantes", "Reina de Diamantes", "Rey de Diamantes",
        "As de Picas", "2 de Picas", "3 de Picas", "4 de Picas", "5 de Picas",
        "6 de Picas", "7 de Picas", "8 de Picas", "9 de Picas", "10 de Picas",
        "Jota de Picas", "Reina de Picas", "Rey de Picas",
        "As de Tréboles", "2 de Tréboles", "3 de Tréboles", "4 de Tréboles", "5 de Tréboles",
        "6 de Tréboles", "7 de Tréboles", "8 de Tréboles", "9 de Tréboles", "10 de Tréboles",
        "Jota de Tréboles", "Reina de Tréboles", "Rey de Tréboles"
    ];

    shuffle($mazo);

    return array_slice($mazo, 0, 5);
}

function mostrarCartas($cartas)
{
    foreach ($cartas as $carta) {
        echo $carta . "<br>";
    }
}

function evaluarMano($cartas)
{
    if (esEscaleraReal($cartas)) {
        echo "Resultado de la mano: Escalera Real";
    } elseif (esEscaleraColor($cartas)) {
        echo "Resultado de la mano: Escalera de Color";
    } elseif (esPoker($cartas)) {
        echo "Resultado de la mano: Póker";
    } elseif (esFullHouse($cartas)) {
        echo "Resultado de la mano: Full House";
    } elseif (esColor($cartas)) {
        echo "Resultado de la mano: Color";
    } elseif (esEscalera($cartas)) {
        echo "Resultado de la mano: Escalera";
    } elseif (esTrio($cartas)) {
        echo "Resultado de la mano: Trío";
    } elseif (esDosPares($cartas)) {
        echo "Resultado de la mano: Dos Pares";
    } elseif (esPar($cartas)) {
        echo "Resultado de la mano: Par";
    } else {
        echo "Resultado de la mano: Carta Alta";
    }
}



function esEscaleraReal($cartas)
{
    $escaleraReal = ["As de Corazones", "Rey de Corazones", "Reina de Corazones", "Jota de Corazones", "10 de Corazones"];

    return $cartas === $escaleraReal;
}

function esEscaleraColor($cartas)
{
    $escaleraColor = ["As de Corazones", "Rey de Corazones", "Reina de Corazones", "Jota de Corazones", "10 de Corazones"];

    return in_array($cartas[0], $escaleraColor) && esColor($cartas);
}

function esPoker($cartas)
{
    $valores = obtenerValores($cartas);
    $contadorValores = array_count_values($valores);

    return in_array(4, $contadorValores);
}

function esFullHouse($cartas)
{
    $valores = obtenerValores($cartas);
    $contadorValores = array_count_values($valores);

    return in_array(3, $contadorValores) && in_array(2, $contadorValores);
}

function esColor($cartas)
{
    $palos = obtenerPalos($cartas);

    return count(array_unique($palos)) === 1;
}

function esEscalera($cartas)
{
    $valores = obtenerValores($cartas);
    sort($valores);

    return array_values($valores) === range(min($valores), max($valores));
}

function esTrio($cartas)
{
    $valores = obtenerValores($cartas);
    $contadorValores = array_count_values($valores);

    return in_array(3, $contadorValores);
}

function esDosPares($cartas)
{
    $valores = obtenerValores($cartas);
    $contadorValores = array_count_values($valores);
    $numPares = 0;

    foreach ($contadorValores as $contador) {
        if ($contador === 2) {
            $numPares++;
        }
    }

    return $numPares === 2;
}

function esPar($cartas)
{
    $valores = obtenerValores($cartas);
    $contadorValores = array_count_values($valores);

    return in_array(2, $contadorValores);
}

function obtenerValores($cartas)
{
    $valores = [];

    foreach ($cartas as $carta) {
        $valores[] = explode(" ", $carta)[0];
    }

    return $valores;
}

function obtenerPalos($cartas)
{
    $palos = [];

    foreach ($cartas as $carta) {
        $palos[] = explode(" ", $carta)[2];
    }

    return $palos;
}
$mano = repartirCartas();
mostrarCartas($mano);
evaluarMano($mano);

?>


