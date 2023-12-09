<!DOCTYPE html>
<?php
include("buis/sesion.php")
    ?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/css/style.css">
    <title>Staff</title>
    <div class="topnav">
        <a class="active" href="#home">Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
    </div>
</head>

<body>

    <nav>
        <ul>
            <?php
            if ($loginU) {
                echo "
                <li>
                   $saludo 
            </li>
            <li> <a href''></a></li>
            <li> <a href='buis/logout.php'>LogOut</a></li>";
            } else {
                echo "     <li>
                <?php   /// ?>
            </li>
            <li> <a href='view/FormRegistro.php'>Registro</a></li>
            <li> <a href='view/FormLogin.html'>Entrar</a></li>";
            }
            ?>
        </ul>
    </nav>
    <section>
        <table class="w3-table">
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Direccion</th>
                <th>Foto</th>
                <th>Email</th>
                <th>Tienda Id</th>
                <th>Activo</th>
                <th>Usuario</th>
            </tr>

            <?php
            include_once('data/staff.php');
            if ($loginU) {
                $staff = new staff();
                $consulta = $staff->getstaffs();
                if ($consulta) {
                    while ($row = mysqli_fetch_assoc($consulta)) { ?>

                        <tr>
                            <td>
                                <?php echo $row['first_name']; ?>
                            </td>
                            <td>
                                <?php echo $row['last_name']; ?>
                            </td>
                            <td>
                                <?php echo $row['addresss']; ?>
                            </td>
                            <td>
                                <?php echo $row['picture']; ?>
                            </td>
                            <td>
                                <?php echo $row['email']; ?>
                            </td>
                            <td>
                                <?php echo $row['store_id']; ?>
                            </td>
                            <td>
                                <?php echo $row['active']; ?>
                            </td>
                            <td>
                                <?php echo $row['username'] . "<br> "; ?>
                            </td>
                        </tr>



                        <?php
                    }
                }
            } else {

            }
            ?>
        </table>
    </section>
</body>

</html>