<?php
require("Animal.php");

class Gato extends Animal{
    public function makeSound(){
        echo "Mi!" ."<br><hr>";
    }
}

?>