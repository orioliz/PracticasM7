<?php

//phpinfo();
$dia = date ( "d");
echo ("Hoy es ".$dia);

if($dia<10) {
    echo ('<h2>WEB DISPONIBLE</h2>');
} else {
    echo('<h2>WEB NO DISPONIBLE</h2>');
}






?>