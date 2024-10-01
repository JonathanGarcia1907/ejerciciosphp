<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <img src="" alt="">
    <?php

        $datos = [
            ["título" => "El amanecer del planeta de los simios", "poster" => "https://media.themoviedb.org/t/p/w300_and_h450_bestv2/qNu2N4a9nuGWgkeg3NzdRTDOz5N.jpg", "plataforma" => "Disney+", "nota" => "73", "argumento" =>"Un grupo de simios con grandes cualidades para la supervivencia toma las calles, liderado por César, un simio dotado de una inteligencia y unos instintos superiores para cualquier primate. Ante la necesidad de libertad, esta raza animal decide no doblegarse ante los humanos. Tendrá que luchar contra un grupo de humanos que han sobrevivido a una fuerte epidemia, desatada en la década anterior. Ambas partes han establecido una tregua, pero se verá interrumpida."], 
            ["título" => "El padrino", "poster" => "https://media.themoviedb.org/t/p/w300_and_h450_bestv2/5HlLUsmsv60cZVTzVns9ICZD6zU.jpg", "plataforma" => "M+, Netflix, Max", "nota" => "87", "argumento" =>"Don Vito Corleone, conocido dentro de los círculos del hampa como 'El Padrino', es el patriarca de una de las cinco familias que ejercen el mando de la Cosa Nostra en Nueva York en los años cuarenta. Don Corleone tiene cuatro hijos: una chica, Connie, y tres varones; Sonny, Michael y Fredo. Cuando el Padrino reclina intervenir en el negocio de estupefacientes, empieza una cruenta lucha de violentos episodios entre las distintas familias del crimen organizado."],
            ["título" => "Malditos bastardos", "poster" => "https://media.themoviedb.org/t/p/w300_and_h450_bestv2/rZuCZ4o77Tct0EEYV4CfTTtYj4z.jpg", "plataforma" => "Prime", "nota" => "82", "argumento" =>"Segunda Guerra Mundial. Durante la ocupación de Francia por los alemanes, Shosanna Dreyfus presencia la ejecución de su familia por orden del coronel nazi Hans Landa. Ella consigue huir a París, donde adopta una nueva identidad como propietaria de un cine. En otro lugar de Europa, el teniente Aldo Raine adiestra a un grupo de soldados judíos Los bastardos para atacar objetivos concretos. Los hombres de Raine y una actriz alemana, que trabaja para los aliados, deben llevar a cabo una misión que hará caer a los jefes del Tercer Reich. El destino quiere que todos se encuentren bajo la marquesina de un cine donde Shosanna espera para vengarse."],
            ["título" => "Érase una vez en… Hollywood ", "poster" => "https://media.themoviedb.org/t/p/w300_and_h450_bestv2/abGUZXIPQa2nIa4J88WTxdygWKs.jpg", "plataforma" => "M+, Netflix, Max", "nota" => "74", "argumento" =>"Los Angeles, 1969. La estrella de televisión Rick Dalton, un actor en horas bajas especializado en westerns, y el doble de acción Cliff Booth, su mejor amigo, tratan de sobrevivir a una industria cinematográfica en constante cambio. Dalton es vecino de la joven y prometedora actriz y modelo Sharon Tate, que acaba de casarse con el prestigioso director polaco Roman Polanski…"],
            ["título" => "Django desencadenado ", "poster" => "https://media.themoviedb.org/t/p/w300_and_h450_bestv2/naaYX64yMGzEFsATOFQDaxxQWbJ.jpg", "plataforma" => "RTV, Tivify, Netflix", "nota" => "82", "argumento" =>"Dos años antes de estallar la Guerra Civil (1861-1865), Schultz, un cazarrecompensas alemán que le sigue la pista a unos asesinos, le promete al esclavo Django dejarlo en libertad si le ayuda a atraparlos. Terminado con éxito el trabajo, Django prefiere seguir al lado del alemán y ayudarle a capturar a los delincuentes más buscados del Sur. Se convierte así en un experto cazador de recompensas, pero su único objetivo es rescatar a su esposa Broomhilda, a la que perdió por culpa del tráfico de esclavos. La búsqueda llevará a Django y a Schultz hasta Calvin Candie, el malvado propietario de la plantación 'Candyland'. La presencia de ambos en los alrededores de la propiedad, despierta las sospechas de Stephen, el esclavo de confianza de Candie."],
            ["título" => "Carnival Row", "poster" => "https://media.themoviedb.org/t/p/w300_and_h450_bestv2/jyhxT10e2z9IDsKoIQDKhyxSQJt.jpg", "plataforma" => "Prime", "nota" => "77", "argumento" =>"En la oscura y futurística ciudad neo-victoriana de Burge, una serie de sucesos harán que la fantasía negra se mezcle con la realidad. Burge se ha convertido en un refugio para las criaturas de fantasía que han huido de sus respectivos mundos asolados por la guerra. Pero todo se complicará cuando un peligroso asesino en serie comience a dar caza a los no humanos. El inspector de la policía Rycroft Philostrate (Bloom) será el encargado de investigar el último caso: el asesinado de una bailarina. y aunque el inspector trate de no involucrarse personalmente en el caso, pronto descubrirá que no es fácil separar los sentimientos del trabajo."],
            ["título" => "Juego de tronos", "poster" => "https://media.themoviedb.org/t/p/w300_and_h450_bestv2/z9gCSwIObDOD2BEtmUwfasar3xs.jpg", "plataforma" => "FlixOlé, M+, Max", "nota" => "85", "argumento" =>"En una tierra donde los veranos duran décadas y los inviernos pueden durar toda una vida, los problemas acechan. Desde las maquinaciones del sur a las salvajes tierras del este, pasando por el helado norte y el milenario muro que protege el reino de las fuerzas tenebrosas, dos poderosas familias mantienen un enfrentamiento letal por gobernar los Siete Reinos de Poniente. Mientras la traición, la lujuria y las fuerzas sobrenaturales sacuden los pilares de los reinos, la sangrienta batalla por el trono de Hierro tendrá consecuencias imprevistas y trascendentales. El invierno se acerca. Que empiece 'Juego de tronos'."],
            ["título" => "La casa del dragón", "poster" => "https://media.themoviedb.org/t/p/w300_and_h450_bestv2/8MaxftF69sEAAD5673vTjIl8yT3.jpg", "plataforma" => "Max", "nota" => "84", "argumento" =>"Basada en el libro 'Fuego y Sangre' de George R.R. Martin. La serie se centra en la casa Targaryen, trescientos años antes de los eventos vistos en 'Juego de Tronos'."],
            ["título" => "The Expanse", "poster" => "https://media.themoviedb.org/t/p/w300_and_h450_bestv2/8djpxDeWpINnGhjpFXQjnBe6zbx.jpg", "plataforma" => "Prime", "nota" => "81", "argumento" =>"Doscientos años en el futuro, en un sistema solar totalmente colonizado, el detective de la policía Miller, nacido en el Cinturón de Asteroides, es encargado con la misión de encontrar a una joven mujer desaparecida llamada Julie Mao. Acompañando a Miller en su misión se encuentra James Holden, anteriormente primer oficial en un carguero de hielo, y quien estuvo involucrado en un incidente causado por las tensas relaciones entre la Tierra, Marte y el Cinturón. Pronto, ambos descubrirán que la mujer desaparecida es solo la punta del iceberg de una conspiración de inmensa magnitud que atentará contra la historia y la existencia de la Humanidad."],
            ["título" => "Altered Carbon", "poster" => "https://media.themoviedb.org/t/p/w300_and_h450_bestv2/nQKQ1W2NX6JUix8eh8IYkYdVwz8.jpg", "plataforma" => "Netflix", "nota" => "77", "argumento" =>"250 años después de su muerte, un prisionero vuelve a la vida en un nuevo cuerpo para resolver un asesinato y ganar así su libertad."],
            ] ;

            foreach ($datos as $clave){
                echo "<br> <h1>$clave[título]</h1></br> " ;
                echo "<br> <img src=\"$clave[poster]\" alt=\"\"></br> " ;
                echo "<br> <h1>$clave[plataforma]</h1></br> " ;
                echo "<br> <h1>$clave[nota]</h1></br> " ;
                echo "<br> <h1>$clave[argumento]</h1></br> " ;
            } ;
            
    ?>s

    <div class="row">
        <div class="col-sm-4">
            <img src="$clave[poster]" alt=""> ;
        </div>
        <div class="col-sm-8">
            <br> <h1>$clave[título]</h1></br> ;
            <br> <p>$clave[plataforma]</p></br> ;
            <br> <p>$clave[nota]</p></br> ;
            <br> <p>$clave[argumento]</p></br> ;
        </div>
    </div>
    <?php
    ?>

</body>
</html>