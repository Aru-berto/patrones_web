<?php
include_once('../class/actor.class.php');
//llamar clase
$act = new Actor();
//set variables de formulario
$act->setNombre($_POST['name']);
$act->setApellido($_POST['last']);
$act->setFecha($_POST['dat']);
//set de id
$newid=$act->setActor();

header('Location: ../actorform.html');

?>
