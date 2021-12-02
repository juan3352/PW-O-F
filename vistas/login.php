<?php
if (filter_input_array(INPUT_POST)) {
    $_usuario = trim(filter_input(INPUT_POST, 'usuario'));
    $_password = trim(filter_input(INPUT_POST, 'password'));
    include_once '../modelo/alumnos.php';
    $loginok = alumnos::login($_usuario, $_password);
    //echo '<br>loginOk';
    if ($loginok) {
        header("location: ../index.php?menu=inicio");
    } else {
        header("location: ../index.php?menu=404");
    }
}

if (isset($_SESSION['Nombre_usuario'])){
    include_once './vistas/SeIni.php';
}else{  

?>
<div class="row">
    <div class="col s12 m6 offset-m4">
        <form action="./control/login.php" method="post">
            <div class="row card-panel z-depth-4" >
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_box</i>
                    <input type="text" placeholder="Ingresa tu cuenta de usuario" id="usuario" name="usuario" class="validate" required="">
                    <label for="usuario" class="active" style="color: blue">Usuario:</label>
                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">https</i>                            
                    <input type="password" placeholder="Ingresa tu contraseña" id="contraseña" name="password" class="validate" required="">
                    <label for="contraseña" class="active" style="color: blue">Contraseña:</label>
                </div>
                <button class="btn blue right">
                    <i class="material-icons left">login</i>
                    Enviar
                </button>
            </div>
        </form>
    </div>
</div>   
<?php
}?>