<?php
    /* Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que
    contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres
    lapiceras. */

    $lapicera = array("color"=>"Azul","marca"=>"Vic","trazo"=>"fino","precio"=>8.5);

    var_dump($lapicera);

    $lapicera["color"] = "Rojo";
    $lapicera["marca"] = "Pastel";
    $lapicera["trazo"] = "grueso";
    $lapicera["precio"] = 10.2;

    echo "<br/><br/>";

    var_dump($lapicera);

    $lapicera["color"] = "Verde";
    $lapicera["marca"] = "Faber-Castel";
    $lapicera["trazo"] = "fino";
    $lapicera["precio"] = 16.8;

    echo "<br/><br/>";
    var_dump($lapicera);



?>