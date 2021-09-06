<?php
    /* Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
    función rand). Mediante una estructura condicional, determinar si el promedio de los números
    son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
    resultado. */

    $array = array(rand(1,100),rand(1,100),rand(1,100),rand(1,100),rand(1,100));
    var_dump($array);

    function suma($acumulador, $item)
    {
        $acumulador += $item;
        return $acumulador;
    }

    $prom = array_reduce($array, "suma") / sizeof($array);

    echo "<br><br>" . $prom;

?>