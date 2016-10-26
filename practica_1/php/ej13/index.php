<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ej13</title>
</head>
<body>
    <h1>FORMULARIO DE INGRESOS MENSUALES</h1>
    <form action="ingresos.php" method="post">
        <input type="text" placeholder="nombre" name="nombre"> 
        
        <select name="ingresos[]">
          <option value="1-1000">1-1000</option>
          <option value="1001-3000">1001-3000</option>
          <option value="mas de 3000">mas de 3000</option>
        </select>
        
        <input type="submit" name="enviar">

    </form>
</body>
</html>






































