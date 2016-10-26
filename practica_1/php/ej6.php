<?php

//echo 'hola';

echo 'tabla del 10 <br/> <br/> <br/>';
for ($tabla=10; $tabla<=10; $tabla++) {
 
    for ($i=1; $i<=10; $i++)  // la variable i empieza en 1 y acaba en 10. Pero aumenta en cada operacion....
    {
        echo "$tabla x $i = ". ($tabla*$i) . "<br/>"; //al aumentar $i en cada operacion crea la multiplicacion

    }
}


?>