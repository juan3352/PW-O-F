<?php
$estado_sesion = session_status();
if ($estado_sesion == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['Nombre_usuario'])) {
    ?>





    <div class="nav-wrapper">
        <nav style="background-color:rgba(255,0,0,0)">
            <a href="index.php" class="brand-logo">Juan Domingo Cuc Huchin</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="?menu=inicio" style="color:aqua;">Principal</a></li>
                <li><a href="?menu=acerca" style="color:aqua;">Acerca de</a></li>
                <li><a href="?menu=login" style="color:aqua;">Login</a></li>
                <li><a href="?menu=agendar" style="colo:aqua;">Agendar</a></li>
                <li><a href="./vistas/loginout.php" style="color:aqua;">Salir</a></li>
            </ul>
        </nav>
    </div>





<?php } else {
    ?>



    <div class="nav-wrapper">            
        <nav style="background-color:rgba(255,0,0,0)">            
            <a  class="brand-logo">Juan Domingo Cuc Huchin</a>
            <ul class="right hide-on-med-and-down">

                <li><a href="?menu=login" style="color:aqua;">Login</a></li>

                <?php /*
                  include_once '404.php';
                  include_once './controlador/login.php';
                  if(!$loginok){
                  header("location: ../index.php?menu=404");
                  }
                 */
                ?>
            </ul>
        </nav>
    </div>

<?php }
?>