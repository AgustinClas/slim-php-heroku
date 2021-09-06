<?php

    include_once "usuario.php";

    $user = new Usuario();

    $user->nombre = "MariaJosePedro";

    MostrarUsuario($user);

?>