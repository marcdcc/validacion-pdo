<?php include_once 'cabecera.html';
?>
<h1>Crear Alumno</h1>
<br>
<div class="form-group align-items-center">
    <form action="crearController.php" method="POST">
        
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" required>
<br>
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
        <br>
        <label for="apellido">Apellido</label>
        <input type="text" class="form-control" id="apellido" name="apellido" required>
<br>
        <label for="edad">Edad</label>
        <input type="number" class="form-control" id="edad" name="edad" required>
<br><br>
        <input type="submit" class="btn btn-success" name="Enviar" value="Submit">
    </form>
</div>