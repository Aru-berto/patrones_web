<?php
include_once('../data/Category.php');
include('../view/css/Estilo.css');

$emp = new CategoriaF();

$emp->setCateg($_POST['txtcategoria']);

$newid = $emp->setCategoryF();
echo "name: " . $newid;

echo '<br><br>';



header('Location: ../index.php');

?>