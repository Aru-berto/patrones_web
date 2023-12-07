<?php
include("Premio.php");

$monto = 51;
$cliente1 = Premio::create($monto);
echo $cliente1->getType() . " ha ganado " . $cliente1->bono;
echo "<br>";

$monto = 31;
$cliente2 = Premio::create($monto);
echo $cliente2->getType() . " ha ganado " . $cliente2->bono;
echo "<br>";

$monto = 11;
$cliente3 = Premio::create($monto);
echo $cliente3->getType() . " ha ganado " . $cliente3->bono;
echo "<br>";

$monto = 0;
$cliente4 = Premio::create($monto);
echo $cliente4->getType() . " ha ganado " . $cliente4->bono;
echo "<br>";
?>