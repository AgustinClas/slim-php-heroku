<?php

    class Auto{

        public $_color;
        public $_precio;
        public $_marca;
        public $_fecha;

        function __construct($marca, $color)
        {   
            $this->_color = $color;
            $this->_marca = $marca;
        }

        static function nuevoAuto_MarcaColorPrecio($marca, $color, $precio){
            $auto = new Auto($marca, $color);
            $auto->_precio = $precio;

            return $auto;
        }

        static function nuevoAuto_MarcaColorPrecioFecha($marca, $color, $precio, $fecha){
            $auto = new Auto($marca, $color);
            $auto->_precio = $precio;
            $auto->_fecha = $fecha;

            return $auto;
        }

        function AgregarImpuestos($impuesto){
            $this->_precio += $impuesto;
        }

        static function MostrarAuto($auto){
            echo "Color: " . $auto->_color . "<br/>";
            echo "precio: " . $auto->_precio . "<br/>";
            echo "marca: " . $auto->_marca . "<br/>";
            if($auto->_fecha !== null) echo "fecha: " . $auto->_fecha->format("Y-m-d")  . "<br/>";
        }

        function Equals($auto2){
            if($this->_marca === $auto2->_marca) return true;

            return false;
        }

        static function Add($auto1, $auto2){

            if($auto1->_marca === $auto2->_marca && $auto1->_color === $auto2->_color) return $auto1->_precio + $auto2->_precio;

            return 0;
        }
    }


?>