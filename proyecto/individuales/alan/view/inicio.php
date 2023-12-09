<!DOCTYPE html>
<?php
include('../buis/sesion.php')
    ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../view/css/style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <section>
            <lu>
                <?php
                if ($loginU) {
                    echo "
                    <li>$saludo</li>
                    <li>
                        <a href='../view/cityform.php'>Insertar Ciudad</a>
                    </li>
                    <li>
                        <a href='../view/addressform.php'>Insertar Direccion</a>
                    </li>
                    <li>
                        <a href='../buis/logout.php'>Salir</a>
                    </li>";
                } else {
                    echo "
                    <li>Por favor inicia sesión</li>";
                }
                ?>
            </lu>
        </section>
    </header>
    <h1>Login</h1>
    <form action="../buis/login.php" method="post">
        <ul>
            <fieldset>
                <legend>Usuario</legend>
                <li>
                    <label for="">Correo</label>
                    <input type="email" name="correo" required>
                </li>
                <li>
                    <label for="">Contraseña</label>
                    <input type="password" name="passw" required>
                </li>
            </fieldset>
            <li>
                <center><input type="submit" class="btnsubmit"></center>
            </li>
        </ul>
    </form>

    <h1>Direcciones</h1>

    <?php
    include_once('../data/ShowA.php');
    $objeto = new Adress();
    if ($loginU) {
        $consulta = $objeto->getAddress();
        if ($consulta) {
            while ($row = mysqli_fetch_assoc($consulta)) {
                foreach ($row as $clave => $valor) {
                    echo $valor . " - ";
                }
                echo "<br>";

            }
        }
    } else {
        $consulta = $objeto->getAddress10();
        if ($consulta) {
            while ($row = mysqli_fetch_assoc($consulta)) {
                echo $row['address'] . " - ";
                echo $row['district'] . "<br>";
            }
        }
    }
    ?>




    <h1>Ciudades</h1>

    <?php
    include_once('../data/ShowC.php');
    $objeto2 = new Citys();
    if ($loginU) {
        $consulta2 = $objeto2->getCity();
        if ($consulta2) {
            while ($row = mysqli_fetch_assoc($consulta2)) {
                foreach ($row as $clave => $valor) {
                    echo $valor . " - ";
                }
                echo "<br>";

            }
        }
    } else {
        $consulta2 = $objeto2->getCity10();
        if ($consulta2) {
            while ($row = mysqli_fetch_assoc($consulta2)) {
                echo $row['city'] . "<br>";
            }
        }
    }
    ?>

</body>

</html>