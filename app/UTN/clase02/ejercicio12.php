<?php

/* Aplicación No 12 (Invertir palabra)
Realizar el desarrollo de una función que reciba un Array de caracteres y que invierta el orden
de las letras del Array.
Ejemplo: Se recibe la palabra “HOLA” y luego queda “ALOH”. */

function InvertirArray($array){
    return array_reverse($array);
}

    $array = array("H", "o", "l", "a");

    var_dump(InvertirArray($array));

?>