<?php

    include "funciones.php";
    include "usuario.php";

    Saludar("Agustin <br/>");

    $user = new Usuario();

    $user->nombre = "Agustin";

    Saludar($user->nombre);

    include "inicio.php";



?>