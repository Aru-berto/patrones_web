<?php 
include("../data/Direccion.php");

$direccion = new Adress();

$direccion->setDireccion($_POST['txtadress']);
$direccion->setDireccion2($_POST['txtadress2']);
$direccion->setDistrito($_POST['txtdistrict']);
$direccion->setCodigo($_POST['txtcode']);
$direccion->setNumero($_POST['txtphone']);
$direccion->setCity($_POST['ciudadid']);


$newidDireccion = $direccion->setAddress();
header('location: ../view/saddressform.php')
?>