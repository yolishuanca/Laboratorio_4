<?php
if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
    echo "Hola $nombre,
    que tengas un buem dia.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo con GET</title>
</head>
<body>
    Introduce tu nmbre:
    <form action="" method="get">
        <input type="text" name="nombre"><br>
        <input type="text" value="Enviar">
</form>
</body>
</html>