<?php
include_once('../class/actorfilm.class.php');
//llamar clase
$actf = new Actfil();
//set variables de formulario
$actf->setAct($_POST['actor']);
$actf->setFilm($_POST['film']);
$actf->setFecha($_POST['dat']);

$actf->setActorF();

header('Location: ../actfilmform.php');

?>