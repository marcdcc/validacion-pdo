<?php
include 'config.php';
include 'conexion.php';
include_once 'alumno.php';
$email=$_POST['email'];
$stmt = $pdo->prepare("DELETE FROM alumnos WHERE email=?");
$stmt->bindParam(1, $email);
$stmt->execute();
header('Location: vista.php');