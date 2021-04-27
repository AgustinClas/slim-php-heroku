<?php

include "usuario.php";
include "producto.php";

class Venta{

    public $codigoDeBarra_producto;
    public $id_usuario;
    public $cantidad;
    public $id;

    
    
    function __construct($codigoDeBarra_producto, $id_usuario, $cantidad, $id){
        $this->codigoDeBarra_producto = $codigoDeBarra_producto;
        $this->id_usuario = $id_usuario;
        $this->cantidad = $cantidad;
        if($id == -1)
            $this->id = rand(1, 10000);
        else
            $this->id = $id;
    }

    function GenerarVenta($codigoDeBarra_producto, $id_usuario, $cantidad){

        if(Producto::VerificarProducto($codigoDeBarra_producto, $cantidad) && Usuario::VerificarUsuario($id_usuario)){
            $venta = new Venta($codigoDeBarra_producto, $id_usuario, $cantidad, -1);
            
            $listadoVentas = Venta::CargarListadoVentas("ventas.json");
            
            if($listadoVentas==null)
                $listadoVentas==array();
            
            array_push($listadoVentas, $venta);

            if(Venta::GuardarEnJson($listadoVentas, "ventas.json") && Producto::ActualizarStock($codigoDeBarra_producto, $cantidad)){
                return true;
            }

        }

        return false;
    }

    static function CargarListadoVentas($archivo){
        
        $listado = array();

        $miArchivo = fopen($archivo, "r");

        if($miArchivo != null){
        
            while(feof($miArchivo) == false){
                $auxArray = json_decode(fgets($miArchivo));

                if($auxArray != null){
                    $auxVenta = new Venta($auxArray->codigoDeBarra_producto, $auxArray->id_usuario, $auxArray->cantidad, $auxArray->id);
                    if(is_a($auxVenta, "Venta"))
                        array_push($listado, $auxVenta);
                }

            }

            fclose($miArchivo);

            return $listado;
        }

        return null;
        
    }

    static function GuardarEnJson($listado, $path){
  
        $miArchivo = fopen($path, "w");

        if($miArchivo != null){
            foreach($listado as $object){
            fwrite($miArchivo, json_encode($object)."\n");
            }
        
            fclose($miArchivo);
            return true;
        }

        return $false;
                
    }

    
}