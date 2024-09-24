<?php
//conexion a la base de date_offset_get

// Variables para conectarse a la BD
define("HOST_DB", "localhost");
define("USER_DB", "root");
define("PASS_DB", "");
define("NAME_DB", "clientes");

    $conexion = new mysqli(
        constant("HOST_DB"),
        constant("USER_DB"),
        constant("PASS_DB"),
        constant("NAME_DB"),
    );
?>