
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
?>