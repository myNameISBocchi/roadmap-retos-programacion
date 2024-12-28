<?php
/*
* ¿Preparad@ para aprender o repasar el lenguaje de programación que tú quieras?
 * - Recuerda que todas las instrucciones de participación están en el
 *   repositorio de GitHub.
 *
 * Lo primero... ¿Ya has elegido un lenguaje?
 * - No todos son iguales, pero sus fundamentos suelen ser comunes.
 * - Este primer reto te servirá para familiarizarte con la forma de participar
 *   enviando tus propias soluciones.
 *
 * EJERCICIO:
 * - Crea un comentario en el código y coloca la URL del sitio web oficial del
 *   lenguaje de programación que has seleccionado.
 * - Representa las diferentes sintaxis que existen de crear comentarios
 *   en el lenguaje (en una línea, varias...).
 * - Crea una variable (y una constante si el lenguaje lo soporta).
 * - Crea variables representando todos los tipos de datos primitivos
 *   del lenguaje (cadenas de texto, enteros, booleanos...).
 * - Imprime por terminal el texto: "¡Hola, [y el nombre de tu lenguaje]!"
 *
 * ¿Fácil? No te preocupes, recuerda que esta es una ruta de estudio y
 * debemos comenzar por el principio.
*/

// pagina oficial del leguanje php  https://www.php.net/manual/es/index.php

// => para comentar una sola linea

/*
=> y esta otra para comentar multiples lineas
sin que genere ningun error.
*/

$variable = "soy una variable";
const constante = "soy una constante";
echo $variable . '<br>';
echo constante . '<br>';

// para crear variable en php se les tiene que colocar el signo de dolar y luego el nombre de la variable
$entero = 10 . '<br>';
$string = "hello people" . '<br>';
$boolean = true . '<br>'; 
$float = 2.5 . '<br>';
echo '<hr>';

echo "TIPOS DE DATOS <br> <hr>";
echo $entero;
echo $string;
echo $boolean;
echo $float;

echo '<br>';


echo "hola, Php";




?>
