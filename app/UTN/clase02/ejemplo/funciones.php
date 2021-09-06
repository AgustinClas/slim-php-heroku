<?php

    function Saludar($nombre){
        echo "Bienvenido " . $nombre;
    }

    function MostrarUsuario($usuario){
        echo "<br/>El nombre del usuario es " . $usuario->nombre;
    }
?>