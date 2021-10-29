<?php 
class Alumno{
  public $edad;
  public $nombre;
  public $apellido;
  public $email;

 public function __construct($edad,$nombre,$apellido,$email){
    $this->edad=$edad;
    $this->nombre=$nombre;
    $this->apellido=$apellido;
    $this->email=$email;
 }

}