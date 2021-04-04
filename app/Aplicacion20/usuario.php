<?php

class Usuario{

    public $usuario;
    public $clave;
    public $mail;

    function __construct($usuario, $clave, $mail){
            $this->usuario = $usuario;
            $this->clave = $clave;
            $this->mail = $mail;
    }
    
    function GuardarEnCSV(){
  
        $miArchivo = fopen("usuarios.csv", "a");

        $retorno = fwrite($miArchivo, $this->ToString());

        fclose($miArchivo);

        return $retorno;
                
    }

    function ToString(){
        return "Usuario: $this->usuario,Mail: $this->mail\n";
    }

            


}

?>