<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="estilos/estilos.css"/>  
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>hola</title>
    </head>

    <?php
    $estado_sesion = session_status();
    if ($estado_sesion == PHP_SESSION_NONE) {
        session_start();
    }
    if (isset($_SESSION['Nombre_usuario'])) {
        ?>


        <?php
        ?>
        <div style="background-image: url('imagenes/fondo.jpg')">
            <div>
                <header>
                    <?php
                    include_once 'vistas/header.php';
                    ?>
                </header>
            </div>

            <div>
                <body class="principal">
                    <?php
                    include_once './control/enrutador.php';
                    ?>
                </body>
            </div>

            <div>
                <footer>
                    <?php
                    include_once 'vistas/footer.php';
                    ?>
                </footer>
            </div>
            <?php
            ?>
        </div>


    <?php } else {//lo que se vera si NO
        ?>


        <?php
        ?>
        <div style="background-image: url('imagenes/fondo.jpg')">
            <div>
                <header>
                    <?php
                    include_once 'vistas/header.php';
                    ?>
                </header>
            </div> 
            <div>
                <?php
                include_once 'vistas/NoSesion.php';
                include_once 'vistas/login.php';
                ?>
            </div>
            <div>
                <footer>
                    <?php
                    include_once 'vistas/footer.php';
                    ?>
                </footer>
            </div>
            <?php
            ?>
        </div>



    <?php }
    ?>



</html>
