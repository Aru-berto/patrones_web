<?php
$username = "usuario";
$password = "contrasena";

if (
    isset($_POST['username']) && isset($_POST['password']) &&
    $_POST['username'] === $username && $_POST['password'] === $password
) {
    session_start();
    $_SESSION['username'] = $username;

    header("Location: index.php");
    exit();
} else {
    echo "Credenciales inválidas. Vuelve a intentarlo.";
}
?>
