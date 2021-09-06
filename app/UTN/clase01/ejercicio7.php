<?php
    /* Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
    Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar que el
    salto de línea en HTML es la etiqueta <br/>). Repetir la impresión de los números utilizando
    las estructuras while y foreach. */

    echo "Estructura for: <br/>";
    $array = [];
    $numeroImpar=1;

    for($i=1 ; $i<11 ; $i++){

        array_push($array, $numeroImpar);
        echo $numeroImpar . "<br/>";
        $numeroImpar += 2;

    }

    echo "<br/> Estructura while: <br/>";
    $contador = 0;

    while($contador<10){
        echo $array[$contador] . "<br/>";
        $contador++;
    }

    echo "<br/> Estructura foreach: <br/>";

    foreach($array as $numero){
        echo $numero . "<br/>";
    }
?>