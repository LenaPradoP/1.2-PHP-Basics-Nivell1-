<?php
declare(strict_types = 1);

echo "<h1> <u> Ejercicio 1 </u> </h1>";

$entero = 1;
$decimal = 1.5;
$palabra = "Hola";
$boolean = true;

echo "$entero <br>";
echo "$decimal <br>";
echo "$palabra <br>";
echo "$boolean  <br>"; 

define("NOMBRE", "Lena Prado");
echo'<h1>' . NOMBRE . '</h1>';

echo "<h1> <u> Ejercicio 2 </u> </h1>";

$mensaje1 = "Hello, World!";

echo $mensaje1 . "<br>";
echo strtoupper($mensaje1) . "<br>";
echo 'El string tiene ' . strlen($mensaje1) . ' caracteres.' . "<br>";
echo strrev($mensaje1) . "<br>";

$mensaje2 = "Aquest és el curs de PHP.";
echo $mensaje1 . ' ' . $mensaje2 . "<br>";

echo "<h1> <u> Ejercicio 3 </u> </h1>";

$X = 1;
$Y = 2;
$N = 1.5;
$M = 2.7;

echo 'El valor de X es ' . $X . ' y el valor de Y es ' . $Y . "<br>";
$suma = $X + $Y;
echo $X . ' + ' . $Y . ' = ' . $suma . "<br>";
$resta = $X - $Y;
echo $X . ' - ' . $Y . ' = ' . $resta . "<br>";
$producto = $X * $Y;
echo $X . ' * ' . $Y . ' = ' . $producto . "<br>";
$modulo = $X % $Y;
echo $X . ' % ' . $Y . ' = ' . $modulo . "<br>";
echo "<br>";

echo 'El valor de N es ' . $N . ' y el valor de M es ' . $M . "<br>";
$suma = $N +  $M;
echo $N . ' + ' . $M . ' = ' . $suma . "<br>";
$resta = $N -  $M ;
echo $N . ' - ' . $M . ' = ' . $resta . "<br>";
$producto = $N *  $M ;
echo $N . ' * ' . $M . ' = ' . $producto . "<br>";
$modulo = fmod($N, $M); 
echo $N . ' % ' . $M . ' = ' .  $modulo . "<br>";
echo "<br>";

echo 'El doble de ' . $X . ' es ' . ($X * 2) . "<br>";
echo 'El doble de ' . $Y . ' es ' . ($Y * 2) . "<br>";
echo 'El doble de ' . $N . ' es ' . ($N * 2) . "<br>";
echo 'El doble de ' . $M . ' es ' . ($M * 2) . "<br>";
echo 'La suma de ' . $X . ', ' . $Y . ', ' . $N . ' y ' . $M . ' es: ' 
. ($X +  $Y + $N + $M) . "<br>";
echo 'El producto de ' . $X . ', ' . $Y . ', ' . $N . ' y ' . $M . ' es: ' 
. ($X *  $Y * $N * $M) . "<br>";

$numero1 = 2;
$numero2 = 12;
$operador = "+";

echo "<br>";
echo calculadora($numero1, $numero2, $operador);

function calculadora(float $numero1, float $numero2, string $operador) : string {

    switch ($operador) {
        case "+" :
            $respuesta = "$numero1 $operador $numero2 = " . ($numero1 + $numero2);
            break;
        case "-" :
            $respuesta = "$numero1 $operador $numero2 = " . ($numero1 - $numero2);
            break;
        case "*" :
            $respuesta = "$numero1 $operador $numero2 = " . ($numero1 * $numero2);
            break;
        case "/" :
            $respuesta = "$numero1 $operador $numero2 = " . ($numero1 / $numero2);
            break;
        default:
            $respuesta = 'Error: operador no válido';
            break;
    }

    return $respuesta;
}

echo "<h1> <u> Ejercicio 4 </u> </h1>";

$numero = 20;
$incremento = 2;

echo 'La cuenta con los parámetros declarados es:' . "<br>" . cuenta($numero, $incremento) . "<br>";
echo 'La cuenta con los parámetros por defecto es:' . "<br>". cuenta();

function cuenta(int $numero = 10, int $incremento = 1) : string {
    $respuesta = "";

    if ($incremento <= 0) {
        $respuesta = "El incremento debe ser mayor que 0.";
    } else {
        for ($i = 1; $i <= $numero; $i += $incremento) {
            $respuesta .= (string)$i . "<br>";
        }   
        if (($i - $incremento) < $numero) {
            $respuesta .= (string)$numero . "<br>";
        }
    }

    return $respuesta;
}

echo "<h1> <u> Ejercicio 5 </u> </h1>";

$nota = 47;

echo gradoNota($nota);

function gradoNota(int $nota) : string {
    $respuesta = "";

    if ($nota >= 60) {
        $respuesta = "El alumno está en Primera División.";
    } elseif ( $nota >= 45 && $nota <= 59) {
        $respuesta = "El alumno está en Segunda División.";
    } elseif ( $nota >= 33 && $nota <= 44) {
        $respuesta = "El alumno está en Tercera División.";
    } else {
        $respuesta = "El alumno ha suspendido.";
    }

    return $respuesta;
}

echo "<h1> <u> Ejercicio 6 </u> </h1>";
    
    $mordido = 0;
    $noMordido = 0;

for ($i = 0; $i <100; $i++) {
    if (isBitten()) {
        $mordido++;
    } else {
        $noMordido++;
    }
}

echo "Charlie me ha mordido el dedo " . $mordido . " veces <br>";
echo "Charlie no me ha mordido el dedo " . $noMordido . " veces <br>";

 function isBitten() : bool {
    $random = rand(0,1);

    return $random === 1;
 }

?>