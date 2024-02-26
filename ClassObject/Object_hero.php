<?php 
include("Class_hero.php");

$Goku = new Hero();
$Subzero = new Hero();

$Goku->setName("Goku");
$Goku->setLifePoint(110);
$Goku->setAttack(20, 30);
echo "<br>";

$Subzero->setName("Subzero");
$Subzero->setLifePoint(100);
$Subzero->setAttack(25, 35);

$Goku->hit($Subzero);
echo "<br>";    
$Subzero->hit($Goku);
echo "<br>";
$Subzero->kick($Goku);


echo"<br>";
echo $Subzero->getName() . "'s Life Point: " . $Subzero->getLifePoint() . "<br>";
