<?php
//echo 'hola';
echo '<h2> VALIDACION DE IMAGENES</h2> <h4>(jpg png bmp o gif )</h4>';

function validar_imagenes($img) {
    $rdo = 0;
    if(ereg("[Jj][Pp][Gg]",$img)) $rdo=1;//ereg = compara extensiones
    if(ereg("[Pp][Nn][Gg]",$img)) $rdo=1;
    if(ereg("[Bb][Mm][Pp]",$img)) $rdo=1;
    if(ereg("[Gg][Ii][Ff]",$img)) $rdo=1;
    
    return $rdo;
}



echo "<table border=2>";
$directorio = opendir('imagenes'); // abrimos el directorio
$img = 1; // necesitamos esta variable para poder decirle que si hay 4 salte de fila

  while (false!==($imagenes=readdir($directorio))) { //empieza a buscar imagenes
      if ($imagenes!="." && $imagenes!="..") {
          if($img==1) 
              echo "<tr>";
              echo "<td><a href='imagenes/$imagenes'>";
              echo "<img src='imagenes/$imagenes' width=100 height=100></img> ";
              echo "</a></td>";
          
          if ($img==4) { //si en la tabla hay 4 imagenes nos crea otra fila
              echo "</tr>";
              $img=0;
          }
          $img++; //por cada imagen que haya en el directorio
      }
  }
closedir($directorio);

echo "</table>";






?>