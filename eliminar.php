<?php 
include 'config.php';
include 'conexion.php';
include 'alumno.php';
echo $pdo->exec("DELETE FROM alumnos WHERE email=?");
$stmt = $pdo->prepare("DELETE FROM alumnos WHERE email=?");
// Bind

$stmt->bindParam(1, $email);
$stmt->execute();