<?php

class Usuario{

    public $usuario;
    public $clave;
    public $mail;
    public $id;
    public $fecha;

    function __construct($usuario, $clave, $mail, $id, $fecha){
            $this->usuario = $usuario;
            $this->clave = $clave;
            $this->mail = $mail;
            $this->id = $id;
            $this->fecha = $fecha;
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

        foreach($array as $usuario){
            if(is_a($usuario, "Usuario"))
                $listado .= "<li>".$usuario->ToString()."</li>";
        }
        $listado .= "</ul>";

        return $listado;
    }

    function ToString(){

        $path = "usuario/Fotos/$this->usuario.jpg";
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/'.$type.';base64,'.base64_encode($data);
        $img = "<img height = '50' src= '".$base64."' />";

        return "Usuario: $this->usuario ".$img;

    }

            


}

?>