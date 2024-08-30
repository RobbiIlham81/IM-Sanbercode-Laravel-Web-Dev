<?php
require_once("Animal.php");
require_once("Frog.php");
require_once("Ape.php");


$Animal = new Animal("Shaun");
echo "Name : " . $Animal->name . "<br>";
echo "Legs : " . $Animal->legs . "<br>";
echo "Cold Blooded : " . $Animal->cold_blooded . "<br>";

echo "<br>";

$Frog = new Frog("Buduk");
echo "Name : " . $Frog->name . "<br>";
echo "Legs : " . $Frog->legs . "<br>";
echo "Cold Blooded : " . $Frog->cold_blooded . "<br>";
echo "Jump : " . $Frog->lompat();


$Ape = new Ape("Kera Sakti");
echo "Name : " . $Ape->name . "<br>";
echo "Legs : " . $Ape->legs . "<br>";
echo "Cold Blooded : " . $Ape->cold_blooded . "<br>";
echo "Yell : " . $Ape->teriak();

?>