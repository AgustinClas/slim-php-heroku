<?php   
/*
Agustin Clas
Aplicación No 26 (RealizarVenta)
Archivo: RealizarVenta.php
método:POST
Recibe los datos del producto(código de barra), del usuario (el id )y la cantidad de ítems ,por
POST .
Verificar que el usuario y el producto exista y tenga stock.
crea un ID autoincremental(emulado, puede ser un random de 1 a 10.000).
carga los datos necesarios para guardar la venta en un nuevo renglón.
Retorna un :
“venta realizada”Se hizo una venta
“no se pudo hacer“si no se pudo hacer
Hacer los métodos necesarios en las clases
*/

    include "venta.php";

    if(isset($_POST["codigoDeBarra_Producto"]) && isset($_POST["id_Usuario"]) && isset($_POST["cantidad"])){
        if(Venta::GenerarVenta($_POST["codigoDeBarra_Producto"], $_POST["id_Usuario"], $_POST["cantidad"]))
            echo "Venta realizada";
        else   
            echo "No se pudo concretar la operacion";
    }else{
        echo "Error en la trasmision de datos";
    }
?>