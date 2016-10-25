

<!DOCTYPE html>
<html lang="en">

<body>
<h2>TUS DATOS</h2>
 
 <?php 
     // CREAMOS LA CONEXION A LA BD
    $link = mysqli_connect("localhost", "oizquierdo_root", "rootroot"); // DIRECCION_SERVER, USER, PASSWORD
    mysqli_select_db($link, "oizquierdo_escola"); // SELECCIONAR LA BASE_DE_DATOS
    
     // COGEMOS LOS DATOS DE LOS INPUTS
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $curso = $_POST["radio"];
      
    // ESCRIBIMOS EN LA BD
    mysqli_query($link, "INSERT INTO alumnes(nombre, apellidos, curso)           VALUES('$nombre','$apellidos','$curso')")
    or die(mysqli_error()); 
    
    // MOSTRAMOS LOS DATOS DE LOS INPUTS
    echo "Tu nombre es: $nombre <br/>";
    echo " Tus apellidos son: $apellidos <br/> ";
    echo "Cursas: $curso ";
 ?>
 
  <p>   
    <a href="index.html">Ir atras</a>
  </p>
</body>
</html>




































