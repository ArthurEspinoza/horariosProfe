<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Añadir bitacora</title>
    <link rel="stylesheet" href="css/bitacora.css">
</head>

<body>
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
    <div class="topnav" id="myTopnav">
        <div id="logo">
            <img src="img/logo.png" alt="logo">
        </div>
        <a href="horario.html">Mis Horarios</a>
        <a href="#addbitacora" class="active">Añadir Bitacora</a>
        <a href="perfil.html">Ver Mi Perfil</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    <div id="instrucciones">
        Complete el formulario con la información necesaria, al finalizar dar clic en el botón "Guardar Bitacora".
    </div>
    <fieldset id="formulario">
        <legend>Información Bitacora</legend>
        <div>
            <form action="enviarBitacora.php" method="post">
                <label for="fdate">Fecha</label>
                <input type="date" name="fecha" id="fecha">
                <label for="fmateria">Materia</label>
                <input type="text" name="materia" id="materia" placeholder="Nombre de la Materia">
                <label for="falumnos">Alumnos que asistieron</label>
                <input type="text" name="alumnos" id="alumnos" placeholder="Nombre de los alumnos separados por coma">
                <label for="fdesc">Descripción</label>
                <textarea name="descripcion" id="descripcion" cols="30" rows="10" placeholder="Especifique todo lo que se abordó"></textarea>
                <input type="submit" value="Guardar Bitacora" id="subbtn">
            </form>
        </div>
    </fieldset>
</body>

</html>