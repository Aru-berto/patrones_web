<!DOCTYPE html>
<?php
// Author: José Alberto Hernández Negrete: josealbertotijuana@gmail.com

// Suddenly SES(sion)
include_once "buis/sesion.php";

// Mani
include_once('individuales/mani/data/ShowCustomer.php');
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patrones</title>
    <link rel="icon" type="image/x-icon" href="view/media/img/favicon.ico">

    <!-- Style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="view/css/main.css">
    <link rel="stylesheet" href="view/css/colors.css">
</head>

<body class="text-center">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.php">Proyecto: Películas</a>
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
                        echo "<li class='nav-item'><a class='nav-link active' href='buis/logout.php'>Logout</a></li>
                        <li class='nav-item'><a class='nav-link disabled' href='#'>Registro:</a></li>
                        <li class='nav-item'><a class='nav-link active' href='formRegistroAdministradores.php'>Usuarios</a>
                        </li>";
                    } else {
                        echo "<li class='nav-item'><a class='nav-link disabled' href='#'>Login:</a></li>
                        <li class='nav-item'><a class='nav-link' href='view/login/formLoginUsuarios.php'>Usuarios</a></li>
                        <li class='nav-item'><a class='nav-link' href='view/login/formLoginAdministradores.php'>Administradores</a></li>
                        <li class='nav-item'><a class='nav-link disabled' href='#'>Registro:</a></li>
                        <li class='nav-item'><a class='nav-link' href='view/login/formRegistroUsuarios.php'>Usuarios</a>
                        </li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Body -->
    <br><br><br><br>
    <div class="card center" style="width: 70%;">
        <div class="card-body">
            <h1 class='display-5 titulo'>Proyecto: Películas</h1>
            <?php
            if ($loginU) {
                echo "<br><img src='view/media/img/undraw_complete_design_re_h75h.svg' alt='welcome' width='270px'><br><br><hr>
                <h4>¡Bienvenido! <br> Usted ha iniciado sesión con éxito. <br> Seleccione cualquier proyecto para revisarlo.</h4><hr>";
                if ($_SESSION['lvl'] == 1) {
                    echo "<h2>Nivel: Administrador</h2>";
                } else {
                    echo "<h2>Nivel: Usuario</h2>";
                }
                echo "<hr>
                <h4>Presione cualquier botón para para revisar los proyectos individuales de cada compañero</h4>
                <span>
                    <a href='individuales/mani/view/insertcus.php' class='btn btn-dark btn-padding'>José Manuel</a>
                    <a href='individuales/alan' class='btn btn-dark btn-padding'>Alan</a>
                    <a href='individuales/jona' class='btn btn-dark btn-padding'>Jonathan</a>
                    <a href='individuales/rebeca/index.php' class='btn btn-dark btn-padding'>Rebeca</a>
                    <a href='individuales/gerardo/index.php' class='btn btn-dark btn-padding'>Gerardo</a>
                    <a href='individuales/lepe/index.php' class='btn btn-dark btn-padding'>Lepe</a>
                    <a href='individuales/bernardo/actorform.html' class='btn btn-dark btn-padding'>Bernardo</a>
                    <a href='index.php' class='btn btn-dark btn-padding'>José Alberto</a>
                </span>";
                if ($_SESSION['lvl'] == 1) {
                    echo "<hr>
                    <h4>[Administrador] Presione cualquier botón para acceder a los forms de creación de cada tabla</h4>
                    <span>
                        <a href='individuales/lepe/index.php' class='btn btn-dark btn-padding'>Películas</a>
                        <a href='individuales/rebeca/' class='btn btn-dark btn-padding'>Categorías</a>
                        <a href='individuales/rebeca/view/formLanguage.html' class='btn btn-dark btn-padding'>Lenguajes</a>
                        <a href='individuales/alan/' class='btn btn-dark btn-padding'>Direcciones</a>
                        <a href='individuales/alan/' class='btn btn-dark btn-padding'>Ciudades</a>
                        <a href='individuales/rebeca/' class='btn btn-dark btn-padding'>Países</a>
                        <a href='individuales/bernardo/actorform.html' class='btn btn-dark btn-padding'>Actores</a>
                        <a href='individuales/bernardo/actfilmform.php' class='btn btn-dark btn-padding'>Actores en películas</a>
                        <a href='individuales/mani/view/insertcus.php' class='btn btn-dark btn-padding'>Clientes</a>
                        <a href='individuales/jona/' class='btn btn-dark btn-padding'>Staff</a>
                        <a href='individuales/gerardo/' class='btn btn-dark btn-padding'>Inventario</a>
                        <a href='individuales/gerardo/' class='btn btn-dark btn-padding'>Rentas</a>
                        <a href='individuales/gerardo/' class='btn btn-dark btn-padding'>Pagos</a>
                        <a href='view/login/login/formRegistroAdministradores.php' class='btn btn-dark btn-padding'>Empleados / Usuarios</a>
                    </span>";
                }
            } else {
                echo "<br><img src='view/media/img/undraw_Web_devices_re_m8sc.svg' alt='welcome' width='270px'><br><br><hr>
                <h2>¡Bienvenido! <br> Por favor inicie sesión para acceder a todas las funciones.</h2>";
            }
            ?>

        </div>
    </div>

    <br>
    <hr><br>
    <div class="card center" style="width: 80%;">
        <div class="card-body">
            <h1 class="display-5 titulo">Tabla de ejemplo</h1>
            <?php if (!$loginU) {
                echo "<h3 class='text-muted'>(Por favor inicie sesión para ver más de 10 resultados)</h3>";
            } ?>
            <hr>
            <?php

            // Sí loggeado -----------------------------------------------------------------------------------------------------------
            if ($loginU) {
                if ($_SESSION['lvl'] == 1) {
                    echo "<h1>Clientes <a href='individuales/mani/view/insertcus.php' class='btn btn-primary'>Crear nuevo</a></h1>";
                } else {
                    echo "<h1>Clientes</h1>";
                }
                echo "<div class='table-responsive'>
                            <table class='table table-striped'>
                                <thead class='table-dark'>
                                    <tr>
                                        <th scope='col'>Cliente id</th>
                                        <th scope='col'>Tienda</th>
                                        <th scope='col'>Nombre</th>
                                        <th scope='col'>Apellido</th>
                                        <th scope='col'>Email</th>
                                        <th scope='col'>Dirección</th>
                                        <th scope='col'>Activo</th>
                                        <th scope='col'>Creado</th>
                                        <th scope='col'>Última actualización</th>
                                    </tr>
                                </thead>
                                <tbody>";

                $customer = new Customers();
                $consulta = $customer->getCustomer();

                if ($consulta) {
                    while ($row = mysqli_fetch_assoc($consulta)) {
                        echo "<tr>";
                        foreach ($row as $clave => $valor) {

                            echo "<td>{$valor}</td>";

                        }
                        echo "</tr>";
                    }
                } else {
                    echo "algo ha fallado";
                }
                echo "</tbody></table></div>";

                // No loggeado -----------------------------------------------------------------------------------------------------------
            } else {

                echo "<h1>Clientes</h1>";
                echo "<div class='table-responsive'>
                            <table class='table table-striped'>
                                <thead class='table-dark'>
                                    <tr>
                                        <th scope='col'>Cliente id</th>
                                        <th scope='col'>Tienda</th>
                                        <th scope='col'>Nombre</th>
                                        <th scope='col'>Apellido</th>
                                        <th scope='col'>Email</th>
                                        <th scope='col'>Dirección</th>
                                        <th scope='col'>Activo</th>
                                        <th scope='col'>Creado</th>
                                        <th scope='col'>Última actualización</th>
                                    </tr>
                                </thead>
                                <tbody>";

                $customer = new Customers();
                $consulta = $customer->getCustomer10();

                if ($consulta) {
                    while ($row = mysqli_fetch_assoc($consulta)) {
                        echo "<tr>";
                        foreach ($row as $clave => $valor) {

                            echo "<td>{$valor}</td>";

                        }
                        echo "</tr>";
                    }
                } else {
                    echo "algo ha fallado";
                }

                echo "</tbody></table></div>";
            }
            ?>


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