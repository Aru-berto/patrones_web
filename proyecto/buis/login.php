<?php
include_once("../data/Usuarios.php");

$user = new Usuarios();

$user->setEmail($_POST['correo']);
$user->setPassw($_POST['passw']);
$user->setLvl($_POST['lvl']);

$dataset = $user->getUsuarios();

// Inicar variables de session si datos son correctos

if ($dataset != "error") {
    $i = mysqli_num_rows($dataset); // Contador de cuantos registros
    if ($i == 1) {
        session_start();
        $row = mysqli_fetch_assoc($dataset);
        $_SESSION['nick'] = $row['nickname'];
        $_SESSION['correo'] = $row['email'];
        $_SESSION['id'] = $row['userid'];
        $_SESSION['lvl'] = $row['user_lvl'];

        header('Location: ../index.php');
    } else {
        if ($_POST['lvl'] == 0) {
            header('Location: ../view/login/formLoginUsuarios.php?error=true');
        } else {
            header('Location: ../view/login/formLoginAdministradores.php?error=true');
        }

    }
} else {
    if ($_POST['lvl'] == 0) {
        header('Location: ../view/login/formLoginUsuarios.php?error=true');
    } else {
        header('Location: ../view/login/formLoginAdministradores.php?error=true');
    }
}


?>