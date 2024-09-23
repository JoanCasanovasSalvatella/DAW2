<?php
        $elemento = $_GET ['buscar'];

        if($_GET ['buscar'] == ''){
            echo ('producto no encontrado');
        }

        else {
            echo $elemento;
        }
?>