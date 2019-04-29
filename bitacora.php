<?php
session_start();
include('php/config.php');
$conn = getDB();
$nombreUsuario = $_SESSION['nombre'];
$idProfe = $_SESSION['noTrabajador']
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Añadir Bitácora</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
        <a href="horario.php">Mis Horarios</a>
        <a href="#bitacora.php" class="active">Añadir Bitácora</a>
        <a href="mostrarBitacora.php">Ver Bitácoras</a>
        <a href="php/destroy.php"class="active">Cerrar Sesión</a>
        <a href="#">Bienvenido <?php echo $nombreUsuario?></a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    <div id="instrucciones">
        Complete el formulario con la información necesaria, al finalizar dar clic en el botón "Guardar Bitácora".
    </div>
    <fieldset id="formulario">
        <legend>Información Bitácora</legend>
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
                <input type="submit" class="btn btn-outline-primary" value="Guardar Bitácora" id="subbtn">
            </form>
        </div>
    </fieldset>
    <section>
        <?php

        ?>
    </section>
</body>

</html>