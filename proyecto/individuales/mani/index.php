<!DOCTYPE html>
<?php 
    include('buis/session.php')
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="view/css/stylecus.css">
    <title>Document</title>
</head>
<body>
<header>
        <section>
            <lu>
                <?php
                if($loginU){
                    echo "
                    <li>$saludo</li>
                    <li>
                        <a href='view/insertcus.php'>Insertar customer</a>
                    </li>
                    <li>
                        <a href='buis/logout.php'>Salir</a>
                    </li>";
                }
                else{
                    echo "
                    <li>Por favor inicia sesión</li>";
                }
                ?>
            </lu>
        </section>
</header>
    <h1>Login</h1>
    <form action="buis/login.php" method="post">
        <ul>
            <fieldset>
                <legend>Usuario</legend>
                <li>
                    <label for="">Correo</label>
                    <input type="email" name="correo" required pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$">
                </li>
                <li>
                    <label for="">Contraseña</label>
                    <input type="password" name="passw" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                </li>
            </fieldset>
                <li>
                    <center><input type="submit" class="btnsubmit"></center>
                </li>
        </ul>
    </form>

    <h1>Tabla de Customers</h1>
     
    <?php
        include_once('data/ShowCustomer.php');
        $objeto = new Customers();
            if($loginU){
                $consulta = $objeto->getCustomer();
                if($consulta){
                     while($row = mysqli_fetch_assoc($consulta)){
                        foreach($row as $clave => $valor){
                            echo $valor." - ";
                        }
                              echo "<br>";

                            }
                }
            }
            else{
                $consulta = $objeto->getCustomer10();
                if($consulta){
                    while($row = mysqli_fetch_assoc($consulta)){
                        echo $row['first_name']." - ";
                        echo $row['last_name']."<br>";
                    }
                }
            }
    ?>
     
</body>
</html>