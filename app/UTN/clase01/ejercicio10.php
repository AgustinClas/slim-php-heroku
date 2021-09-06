<?php
    /* Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que
    contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los
    Arrays de Arrays. */

    $lapicera1 = array("color"=>"Azul","marca"=>"Vic","trazo"=>"fino","precio"=>8.5);
    $lapicera2 = array("color"=>"Verde","marca"=>"Pastel","trazo"=>"grueso","precio"=>10,2);
    $lapicera3 = array("color"=>"Rojo","marca"=>"Faber-Casteñ","trazo"=>"fino","precio"=>12,5);

    $lapiceras_arrayAsociativo = array("Lapicera 1" => $lapicera1, "Lapicera 2" => $lapicera2, "Lapicera 3" => $lapicera3);
    $lapiceras_arrayIndexado = array($lapicera1, $lapicera2, $lapicera3);

    var_dump($lapiceras_arrayAsociativo);
    echo "<br/><br/>";
    var_dump($lapiceras_arrayIndexado);

?>