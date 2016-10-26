<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <style>
    tr:nth-child(even) { background: #9cb2dd }
    </style>
</head>
<body>

<?php


    echo '<h2>TABLA DEL 10 </h2> <br/><br/>';
    
    for($tabla=10; $tabla<=10; $tabla++) 
    {
         echo "<table border=1 cellspacing=0 width=200>"; //creamos la tabla
        

         for($i=1; $i<=10; $i++) //creamos la operacion y lo metemos en la tabla (td)
         {
           echo "<tr >
                    <td align=center>$tabla</td>
                     <td align=center>  x</td>
                     <td align=center>$i</td>
                     <td align=center>=</td>
                     <td align=center> ". ($tabla*$i) . "</td>  
                 </tr>";
         }
         echo "</table> <br/>";
    }
?>
</body>
</html>








