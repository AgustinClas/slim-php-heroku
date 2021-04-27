<?php
    class Producto{

        public $nombre;
        public $codigoDeBarra;
        public $tipo;
        public $stock;
        public $precio; 
        public  $id;

        function __construct($nombre, $codigoDeBarra, $tipo, $stock, $precio, $id){
            $this->nombre = $nombre;
            $this->codigoDeBarra = $codigoDeBarra;
            $this->tipo = $tipo;
            $this->stock = $stock;
            $this->precio = $precio;
            if($id == -1)
                $this->id = rand(1, 10000);
            else
                $this->id = $id;
        }

        static function VerificarProducto($codigoDeBarra, $cantidad){
            $listado = Producto::CargarListadoProductos("productos.json");

            foreach($listado as $auxProducto){
                if($auxProducto->codigoDeBarra==$codigoDeBarra && $auxProducto->stock>=$cantidad)
                    return true;
            }

            return false;
        }

        static function ActualizarStock($codigoDeBarra, $cantidad){
            $listado = Producto::CargarListadoProductos("productos.json");

            foreach($listado as $auxProducto){
                if($auxProducto->codigoDeBarra==$codigoDeBarra){
                    $auxProducto->stock -= $cantidad;
                    
                    if(Producto::GuardarEnJson($listado, "productos.json"))
                        return true;
                }
            }

            return false;
        }
        static function AgregarProducto($nuevoProducto, $pathArchivo){

            $stringRetorno;
            $listado = Producto::CargarListadoProductos($pathArchivo);

            if($listado == null){
                $listado = array();
            }

            
            if(Producto::CompararProductos($nuevoProducto,$listado)){
                foreach($listado as $auxProducto){
                    if($auxProducto->codigoDeBarra == $nuevoProducto->codigoDeBarra){
                        $auxProducto->stock += $nuevoProducto->stock;
                        $stringRetorno = "Actualizado";
                    }
                }
            }else{
                array_push($listado, $nuevoProducto);
                $stringRetorno = "Ingresado";
            }

            if(Producto::GuardarEnJson($listado, $pathArchivo))
                return $stringRetorno;

            return "No se pudo concretar la operacion";
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

        static function CompararProductos($producto, $listado){

            foreach($listado as $auxProducto){         
                if($auxProducto->codigoDeBarra == $producto->codigoDeBarra){
                    return true;
                }

            }

            return false;
        }


        static function CargarListadoProductos($archivo){
        
            $listado = array();
    
            $miArchivo = fopen($archivo, "r");
    
            if($miArchivo != null){
            
                while(feof($miArchivo) == false){
                    $auxArray = json_decode(fgets($miArchivo));
                    if($auxArray != null){            
                        $auxProducto = new Producto($auxArray->nombre, $auxArray->codigoDeBarra, $auxArray->tipo, $auxArray->stock, $auxArray->precio, $auxArray->id);
                        if(is_a($auxProducto, "Producto"))
                            array_push($listado, $auxProducto);
                    }
                }
    
                fclose($miArchivo);
    
                return $listado;
            }
    
            return null;
            
        }

    }

?>