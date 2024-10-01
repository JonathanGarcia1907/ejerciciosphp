<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $mayoredad ;
    $edad = 18 ;
    $pais = "España" ;
    if ($edad > 17) {
        $mayoredad = true ;
    } else {$mayoredad = false ;} ;

    if (($mayoredad == true) or ($pais=="España")){
        echo "La persona es mayor de edad y vive en España" ;
    } ;

    ?>
</body>
</html>