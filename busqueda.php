<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Horarios BUAP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/busqueda.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div id="header">
        <h2>Ingresa el Nombre del Profesor a Buscar</h2>
    </div>
    <div class="search-container">
        <input type="text" name="busqueda" id="busqueda" placeholder="Escribe el nombre completo en Mayusculas">
    </div>
    <section id="datos"><!--Aqui se va a mostrar el resultado--></section>
    <section id="liga">
        Si eres profesor, para acceder a tu cuenta da clic 
        <a href="login.php" class="stretch-link text-primary" >aquí</a>
    </section>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
