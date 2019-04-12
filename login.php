<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>

<body>
    <div class="head-img">

    </div>
    <div class="row">
        <div class="col-1">
            <img src="img/logoBuap.png" id="buap" alt="logo">
        </div>
        <div class="col-2">
            <fieldset id="formulario">
                <legend>Ingreso a Plataforma</legend>
                <div>
                    <form action="php/ingreso.php" method="post">
                        <label for="numtrabajo">Numero de Trabajador</label>
                        <input type="text" name="ntrabajo" id="ntrabajo" placeholder="Ingrese su numero de trabajador" required>
                        <label for="contra">Contraseña</label>
                        <input type="password" name="contra" id="contra" placeholder="Ingrese Contraseña" required>
                        <input type="submit" value="Ingresar" id="subbtn">
                        <input type="button" onclick="location.href='registro.php'" value="Registrar" id="registrobtn">
                    </form>
                </div>
            </fieldset>
        </div>
    </div>
</body>

</html>