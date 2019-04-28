<?php
session_start();
$nombreUsuario = $_SESSION['nombre'];
$idProfe = $_SESSION['noTrabajador'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/horario.css">
    <title>Mis Horarios</title>
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
        <a href="horario.php">Mi Horario</a>
        <a href="#mostarBitacoras"class="active">Bitacoras</a>
        <a href="perfil.html">Ver Mi Perfil</a>
        <a href="#">Bienvenido <?php echo $nombreUsuario?></a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <div>
    <?php
    $mysqli = new mysqli('localhost', 'root', 'root', 'horario');

    if ($mysqli->connect_error) {
        die('Connect Error (' . $mysqli->connect_errno . ') '
                . $mysqli->connect_error);
    }

    if (mysqli_connect_error()) {
        die('Connect Error (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
    }
    $busqueda1=$mysqli->query("SELECT * from bitacora where noTrabajador='$idProfe'");
    while($datos1=$busqueda1->fetch_array()){
    ?>
        <table border="1px" align="center">
        <tr>
            <th>Fecha</th>
            <th>Materia</th>
            <th>Alumnos</th>
            <th>Descripción</th>
        </tr>
        <tr>
            <th><?php echo $datos1["idbitacora"]?></th>
            <td><?php echo $datos1["fecha"]?></td>
            <td><?php echo $datos1["materia"]?></td>
            <td><?php echo $datos3["alumnos"]?></td>
            <td><?php echo $datos4["descripcion"]?></td>
        </tr>
    <?php
    }
    ?>
    </table>
    </div>
</body
</html>
