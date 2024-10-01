<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $clases = ["profesores" => ["Pedro Pérez", "GemaGómez"], "cursos" => ["Biología", "Química"]] ;
        $reemplazos = [ "cursos" => ["0" => "Física", "1" => "Química"]] ;
        $clases2 = array_replace($clases, $reemplazos);
        print_r($clases2) ;
    ?>
</body>
</html>