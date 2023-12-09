<!DOCTYPE html>
<?php
// Author: José Alberto Hernández Negrete: josealbertotijuana@gmail.com

// Suddenly SES(sion)
include_once "../../buis/sesion.php";
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patrones</title>
    <link rel="icon" type="image/x-icon" href="../media/img/favicon.ico">

    <!-- Style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/colors.css">
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
                        echo "<li class='nav-item'><a class='nav-link active' href='../../buis/logout.php'>Logout</a></li>
                        <li class='nav-item'><a class='nav-link disabled' href='#'>Registro:</a></li>
                        <li class='nav-item'><a class='nav-link active' href='formRegistroAdministradores.php'>Usuarios</a>
                        </li>";
                    } else {
                        echo "<li class='nav-item'><a class='nav-link disabled' href='#'>Login:</a></li>
                        <li class='nav-item'><a class='nav-link' href='formLoginUsuarios.php'>Usuarios</a></li>
                        <li class='nav-item'><a class='nav-link' href='formLoginAdministradores.php'>Administradores</a></li>
                        <li class='nav-item'><a class='nav-link disabled' href='#'>Registro:</a></li>
                        <li class='nav-item'><a class='nav-link active' href='formRegistroUsuarios.php'>Usuarios</a>
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
            <main class="form-signin w-100 m-auto">
                <form action="../../buis/registro.php" method="post">
                    <h1 class='display-5 titulo'>Registro: Empleados / Usuarios</h1>
                    <br>
                    <div class="form-floating">
                        <input type="text" class="form-control" placeholder="Nombre" id="txtnombre" name="txtnombre"
                            required maxlength="254" pattern="^([ \u00c0-\u01ffa-zA-Z'\-])+$">
                        <label for="floatingInput">Nombre</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="text" class="form-control" placeholder="Paterno" id="txtpaterno" name="txtpaterno"
                            required maxlength="254" pattern="^([ \u00c0-\u01ffa-zA-Z'\-])+$">
                        <label for="floatingInput">Paterno</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="text" class="form-control" placeholder="Materno" id="txtmaterno" name="txtmaterno"
                            maxlength="254" pattern="^([ \u00c0-\u01ffa-zA-Z'\-])+$">
                        <label for="floatingInput">Materno</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="date" class="form-control" placeholder="Fecha de nacimiento" id="dtfechanac"
                            name="dtfechanac" min="1958-01-01" max="2005-12-31" required>
                        <label for="floatingInput">Fecha de nacimiento</label>
                    </div>


                    <br>
                    <hr><br>


                    <div class="form-floating">
                        <input type="email" class="form-control" placeholder="Correo" id="correo" name="correo" required
                            maxlength="254" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                        <label for="floatingInput">Correo</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="password" class="form-control" placeholder="Contraseña" id="passw" name="passw"
                            required maxlength="254" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$">
                        <label for="floatingPassword">Contraseña</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="text" class="form-control" placeholder="Nickname" id="txtnick" name="txtnick"
                            required maxlength="254" pattern="^([ \u00c0-\u01ffa-zA-Z0-9'\-])+$">
                        <label for="floatingInput">Nickname</label>
                    </div>

                    <input type="number" class="form-control" id="lvl" name="lvl" value="0" hidden>
                    <br>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar sesión</button>
                    <br><br>
                </form>
            </main>
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