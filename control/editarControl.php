<?php

    if (filter_input_array(INPUT_POST)) {
                    
        $_id =  trim(filter_input(INPUT_POST, 'id'));   
        $_nombre = trim(filter_input(INPUT_POST, 'nombre'));
        $_sexo = trim(filter_input(INPUT_POST, 'sexo'));
        include_once '../modelo/alumnos.php';

        $edit = alumnos::editar($_id,$_nombre,$_sexo);
        if ($edit){
            header("location: ../index.php?menu=agendar");
        } else{
            echo 'Error, no se pudo actualizar';
        }
  
   }

?> 