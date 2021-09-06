<?php

/* Aplicación No 2 (Mostrar fecha y estación)
Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con
distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
año es. Utilizar una estructura selectiva múltiple. */

    echo date("F j, Y, g:i a"). "<br> <br>";
    echo date("m.d.y");
    echo"<br> <br>" . Date("h-i-s, j-m-y, it is w Day") . "<br> <br>";

    $date = getdate();
    $month = $date["mon"];
    $day = $date["mday"];

    switch($month){
        case 1:
        case 2:
            echo "Nos encontramos en verano";
            break;
        case 3:
            if($day<22) echo "Nos encontramos en verano";
            else echo "Nos encontramos en otoño";
            break;
        case 4:
        case 5:
            echo "Nos encontramos en otoño";
            break;
        case 6:
            if($day<22) echo "Nos encontramos en otoño";
            else echo "Nos encontramos en invierno";
            break;
        case 7:
        case 8:
            echo "Nos encontramos en invierno";
            break;
        case 9:
            if($day<22) echo "Nos encontramos en invierno";
            else echo "Nos encontramos en primavera";
        case 10:
        case 11:
            echo "Nos encontramos en primavera";
            break;
        case 12:
            if($day<22) echo "Nos encontramos en primavera";
            else echo "Nos encontramos en verano";
            break;
    }

?>