
<!-- comment -->
<?php
$var_getMenu = isset($_GET['menu']) ? $_GET['menu'] : 'principal';

switch ($var_getMenu) {
    case "inicio":
        require_once './vistas/inicio.php';
        break;
    case "acerca":
        require_once './vistas/acercade.php';
        break;
    case "login":
        require_once './vistas/login.php';
        break;
    case "despedida":
        require_once './vistas/despedida.php';
        break;
    case "404":
        require_once './vistas/404.php';
        break;
    
    
    case "agendar":
        include_once './modelo/alumnos.php';
        $sqlAlumnos = alumnos::consultar();
        include_once './vistas/vistAlumnos.php';
        break;
    
    
    
    case "eliminarAlumno":
        $_idalumno = trim(filter_input(INPUT_GET, 'idalumno'));
        require_once './modelo/alumnos.php';
        $sqlAlumnos = alumnos::delete($_idalumno);
        //include_once './vistas/prueba.php';
        header("location: ./index.php?menu=retraso");      /////*********sdasdsadsadasds*************///// 
        break;

    case "editarlumno":
        $_idalumno = trim(filter_input(INPUT_GET, 'idalumno'));
        require_once './modelo/alumnos.php';
        $sqlAlumnos = alumnos::consultarAlumno($_idalumno);
        include_once './vistas/editar.php';
        
        break;

    case "agregar":
        require_once('./vistas/insertAlumno.php');
        break;
    
    case "retraso":
        include_once './modelo/alumnos.php';
        $sqlAlumnos = alumnos::consultar();
        include_once './vistas/vistAlumnos.php';
        break;
    
    /*case "agregar":
        $_idalumno = trim(filter_input(INPUT_GET, 'idalumno'));
        require_once './modelo/alumnos.php';
        $sqlAlumnos = alumnos::insert($_idalumno);
        //include_once './vistas/prueba.php';
        
        break;*/
    
    
    
    
    default :
        require_once './vistas/inicio.php';
}
?>
