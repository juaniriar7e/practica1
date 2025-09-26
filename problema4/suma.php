<?php

$numeros = [1, 5, 13, 50];

$posicion = 0;
$suma = 0;

while ($posicion < count($numeros)&&$suma <10){
    $suma += $numeros[$posicion];
    $posicion++;
}

echo "La suma a la que he llegado es {$suma}";

?>