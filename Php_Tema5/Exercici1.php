<?php
/*
Necesitamos crear un tipo de datos que represente a un animal. 
Los animales tienen un nombre, sin embargo, no es lo mismo el sonido del “habla” de un perro,
que el de un gato. Por tanto, necesitamos crear otros tipos de datos que nos ayuden a programar
estos comportamientos. Básicamente, queremos un método makeSound() que muestre un mensaje diferente
si se trata de un perro (por ejemplo, “Bup, bup!”) o un gato (por ejemplo “Mi!”).

*/
// Clase Principal 
abstract Class Animal {
    // Atributos
    public $nombre;

    // Constructor 
    public function __construct($nombre){
        $this -> nombre = $nombre;
    }

    // Metodo
    abstract public function makeSound();
}

class Perro extends Animal{     
    public function makeSound(){
        echo "Bup, bup!" ."<br><hr>";
    }
}
class Gato extends Animal{
    public function makeSound(){
        echo "Mi!" ."<br><hr>";
    }
}

$perro = new Perro("Rocky");
$perro -> makeSound() ."<br>";

$gato = new Gato("Bethoven");
$gato -> makeSound() ."<br>";
?>