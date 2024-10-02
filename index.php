<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!-- 
        Si tenemos que enviar 
        
        enctype="multipart/form-data"
     -->
    <form action="procesar.php" method="get" >
        
        <label for="nombre" >Nombre, Apellido: </label>
        <input id="nombre" type="text" name="nombre" 
                maxlength="50" size="20"  placeholder="Jaime" 
                required />
        <input id="apellido" type="text" name="apellido" 
                maxlength="100" size="50" placeholder="Jaime" />

        <br/>

        <label for="edad" >Introduce tu edad: </label>
        <input id="edad" type="text" name="edad" min="18" />

        <br/>

        <label for="aficion">Aficiones favoritas:</label>
        <select id="aficion" name="aficion[]" multiple>
            <option value="0">Videojuegos</option>
            <option value="1">Leer</option>
            <option value="2">Escalar</option>
            <option value="3">Bucear</option>
            <option value="4">Música</option>
            <option value="5">Teatro</option>
            <option value="6">Gimnasio</option>
            <option value="7">Cine/Series</option>
            <option value="8">Senderismo</option>
            <option value="9">Comer</option>
            <option value="10">Jardineria</option>
            <option value="11">Tumbing</option>
            <option value="12">Viajar</option>
            <option value="13">Dormir</option>
        </select>

        <button>Enviar</button>

    </form>

    <a href="procesar.php?nombre=Carlos&apellido=Caceres&edad=20">Enviando datos</a>


</body>
</html>