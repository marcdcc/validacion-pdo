<?php
include 'config.php';
include 'conexion.php';
include 'alumno.php';
$stmt = $pdo->prepare("UPDATE alumnos SET nombre=?, apellido=?, edad=? WHERE email=?");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$stmt->bindParam(2, $nombre);
$stmt->bindParam(3, $apellido);
$stmt->bindParam(4,$edad);
// Excecute
$stmt->execute();
header('Location: vista.php');