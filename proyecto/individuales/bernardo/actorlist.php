<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="view/styles.css">   
    <title>Document</title>
</head>
<body>

<h1>Lista de Actores Y Peliculas</h1>

<br><br>

<?php
//para traer datos de la tabla actores
include_once('includes/actlist.inc.php');
$list = new Lista();
$consulta = $list->getList();
//poderosisimo center
?>
<center>
    <table>
        <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Fecha</th>

<?php
//datos de la tabla
    if ($consulta){       
        while($row = mysqli_fetch_assoc($consulta)){
            ?>
           <tr> 
            <td><?php echo $row['actor_id'];?></td>
            <td><?php echo $row['first_name'];?></td>
            <td><?php echo $row['last_name'];?></td>
            <td><?php echo $row['last_update'];?></td>
           </tr>
            <?php
        }  
    }
    ?>
       </tr>
    </table>
</center>
<center>
    <a href="actorform.html">
    <button type="button" class="button button3">Volver</button>
    </a>
</center>
</body>
</html>