<?php
require("Animal.php");

class Perro extends Animal{     
    public function makeSound(){
        echo "Bup, bup!" ."<br><hr>";
    }
}

?>