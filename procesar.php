<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <meta charset="UTF-8">
</head>
<body>

    <?php
        $aficiones = ["Videojuegos","Leer","Escalar","Bucear","Música","Teatro","Gimnasio","Cine/Series","Senderismo","Comer","Jardineria","Tumbing","Viajar","Dormir"] ;

        # echo "<pre>" . print_r($_GET, true) . "</pre>" ;]
        var_dump($_GET) ;
    ?>

    <h3>Bienvenido/a, <?= "{$_GET["nombre"]} {$_GET["apellido"]}" ?></h3>
    <h6>Tienes <?= $GET["edad"] ?> años, y te gusta: 
        <?php foreach($_GET["aficion"] as $indice) echo "{$aficiones[$indice]} " ;?> 

    </h6>
    
</body>
</html>