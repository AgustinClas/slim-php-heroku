<?php
/*
Agustin Clas
Aplicación No 14 (Par e impar)
Crear una función llamada esPar que reciba un valor entero como parámetro y devuelva TRUE
si este número es par ó FALSE si es impar.
Reutilizando el código anterior, crear la función esImpar.
*/

    function esPar($numero){
        if($numero % 2 == 0)
            return true;
        else
            return false;
    }

    function esImpar($numero){
        return !esPar($numero);
    }
    
    $aux1 = rand(1, 100);

    if(esPar($aux1))
        echo "El numero $aux1 es par";
    else
        echo "El numero $aux1 es impar";

    echo "<br>";
    
    $aux2 = rand(1, 100);


    if(esImpar($aux2))
        echo "El numero $aux2 es impar";
    else
        echo "El numero $aux2 es par";

?>