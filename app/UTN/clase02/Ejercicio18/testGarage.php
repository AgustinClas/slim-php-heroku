<?php

/* Aplicación No 18 (Auto - Garage)
Crear la clase Garage que posea como atributos privados:

_razonSocial (String)
_precioPorHora (Double)
_autos (Autos[], reutilizar la clase Auto del ejercicio anterior)

Realizar un constructor capaz de poder instanciar objetos pasándole como parámetros:

i. La razón social.
ii. La razón social, y el precio por hora.

Realizar un método de instancia llamado “MostrarGarage”, que no recibirá parámetros y
que mostrará todos los atributos del objeto.
Crear el método de instancia “Equals” que permita comparar al objeto de tipo Garaje con un
objeto de tipo Auto. Sólo devolverá TRUE si el auto está en el garaje.
Crear el método de instancia “Add” para que permita sumar un objeto “Auto” al “Garage”
(sólo si el auto no está en el garaje, de lo contrario informarlo).
Ejemplo: $miGarage->Add($autoUno);
Crear el método de instancia “Remove” para que permita quitar un objeto “Auto” del
“Garage” (sólo si el auto está en el garaje, de lo contrario informarlo).
Ejemplo: $miGarage->Remove($autoUno);
En testGarage.php, crear autos y un garage. Probar el buen funcionamiento de todos los
métodos. */

    include_once "auto.php";
    include_once "Garage.php";

    $auto1 = Auto::nuevoAuto_MarcaColorPrecioFecha("Renault", "Amarillo", 200, date("m.d.y"));
    $auto2 = Auto::nuevoAuto_MarcaColorPrecioFecha("Renault", "verde", 100, date("m.d.y"));
    $auto3 = Auto::nuevoAuto_MarcaColorPrecioFecha("Toyota", "Amarillo", 200, date("m.d.y"));



    $garage = Garage::nuevoGarage("25HORAS", 20);

    if($garage->Equals($auto1)) echo "El auto se encuentra en el estacionamiento<br/>";
    else echo "El auto no se encuentra en el estacionamiento<br/>";

    $garage->Add($auto1);

    if($garage->Equals($auto1)) echo "El auto se encuentra en el estacionamiento<br/>";

    $garage->Add($auto1);
    $garage->Add($auto2);

    $garage->MostrarGarage();

    $garage->Remove($auto2);

    $garage->MostrarGarage();

    $garage->Remove($auto3);

?>