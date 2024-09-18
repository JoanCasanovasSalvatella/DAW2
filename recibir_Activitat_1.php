<?php
$numeroFinal = 0; // Inicializar la variable

// Obtenir els valors i guardar-los en variables
$numero1 = $_POST ['numero_1'];
$numero2 = $_POST ['numero_2']; 

    // Si falta alguno de los valores muestra un mensaje de error
    if($_POST['numero_1'] == null || $_POST['numero_2'] == null){
        echo('Falta algun dels valors! Revisa les dades introduides.');    
    }

    // Si es proporcionen tots els valors, es sumen y es mostra el resultat per pantalla
    else {
        // Sumar els valores
        $numeroFinal = $numero1 + $numero2;  

        // Mostrar resultat per pantalla
        echo('El resultat es '.$numeroFinal.'<br>');  
    }
?>