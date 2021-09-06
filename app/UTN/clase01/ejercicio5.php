<?php
/******************************************************************************

Agustin Clas
Aplicación No 5 (Números en letras)
Realizar un programa que en base al valor numérico de una variable $num, pueda mostrarse
por pantalla, el nombre del número que tenga dentro escrito con palabras, para los números
entre el 20 y el 60.
Por ejemplo, si $num = 43 debe mostrarse por pantalla “cuarenta y tres”.

*******************************************************************************/
    
    $num = random_int(20, 60);
    echo($num . "   ====>   ");

    $numeroEscrito = "";
    $decena = 0;
    
    if($num > 19 && $num < 30){
        if($num == 20)
            $numeroEscrito = "veinte";
        else
        $numeroEscrito = "veinti";
        
        $decena = 20;
    }elseif ($num > 29 && $num < 40) {
        if($num == 30)
            $numeroEscrito = "treinta";
        else
        $numeroEscrito = "treinta y ";
        
        $decena = 30;
    }elseif ($num > 39 && $num < 50) {
        if($num == 40)
            $numeroEscrito = "cuarenta";
        else
        $numeroEscrito = "cuarenta y ";
        
        $decena = 40;
    }elseif ($num > 49 && $num < 60) {
        if($num == 50)
            $numeroEscrito = "cincuenta";
        else
        $numeroEscrito = "cincuenta y ";
        
        $decena = 50;
    }else if($num == 60){
        $numeroEscrito = "sesenta";
        
        $decena = 60;
    }
    
    $num = $num - $decena;
    
    
    switch ($num) {
        case '1':
            $numeroEscrito = "$numeroEscrito"."uno";
            break;
        case '2':
            $numeroEscrito = "$numeroEscrito"."dos";
            break;
        case '3':
            $numeroEscrito = "$numeroEscrito"."tres";
            break;
        case '4':
            $numeroEscrito = "$numeroEscrito"."cuatro";
            break;
        case '5':
            $numeroEscrito = "$numeroEscrito"."cinco";
            break;
        case '6':
            $numeroEscrito = "$numeroEscrito"."seis";
            break;
        case '7':
            $numeroEscrito = "$numeroEscrito"."siete";
            break;
        case '8':
            $numeroEscrito = "$numeroEscrito"."ocho";
            break;
        case '9':
            $numeroEscrito = "$numeroEscrito"."nueve";
            break;
    }
    
    echo $numeroEscrito;
    

?>
