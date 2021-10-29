<?php
include 'config.php';
include 'conexion.php';
include 'alumno.php';
$stmt = $pdo->prepare("UPDATE alumnos SET nombre=?, apellido=?, edad=? WHERE email=?");

// Excecute
$stmt->execute();
$stmt = $pdo->prepare("UPDATE alumnos SET nombre=?, apellido=?, edad=? where email=:email");
if($stmt->execute((array) $alumno)){
    echo 'bien';
}else{ echo 'mal';}
