<?php
session_start();
if (isset($_SESSION["nick"])) {
    $loginU = true;
    $saludo = "Bienvenido, " . $_SESSION['nick'];
} else {
    $loginU = false;
    $saludo = "Bienvenido, inicia sesión por favor";
}

?>