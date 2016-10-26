<?php
    
    $n = $_POST["nombre"];
    $e = $_POST["edad"];    
    
    
    echo "Tu nombre es $n tu edad es $e ";
    echo '<br/>';    
    echo '<br/>';
    echo '<h2>por lo tanto.....</h2>';

    if($e>18) {
        echo '<h2>Eres mayor de edad</h2>';
    } else {
         echo '<h2>Eres menor de edad</h2>';
    }

    


    ?>