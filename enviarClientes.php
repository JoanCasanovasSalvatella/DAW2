<?php
    require_once "connect.php"; // Se indica que necessitamos el fichero conexion.php

    // Recojer los datos escritos en los input
    $name = $_POST ['nombre'];
    $lastName = $_POST ['apellido'];
    $nacimiento = $_POST ['nacimiento'];

    // Validar si todos los campos se han rellenado
    if(empty($name) || empty($lastName) || empty($nacimiento)){
        echo 'Error al insertar datos';
    }

    else{
    //insertar informacion de la tabla
    $insert = $conexion->query("INSERT INTO CLIENTE(nombre, apellido, fechaNacimiento) VALUES('$name', '$lastName', '$nacimiento')");
    echo 'Insert realizado correctamente<br>';  // Mostrar mensaje informando de que el insert se ha hecho correctamente    
    }

    // Obtener los diferentes registros de la tabla cliente
    $select = $conexion->query("SELECT * FROM CLIENTE");   
    echo '<ul>';
    
    // Bucle que se ejecuta mientras queden filas por mostrar
    while($row = $select->fetch_assoc()){
        echo '<li>'. $row["nombre"]. " " . $row["apellido"]. " " .$row["fechaNacimiento"]."</li><br>"; // Mostrar el nombre, apellido y fecha de nacimiento
    }    
    echo '</ul>';

    // Boton para volver al fichero DatosClientes.php y introducir nuevos clientes
    echo '<form action = "DatosClientes.php">';
    echo '<button type="submit">Crear clientes';
?>