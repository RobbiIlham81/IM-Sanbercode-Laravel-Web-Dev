<?php
require_once("Animal.php");

class Ape extends Animal{
public $legs = 2;

public function teriak() {
    return "Auooo <br> <br>";
}

} 
?>