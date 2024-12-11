<?php
declare(strict_types = 1);

echo 'Ejercicio 1' .PHP_EOL .PHP_EOL;

$entero = 1;
$decimal = 1.5;
$palabra = "Hola";
$boolean = true;

echo $entero .PHP_EOL;
echo $decimal .PHP_EOL;
echo $palabra .PHP_EOL;
echo $boolean  .PHP_EOL;

define("NOMBRE", "Lena Prado");
echo NOMBRE .PHP_EOL .PHP_EOL;

echo 'Ejercicio 2' .PHP_EOL .PHP_EOL;

$mensaje1 = 'Hello, World!';

echo $mensaje1 .PHP_EOL;
echo strtoupper($mensaje1) .PHP_EOL;
echo 'El string tiene ' . strlen($mensaje1) . ' caracteres.' .PHP_EOL;
echo strrev($mensaje1) .PHP_EOL;

$mensaje2 = 'Aquest és el curs de PHP.';
echo $mensaje1 . $mensaje2 .PHP_EOL .PHP_EOL;

echo 'Ejercicio 3' .PHP_EOL .PHP_EOL;

$X = 1;
$Y = 2;
$N = 1.5;
$M = 2.7;

echo "El valor de X es $X y el valor de Y es $Y" .PHP_EOL;
$suma = $X + $Y;
echo "$X + $Y = $suma" .PHP_EOL;
$resta = $X - $Y;
echo "$X - $Y = $resta" .PHP_EOL;
$producto = $X * $Y;
echo "$X * $Y = $producto" .PHP_EOL;
$modulo = $X % $Y;
echo "$X % $Y = $modulo" .PHP_EOL .PHP_EOL;

echo "El valor de N es $N y el valor de M es $M" .PHP_EOL;
$suma = $N +  $M;
echo "$N + $M = $suma" .PHP_EOL;
$resta = $N -  $M;
echo "$N - $M = $resta" .PHP_EOL;
$producto = $N *  $M;
echo "$N * $M = $producto" .PHP_EOL;
$modulo = fmod($N, $M); 
echo "$N % $M =  $modulo" .PHP_EOL .PHP_EOL;

echo "El doble de $X es " . ($X * 2) .PHP_EOL;
echo "El doble de $Y es " . ($Y * 2) .PHP_EOL;
echo "El doble de $N es " . ($N * 2) .PHP_EOL;
echo "El doble de $M es " . ($M * 2) .PHP_EOL;
echo "La suma de $X , $Y , $N y $M es: " . ($X +  $Y + $N + $M) .PHP_EOL;
echo "El producto de $X, $Y, $N y $M es: " . ($X *  $Y * $N * $M) .PHP_EOL .PHP_EOL;

$numero1 = 2;
$numero2 = 12;
$operador = "+";

echo calcular($numero1, $numero2, $operador) .PHP_EOL;


function calcular(float $numero1, float $numero2, string $operador) : string {

    switch ($operador) {
        case "+" :
            $respuesta = "$numero1 $operador $numero2 = " . ($numero1 + $numero2) .PHP_EOL;
            break;
        case "-" :
            $respuesta = "$numero1 $operador $numero2 = " . ($numero1 - $numero2) .PHP_EOL;
            break;
        case "*" :
            $respuesta = "$numero1 $operador $numero2 = " . ($numero1 * $numero2) .PHP_EOL;
            break;
        case "/" :
            $respuesta = "$numero1 $operador $numero2 = " . ($numero1 / $numero2) .PHP_EOL;
            break;
        default:
            $respuesta = 'Error: operador no válido' .PHP_EOL;
            break;
    }

    return $respuesta;
}

echo 'Ejercicio 4' .PHP_EOL .PHP_EOL;

$numero = 20;
$incremento = 2;

echo "La cuenta con los parámetros declarados es: " .PHP_EOL . contar($numero, $incremento) .PHP_EOL;
echo "La cuenta con los parámetros por defecto es: " .PHP_EOL . contar() .PHP_EOL;

function contar(int $numero = 10, int $incremento = 1) : string {
    $respuesta = "";

    if ($incremento <= 0) {
        $respuesta = "El incremento debe ser mayor que 0." .PHP_EOL;
    } else {
        for ($i = 1; $i <= $numero; $i += $incremento) {
            $respuesta .= (string)$i .PHP_EOL;
        }   
        if (($i - $incremento) < $numero) {
            $respuesta .= (string)$numero .PHP_EOL;
        }
    }

    return $respuesta;
}

echo 'Ejercicio 5' .PHP_EOL .PHP_EOL;

$nota = 47;

echo calcularGrado($nota);

function calcularGrado(int $nota) : string {
    $respuesta = "";

    if ($nota >= 60) {
        $respuesta = "El alumno está en Primera División." .PHP_EOL;
    } elseif ( $nota >= 45) {
        $respuesta = "El alumno está en Segunda División." .PHP_EOL;
    } elseif ( $nota >= 33) {
        $respuesta = "El alumno está en Tercera División." .PHP_EOL;
    } else {
        $respuesta = "El alumno ha suspendido." .PHP_EOL;
    }

    return $respuesta;
}
echo '' .PHP_EOL;
echo 'Ejercicio 6' .PHP_EOL .PHP_EOL;
    $mordido = 0;
    $noMordido = 0;

for ($i = 0; $i <100; $i++) {
    if (isBitten() == 'True') {
    $mordido++;
    } else {
    $noMordido++;
    }
}

echo "Charlie me ha mordido el dedo " . $mordido . " veces." .PHP_EOL;
echo "Charlie no me ha mordido el dedo " . $noMordido . " veces." .PHP_EOL;

function isBitten() : string {
    $random = rand(0,1);
    return (rand(0,1) === 1) ? 'True' : 'False';    

    return $random === 1;
    return $respuesta;
}

?>