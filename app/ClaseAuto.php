<?php

/*
Agustin Clas
Aplicación No 17 (Auto)
Realizar una clase llamada “Auto” que posea los siguientes atributos privados:

_color (String)
_precio (Double)
_marca (String).
_fecha (DateTime)

Realizar un constructor capaz de poder instanciar objetos pasándole como parámetros:

i. La marca y el color.
ii. La marca, color y el precio.
iii. La marca, color, precio y fecha.

Realizar un método de instancia llamado “AgregarImpuestos”, que recibirá un doble por
parámetro y que se sumará al precio del objeto.
Realizar un método de clase llamado “MostrarAuto”, que recibirá un objeto de tipo “Auto”
por parámetro y que mostrará todos los atributos de dicho objeto.
Crear el método de instancia “Equals” que permita comparar dos objetos de tipo “Auto”. Sólo
devolverá TRUE si ambos “Autos” son de la misma marca.

Neiner, Maximiliano – Villegas, Octavio PHP- 2016 Página 3

Crear un método de clase, llamado “Add” que permita sumar dos objetos “Auto” (sólo si son
de la misma marca, y del mismo color, de lo contrario informarlo) y que retorne un Double
con la suma de los precios o cero si no se pudo realizar la operación.
Ejemplo: $importeDouble = Auto::Add($autoUno, $autoDos);
En testAuto.php:
● Crear dos objetos “Auto” de la misma marca y distinto color.
● Crear dos objetos “Auto” de la misma marca, mismo color y distinto precio.
● Crear un objeto “Auto” utilizando la sobrecarga restante.
● Utilizar el método “AgregarImpuesto” en los últimos tres objetos, agregando $ 1500
al atributo precio.
● Obtener el importe sumado del primer objeto “Auto” más el segundo y mostrar el
resultado obtenido.
● Comparar el primer “Auto” con el segundo y quinto objeto e informar si son iguales o
no.
● Utilizar el método de clase “MostrarAuto” para mostrar cada los objetos impares (1, 3,
5)
*/

    class Auto{

        public $_color;
        public  $_precio;
        public $_marca;
        public $_fecha;

        function __construct($marca, $color)
        {
            $this->_marca = $marca;
            $this->_color = $color;
        }

        function __construct($marca, $color, $precio)
        {
            $this->marca = $marca;
            $this->color = $color;
            $this->precio = $precio;
        }

        function __construct($marca, $color, $precio, $fecha){
            $this->_marca = $marca;
            $this->_color = $color;
            $this->_precio = $precio;
            $this->_fecha = $fecha;
        }

        function AgregarImpuestos($impuestos){
            $this->_precio = $this->_precio + $impuestos;
        }

        static function MostrarAuto($auto){
            echo "Marca: $auto->_marca\n";
            echo "Color: $auto->_color\n";
            echo "Precio: $auto->_precio\n";
            echo "Fecha: $auto->_fecha\n\n\n";
        }

        function Equals($auto2){

            if($this->_marca == $auto2->_marca){
                return true;
            }
            
            return false;
        }

        static function Add($auto1, $auto2){
            if($auto1->_marca == $auto2->_marca && $auto1->_color == $auto2->_color)
                return $auto1->_precio + $auto2->_precio;
            else 
                echo "\nNo se pudo realizar la operacion\n";

            return 0;
        }
    }
        

        
    

?>