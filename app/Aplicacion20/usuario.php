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
    
    static function _ValidarUsuario(){
  
        $usuarioIngresado = $_POST["usuario"];
        $claveIngresada = $_POST["clave"];
        $mailIngresado = $_POST["mail"];

        $usuarioNuevo = new Usuario($usuarioIngresado, $claveIngresada, $mailIngresado);
        

        return $usuarioNuevo;
                
    }

    function ToString(){
        return "Usuario: $this->usuario    Mail: $this->mail\n";
    }

            


}

?>