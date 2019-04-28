<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Horarios BUAP</title>
    <link rel="stylesheet" href="css/busqueda.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div id="header">
        <h2>Ingresa el Nombre del Profesor a Buscar</h2>
    </div>
    <div class="search-container">
        <input type="text" name="busqueda" id="busqueda" placeholder="Escribe el nombre completo en Mayusculas">
        <button onclick="location.href='login.php'">Ingresar</button>
    </div>
    <section id="datos"><!--Aqui se va a mostrar el resultado--></section>
    <script src="js/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
