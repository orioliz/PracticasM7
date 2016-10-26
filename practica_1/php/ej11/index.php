<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="nombre" placeholder="nombre">
        <input type="text" name="apellido" placeholder="apellido"> <br/><br/>
        <textarea name="textareaa" cols="30" rows="10">  </textarea>
        <br/>
        <input type="submit" name="enviar">

    </form>
    
    
    <?php
    //GUARDAMOS LOS PARAMETROS DEL FORMULARIO
    $n = $_POST["nombre"];
    $a = $_POST["apellido"];
    $ta = $_POST["textareaa"];
    
    $file = fopen("archivo.txt", "a+"); //ABRE EL ARCHIVO.TXT (a+: actualiza / w+: borra y escribe)
        fputs($file, "$n" . PHP_EOL); // ESCRIBE EN .TXT
        fputs($file, "$a" . PHP_EOL);
        fputs($file, "$ta" . PHP_EOL);
        fclose($file); //CIERRA EL ARCHIVO.TXT
    ?>
</body>
</html>