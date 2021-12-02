<div class="container">
    <table class="card-panel">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Matricula</th>
                <th>Sexo</th>
            </tr>
        </thead>

        <tbody >
            <?php
            //echo 'hola ya estas en vistAlumnos';
            foreach ($sqlAlumnos as $alumnovista) {
                ?>
            <br>
            <tr>
                <td><?php echo $alumnovista->alumno; ?></td>
                <td><?php echo $alumnovista->nombre; ?></td>
                <td><?php echo $alumnovista->sexo; ?></td>
                <td>
                    <?php if ($alumnovista->sexo == 'M') { ?>
                        <i class = "material-icons prefix blue-text">male</i>
                    <?php } else { ?>
                        <i class = "material-icons prefix red-text">female</i>
                    <?php }
                    ?>
                <td>
                    <button class="btn waves-effect waves-light red" type="submit" name="action">
                        <a href="?menu=eliminarAlumno&idalumno=<?php echo $alumnovista->id; ?>" class="black-text">Eliminar
                            <i class="material-icons right white-text">delete</i>
                        </a>
                    </button>

                    <button class="btn waves-effect waves-light" type="submit" name="action">
                        <a href="?menu=editarlumno&idalumno=<?php echo $alumnovista->id; ?>" class="black-text">Editar
                            <i class="material-icons right white-text">edit</i>
                        </a>
                    </button>  
                </td>



            </tr>
            
        <?php } ?>
            <td>
                <button class="btn waves-effect waves-light grey" type="submit" name="action">
                    <a href="?menu=agregar&idalumno=<?php echo $alumnovista->id; ?>" class="black-text">Agregar
                            <i class="material-icons right white-text">add</i></a>
            </td>
        </td>        
        </tbody>
    </table>
</div>
