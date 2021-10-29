<?php
include 'config.php';
include 'conexion.php';
include_once 'alumno.php';
$name=$_POST['email'];
$name=$_POST['nombre'];
$age=$_POST['apellido'];
$name=$_POST['edad'];
$persona=new Alumno($email, $nombre, $apellido, $edad);
$stmt = $pdo->prepare("INSERT INTO alumnos(email, nombre, apellido, edad) VALUES (:email, :nombre, :apellido, :edad)" );
$stmt->execute((array) $alumno);
header('Location: vista.php');
   