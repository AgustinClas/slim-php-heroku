<?php
    include_once "auto.php";

    class Garage{

        private $_razonSocial;
        private $_precioPorHora;
        private $_autos;

        function __construct($razonSocial)
        {   
            $this->_razonSocial = $razonSocial;
            $this->_autos = [];
        }

        static function nuevoGarage($razonSocial, $_precioPorHora){
            $garage = new Garage($razonSocial);
            $garage->_precioPorHora = $_precioPorHora;

            return $garage;

        }

        function MostrarGarage(){
            echo "Razon social: " . $this->_razonSocial . "<br/>";
            echo "Precio por hora: " . $this->_precioPorHora . "<br/>";
            
            foreach($this->_autos as $auto){
                Auto::MostrarAuto($auto);
            }
        }

        function Equals($auto){
            foreach($this->_autos as $autoGarage){
                //if($autoGarage->Equals($auto))
                if($autoGarage->_color === $auto->_color && $autoGarage->_marca === $auto->_marca && 
                $autoGarage->_precio === $auto->_precio && $autoGarage->_fecha === $auto->_fecha) return true;
            }
            return false;
        }

        function Add($auto){
            if($this->Equals($auto)) echo "Este Auto ya se encuentra en el garage<br/>";
            else array_push($this->_autos, $auto);
        }

        function BuscarIndice($auto){
            for($i=0;$i<count($this->_autos); $i++){
                //if($autoGarage->Equals($auto))
                if($this->_autos[$i]->_color === $auto->_color && $this->_autos[$i]->_marca === $auto->_marca && 
                $this->_autos[$i]->_precio === $auto->_precio && $this->_autos[$i]->_fecha === $auto->_fecha) return $i;
            }

            return -1;
        }

        function Remove($auto){
            if($this->Equals($auto)){
                unset($this->_autos[$this->BuscarIndice($auto)]);
            } else echo "Este Auto no se encuentra en el garage<br/>";
        }
    }

?>