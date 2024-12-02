
<?php

echo ("<h1> <u> Ejercicio 1 </u> </h1>");

$entero = 1;
$decimal = 1.5;
$palabra = "Hola";
$boolean = true;

echo("$entero <br>");
echo("$decimal <br>");
echo("$palabra <br>");
echo("$boolean  <br>"); 

define("NOMBRE", "Lena Prado");
echo('<h1>' . NOMBRE . '</h1>');

echo ("<h1> <u> Ejercicio 2 </u> </h1>");

$mensaje1 = "Hello, World!";

echo $mensaje1 . ' ' . $mensaje2 . "<br>";
echo (strtoupper($mensaje1) . "<br>");
echo ('El string tiene ' . strlen($mensaje1) . ' caracteres.' . "<br>");
echo (strrev($mensaje1) . "<br>");

$mensaje2 = "Aquest és el curs de PHP.";
echo $mensaje1 . ' ' . $mensaje2 . "<br>";

echo ("<h1> <u> Ejercicio 3 </u> </h1>");

$X = 1;
$Y = 2;
$N = 1.5;
$M = 2.5;

echo ('El valor de X es ' . $X . ' y el valor de Y es ' . $Y . "<br>");
echo ('La suma de ' . $X . ' y ' . $Y . ' es: ' . $X +  $Y . "<br>");
echo ('La resta de ' . $X . ' y ' . $Y . ' es: ' . $X -  $Y . "<br>");
echo ('El producto de ' . $X . ' y ' . $Y . ' es: ' . $X *  $Y . "<br>");
echo ('El módulo de ' . $X . ' y ' . $Y . ' es: ' . $X %  $Y . "<br>");
echo ("<br>");

echo ('El valor de N es ' . $N . ' y el valor de M es ' . $M . "<br>");
echo ('La suma de ' . $N . ' y ' . $M . ' es: ' . $N +  $M . "<br>");
echo ('La resta de ' . $N . ' y ' . $M . ' es: ' . $N -  $M . "<br>");
echo ('El producto de ' . $N . ' y ' . $M . ' es: ' . $N *  $M . "<br>");
echo ('El módulo de ' . $N . ' y ' . $M . ' es: ' . $N %  $M . "<br>");
echo ("<br>");

echo ('El doble de ' . $X . ' es ' . ($X + $X) . "<br>");
echo ('El doble de ' . $Y . ' es ' . ($Y + $Y) . "<br>");
echo ('El doble de ' . $N . ' es ' . ($N + $N) . "<br>");
echo ('El doble de ' . $M . ' es ' . ($M + $M) . "<br>");
echo ('La suma de ' . $X . ', ' . $Y . ', ' . $N . ' y ' . $M . ' es: ' 
. ($X +  $Y + $N + $M) . "<br>");
echo ('El producto de ' . $X . ', ' . $Y . ', ' . $N . ' y ' . $M . ' es: ' 
. ($X *  $Y * $N * $M) . "<br>");

$numero1 = 4;
$numero2 = 12;
$operador = "+";

echo ("<br>");
echo (calculadora($numero1, $numero2, $operador));

function calculadora ($numero1, $numero2, $operador) {

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
    }

    return $respuesta;

}
?>