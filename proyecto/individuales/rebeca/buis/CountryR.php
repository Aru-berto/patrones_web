<?php
include_once('../data/Country.php');
include('../view/css/Estilo.css');

$emp = new CountryF();

$emp->setCountr($_POST['txtcountry']);

$newid = $emp->setCountryF();
echo "name: " . $newid;

echo '<br><br>';



header('Location: ../index.php');

?>