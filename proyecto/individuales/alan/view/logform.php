<!DOCTYPE html>
<?php
include("buis/sesion.php");
include_once("data/ShowA.php");
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="view/css/style.css">
    <title>Document</title>
</head>

<body>


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
        $di = new Adress();
        if ($loginU) {
            $consulta = $di->getdireccionAll();

            echo "<h1>$saludo</h1>";

            if($consulta){
                // echo "Sí salió la consulta";
                while($row = mysqli_fetch_assoc($consulta)){
                    echo $row['address'] . " - (";
                    echo $row['address2'] . ") - ";
                    echo $row['district'] . " / ";
                    echo $row['city_id'] . " / ";
                    echo $row['postal_code'] . " / ";
                    echo $row['phone'] . "<br>";
                    echo "<br>";
                }
            }

            
        } else {
            $consulta = $di->getDireccion10();

            echo "<h1>$saludo</h1>";

            if($consulta){
                // echo "Sí salió la consulta";
                while($row = mysqli_fetch_assoc($consulta)){
                    echo $row['address'] . " - (";
                    echo $row['phone'] . ") <br>";
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