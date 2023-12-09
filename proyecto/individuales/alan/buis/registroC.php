<?php 
include("../data/Ciudad.php");

$city = new Citys();

$city->setCiudad($_POST['txtcity']);
$city->setCountry($_POST['countryid']);

$newidCity = $city->setCitys();

header('location: ../view/scityform.php')
?>