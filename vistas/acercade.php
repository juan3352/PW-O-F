<?php
$estado_sesion = session_status();
if ($estado_sesion == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['Nombre_usuario'])) {
    ?>


    <h1>acerca de</h1>

    <?php
} else {//lo que se vera si NO
    header("location: ../index.php?menu=404");
    ?>



    <?php
}
?>