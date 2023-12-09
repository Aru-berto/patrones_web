<!DOCTYPE html>
<?php include('buis/sesion.php'); ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<title>Home</title>


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

                $includeFile = get_included_files();
                if ($includeFile) {
                    echo "<link rel=stylesheet href=view/css/Estilo.css>";
                } else {
                    echo "<link rel=stylesheet href=view/css/Estilo.css>";
                }

                if ($loginU) {
                    echo "
                <li>$saludo</li>
                <li><a href='LanguageIndex.php'>Language</a></li>
                <li><a href='CategoryIndex.php'>Category</a></li>
                <li><a href='CountryIndex.php'>Country</a></li>
                <li> <a href='buis/logout.php'>Salir</a> </li>";
                } else {
                    echo "
                <li></li>
                <li><a href='LanguageIndex.php'>Language</a></li>
                <li><a href='CategoryIndex.php'>Category</a></li>
                <li><a href='CountryIndex.php'>Country</a></li>
                <!-- <li> <a href='view/formRegistro.html'>Registro</a> </li> -->
                <li> <a href='view/formLogin.html'>Entrar</a> </li>";
                }
                ?>
            </ul>
        </nav>
        <h1>HOME</h1>

    </header>




    <footer>Copyright © 2023</footer>
</body>

</html>