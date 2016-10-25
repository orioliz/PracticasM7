<?php 
    $n = $_POST["nombre"];
    $in = $_POST["ingresos"];

    echo "Su nombre es $n";
    

    for ($i=0;$i<count($in);$i++)    
        {     
            echo "<br>Sus  ingresos son: " . $in[$i];    
        } 

    echo '<br/>';

/*    if($in == 'mas de 3000') {
        echo 'a pagar';
    } else {
        echo 'que bien no pagas';
    }*/

switch($_POST["ingresos"]){
    case '1-1000':
     echo ("no pagas");
    break;
    case '1001-3000':
     echo ("no pagas");
    break;
    case 'mas de 3000':
     echo ("si pagas");
    break;
}


?>