<?php
include("../data/staffs.php");
$emp = new staff();
$emp->setfname($_POST['txtnombre']);
$emp->setlname($_POST['txtapellido']);
$emp->setaddress_id($_POST['txtdireccion']);
$emp->setpicture($_POST['txtfoto']);
$emp->setemail($_POST['txtemail']);
$emp->setstoreid($_POST['sucursal']);
$emp->setactive(1);
$emp->setusername($_POST['txtusuario']);
$emp->setpassword($_POST['txtpass']);
$newid = $emp->setstaff();
// $emp->setEmpleado();

header("Location:../index.php")
    ?>