<?php
    /* OConfeccionar un programa que sume todos los números enteros desde 1 mientras la suma no
    supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números
    se sumaron. */

    $count = 0;
    $acum = 0;

    for($i=1 ; $i<500 ; $i++ ){
        if($i+$acum<1000){
            $acum += $i;
            echo($i . "<br>");
            echo($acum);
            $count++;
        }else break;
    }

    echo("Numeros sumados: " . $count);
?>