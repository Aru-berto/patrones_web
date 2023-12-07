<?php
include("Vehiculo.php");

$vehiculo1 = Vehiculo::create('car', 4);
echo $vehiculo1->getType() . " tiene " . $vehiculo1->ruedas . " ruedas";
echo "<br>";

$vehiculo2 = Vehiculo::create('motorcycle', 2);
echo $vehiculo2->getType() . " tiene " . $vehiculo2->ruedas . " ruedas";
echo "<br>";
?>