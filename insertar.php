<?php

$persona=new Alumno($_post['Email'], $_post['Nombre'], $_post['apellido'], $_post['edad']);
$stmt = $pdo->prepare("INSERT INTO alumnos ($email, $nombre, $apellido, $edad) VALUES (:email, :nombre, :apellido, :edad)");
if($stmt->execute((array) $alumno)){
    echo 'bien';
}else{
    echo 'mal';
}

