<?php
/*
 * EJERCICIO:
 * - Crea ejemplos utilizando todos los tipos de operadores de tu lenguaje:
 *   Aritméticos, lógicos, de comparación, asignación, identidad, pertenencia, bits...
 *   (Ten en cuenta que cada lenguaje puede poseer unos diferentes)
 * - Utilizando las operaciones con operadores que tú quieras, crea ejemplos
 *   que representen todos los tipos de estructuras de control que existan
 *   en tu lenguaje:
 *   Condicionales, iterativas, excepciones...
 * - Debes hacer print por consola del resultado de todos los ejemplos.
 *
 * DIFICULTAD EXTRA (opcional):
 * Crea un programa que imprima por consola todos los números comprendidos
 * entre 10 y 55 (incluidos),pares, y que no son ni el 16 ni múltiplos de 3.
 *
 * Seguro que al revisar detenidamente las posibilidades has descubierto algo nuevo.
 */

 //Aritmeticos+,-,*,/
 echo "OPERADORES ARITMETICOS EJERCICIOS";
 echo '<hr>';
 $num1 = 1;
 $num2 = 2;

$suma = $num1 + $num2;// suma
$resta = $num1 - $num2;//resta
$mult = $num1 * $num2;//multiplicacion
$division = $num1 / $num2;//Division

echo "El resultado de la suma es: $suma  <br>";
echo "El resultado de la resta es: $resta  <br>";
echo "El resultado de la multiplicacion es: $mult  <br>";
echo "El resultado de la division es: $division  <br>";
echo '<hr>';

//operadores logicos, tenemos el AND(&&), OR(||), NOT(!).
echo "OPERADORES LOGICOS EJERCICIO <br>";
$a = false;
$b = true;

if($a && $b){
echo " utilizando el and, solo se imprime si ambos son true. <br>";
}elseif($a || $b){
echo "utilizando el or solo se imprime si cualquiera de los dos valores es true. <br>";
}elseif(!$a){
echo "cambia el valor de un positivo a negativo, si a es positivo imprimira negativo <br>";
}else{
    echo "solo saldra si se quitan los operadores";
}
echo '<hr>';
//operadores de comparacion <=, >=, < >, =, ==, ===, ! 
echo "OPERADORES DE COMPARACION <br>";

$x = 30;
 $y = 20;

if($x < $y){
    echo "x es menor que y";
}elseif($x > $y){
    echo "x es mayor que y";
}elseif($x == $y){
    echo "x es igual a y";
}else{
echo "si se imprime esto es porque no se uso ningun operador";
}
//ejemplo 
echo '<br>';
//entrar a la piscina
$edad = 18;
if($edad >= 18){
    echo "puedes entrar a la piscina";
}else{
    echo "no tienes la edad suficiente para entrar";
}

//operadores en php bucle
echo '<hr>';
echo "BUCLE WHILE";
echo '<hr>';

$i = 0;

while($i < 10){
    echo "hola estoy aprendiendo <br>";
$i++;
}
echo '<hr>';
echo "BUCLE FOR <br>";

for($j = 0; $j < 10; $j++){
    echo "Bocchi <br>";
}
// PROGRAMA
echo '<hr>';

echo "PROGRAMA <br>";


for($i= 10; $i<= 55; $i++){
    if($i % 2 == 0 && $i != 16 ){
        echo "$i <br>";
}

}



?>
