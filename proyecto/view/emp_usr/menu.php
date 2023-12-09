<!DOCTYPE html>
<?php
// José Alberto Hernández Negrete: josealbertotijuana@gmail.com

// Suddenly SES(sion)
include_once "../../buis/sesion.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/colors.css">
    <title>Patrones</title>

    <link rel="icon" type="image/x-icon" href="../media/img/favicon.ico">
</head>

<body class="text-center">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="../../index.php">Proyecto: Películas</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <?php
                    if ($loginU) {
                        echo "<li class='nav-item'><a class='nav-link active' href='../../buis/logout.php'>Logout</a></li>";
                        if ($_SESSION['lvl'] == 1) {
                            echo "
                            <li class='nav-item'><a class='nav-link disabled' href='#'>Registro:</a></li>
                            <li class='nav-item'><a class='nav-link' href='../login/formRegistroAdministradores.php'>Usuarios</a>
                            </li>";
                        }
                    } else {
                        echo "<li class='nav-item'><a class='nav-link disabled' href='#'>Login:</a></li>
                        <li class='nav-item'><a class='nav-link' href='../login/formLoginUsuarios.php'>Usuarios</a></li>
                        <li class='nav-item'><a class='nav-link active' href='../login/formLoginAdministradores.php'>Administradores</a></li>
                        <li class='nav-item'><a class='nav-link disabled' href='#'>Registro:</a></li>
                        <li class='nav-item'><a class='nav-link' href='../login/formRegistroUsuarios.php'>Usuarios</a>
                        </li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Body -->
    <br><br><br><br>
    <div class="card center" style="width: 26rem;">
        <div class="card-body">
            <h1>Menu</h1>
            <hr>
            <a href='mostrarEmpleados.php' class='btn btn-dark btn-xlarge'>Empleados</a><br><br>
            <a href='mostrarUsuarios.php' class='btn btn-dark btn-xlarge'>Usuarios</a>
        </div>
    </div>

    <!-- Footer -->
    <br><br><br>
    <footer lang="en">Ingeniería web</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>