<?php

    namespace src\models;

 class Student {
     private $nombre;
     private $apellido;
     private $edad;
     private $telefono;

     public function __construct($nombre, $apellido, $edad, $telefono) {
         $this->nombre = $nombre;
         $this->apellido = $apellido;
         $this->edad = $edad;
         $this->telefono = $telefono;
     }

     public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setAge($edad) {
        $this->edad = $edad;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    } 

 }


   

 



?>