<!DOCTYPE html>
<?php include('buis/sesion.php'); ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/css/Estilo.css">


    <title>TheCountryTable</title>


</head>

<body>
    <header>
        <nav>
            <ul>
                <?php
                $includeFile = get_included_files();
                if ($includeFile) {
                    echo "<link rel=stylesheet href=view/css/Estilo.css>";
                } else {
                    echo "<link rel=stylesheet href=view/css/Estilo.css>";
                }


                if ($loginU) {
                    echo "
                <li>$saludo</li>
                <li><a href='index.php'>Home</a></li>
                <li><a href='View/formCountry.html'>Registrar</a></li>
                <li> <a href='buis/logout.php'>Salir</a> </li>";
                } else {
                    echo "
                <li></li>
                <li><a href='index.php'>Home</a></li>
                <li> <a href='view/formRegistro.html'>Registro</a> </li>
                <li> <a href='view/formLogin.html'>Entrar</a> </li>";
                }
                ?>
            </ul>
        </nav>
        <h1>THE COUNTRY TABLE</h1>

    </header>


    <section>
        <table border='1'>
            <tr>
                <th>
                    <h2>ID</h2>
                </th>
                <th>
                    <h2>Country</h2>
                </th>

            </tr>

            <?php
            include_once("data/Country.php");
            $count = new Count();
            if ($loginU) {
                $consulta = $count->getCountAll();
                if ($consulta) {
                    while ($row = mysqli_fetch_assoc($consulta)) {
                        echo "<tr>";
                        echo "<td>" . $row['country_id'] . "-";
                        echo "<td>" . $row['country'] . "<br>";
                        echo "</tr>";
                    }
                }

            } else {
                $consulta = $count->getCount10();
                if ($consulta) {
                    while ($row = mysqli_fetch_assoc($consulta)) {
                        echo "<tr>";
                        echo "<td>" . $row['country_id'] . "-";
                        echo "<td>" . $row['country'] . "<br>";
                        echo "</tr>";
                    }
                }
            }

            ?>
        </table>
    </section>
    <br><br><br><br>
    <footer>Copyright © 2023</footer>
</body>

</html>