<?php

include 'conexion.php';
include 'alumno.php';
$sentencia=$pdo->prepare("SELECT * FROM alumnos where email=?");
$sentencia->bindParam(1,$email);
$sentencia->execute();
$persona=$sentencia->fetch(PDO::FETCH_ASSOC);
