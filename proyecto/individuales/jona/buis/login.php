<?php
include("../data/staffs.php");
$user = new staff();
$user->setemail($_POST['txtemail']);
$user->setpassword($_POST['txtpass']);
$dataset = $user->getstaff();
// INICIAR LAS VARIABLES DE SESION SI LOS DATOS SON CORRECTOS

$i = mysqli_num_rows($dataset); // contador cuantos registros regreso
if ($i == 1){ // Coincide el pass y el email
    session_start();
    $row = mysqli_fetch_assoc($dataset);
    $_SESSION['username'] = $row ['username'];
    $_SESSION['correo'] = $row ['email'];
    $_SESSION['id'] = $row ['staff_id'];
    header("Location:../index.php");


}
else{
    echo " Algo salio mal ";
}
header("location:../index.php");

?>