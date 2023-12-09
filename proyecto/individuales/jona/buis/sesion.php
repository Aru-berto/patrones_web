<?php
session_start();
if(isset($_SESSION['username'])){
$loginU = true;
$saludo= " Bienvenidos ".$_SESSION['username'];
}
else {
    $loginU=false;
    $saludo = "Dele pa fuera mi loco";
}
?>