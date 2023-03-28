<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
     $num=$_POST['num'];
     for($y=1;$y<=$num;$y++){
         for($x=1;$x<=$y;$x++){
            echo"*";
         }
         echo"<br>";

     }
    ?>
</body>
</html>