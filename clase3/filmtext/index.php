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

    <section>
        <?php
        $filmtext = new Filmtext();

        $consulta = $filmtext->getFilmTextAll();

        echo "<h1>Películas</h1><hr><br>";

        if ($consulta) {
            // echo "Sí salió la consulta";
            while ($row = mysqli_fetch_assoc($consulta)) {
                foreach ($row as $clave => $valor){
                    echo $valor. " - ";
                }
                echo "<br><br>";
            }
        }


        ?>
        <br><br><br>

    </section>



    <br><br><br>


</body>

</html>