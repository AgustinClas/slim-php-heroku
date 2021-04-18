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

    static function CargarListadoUsuarios($archivo){
        
        $listado = array();
        $retorno = null;

        $miArchivo = fopen($archivo, "r");

        if($miArchivo != null){
        
            while(feof($miArchivo) == false){
                $auxArray = fgetcsv($miArchivo, ",");
                $auxUsuario = new Usuario($auxArray[0], $auxArray[1], $auxArray[2]);

                if($auxArray != null){
                    $auxUsuario = new Usuario($auxArray[0], $auxArray[1], $auxArray[2]);
                    array_push($listado, $auxUsuario);
                }

            }

            fclose($miArchivo);

            return $listado;
        }

        return retorno;
        
    }

    static function ListarUsuarios($array){

        $listado = "<ul>";

        foreach($array as $usuario){
            $listado .= "<li>".$usuario->ToString()."</li>";
        }
        $listado .= "</ul>";

        return $listado;
    }

    function ToString(){
        return "Usuario: $this->usuario, Clave: $this->clave, Mail: $this->mail";
    }
    /*
    “Verificado” si el usuario existe y coincide la clave también.
    “Error en los datos” si esta mal la clave.
    “Usuario no registrado si no coincide el mail“
    */
    function VerificarUsuario(){

        $listado = Usuario::CargarListadoUsuarios("usuarios.csv");
        $retorno;

        foreach($listado as $usuario){
            if($usuario->usuario == $this->usuario){
                if($usuario->clave == $this->clave){
                    $retorno = "Verificado";
                }else{
                    $retorno = "Error en los datos";
                }

                if($usuario->mail != $this->mail){
                    $retorno = "Usuario no regristrado";
                }
            }
        }

        return $retorno;
    }


}

?>