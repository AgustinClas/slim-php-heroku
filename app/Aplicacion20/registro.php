<?php
/*
Aplicación No 20 (Registro CSV)
Archivo: registro.php
método:POST
Recibe los datos del usuario(nombre, clave,mail )por POST ,
crear un objeto y utilizar sus métodos para poder hacer el alta,
guardando los datos en usuarios.csv.
retorna si se pudo agregar o no.
Cada usuario se agrega en un renglón diferente al anterior.
Hacer los métodos necesarios en la clase usuario
*/

    include "usuario.php";

    if(isset($_POST["usuario"])){
        
        $nombre = $_POST["usuario"];
        $clave = $_POST["clave"];
        $mail = $_POST["mail"];
        
        $usuario1 = new usuario($nombre, $clave, $mail);

        if($usuario1->GuardarEnCSV()){
            echo "Guardado exitoso<br>";
        }else{
            echo "No se pudo guardar el usuario<br>";
        }
    }else 
        echo "Error";
    

?>