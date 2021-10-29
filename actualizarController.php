<?php
include_once 'cabecera.html';
include_once 'actualizar.php';

?>
<h1>Modificar Alumno</h1>

<br>
<div class="form-group align-items-center">
    <form action="modificarController.php" method="POST">

        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $alumno['nombre'] ?>" required>
        <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $alumno['apellido'] ?>" required>
        <input type="number" class="form-control" id="edad" name="edad" value="<?php echo $alumno['edad'] ?>" required>
        
        <br>
        <input type="submit" class="btn btn-success" name="Enviar" value="Submit">
    </form>
</div>