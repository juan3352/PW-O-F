<?php
include_once '../modelo/alumnos.php';

    if (filter_input_array(INPUT_POST)) {
        $_nombre = trim(filter_input(INPUT_POST, 'nombre'));                    
        $_matricula =  trim(filter_input(INPUT_POST, 'matricula'));
        $_sexo = trim(filter_input(INPUT_POST, 'sexo'));
        //echo 'Entro a insert control';
        $insertar = alumnos::insert($_nombre, $_matricula, $_sexo);
       // $insert = alumnos::insert($nombre, $matricula, $sexo);
        if ($insertar){
            header("location: ../index.php?menu=agendar");
        }else{
            echo 'Error, no se pudo actualizar';
            
            echo $_nombre;
            echo $_matricula;
            echo $_sexo;
            //window.alert("eror");
            //header("location: ../index.php?menu=agregar");
        }
    }

?>