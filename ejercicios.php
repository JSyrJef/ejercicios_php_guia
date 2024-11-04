<?php
//Fibonacci
//función para genera los primeros n términos de la serie Fibonacci
function generarFibonacci($n) {
    $fibonacci = [0, 1]; // primeros dos términos
    for ($i = 2; $i < $n; $i++) {
        // Cada término es la suma de los dos términos anteriores
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    return array_slice($fibonacci, 0, $n); // Retorna solo los primeros n términos
}
print_r(generarFibonacci(10));


//función para determina si un número es primo
function esPrimo($num) {
    if ($num <= 1) return false; // Los números menores o iguales a 1 no son primos
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false; // Si es divisible por cualquier número menor que él, no es primo
    }
    return true;
}
echo esPrimo(11) ? "Es primo" : "No es primo";


//función para verifica si una cadena es un palíndromo
function esPalindromo($cadena) {
    $cadena = strtolower(preg_replace("/[^a-zA-Z0-9]/", "", $cadena)); // Convierte a minúsculas y elimina espacios y caracteres especiales
    $reversa = strrev($cadena); // Obtiene la cadena en orden inverso
    return $cadena == $reversa;
}
echo esPalindromo("Anita lava la tina") ? "Es palíndromo" : "No es palíndromo";
?>