<html>
    <head></head>
    <body>
        <?php
            // Obtener el nombre introducido
            $fullName = $_GET ['fullName'];

            // Si no se ha introducido ningun dato muestra un mensaje
            if($fullName == null){ 
                echo 'Alumno no introducido';
            }

            // Si se ha introducido un dato se muestra este por pantalla
            else{
                echo $fullName;
            }
        ?>
    </body>
</html>