<?php 
include("../data/Customers.php");

$customer = new Customers();

$customer->setStore_id($_POST['storeid']);
$customer->setFirst_name($_POST['nombre']);
$customer->setLast_name($_POST['apellido']);
$customer->setEmail($_POST['email']);
$customer->setAddress_id($_POST['addressid']);
$customer->setActive($_POST['active']);


$newidCustomer = $customer->setCustomers();
//echo " Customer " .$newidCustomer;
header('location: ../index.php')
?>