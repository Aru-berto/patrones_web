<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="view/styles.css">
    <title>Document</title>
</head>
<body>

<?php
//para traer datos de la tabla actores
include_once('includes/actlist.inc.php');
$list = new Lista();
$consulta = $list->getList();

$film = new Film();
$consulta2 = $film->getFilm();
?>

<form action="includes/actfilreg.inc.php" method="post"> 
    <ul>
        <fieldset>
      <legend>Vinculo de Film Y Actor</legend>
       <!-- Campos a llenar en el formulario -->

        <li> 
        <label for="">Actor</label>
        <select name="actor"><br>
       
        <option>Seleccionar</option>
        <?php
        //datos de la tabla actor
    if ($consulta){       
        while($row = mysqli_fetch_assoc($consulta)){
            ?>

        <option value="<?php echo $row['actor_id'];?>"><?php echo $row['first_name'];?> <?php echo $row['last_name'];?></option>

        <?php
        }  
    }
    ?>
        </select>
        </li>
<br>
        <li> 

   <label for="">Pelicula</label>
        <select name="film"><br>
       
        <option>Seleccionar</option>
        <?php
        //datos de la tabla film
    if ($consulta2){       
        while($row2 = mysqli_fetch_assoc($consulta2)){
            ?>

        <option value="<?php echo $row2['film_id'];?>"><?php echo $row2['title'];?></option>

        <?php
        }  
    }
    ?>
        </select>
        </li>
<br>
        <li>
            <label for="">Agregado</label>
        <input type="date" name="dat" required>
        </li>
         </fieldset> 

       <!-- Boton de agregar -->
<li><center><button class=" button button1" type="submit">Vincular</button></center></li>

    </ul>
</form>
        <!-- Boton de regreso -->
<center>
    <a href="actorform.html">
    <button type="button" class="button button3">Volver</button>
    </a>
</center>


</body>
</html>