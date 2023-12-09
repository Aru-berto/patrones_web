<?php
include_once('../data/Language.php');
include('../view/css/Estilo.css');

$emp = new IdiomF();

$emp->setLanguag($_POST['txtlanguage']);

$newid = $emp->setIdiomF();
echo "name: " . $newid;

echo'<br><br>';



header('Location: ../index.php');

?>