<!DOCTYPE html>
<?php
include("buis/sesion.php");
include_once("data/Film.php");
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
        if ($loginU) {
            echo "
                <h1>
                    $saludo
                </h1>
                <hr><br>
                <a href='view/formRegistro.html'>
                    <button class='boton'>¡Regístrate!</button>
                </a>
                <br><br>
                <a href='buis/logout.php'>
                    <button class='boton'>Salir</button>
                </a>
            ";
        } else {
            echo "
                <h1>
                    $saludo
                </h1>
                <hr><br>
                <a href='view/formRegistro.html'>
                    <button class='boton'>¡Regístrate!</button>
                </a>
                <br><br>
                <a href='view/formLogin.html'>
                    <button class='boton'>¡Inicia sesión!</button>
                </a>
            ";
        }


        ?>
        <br><br><br>

    </section>


    <section>
        <?php
        $film = new Film();
        if ($loginU) {
            $consulta = $film->getFilmAll();

            echo "<h1>$saludo</h1>";

            if($consulta){
                // echo "Sí salió la consulta";
                while($row = mysqli_fetch_assoc($consulta)){
                    echo $row['title'] . " - (";
                    echo $row['release_year'] . ") - ";
                    echo $row['description'] . " / ";
                    echo $row['lenght'] . "<br>";
                    echo "<br>";
                }
            }

            
        } else {
            $consulta = $film->getFilm10();

            echo "<h1>$saludo</h1>";

            if($consulta){
                // echo "Sí salió la consulta";
                while($row = mysqli_fetch_assoc($consulta)){
                    echo $row['title'] . " - (";
                    echo $row['release_year'] . ") <br>";
                    echo "<br>";
                }
            }
        }


        ?>
        <br><br><br>

    </section>

    
        
        <br><br><br>
    

</body>

</html>