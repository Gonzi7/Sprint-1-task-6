<?php

abstract Class Animales implements Animal {
    // Atributos
    public $nombre;

    // Constructor 
    public function __construct($nombre){
        $this -> nombre = $nombre;
    }

    // Metodo
    abstract public function makeSound();

}

?>