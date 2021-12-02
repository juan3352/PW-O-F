<?php


if(filter_input_array(INPUT_POST)){
    $_usuario = trim(filter_input(INPUT_POST,'usuario'));
    $_password = trim(filter_input(INPUT_POST,'password'));
    include_once '../modelo/alumnos.php';
    
    $loginok = alumnos::login($_usuario, $_password);
    echo '<br>loginOk';
    if ($loginok) {
        header("location: ../index.php?menu=inicio");
    }else{
        header("location: ../index.php?menu=404");
    }
}