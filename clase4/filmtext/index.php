<!DOCTYPE html>
<?php
include("buis/sesion.php");
include_once("data/Filmtext.php");
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="view/css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="topnav">
        <a class="active" href="#">Home</a>
        <a href="view/formRegistro.html">Registro</a>
        <a href="view/formLogin.html">Login</a>
    </div>

    <div id="ordenar">
        <form action="index.php" method="post">
            <h1>Elije el orden</h1>
            <select name="orden" id="">
                <option value="" selected disabled>Seleccione uno por favor</option>
                <option value="TitleAZ">Película A-Z</option>
                <option value="TitleZA">Película Z-A</option>
                <option value="DescZA">Sinópsis A-Z</option>
                <option value="DescAZ">Sinópsis Z-A</option>
            </select>
            <button type="submit">Ordenar</button>
            <br><br>
        </form>
    </div>

    <div>
        <form action="index.php" method="post">
            <h1>Buscar</h1>
            <input type="text" name="buscar" id="">
            <button type="submit">Buscar</button>
            <br><br>
        </form>
    </div>

    <section>
        <h1>Películas</h1>
        <hr><br>
        <table>
            <?php
            $filmtext = new Filmtext();
            if (isset($_POST["buscar"])) {
                $consulta = $filmtext->getFilmFilter($_POST["buscar"]);
            } else {

                if (isset($_POST['orden'])) {
                    switch ($_POST['orden']) {
                        case 'TitleAZ':
                            $consulta = $filmtext->getFilmTextByTitle();
                            break;
                        case 'TitleZA':
                            $consulta = $filmtext->getFilmTextByTitleZA();
                            break;
                        case 'DescZA':
                            $consulta = $filmtext->getFilmTextByDesc();
                            break;
                        case 'DescAZ':
                            $consulta = $filmtext->getFilmTextByDescZA();
                            break;
                        default:
                            $consulta = $filmtext->getFilmTextAll();
                            break;
                    }
                } else {
                    $consulta = $filmtext->getFilmTextAll();
                }
            }


            if ($consulta) {
                $i = 0;
                while ($row = mysqli_fetch_assoc($consulta)) {
                    if ($i == 0) {

                        foreach ($row as $clave => $valor) {
                            echo "<td>" . $clave . "</td>";
                        }
                        $i++;
                    }
                    echo "<tr>";
                    foreach ($row as $clave => $valor) {
                        echo "<td>" . $valor . "</td>";
                    }
                    echo "<tr>";
                }

            } else {
                echo ("Algo ha salido mal");
            }

            ?>

        </table>
        <br><br><br>

    </section>



    <br><br><br>


</body>

</html>