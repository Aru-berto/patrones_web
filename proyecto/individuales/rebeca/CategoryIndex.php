<!DOCTYPE html>
<?php include('buis/sesion.php'); ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/css/Estilo.css">


    <title>TheCategoryTable</title>


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
                <li><a href='View/formCategory.html'>Registrar</a></li>
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
        <h1>THE CATEGORY TABLE</h1>

    </header>




    <section>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Categoría</th>

            </tr>

            <?php
            include_once("data/Category.php");
            $categ = new Categ();
            if ($loginU) {
                $consulta = $categ->getCategorAll();
                if ($consulta) {
                    while ($row = mysqli_fetch_assoc($consulta)) {
                        echo "<tr>";
                        echo "<td>" . $row['category_id'] . "-";
                        echo "<td>" . $row['name'] . "<br>";
                        echo "</tr>";
                    }
                }
            } else {
                $consulta = $categ->getCatego10();
                if ($consulta) {
                    while ($row = mysqli_fetch_assoc($consulta)) {
                        echo "<tr>";
                        echo "<td>" . $row['category_id'] . "-";
                        echo "<td>" . $row['name'] . "<br>";
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