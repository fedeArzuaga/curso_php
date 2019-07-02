<?php

/* Funciones matematicas de PHP */

// Esta funcion nos lanza un numero aleatorio (si le pasaramos 2 parametros numericos diferentes, la funcion lanza un numero aleatorio siempre comprendido entre esos dos valores que hemos pasado como parametro).
$num1 = rand(10, 60);

//Esta funcion sirve para hayar la potencia de un numero
$num2 = pow(5,10);

$num3 = 5.9821845641;

echo "El numero es: " . $num1 . "<br>";
echo "El numero exponenciado es: " . $num2 . "<br>";
echo "El numero redondeado es: " . round($num3, 2) . "<br>";

/* Casting en PHP */

// A diferencia de otros lenguajes, PHP tiene un casting implicito, que significa eso: Que el propio lenguaje (segun las reglas ya vistas con los tipos de datos) determina que tipo de dato tiene una variable. Si le pasamos un numero sin comillas, PHP lo identifica como un integer. Si pasamos un texto entre comillas, PHP lo identifica como un string. Por ejemplo. Aun si, por ejemplo, tenemos una variable llamada $num4 que contiene el valor "5", de esta forma:

$num4 = "5";

// A pesar de que el contenido o el dato de la variable esta entre comillas, PHP identifica el numero, haciendo posible que el mismo se comporte como tal. De esa forma nosotros podemos realizar operaciones con esa variable como por ejemplo:

$num4 += 2; // Le sumo dos

echo $num4 . "<br>";

// Output => 7 (checalo)

#####################################################################

/* Casting Explicito */

$num5 = "15";

// Aquí le decimos a PHP explícitamente que cambie el tipo de dato de string a integer :)
$resultado = (int) $num5;

echo $resultado;

?>