<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $colores = [ "0" => "rojo" , "1" => "verde", "2" => "azul"] ;
        array_push($colores, "amarillo") ;
        print_r($colores) ;
    ?> 
</body>
</html>