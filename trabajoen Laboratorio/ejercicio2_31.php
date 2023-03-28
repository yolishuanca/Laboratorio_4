<?php
 if (isset($_GET['nombre'])){
     $nombre = $_GET['nombre'];
     echo "Hola $nombre, que tengas un buen día.";
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejemplo con GET</title>
</head>
<body>
    Introduce tu nombre:
    <form action="" method="get">
     <input type="text" name="nombre"><br>
     <input type="submit" value="Enviar">
     </form>
</body>
</html>