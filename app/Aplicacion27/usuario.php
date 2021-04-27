<?php

class Usuario{

    public $nombre;
    public $apellido;
    public $clave;
    public $mail;
    public $id;
    public $fecha_de_creacion;
    public $localidad;

    function __construct($nombre, $apellido, $clave, $mail, $fecha_de_creacion, $localidad){
            $this->usuario = $nombre;
            $this->clave = $clave;
            $this->mail = $mail;
            $this->fecha = $fecha_de_creacion;
            $this->localidad = $localidad;
            $this->fecha_de_creacion = new DateTime("now");
    }
    
    function AltaBD(){
        
    }

    static function CargarListadoUsuarios($archivo){
        
        $listado = array();

        $miArchivo = fopen($archivo, "r");

        if($miArchivo != null){
        
            while(feof($miArchivo) == false){
                $auxArray = json_decode(fgets($miArchivo));

                if($auxArray != null){
                    $auxUsuario = new Usuario($auxArray->usuario, $auxArray->clave, $auxArray->mail, $auxArray->id, $auxArray->fecha);
                    if(is_a($auxUsuario, "Usuario"))
                        array_push($listado, $auxUsuario);
                }

            }

            fclose($miArchivo);

            return $listado;
        }

        return null;
        
    }

    static function ListarUsuarios($array){

        $listado = "<ul>";

        foreach($array as $nombre){
            if(is_a($nombre, "Usuario"))
                $listado .= "<li>".$nombre->ToString()."</li>";
        }
        $listado .= "</ul>";

        return $listado;
    }

    function ToString(){
        return "Usuario: $this->usuario, Clave: $this->clave, Mail: $this->mail, Id: $this->id";
    }

}

?>