<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
            <form action="php/registrar.php" method="post" class="form-group">
                <div>
                <label for="fnombre">Nombre Completo</label>
                <input type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre" required>
                </div>
                <div>
                <label for="femail">Correo Electrónico</label>
                <input type="email" name="email" id="email" placeholder="Ingrese un correo@valido" required>
                </div>
                <div>
                <label for="fnotrabajo">No. Trabajador</label>
                <input type="text" name="notrabajo" id="notrabajo" placeholder="Ingrese su número de trabajador" required>
                </div>
                <div>
                <label for="fpaswd">Contraseña</label>
                <input type="password" name="paswd" id="paswd" placeholder="Ingrese una nueva contraseña" required>
                </div>
                <div>
                <label for="fcubo">Cubículo</label>
                <input type="text" name="cubo" id="cubo" placeholder="Ingrese su cubículo" required>
                </div>    
                <input type="submit" class="btn btn-outline-primary" value="Guardar Datos" id="subbtn">
            </form>
        </div>
    </fieldset>
</body>

</html>