<?php
    session_start();
    if(isset($_SESSION['noTrabajador'])){
        unset($_SESSION);
        session_destroy();
        header("Location:../login.php");
    }
?>