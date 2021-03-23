<?php 
    /*
    Agustin Clas
    Aplicación No 12 (Invertir palabra)
    Realizar el desarrollo de una función que reciba un Array de caracteres y que invierta el orden
    de las letras del Array.
    Ejemplo: Se recibe la palabra “HOLA” y luego queda “ALOH”.
    */

    function invertirCadena($cadena){
        $retorno = array_reverse($cadena, false);
        
        return $retorno;
    }

    $cadena = array('H', 'O', 'L', 'A');

    $cadena = invertirCadena($cadena);
    
    var_dump($cadena);
    
?>