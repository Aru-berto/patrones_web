<?php
include_once("Empleado.php");
include_once("Usuarios.php");

$emp = new Empleado();

$emp->setNombre($_POST['txtnombre']);
$emp->setPaterno($_POST['txtpaterno']);
$emp->setMaterno($_POST['txtmaterno']);
$emp->setFecha($_POST['dtfechanac']);

$newid = $emp->setEmpleado();
echo "Empleado id: " . $newid;

echo'<br><br>';


$user = new Usuarios();

$user->setEmail($_POST['correo']);
$user->setPassw($_POST['passw']);
$user->setNickname($_POST['txtnick']);
$user->setEmpid($newid);

$newiduser = $user->setUsuarios();
echo "Usuario id: " . $newiduser;


//header('Location: index.html');
?>