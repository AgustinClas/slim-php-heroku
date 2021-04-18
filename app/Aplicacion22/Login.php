<?
/**************************** 
Aplicación No 22 ( Login)
Archivo: Login.php
método:POST
Recibe los datos del usuario(clave,mail )por POST ,
crear un objeto y utilizar sus métodos para poder verificar si es un usuario registrado,
Retorna un :
“Verificado” si el usuario existe y coincide la clave también.
“Error en los datos” si esta mal la clave.
“Usuario no registrado si no coincide el mail“
Hacer los métodos necesarios en la clase usuario
******************************/

    include "usuario.php";

    if(isset($_POST["usuario"]) && isset($_POST["clave"]) && isset($_POST["mail"])){

        $usuario = new Usuario($_POST["usuario"], $_POST["clave"], $_POST["mail"]);
        echo $usuario->VerificarUsuario();
    }


?>