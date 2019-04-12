<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/registro.css">
    <title>Registro</title>
</head>

<body>
    <div id="imgHead">
        <img src="img/logoBuap.png" alt="LOGO">
    </div>
    <fieldset id="formulario">
        <legend>Registrar Información</legend>
        <div>
            <form action="php/registrar.php" method="post">
                <label for="fnombre">Nombre Completo</label>
                <input type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre" required>
                <label for="femail">Correo Electronico</label>
                <input type="email" name="email" id="email" placeholder="Ingrese un correo@valido" required>
                <label for="fnotrabajo">No. Trabajador</label>
                <input type="number" name="notrabajo" id="notrabajo" placeholder="Ingrese su numero de trabajador" required>
                <label for="fpaswd">Contraseña</label>
                <input type="password" name="paswd" id="paswd" placeholder="Ingrese una nueva contraseña" required>
                <label for="fcubo">Cubiculo</label>
                <input type="text" name="cubo" id="cubo" placeholder="Ingrese su cubiculo" required>
                <input type="submit" value="Guardar Datos" id="subbtn">
            </form>
        </div>
    </fieldset>
</body>

</html>