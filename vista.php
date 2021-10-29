<?php
include_once 'cabecera.html';
include 'ver.php';
echo "<h1>Administrar alumnos</h1>";
echo "<td><a type='button' class='btn btn-success'href='crear.php'>Crear</a></td>";
echo "<table class='table table-light'>";
echo "<tr>";
echo "<th>Email</th>";
echo "<th>Nombre</th>";
echo "<th>Edad</th>";
echo "<th>Actualizar</th>";
echo "<th>borrar</th>";
echo "</tr>";

foreach ($listaAlumnos as $alumno) {

    echo "<tr>";
    echo "<td>{$alumno['email']}</td>";
    echo "<td>{$alumno['nombre']}</td>";
    echo "<td>{$alumno['apellido']}</td>";
    echo "<td>{$alumno['edad']}</td>";
    echo "<td><a type='button' class='btn btn-primary' href='actualizarController.php?id={$alumno['email']}' onclick=\"return confirm('¿Estás seguro de actualizar?')\">Actualizar</a></td>";
    echo "<td><a type='button' class='btn btn-danger' href='borrar.php?id={$alumno['email']}'  onclick=\"return confirm('¿Estás seguro de borrar?')\">borrar</a></td>";

    echo '</tr>';
}

echo "</table>";
echo "</html>";
