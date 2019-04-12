<?php
    include('config.php');
    $conn = getDB();
    $noTrabajador = $_POST['ntrabajo'];
    $contrasena = $_POST['contra'];
    $loginusuario = $conn->prepare('SELECT * FROM profesor WHERE noTrabajador = :noTrabajador AND contra = :contrasena');
    $loginusuario->bindParam(':noTrabajador',$noTrabajador,PDO::PARAM_INT);
    $loginusuario->bindParam(':contrasena',$contrasena,PDO::PARAM_STR);
    $loginusuario->execute();

    if($loginusuario->rowCount()>0){
        $infousuario = $loginusuario->fetch(PDO::FETCH_ASSOC);
        session_start();
        $_SESSION['noTrabajador'] = $infousuario['noTrabajador'];
        $_SESSION['nombre'] = $infousuario['nombre'];
        echo '<script>
            alert("Acceso concedido");
            window.location.href="../horario.php";
            </script>';
    }else{
        echo '<script>
            alert("No.Trabajador y/o contraseña incorrectos");
            window.location.href="../login.php";
            </script>';
    }
?>